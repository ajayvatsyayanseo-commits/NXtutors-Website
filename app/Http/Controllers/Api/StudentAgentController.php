<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Services\ParentalConsentFlow;
use App\NxtAi\Support\AgentPseudonymiser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 * What the Student agent needs from this site, and the one thing it writes.
 *
 * `agent.student` runs on AWS Lambda outside any VPC and has no route to this
 * database — the same constraint the Tutor and Demo agents live with, for the
 * same documented reason. Everything it knows about a real class therefore
 * comes through here, over the signature middleware the other agent routes
 * already use.
 *
 * Its contract forbids it from owning any of this data. It never marks
 * attendance, never touches a session and never messages a parent: Session
 * owns whether a class happened, and this agent owns only the analytics over
 * that fact. So three of these four routes are GET, and the fourth writes a
 * notification rather than sending anything.
 *
 * Four rules, three inherited from {@see AgentGatewayController} and one new.
 *
 *  1. **Refs in, refs out.** A student is `stu_<hash>`; no phone number
 *     appears in any response here, because none of these routes delivers a
 *     message. A bare `register.user_id` is also accepted, because the session
 *     tables key on it and an agent holding one should not have to round-trip
 *     through identity to use it.
 *  2. **`absent_party` is never inferred.** It is read from the attendance
 *     event the state machine wrote, or it is null. Guessing "student" would
 *     make a tutor who overslept count against a child's attendance record,
 *     and the agent is built to exclude what it cannot attribute — a guess
 *     here would defeat that on the other side of the wire.
 *  3. **Windows are bounded.** `since` is required and the span is capped, so
 *     one call cannot walk a student's whole history and one retry cannot
 *     become a table scan.
 *  4. **The alert write is idempotent on its own key**, enforced by a unique
 *     index rather than by a check in PHP. The agent recomputes attendance on
 *     every session event, notices the same two misses repeatedly, and retries
 *     timeouts. All three must produce one notification.
 */
final class StudentAgentController extends Controller
{
    /** A window longer than this is a backfill, and backfills are paged. */
    private const MAX_WINDOW_DAYS = 400;

    // ------------------------------------------------------------ reads

    /**
     * `GET /students/{ref}/attendance` — every class in the window.
     *
     * Shaped for the agent's `skill.attendance_analytics` input: the status
     * vocabulary is this site's own (`nxt_sessions.status`) rather than a
     * translated one, so nothing is lost in a mapping layer and a status added
     * here shows up there as an unknown value instead of silently becoming
     * something else.
     */
    public function attendance(Request $request, string $ref): JsonResponse
    {
        $studentUserId = $this->resolveStudent($ref);
        if ($studentUserId === null) {
            return response()->json(['error' => 'student_not_found'], 404);
        }

        [$since, $until, $error] = $this->window($request);
        if ($error !== null) {
            return $error;
        }

        $sessions = DB::table('nxt_sessions')
            ->where('student_user_id', $studentUserId)
            ->where('starts_at', '>=', $since)
            ->where('starts_at', '<', $until)
            ->orderBy('starts_at')
            ->orderBy('id')
            ->get(['id', 'starts_at', 'status', 'subject']);

        $facts = $this->attendanceFacts($sessions->pluck('id')->all());

        return $this->ok([
            'student_ref' => $this->studentRef($ref, $studentUserId),
            'since' => $since->toIso8601ZuluString(),
            'until' => $until->toIso8601ZuluString(),
            'sessions' => $sessions->map(function (object $row) use ($facts): array {
                $fact = $facts[$row->id] ?? ['absent_party' => null, 'method' => null];

                return [
                    'session_id' => (string) $row->id,
                    'starts_at' => Carbon::parse($row->starts_at)->toIso8601ZuluString(),
                    'status' => (string) $row->status,
                    'subject' => $row->subject,
                    'absent_party' => $fact['absent_party'],
                    'method' => $fact['method'],
                ];
            })->values()->all(),
        ]);
    }

