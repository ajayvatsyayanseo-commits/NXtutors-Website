<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Concerns\ReadsAttendanceFacts;
use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Services\SessionFlow;
use App\NxtAi\Support\AgentPseudonymiser;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\ValidationException;

/**
 * What the Session agent needs from this site: three reads and one write.
 *
 * `agent.session` turns a family's weekly timetable into classes, keeps each
 * tutor's monthly timesheet and rolls up each day's classes. **This site owns
 * the classes.** The agent never writes a session row. It asks
 * {@see SessionFlow::schedule}, which applies every rule the tutor's own screen
 * does, and reads back what happened.
 *
 * Three rules, on top of the ones {@see AgentGatewayController} sets.
 *
 *  1. **No student identity leaves.** The agent works in packages, tutors and
 *     classes. None of these responses names a student, so nothing here is a
 *     child's record and the consent gate the Student agent's routes carry has
 *     nothing to guard.
 *  2. **No address leaves either.** A home class needs one, so a booking with
 *     no `mode` repeats how the package's last class was held, address and
 *     all, on this side. The agent never needs to hold where a family lives.
 *  3. **The booking is idempotent on `X-Idempotency-Key`**, through a unique
 *     column. A retry gets the same class back, and a key reused for a
 *     different class is a 409, not a silent wrong answer.
 */
final class SessionAgentController extends Controller
{
    use ReadsAttendanceFacts;

    /** A tutor's month plus a late confirmation or two. Longer is a backfill. */
    private const MAX_WINDOW_DAYS = 100;

    private const DAY_PAGE_DEFAULT = 500;

    private const DAY_PAGE_MAX = 1000;

    /** India has had no daylight saving since 1945; the offset is exact. */
    private const IST = '+05:30';

    public function __construct(private readonly SessionFlow $sessions)
    {
    }

    // ------------------------------------------------------------ reads

    /**
     * `GET /packages/{id}` — is there room for more classes, and which are booked?
     *
     * `booked_ahead` is counted here, the same way the booking guard counts it,
     * so the agent's arithmetic and this site's refusal cannot disagree.
     * `scheduled_starts` lets a re-run skip what it already booked.
     */
    public function package(string $id): JsonResponse
    {
        $package = Package::find($id);
        if ($package === null) {
            return response()->json(['error' => 'package_not_found'], 404);
        }

        $starts = TutoringSession::where('package_id', $package->id)
            ->whereNotIn('status', ['cancelled'])
            ->where('starts_at', '>=', now()->subDay())
            ->orderBy('starts_at')
            ->pluck('starts_at');

        return $this->ok([
            'package_id' => (string) $package->id,
            'tutor_ref' => (string) $package->tutor_user_id,
            'status' => (string) $package->status,
            'subject' => $package->subject,
            'sessions_total' => (int) $package->sessions_total,
            'sessions_used' => (int) $package->sessions_used,
            'booked_ahead' => $this->sessions->bookedAhead($package),
            'expires_at' => $package->expires_at?->toIso8601ZuluString(),
            'scheduled_starts' => $starts
                ->map(fn ($at): string => Carbon::parse($at)->toIso8601ZuluString())
                ->values()->all(),
        ]);
    }

    /**
     * `GET /tutors/{ref}/sessions?since=&until=&by=` — a tutor's classes.
     *
     * `by=confirmed_at` selects on when the class was confirmed rather than
     * when it started. A timesheet needs both views: the month's classes, and
     * last month's classes that were confirmed after that month's sheet closed.
     */
    public function tutorSessions(Request $request, string $ref): JsonResponse
    {
        $tutorUserId = $this->resolveTutor($ref);
        if ($tutorUserId === null) {
            return response()->json(['error' => 'tutor_not_found'], 404);
        }

        $by = (string) $request->query('by', 'starts_at');
        if (! in_array($by, ['starts_at', 'confirmed_at'], true)) {
            return response()->json(['error' => 'invalid_by'], 422);
        }

        [$since, $until, $error] = $this->window($request);
        if ($error !== null) {
            return $error;
        }

        $rows = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->where($by, '>=', $since)
            ->where($by, '<', $until)
            ->orderBy($by)
            ->orderBy('id')
            ->get();

        return $this->ok([
            'tutor_ref' => $tutorUserId,
            'by' => $by,
            'since' => $since->toIso8601ZuluString(),
            'until' => $until->toIso8601ZuluString(),
            'sessions' => $rows->map(fn (TutoringSession $s): array => [
                'session_id' => (string) $s->id,
                'package_id' => $s->package_id,
                'type' => (string) $s->type,
                'starts_at' => $s->starts_at?->toIso8601ZuluString(),
                'status' => (string) $s->status,
                'planned_min' => (int) $s->planned_min,
                'actual_min' => $s->actual_min === null ? null : (int) $s->actual_min,
                'checked_in_at' => $s->checked_in_at?->toIso8601ZuluString(),
                'checked_out_at' => $s->checked_out_at?->toIso8601ZuluString(),
                'confirmed_at' => $s->confirmed_at?->toIso8601ZuluString(),
            ])->values()->all(),
        ]);
    }

