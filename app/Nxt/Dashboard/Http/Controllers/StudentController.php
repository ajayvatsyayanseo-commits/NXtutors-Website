<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Models\Register;
use App\Nxt\Dashboard\Models\AttendanceEvent;
use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\HomeworkMark;
use App\Nxt\Dashboard\Models\HomeworkSubmission;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\ProgressSnapshot;
use App\Nxt\Dashboard\Models\ProgressSummary;
use App\Nxt\Dashboard\Models\SavedTutor;
use App\Nxt\Dashboard\Models\StudyPlan;
use App\Nxt\Dashboard\Models\StudyPlanItem;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Services\Entitlements;
use App\Nxt\Dashboard\Services\LeadFlow;
use App\Nxt\Dashboard\Services\Ledger;
use App\Nxt\Dashboard\Services\SessionFlow;
use App\Nxt\Dashboard\Services\StudentHome;
use App\Nxt\Dashboard\Services\TutorDirectory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Every student/parent-facing read and write.
 *
 * The one rule that runs through all of it: a row is reached by the caller's
 * own user id, never by an id taken from the URL alone. Passing another
 * family's session id returns 404, not their data.
 */
class StudentController extends DashboardController
{
    public function __construct(
        private readonly StudentHome $home,
        private readonly Ledger $ledger,
        private readonly Entitlements $entitlements,
        private readonly TutorDirectory $tutors,
        private readonly SessionFlow $sessions,
        private readonly LeadFlow $leads,
    ) {
    }

    public function home(Request $request): JsonResponse
    {
        return $this->ok($this->home->build($this->identity($request)));
    }

    // ---------------------------------------------------------------- Learn

    /** Sessions grouped by week, with the ledger evidence behind each one. */
    public function sessions(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $query = TutoringSession::where('student_user_id', $identity->userId);

        if ($subject = $request->query('subject')) {
            $query->where('subject', $subject);
        }

        if ($status = $request->query('status')) {
            $query->where('status', $status);
        }

        $sessions = $query->orderByDesc('starts_at')->limit(100)->get();

        return $this->ok(
            $sessions->map(fn (TutoringSession $s): array => $this->sessionDetail($s))->all(),
            ['count' => $sessions->count()],
        );
    }

    public function session(Request $request, string $id): JsonResponse
    {
        $session = $this->findSession($request, $id);

        return $session
            ? $this->ok($this->sessionDetail($session, withEvents: true))
            : $this->fail('not_found', 'That class does not exist.', 404);
    }