    /**
     * `GET /students/{ref}/session-logs` — what was taught, per class.
     *
     * `topic_ids` is always empty today and that is not an oversight: the
     * tutor's check-out form validates topics as `string|max:160`, so what
     * exists is free text. It is returned as `free_text` for the agent to
     * resolve against the taxonomy it owns, and the field is present now so
     * that populating it later is additive rather than a new shape.
     */
    public function sessionLogs(Request $request, string $ref): JsonResponse
    {
        $studentUserId = $this->resolveStudent($ref);
        if ($studentUserId === null) {
            return response()->json(['error' => 'student_not_found'], 404);
        }

        [$since, $until, $error] = $this->window($request);
        if ($error !== null) {
            return $error;
        }

        // Only classes that were actually taught carry a topic log. A
        // cancelled class has no content, and counting one as covered would
        // credit a family for a lesson nobody gave.
        $rows = DB::table('nxt_sessions')
            ->where('student_user_id', $studentUserId)
            ->whereIn('status', ['checked_out', 'confirmed', 'disputed'])
            ->where('starts_at', '>=', $since)
            ->where('starts_at', '<', $until)
            ->orderBy('starts_at')
            ->orderBy('id')
            ->get(['id', 'starts_at', 'subject', 'topics', 'confidence']);

        return $this->ok([
            'student_ref' => $this->studentRef($ref, $studentUserId),
            'since' => $since->toIso8601ZuluString(),
            'until' => $until->toIso8601ZuluString(),
            'logs' => $rows->map(function (object $row): array {
                $topics = json_decode((string) ($row->topics ?? '[]'), true);

                return [
                    'session_id' => (string) $row->id,
                    'logged_at' => Carbon::parse($row->starts_at)->toIso8601ZuluString(),
                    'subject' => $row->subject,
                    'topic_ids' => [],
                    'free_text' => array_values(array_filter(
                        is_array($topics) ? $topics : [],
                        static fn ($topic): bool => is_string($topic) && trim($topic) !== '',
                    )),
                    // The student's own 1-5 rating of the class. Not attendance
                    // and not mastery, but the only self-reported signal there
                    // is, and the agent's mood work will want it.
                    'confidence' => $row->confidence === null ? null : (int) $row->confidence,
                ];
            })->values()->all(),
        ]);
    }

    /**
     * `GET /students/{ref}/goals` — what the family said they wanted.
     *
     * The agent's `skill.learning_goals` turns free text into a structured
     * profile, and no lead event in the estate carries any: the Lead Intake
     * agent's `lead.captured` is already structured and has no free-text field
     * at all. This is where the text actually survives — `nxt_leads.note`,
     * typed by the family on the requirement form.
     *
     * Returned with the structured fields beside it rather than instead of it.
     * The class and board are facts the form captured; making the model infer
     * them from prose would replace a certainty with a guess.
     */
    public function goals(string $ref): JsonResponse
    {
        $studentUserId = $this->resolveStudent($ref);
        if ($studentUserId === null) {
            return response()->json(['error' => 'student_not_found'], 404);
        }

        $lead = DB::table('nxt_leads')
            ->where('student_user_id', $studentUserId)
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->first();

        if ($lead === null) {
            // Not an error. A student can exist without a lead — they were
            // added by ops, or converted before these tables existed — and the
            // agent must be able to tell "no goals recorded" from "lookup
            // failed". A 404 here would read as the latter.
            return $this->ok([
                'student_ref' => $this->studentRef($ref, $studentUserId),
                'raw_goals_text' => null,
                'source' => null,
            ]);
        }

        $subjects = json_decode((string) ($lead->subjects ?? '[]'), true);
        if (! is_array($subjects) || $subjects === []) {
            $subjects = array_filter([$lead->subject]);
        }

        return $this->ok([
            'student_ref' => $this->studentRef($ref, $studentUserId),
            'raw_goals_text' => $lead->note,
            'level' => $lead->class_level,
            'board' => $lead->board,
            'subjects' => array_values(array_filter($subjects, 'is_string')),
            'start_by' => $lead->start_by,
            'source' => 'nxt_leads.note',
            'lead_id' => (string) $lead->id,
            'captured_at' => $lead->created_at
                ? Carbon::parse($lead->created_at)->toIso8601ZuluString()
                : null,
        ]);
    }