    /**
     * `GET /sessions?date=YYYY-MM-DD&after=&limit=` — one Indian day's classes.
     *
     * Paged by id so a busy day cannot become one enormous response; `after` is
     * the last `session_id` of the previous page.
     */
    public function daySessions(Request $request): JsonResponse
    {
        $date = (string) $request->query('date', '');
        if (! preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            return response()->json(['error' => 'date_required'], 422);
        }

        try {
            $from = Carbon::createFromFormat('!Y-m-d', $date, self::IST);
        } catch (\Throwable) {
            $from = false;
        }
        if ($from === false || $from->format('Y-m-d') !== $date) {
            return response()->json(['error' => 'date_required'], 422);
        }
        $from = $from->utc();
        $to = $from->copy()->addDay();

        $limit = min(self::DAY_PAGE_MAX, max(1, (int) $request->query('limit', self::DAY_PAGE_DEFAULT)));
        $after = (string) $request->query('after', '');

        $rows = TutoringSession::where('starts_at', '>=', $from)
            ->where('starts_at', '<', $to)
            ->when($after !== '', fn ($q) => $q->where('id', '>', $after))
            ->orderBy('id')
            ->limit($limit)
            ->get();

        $facts = $this->attendanceFacts($rows->pluck('id')->map(fn ($id): string => (string) $id)->all());

        return $this->ok([
            'date' => $date,
            'sessions' => $rows->map(function (TutoringSession $s) use ($facts): array {
                return [
                    'session_id' => (string) $s->id,
                    'tutor_ref' => (string) $s->tutor_user_id,
                    'starts_at' => $s->starts_at?->toIso8601ZuluString(),
                    'status' => (string) $s->status,
                    'absent_party' => $facts[(string) $s->id]['absent_party'] ?? null,
                    'checked_in_at' => $s->checked_in_at?->toIso8601ZuluString(),
                ];
            })->values()->all(),
            'next_after' => $rows->count() === $limit ? (string) $rows->last()->id : null,
        ]);
    }

    // ------------------------------------------------------------ write

    /**
     * `POST /packages/{id}/sessions` — book one class from a timetable.
     *
     * Goes through {@see SessionFlow::schedule}, so the balance, expiry,
     * overlap and wallet guards the tutor's screen meets apply here unchanged.
     * A refusal is a 422 with this site's own reasons, which the agent reports
     * instead of retrying.
     */
    public function scheduleClass(Request $request, string $id): JsonResponse
    {
        $key = trim((string) $request->header('X-Idempotency-Key', ''));
        if ($key === '' || strlen($key) > 191) {
            return response()->json(['error' => 'idempotency_key_required'], 400);
        }

        $validated = $request->validate([
            // An instant, never a wall-clock time: without an offset "17:00"
            // is 17:00 in the server's zone, which is UTC, which is 22:30 here.
            'starts_at' => ['required', 'date', 'regex:/(Z|[+-]\d{2}:\d{2})$/'],
            'planned_min' => 'required|integer|min:15|max:240',
            'mode' => 'nullable|in:home,online',
            'subject' => 'nullable|string|max:120',
        ]);

        $package = Package::find($id);
        if ($package === null) {
            return response()->json(['error' => 'package_not_found'], 404);
        }

        $startsAt = Carbon::parse($validated['starts_at'])->utc();
        $plannedMin = (int) $validated['planned_min'];

        $existing = TutoringSession::where('schedule_key', $key)->first();
        if ($existing !== null) {
            return $this->replay($existing, $package, $startsAt, $plannedMin);
        }

        if ($startsAt->lte(now())) {
            return response()->json(['error' => 'starts_at_in_past'], 422);
        }

        [$mode, $address, $meetingUrl] = $this->howItIsHeld($package, $validated['mode'] ?? null);
        if ($mode === null) {
            return response()->json(['error' => 'mode_required'], 422);
        }

        try {
            $session = $this->sessions->schedule(
                $package,
                $startsAt,
                $plannedMin,
                $mode,
                $address,
                $meetingUrl,
                $validated['subject'] ?? null,
                $key,
            );
        } catch (UniqueConstraintViolationException) {
            // Two retries raced; the other one booked it.
            $existing = TutoringSession::where('schedule_key', $key)->sole();

            return $this->replay($existing, $package, $startsAt, $plannedMin);
        } catch (ValidationException $e) {
            return response()->json([
                'error' => 'schedule_refused',
                'reasons' => $e->errors(),
            ], 422)->header('Cache-Control', 'no-store');
        }

        return $this->ok($this->booked($session, false))->setStatusCode(201);
    }