    public function confirmSession(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($request, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        return $this->ok($this->sessionDetail(
            $this->sessions->confirm($session, $identity->userId),
        ));
    }

    public function disputeSession(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($request, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        $validated = $request->validate([
            'reason' => 'required|string|max:64',
            'detail' => 'nullable|string|max:2000',
            'files' => 'nullable|array',
        ]);

        $dispute = $this->sessions->dispute(
            $session,
            $identity->userId,
            $validated['reason'],
            $validated['detail'] ?? null,
            $validated['files'] ?? [],
        );

        return $this->ok(['dispute_id' => $dispute->id, 'status' => $dispute->status]);
    }

    /** The policy is shown before the cancel button does anything. */
    public function cancellationPolicy(Request $request, string $id): JsonResponse
    {
        $session = $this->findSession($request, $id);

        return $session
            ? $this->ok($this->sessions->cancellationPolicy($session))
            : $this->fail('not_found', 'That class does not exist.', 404);
    }

    public function cancelSession(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($request, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        $session = $this->sessions->cancel($session, $identity->userId, $request->input('reason'));

        return $this->ok($this->sessionDetail($session));
    }

    /**
     * The tutor did not turn up.
     *
     * The family loses an evening, so the hold comes back in full and the
     * package gains a class. Before this the only route out of an empty
     * evening was Cancel, which inside the free window paid the absent tutor
     * half the fee out of the family's own money.
     */
    public function reportNoShow(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($request, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        $session = $this->sessions->noShow($session, $identity->userId, 'tutor');

        return $this->ok($this->sessionDetail($session));
    }

    public function homework(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $items = Homework::where('student_user_id', $identity->userId)
            ->orderByRaw("FIELD(status, 'open', 'submitted', 'marked')")
            ->orderBy('due_at')
            ->limit(100)
            ->get();

        return $this->ok([
            'open' => $items->whereIn('status', ['open', 'submitted'])
                ->map(fn (Homework $h): array => $this->home->homeworkCard($h))->values()->all(),
            'done' => $items->where('status', 'marked')
                ->map(fn (Homework $h): array => $this->home->homeworkCard($h))->values()->all(),
        ]);
    }

    public function homeworkDetail(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);

        $homework = Homework::where('id', $id)->where('student_user_id', $identity->userId)->first();

        if (! $homework) {
            return $this->fail('not_found', 'That homework does not exist.', 404);
        }

        return $this->ok($this->home->homeworkCard($homework) + [
            'attachments' => $homework->attachments ?? [],
            'submissions' => HomeworkSubmission::where('homework_id', $homework->id)
                ->orderByDesc('submitted_at')
                ->get()
                ->map(fn (HomeworkSubmission $s): array => [
                    'id' => $s->id,
                    'files' => $s->files ?? [],
                    'note' => $s->note,
                    'submitted_at' => $s->submitted_at?->toIso8601String(),
                ])->all(),
            'marks' => HomeworkMark::where('homework_id', $homework->id)
                ->orderByDesc('marked_at')
                ->get()
                ->map(fn (HomeworkMark $m): array => [
                    'id' => $m->id,
                    'score' => $m->score,
                    'grade' => $m->grade,
                    'comment' => $m->comment,
                    'marked_at' => $m->marked_at?->toIso8601String(),
                ])->all(),
        ]);
    }

    public function submitHomework(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);

        $homework = Homework::where('id', $id)->where('student_user_id', $identity->userId)->first();

        if (! $homework) {
            return $this->fail('not_found', 'That homework does not exist.', 404);
        }

        $validated = $request->validate([
            'files' => 'required|array|min:1',
            'files.*' => 'string',
            'note' => 'nullable|string|max:1000',
        ]);

        $submission = HomeworkSubmission::create([
            'homework_id' => $homework->id,
            'student_user_id' => $identity->userId,
            'files' => $validated['files'],
            'note' => $validated['note'] ?? null,
            'submitted_at' => now(),
        ]);

        $homework->update(['status' => 'submitted']);

        return $this->ok(['submission_id' => $submission->id, 'status' => 'submitted']);
    }

    public function studyPlan(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $plan = StudyPlan::where('student_user_id', $identity->userId)
            ->orderByDesc('week_start')
            ->first();

        if (! $plan) {
            return $this->ok(null);
        }

        $items = StudyPlanItem::where('plan_id', $plan->id)->orderBy('position')->get();

        return $this->ok([
            'id' => $plan->id,
            'subject' => $plan->subject,
            'week_start' => $plan->week_start?->toDateString(),
            'generated_by' => $plan->generated_by,
            'tutor' => $this->home->tutorBrief($plan->tutor_user_id),
            'items' => $items->map(fn (StudyPlanItem $i): array => [
                'id' => $i->id,
                'title' => $i->title,
                'subject' => $i->subject,
                'chapter' => $i->chapter,
                'kind' => $i->kind,
                'locked' => $i->locked,
                'due_at' => $i->due_at?->toIso8601String(),
                'done' => $i->done_at !== null,
                'edited_by' => $i->edited_by,
            ])->all(),
            'progress' => [
                'done' => $items->whereNotNull('done_at')->count(),
                'total' => $items->count(),
            ],
        ]);
    }

    public function tickPlanItem(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);

        $item = StudyPlanItem::where('id', $id)->first();

        $owned = $item && StudyPlan::where('id', $item->plan_id)
            ->where('student_user_id', $identity->userId)
            ->exists();

        if (! $owned) {
            return $this->fail('not_found', 'That plan item does not exist.', 404);
        }

        $item->update(['done_at' => $item->done_at ? null : now()]);

        return $this->ok(['id' => $item->id, 'done' => $item->done_at !== null]);
    }

    /**
     * Progress, with the evidence attached. Every cell carries the ids of the
     * events it was computed from so a parent can tap a weak chapter and see
     * exactly which classes and tests produced the colour.
     */
    public function progress(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $snapshots = ProgressSnapshot::where('student_user_id', $identity->userId)
            ->orderByDesc('computed_for')
            ->limit(200)
            ->get();

        $summaries = ProgressSummary::where('student_user_id', $identity->userId)
            ->orderByDesc('week_start')
            ->limit(12)
            ->get();

        $plan = $this->entitlements->snapshot($identity)['plan'];
        $narrativeAllowed = str_contains(strtolower((string) $plan['name']), 'premium');

        return $this->ok([
            'heatmap' => $snapshots->groupBy('subject')->map(
                fn ($rows, $subject): array => [
                    'subject' => $subject,
                    'chapters' => $rows->map(fn (ProgressSnapshot $s): array => [
                        'chapter' => $s->chapter,
                        'score' => $s->score,
                        'evidence' => $s->evidence ?? [],
                        'computed_for' => $s->computed_for?->toDateString(),
                    ])->values()->all(),
                ],
            )->values()->all(),
            'summaries' => $summaries->map(fn (ProgressSummary $s): array => [
                'id' => $s->id,
                'week_start' => $s->week_start?->toDateString(),
                'week_end' => $s->week_end?->toDateString(),
                'counters' => $s->counters ?? [],
                // The narrative is a Premium entitlement; counters are shown on
                // every plan. Hiding it here rather than in the client is what
                // makes that an entitlement instead of a suggestion.
                'narrative' => $narrativeAllowed ? $s->narrative : null,
                'narrative_locked' => ! $narrativeAllowed && filled($s->narrative),
                'read' => $s->read_at !== null,
            ])->all(),
        ]);
    }

    // --------------------------------------------------------------- Tutors

    /** The matching engine's recommendations for this family's open leads. */
    public function matches(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $leads = Lead::where('student_user_id', $identity->userId)
            ->whereNotIn('status', ['cancelled', 'expired'])
            ->orderByDesc('created_at')
            ->get();

        $matches = TutorMatch::whereIn('lead_id', $leads->pluck('id'))
            ->whereNotIn('status', ['replaced'])
            ->orderBy('rank')
            ->get();

        $tutorRows = Register::whereIn('user_id', $matches->pluck('tutor_user_id'))->get()->keyBy('user_id');

        return $this->ok([
            'leads' => $leads->map(fn (Lead $l): array => [
                'id' => $l->id,
                'subject' => $l->subject,
                'class_level' => $l->class_level,
                'status' => $l->status,
                'locality' => $l->locality,
                'city' => $l->city,
            ])->all(),
            'matches' => $matches->map(function (TutorMatch $m) use ($tutorRows): ?array {
                $tutor = $tutorRows->get($m->tutor_user_id);

                if (! $tutor) {
                    return null;
                }

                return [
                    'id' => $m->id,
                    'lead_id' => $m->lead_id,
                    'fit_score' => $m->score,
                    'rank' => $m->rank,
                    'status' => $m->status,
                    // The reasons are the engine's own words. Templating them in
                    // the client is exactly what made the live site's reviews
                    // worthless, and the same trap is open here.
                    'reasons' => $m->reasons ?? [],
                    'tutor' => $this->tutors->card($tutor),
                ];
            })->filter()->values()->all(),
            'saved' => SavedTutor::where('student_user_id', $identity->userId)->pluck('tutor_user_id')->all(),
        ]);
    }

    public function tutorProfile(Request $request, string $tutorUserId): JsonResponse
    {
        $tutor = Register::where('user_id', $tutorUserId)->where('join_as', 'teacher')->publiclyVisible()->first();

        if (! $tutor) {
            return $this->fail('not_found', 'That tutor does not exist.', 404);
        }

        return $this->ok($this->tutors->profile($tutor));
    }

    public function contactMatch(Request $request, string $matchId): JsonResponse
    {
        $identity = $this->identity($request);

        $match = $this->findMatch($identity->userId, $matchId);

        if (! $match) {
            return $this->fail('not_found', 'That match does not exist.', 404);
        }

        $result = $this->leads->contactTutor($identity->userId, $match);

        if (! $result['allowed']) {
            return $this->meterBlocked($result['gate']);
        }

        return $this->ok([
            'match_id' => $match->id,
            'charged' => $result['charged'],
            'entitlements' => $this->entitlements->snapshot($identity),
        ]);
    }

    public function rejectMatch(Request $request, string $matchId): JsonResponse
    {
        $identity = $this->identity($request);
        $match = $this->findMatch($identity->userId, $matchId);

        if (! $match) {
            return $this->fail('not_found', 'That match does not exist.', 404);
        }

        $validated = $request->validate(['reason' => 'required|string|max:64']);

        return $this->ok(['status' => $this->leads->rejectMatch($match, $validated['reason'])->status]);
    }

    public function saveTutor(Request $request, string $tutorUserId): JsonResponse
    {
        $identity = $this->identity($request);

        $existing = SavedTutor::where('student_user_id', $identity->userId)
            ->where('tutor_user_id', $tutorUserId)
            ->first();

        if ($existing) {
            $existing->delete();

            return $this->ok(['saved' => false]);
        }

        SavedTutor::create([
            'student_user_id' => $identity->userId,
            'tutor_user_id' => $tutorUserId,
            'saved_at' => now(),
        ]);

        return $this->ok(['saved' => true]);
    }

    public function savedTutors(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $ids = SavedTutor::where('student_user_id', $identity->userId)->pluck('tutor_user_id');
        $tutors = Register::whereIn('user_id', $ids)->get();

        return $this->ok($tutors->map(fn (Register $t): array => $this->tutors->card($t))->all());
    }

    // -------------------------------------------------------------- Account

    public function wallet(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $wallet = $this->ledger->familyWallet($identity->userId);

        $wallet['packages'] = array_map(function (array $package): array {
            $package['tutor'] = $this->home->tutorBrief($package['tutor_user_id']);

            return $package;
        }, $wallet['packages']);

        return $this->ok($wallet);
    }

    public function plan(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        return $this->ok($this->entitlements->snapshot($identity) + [
            'history' => $this->entitlements->history($identity->userId),
        ]);
    }

    /** Requirements the family has raised, newest first. */
    public function requirements(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $leads = Lead::where('student_user_id', $identity->userId)
            ->orderByDesc('created_at')
            ->get();

        return $this->ok($leads->map(fn (Lead $l): array => [
            'id' => $l->id,
            'subject' => $l->subject,
            'subjects' => $l->subjects ?? [],
            'class_level' => $l->class_level,
            'board' => $l->board,
            'mode' => $l->mode,
            'locality' => $l->locality,
            'city' => $l->city,
            'pincode' => $l->pincode,
            'slots' => $l->slots ?? [],
            'budget_min_paise' => $l->budget_min_paise,
            'budget_max_paise' => $l->budget_max_paise,
            'note' => $l->note,
            'status' => $l->status,
            'source' => $l->source,
            'created_at' => $l->created_at?->toIso8601String(),
            'match_count' => TutorMatch::where('lead_id', $l->id)->whereNotIn('status', ['rejected', 'replaced'])->count(),
        ])->all());
    }

    public function createRequirement(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $validated = $request->validate([
            'subject' => 'required|string|max:120',
            'class_level' => 'required|string|max:60',
            'board' => 'nullable|string|max:60',
            'mode' => 'required|in:home,online,hybrid',
            'locality' => 'nullable|string|max:160',
            'city' => 'nullable|string|max:120',
            'pincode' => 'nullable|string|max:16',
            'slots' => 'nullable|array',
            'budget_min_paise' => 'nullable|integer|min:0',
            'budget_max_paise' => 'nullable|integer|min:0',
            'note' => 'nullable|string|max:1000',
        ]);

        $lead = $this->leads->createLead($validated + [
            'student_user_id' => $identity->userId,
            'student_name' => $identity->register->name,
            'phone' => $identity->register->phone,
        ]);

        return $this->ok(['id' => $lead->id, 'status' => $lead->status], status: 201);
    }

    // --------------------------------------------------------------- Shared

    /**
     * The full session record, including the attendance events verbatim. The
     * brief requires the check-in method and timestamp to be visible to the
     * family exactly as recorded, not summarised into "attended".
     */
    private function sessionDetail(TutoringSession $session, bool $withEvents = false): array
    {
        $card = $this->home->sessionCard($session) + [
            'topics' => $session->topics ?? [],
            'actual_min' => $session->actual_min,
            'confidence' => $session->confidence,
            'fee_paise' => $session->fee_paise,
            'checked_in_at' => $session->checked_in_at?->toIso8601String(),
            'checked_out_at' => $session->checked_out_at?->toIso8601String(),
            'confirmed_at' => $session->confirmed_at?->toIso8601String(),
            'can_confirm' => $session->status === 'checked_out',
            'auto_confirms_at' => $session->status === 'checked_out' && $session->checked_out_at
                ? $session->checked_out_at->copy()->addHours(24)->toIso8601String()
                : null,
        ];

        if ($withEvents) {
            $card['events'] = AttendanceEvent::where('session_id', $session->id)
                ->orderBy('server_time')
                ->get()
                ->map(fn (AttendanceEvent $e): array => [
                    'kind' => $e->kind,
                    'method' => $e->method,
                    'at' => $e->server_time?->toIso8601String(),
                    'device_time' => $e->device_time?->toIso8601String(),
                    'offline' => $e->offline,
                    'accuracy_m' => $e->accuracy_m,
                ])->all();
        }

        return $card;
    }

    private function findSession(Request $request, string $id): ?TutoringSession
    {
        return TutoringSession::where('id', $id)
            ->where('student_user_id', $this->identity($request)->userId)
            ->first();
    }

    private function findMatch(string $studentUserId, string $matchId): ?TutorMatch
    {
        $match = TutorMatch::find($matchId);

        if (! $match) {
            return null;
        }

        $owned = Lead::where('id', $match->lead_id)
            ->where('student_user_id', $studentUserId)
            ->exists();

        return $owned ? $match : null;
    }
}