    /**
     * `GET /students/{ref}/consent` — may this child's data be processed?
     *
     * The DPDP Act 2023 requires verifiable parental consent before a child's
     * personal data is processed, and the agent's §5 forbids it from creating
     * a student profile without one. This is where it asks.
     *
     * **Read only, and deliberately so.** There is no route for an agent to
     * request or grant consent, and there should not be: issuing a code means
     * messaging a family, which §5 forbids, and a permission an automated
     * caller can mint for itself is not a permission. Collection happens
     * through {@see \App\Nxt\Dashboard\Services\ParentalConsentFlow} on this
     * side, driven by a person.
     *
     * Fails closed in every direction. No record, an unconfirmed one, an
     * expired one and a withdrawn one all answer `verified: false`, because an
     * agent that could tell them apart would eventually treat one of them as
     * good enough. A missing student is the one exception and is still a 404:
     * "this child does not exist" is a different problem from "this child has
     * not consented", and conflating them would have the agent quietly skip a
     * typo instead of reporting it.
     */
    public function consent(Request $request, string $ref): JsonResponse
    {
        $studentUserId = $this->resolveStudent($ref);
        if ($studentUserId === null) {
            return response()->json(['error' => 'student_not_found'], 404);
        }

        $purpose = (string) $request->query('purpose', 'learning_records');
        $consent = app(ParentalConsentFlow::class)->current($studentUserId, $purpose);

        if ($consent === null) {
            return $this->ok([
                'student_ref' => $this->studentRef($ref, $studentUserId),
                'purpose' => $purpose,
                'verified' => false,
            ]);
        }

        return $this->ok([
            'student_ref' => $this->studentRef($ref, $studentUserId),
            'purpose' => $purpose,
            'verified' => true,
            'recorded_at' => $consent->verified_at?->toIso8601ZuluString(),
            'method' => 'parent_otp',
            // There is no parent record to point at, so the reference is the
            // pseudonym every agent already uses for a person. It is enough to
            // say "this number consented" without this response — or the table
            // behind it — ever carrying the number.
            'parent_record_ref' => 'ph_'.$consent->parent_phone_hash,
            'consent_version' => $consent->consent_version,
        ]);
    }

    // ------------------------------------------------------------ write