    // ---------------------------------------------------------- internals

    private function replay(TutoringSession $existing, Package $package, Carbon $startsAt, int $plannedMin): JsonResponse
    {
        $same = (string) $existing->package_id === (string) $package->id
            && $existing->starts_at?->equalTo($startsAt)
            && (int) $existing->planned_min === $plannedMin;

        if (! $same) {
            return response()->json(['error' => 'idempotency_key_reused'], 409);
        }

        return $this->ok($this->booked($existing, true));
    }

    /** @return array<string, mixed> */
    private function booked(TutoringSession $session, bool $replay): array
    {
        return [
            'session_id' => (string) $session->id,
            'package_id' => (string) $session->package_id,
            'starts_at' => $session->starts_at?->toIso8601ZuluString(),
            'planned_min' => (int) $session->planned_min,
            'status' => (string) $session->status,
            'idempotent_replay' => $replay,
        ];
    }

    /**
     * The mode, address and meeting link for a new class on this package.
     *
     * Repeats the package's most recent class, so the family's address stays on
     * this side. A mode the agent names wins; the address or link is still taken
     * from the last class held that way. No class yet and no mode named → null,
     * and the booking is refused rather than guessed.
     *
     * @return array{0: ?string, 1: ?string, 2: ?string}
     */
    private function howItIsHeld(Package $package, ?string $mode): array
    {
        $last = TutoringSession::where('package_id', $package->id)
            ->when($mode !== null, fn ($q) => $q->where('mode', $mode))
            ->orderByDesc('starts_at')
            ->first();

        if ($last === null) {
            return [$mode, null, null];
        }

        return [$mode ?? (string) $last->mode, $last->address, $last->meeting_url];
    }

    /**
     * A bare `register.user_id` of a tutor, or `ph_<hash>`, to a `user_id`.
     * Checked against `register` so a typo is a 404, not an empty timesheet.
     */
    private function resolveTutor(string $ref): ?string
    {
        $query = Register::query()->where('join_as', 'teacher');
        if (Schema::hasColumn('register', 'deleted_at')) {
            $query->whereNull('deleted_at');
        }

        if (str_starts_with($ref, 'ph_')) {
            $query->where('phone_hash', AgentPseudonymiser::stripPrefix($ref));
        } else {
            $query->where('user_id', $ref);
        }

        $userId = $query->value('user_id');

        return $userId === null ? null : (string) $userId;
    }

    /**
     * @return array{0: Carbon, 1: Carbon, 2: JsonResponse|null}
     */
    private function window(Request $request): array
    {
        $now = Carbon::now('UTC');

        $rawSince = (string) $request->query('since', '');
        if ($rawSince === '') {
            return [$now, $now, response()->json(['error' => 'since_required'], 422)];
        }

        try {
            $since = Carbon::parse($rawSince)->utc();
            $until = $request->query('until')
                ? Carbon::parse((string) $request->query('until'))->utc()
                : $now;
        } catch (\Throwable) {
            return [$now, $now, response()->json(['error' => 'invalid_window'], 422)];
        }

        if ($until <= $since) {
            return [$now, $now, response()->json(['error' => 'invalid_window'], 422)];
        }

        if ($since->diffInDays($until) > self::MAX_WINDOW_DAYS) {
            return [$now, $now, response()->json([
                'error' => 'window_too_large',
                'max_days' => self::MAX_WINDOW_DAYS,
            ], 422)];
        }

        return [$since, $until, null];
    }

    private function ok(array $payload): JsonResponse
    {
        return response()->json($payload)->header('Cache-Control', 'no-store');
    }
}