    /**
     * `POST /students/{ref}/alerts` — record an alert the agent raised.
     *
     * This is not the agent messaging a parent, which its contract forbids. It
     * hands the fact to the owner of the notification surface, which decides
     * what to do with it — exactly as the Demo agent hands over a booking. When
     * a Parent agent exists it takes this decision over and nothing here has to
     * change.
     *
     * Deliberately writes only an in-app notification. No WhatsApp, no SMS, no
     * email: those are the Messaging Gateway's, with its caps, quiet hours and
     * consent checks, and none of that is reimplemented here.
     */
    public function recordAlert(Request $request, string $ref): JsonResponse
    {
        $studentUserId = $this->resolveStudent($ref);
        if ($studentUserId === null) {
            return response()->json(['error' => 'student_not_found'], 404);
        }

        $key = trim((string) $request->header('X-Idempotency-Key', ''));
        if ($key === '' || strlen($key) > 191) {
            return response()->json(['error' => 'idempotency_key_required'], 400);
        }

        $validated = $request->validate([
            'type' => 'required|string|in:attendance,mood,readiness',
            'severity' => 'required|string|in:info,warning,critical',
            'reason' => 'required|string|max:280',
            'rule' => 'nullable|string|max:64',
            'evidence' => 'nullable|array',
        ]);

        // firstOrCreate, then a caught duplicate: the read handles the common
        // replay cheaply, and the catch handles the genuine race two retries
        // create. Only the unique index actually decides.
        $existing = AppNotification::query()->where('dedupe_key', $key)->first();
        if ($existing !== null) {
            return $this->ok([
                'notification_id' => (string) $existing->id,
                'idempotent_replay' => true,
            ])->setStatusCode(200);
        }

        $attributes = [
            'id' => (string) Str::ulid(),
            'user_id' => $studentUserId,
            'role' => 'student',
            'event' => 'student.alert.raised',
            'dedupe_key' => $key,
            'title' => $this->alertTitle($validated['type'], $validated['severity']),
            'body' => $validated['reason'],
            'deep_link' => '/user/learn',
            'channel' => 'in_app',
            'status' => 'sent',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        try {
            $notification = AppNotification::query()->create($attributes);
        } catch (\Illuminate\Database\UniqueConstraintViolationException) {
            $notification = AppNotification::query()->where('dedupe_key', $key)->sole();

            return $this->ok([
                'notification_id' => (string) $notification->id,
                'idempotent_replay' => true,
            ]);
        }

        return $this->ok([
            'notification_id' => (string) $notification->id,
            'idempotent_replay' => false,
        ])->setStatusCode(201);
    }

    // ---------------------------------------------------------- internals

    /**
     * `stu_<hash>` or a bare `register.user_id` to a `user_id`, or null.
     *
     * The hashed form is what the agent gets from `identity/resolve`; the bare
     * form is what every session row carries. Accepting both means an agent
     * that already holds a session does not have to resolve an identity it
     * could not use anyway.
     */
    private function resolveStudent(string $ref): ?string
    {
        // A prefix is unambiguous, so it decides on its own.
        if (str_starts_with($ref, 'stu_') || str_starts_with($ref, 'ph_')) {
            return $this->byPhoneHash(AgentPseudonymiser::stripPrefix(
                str_starts_with($ref, 'stu_') ? substr($ref, 4) : $ref
            ));
        }

        // Otherwise `user_id` is tried first. A bare sixteen-character id is a
        // valid `user_id` *and* a valid phone hash, and reading one as the
        // other would quietly answer with a different child's attendance.
        // Confirmed against `register` rather than trusted, so a typo returns
        // 404 instead of an empty window that reads as "this child has never
        // had a class".
        if ($this->liveAccounts()->where('user_id', $ref)->exists()) {
            return $ref;
        }

        return AgentPseudonymiser::looksLikePhoneRef($ref) ? $this->byPhoneHash($ref) : null;
    }

    private function byPhoneHash(string $hash): ?string
    {
        $register = $this->liveAccounts()
            ->where('phone_hash', AgentPseudonymiser::stripPrefix($hash))
            ->first();

        return $register?->user_id === null ? null : (string) $register->user_id;
    }

    /**
     * Accounts an agent may still read.
     *
     * Not `publiclyVisible()`: that scope answers "may this tutor appear on a
     * public surface" and requires `status = 't'`, which would hide a perfectly
     * ordinary student. What matters here is narrower and absolute — a family
     * who withdrew consent under the DPDP Act must stop being a subject of
     * analytics immediately, not when the purge job next runs. So a row with
     * `deleted_at` set is a 404 from this controller even though the row and
     * its sessions still exist.
     *
     * `hidden_until` is deliberately *not* checked. Hiding is about a tutor's
     * public listing; a family who hid their profile did not ask for their
     * child's attendance to stop being tracked.
     */
    private function liveAccounts(): \Illuminate\Database\Eloquent\Builder
    {
        $query = Register::query();

        // The auto-deploy does not run these migrations, so code can briefly be
        // live before the column exists. Fall back rather than 500 — the same
        // guard Register::scopePubliclyVisible uses, for the same reason.
        if (Schema::hasColumn('register', 'deleted_at')) {
            $query->whereNull('deleted_at');
        }

        return $query;
    }

    private function studentRef(string $requested, string $studentUserId): string
    {
        return str_starts_with($requested, 'stu_') ? $requested : $studentUserId;
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

    /**
     * Per-session attendance facts, in one query rather than one per session.
     *
     * For a no-show the state machine stores the absent party in the event's
     * `method` column (`SessionFlow::recordEvent($session, 'no_show', $actor,
     * $party)`), which is why `method` is not reported for those rows: it holds
     * "student", not "parent_otp", and passing it through would tell the agent
     * that an absence was verified by a method that does not exist.
     *
     * @param  list<string>  $sessionIds
     * @return array<string, array{absent_party: ?string, method: ?string}>
     */
    private function attendanceFacts(array $sessionIds): array
    {
        if ($sessionIds === []) {
            return [];
        }

        $events = DB::table('nxt_attendance_events')
            ->whereIn('session_id', $sessionIds)
            ->whereIn('kind', ['no_show', 'check_in', 'check_out'])
            ->orderBy('server_time')
            ->orderBy('id')
            ->get(['session_id', 'kind', 'method', 'payload']);

        $facts = [];
        foreach ($events as $event) {
            $id = (string) $event->session_id;
            $facts[$id] ??= ['absent_party' => null, 'method' => null];

            if ($event->kind === 'no_show') {
                $payload = json_decode((string) ($event->payload ?? '{}'), true);
                $party = is_array($payload) ? ($payload['party'] ?? null) : null;
                $party ??= $event->method;
                // Anything the state machine did not write is left null. The
                // agent excludes an unattributable miss rather than counting
                // it, which is the whole point of not guessing here.
                $facts[$id]['absent_party'] = in_array($party, ['student', 'tutor', 'both'], true)
                    ? $party
                    : null;

                continue;
            }

            // The earliest check-in is how attendance was established. A later
            // check-out does not re-establish it.
            $facts[$id]['method'] ??= $event->method;
        }

        return $facts;
    }

    private function alertTitle(string $type, string $severity): string
    {
        $subject = match ($type) {
            'attendance' => 'Attendance',
            'mood' => 'How classes are going',
            default => 'Exam readiness',
        };

        return $severity === 'critical' ? $subject.' — needs attention' : $subject;
    }

    private function ok(array $payload): JsonResponse
    {
        // `no-store`, as on every other agent route: these carry a named
        // child's academic record, which is the strictest class of data on the
        // platform and must not sit in an intermediary cache.
        return response()->json($payload)->header('Cache-Control', 'no-store');
    }
}
