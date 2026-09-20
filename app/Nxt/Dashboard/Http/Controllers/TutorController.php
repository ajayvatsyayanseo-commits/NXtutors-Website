<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Models\Register;
use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\HomeworkMark;
use App\Nxt\Dashboard\Models\HomeworkSubmission;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\LeadReply;
use App\Nxt\Dashboard\Models\LeadView;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\Quote;
use App\Nxt\Dashboard\Models\StudioArtefact;
use App\Nxt\Dashboard\Models\TutorAvailability;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Models\TutorNote;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Models\TutorVerification;
use App\Nxt\Dashboard\Services\Entitlements;
use App\Nxt\Dashboard\Services\LeadFlow;
use App\Nxt\Dashboard\Services\Ledger;
use App\Nxt\Dashboard\Services\SessionFlow;
use App\Nxt\Dashboard\Services\TutorDirectory;
use App\Nxt\Dashboard\Services\TutorHome;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Every tutor-facing read and write.
 *
 * Scoping here is stricter than "rows with my id on them": a tutor may see a
 * student only while a package with that tutor is active or recently ended.
 * The roster query enforces that rather than listing everyone they have ever
 * taught.
 */
class TutorController extends DashboardController
{
    public function __construct(
        private readonly TutorHome $home,
        private readonly Ledger $ledger,
        private readonly Entitlements $entitlements,
        private readonly TutorDirectory $directory,
        private readonly SessionFlow $sessions,
        private readonly LeadFlow $leads,
    ) {
    }

    public function home(Request $request): JsonResponse
    {
        return $this->ok($this->home->build($this->identity($request)));
    }

    // ---------------------------------------------------------------- Leads

    /**
     * The inbox. Sort order is deterministic and decided here: expiry ascending
     * within fit-score buckets, so the best-fit, soonest-expiring lead is always
     * first and the order does not wobble between loads.
     */
    public function leads(Request $request): JsonResponse
    {
        $identity = $this->identity($request);
        $tab = $request->query('tab', 'new');

        $statuses = match ($tab) {
            'replied' => ['contacted'],
            'won' => ['hired'],
            'lost' => ['rejected', 'replaced'],
            default => ['offered', 'viewed'],
        };

        $matches = TutorMatch::where('tutor_user_id', $identity->userId)
            ->whereIn('status', $statuses)
            ->get()
            ->sortBy([
                fn (TutorMatch $a, TutorMatch $b): int => $this->fitBucket($b->score) <=> $this->fitBucket($a->score),
                fn (TutorMatch $a, TutorMatch $b): int => ($a->expires_at?->timestamp ?? PHP_INT_MAX) <=> ($b->expires_at?->timestamp ?? PHP_INT_MAX),
            ])
            ->values();

        $leads = Lead::whereIn('id', $matches->pluck('lead_id'))->get()->keyBy('id');

        $viewed = LeadView::where('tutor_user_id', $identity->userId)
            ->whereIn('match_id', $matches->pluck('id'))
            ->pluck('match_id')
            ->flip();

        $gate = $this->entitlements->check($identity->userId, Entitlements::LEAD_VIEW);

        $rows = $matches->map(function (TutorMatch $m) use ($leads, $viewed): ?array {
            $lead = $leads->get($m->lead_id);

            return $lead ? $this->home->leadCard($lead, $m) + ['opened' => $viewed->has($m->id)] : null;
        })->filter()->values();

        return $this->ok($rows->all(), [
            'tab' => $tab,
            'meter' => $gate,
            // With the meter at zero the list is still shown, but only the first
            // row is readable. A tutor who cannot see that leads exist has no
            // reason to upgrade, and hiding them would look like there is no work.
            'blur_beyond_first' => ! $gate['allow'],
        ]);
    }

    /**
     * Opening a lead. This is the call that spends a lead view, and it spends
     * exactly one per lead no matter how many times it is opened.
     */
    public function lead(Request $request, string $matchId): JsonResponse
    {
        $identity = $this->identity($request);

        $result = $this->leads->openLead($identity->userId, $matchId);

        if (isset($result['not_found'])) {
            return $this->fail('not_found', 'That lead is not in your inbox.', 404);
        }

        if (isset($result['denied'])) {
            return $this->meterBlocked($result['denied']);
        }

        /** @var Lead $lead */
        $lead = $result['lead'];
        /** @var TutorMatch $match */
        $match = $result['match'];

        $quote = Quote::where('lead_id', $lead->id)
            ->where('tutor_user_id', $identity->userId)
            ->where('superseded', false)
            ->first();

        return $this->ok($this->home->leadCard($lead, $match, full: true) + [
            'charged' => $result['charged'],
            'reply_draft' => $this->replyDraft($identity->register, $lead),
            'suggested_rate_paise' => $this->suggestedRate($identity->register, $lead),
            'existing_quote' => $quote ? [
                'rate_paise' => $quote->rate_paise,
                'packages' => $quote->packages ?? [],
            ] : null,
            'replies' => LeadReply::where('lead_id', $lead->id)
                ->where('tutor_user_id', $identity->userId)
                ->orderBy('created_at')
                ->get()
                ->map(fn (LeadReply $r): array => [
                    'id' => $r->id,
                    'body' => $r->body,
                    'delivery_status' => $r->delivery_status,
                    'sent_at' => $r->sent_at?->toIso8601String(),
                ])->all(),
            'schedule_conflicts' => $this->scheduleConflicts($identity->userId, $lead),
            'entitlements' => $this->entitlements->snapshot($identity),
        ]);
    }

    public function replyToLead(Request $request, string $matchId): JsonResponse
    {
        $identity = $this->identity($request);

        $match = TutorMatch::where('id', $matchId)->where('tutor_user_id', $identity->userId)->first();

        if (! $match) {
            return $this->fail('not_found', 'That lead is not yours.', 404);
        }

        $validated = $request->validate([
            'body' => 'required|string|max:2000',
            'rate_paise' => 'nullable|integer|min:0',
            'packages' => 'nullable|array',
            'ai_drafted' => 'nullable|boolean',
        ]);

        $reply = $this->leads->reply(
            $identity->userId,
            $match,
            $validated['body'],
            $validated['rate_paise'] ?? null,
            $validated['packages'] ?? [],
            (bool) ($validated['ai_drafted'] ?? false),
        );

        return $this->ok(['id' => $reply->id, 'delivery_status' => $reply->delivery_status]);
    }

    public function declineLead(Request $request, string $matchId): JsonResponse
    {
        $identity = $this->identity($request);

        $match = TutorMatch::where('id', $matchId)->where('tutor_user_id', $identity->userId)->first();

        if (! $match) {
            return $this->fail('not_found', 'That lead is not yours.', 404);
        }

        $validated = $request->validate(['reason' => 'required|string|max:32']);

        $match = $this->leads->decline($identity->userId, $match, $validated['reason']);

        return $this->ok([
            'status' => $match->status,
            // Budget is the one decline a quote can answer, so the client is
            // told to offer a counter-offer instead of closing the lead.
            'counter_offer_suggested' => $validated['reason'] === 'budget_too_low',
        ]);
    }

    // ------------------------------------------------------------- Students

    public function students(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $packages = $this->visiblePackages($identity->userId);
        $students = Register::whereIn('user_id', $packages->pluck('student_user_id')->unique())->get()->keyBy('user_id');

        $rows = $packages->groupBy('student_user_id')->map(function ($group, $studentUserId) use ($students): ?array {
            // `register.user_id` is a numeric string ("1045"), and PHP turns a
            // numeric string array key into an int. Every downstream signature
            // takes a string, so the key is restored to one here rather than in
            // each of them.
            $studentUserId = (string) $studentUserId;

            $student = $students->get($studentUserId);

            if (! $student) {
                return null;
            }

            $active = $group->where('status', 'active');
            $sessionsLeft = (int) $active->sum(fn (Package $p): int => max(0, $p->sessions_total - $p->sessions_used));

            $next = TutoringSession::where('student_user_id', $studentUserId)
                ->where('tutor_user_id', $group->first()->tutor_user_id)
                ->whereIn('status', ['scheduled', 'checked_in'])
                ->where('starts_at', '>=', now())
                ->orderBy('starts_at')
                ->first();

            return [
                'student' => $this->home->studentBrief($studentUserId),
                'subjects' => $group->pluck('subject')->filter()->unique()->values()->all(),
                'sessions_left' => $sessionsLeft,
                'package_status' => $active->isNotEmpty() ? 'active' : 'ended',
                'next_session_at' => $next?->starts_at?->toIso8601String(),
                'homework_pending' => Homework::where('student_user_id', $studentUserId)
                    ->where('tutor_user_id', $group->first()->tutor_user_id)
                    ->whereIn('status', ['open', 'submitted'])
                    ->count(),
                'can_request_renewal' => $sessionsLeft <= 2,
            ];
        })->filter()->values();

        return $this->ok($rows->all());
    }

    public function student(Request $request, string $studentUserId): JsonResponse
    {
        $identity = $this->identity($request);

        $packages = $this->visiblePackages($identity->userId)->where('student_user_id', $studentUserId);

        if ($packages->isEmpty()) {
            // Not "forbidden": a tutor has no business learning that this
            // student exists at all unless a package connects them.
            return $this->fail('not_found', 'That student is not on your roster.', 404);
        }

        $sessions = TutoringSession::where('student_user_id', $studentUserId)
            ->where('tutor_user_id', $identity->userId)
            ->orderByDesc('starts_at')
            ->limit(50)
            ->get();

        return $this->ok([
            'student' => $this->home->studentBrief($studentUserId),
            'packages' => $packages->map(fn (Package $p): array => [
                'id' => $p->id,
                'subject' => $p->subject,
                'sessions_total' => $p->sessions_total,
                'sessions_used' => $p->sessions_used,
                'sessions_left' => max(0, $p->sessions_total - $p->sessions_used),
                'rate_paise' => $p->rate_paise,
                'status' => $p->status,
            ])->values()->all(),
            'sessions' => $sessions->map(fn (TutoringSession $s): array => $this->home->sessionRow($s))->all(),
            'homework' => Homework::where('student_user_id', $studentUserId)
                ->where('tutor_user_id', $identity->userId)
                ->orderByDesc('due_at')
                ->limit(50)
                ->get()
                ->map(fn (Homework $h): array => [
                    'id' => $h->id,
                    'title' => $h->title,
                    'subject' => $h->subject,
                    'due_at' => $h->due_at?->toIso8601String(),
                    'status' => $h->status,
                ])->all(),
            'notes' => TutorNote::where('student_user_id', $studentUserId)
                ->where('tutor_user_id', $identity->userId)
                ->orderByDesc('created_at')
                ->get()
                ->map(fn (TutorNote $n): array => [
                    'id' => $n->id,
                    'visibility' => $n->visibility,
                    'body' => $n->body,
                    'created_at' => $n->created_at?->toIso8601String(),
                ])->all(),
        ]);
    }

    public function addNote(Request $request, string $studentUserId): JsonResponse
    {
        $identity = $this->identity($request);

        if ($this->visiblePackages($identity->userId)->where('student_user_id', $studentUserId)->isEmpty()) {
            return $this->fail('not_found', 'That student is not on your roster.', 404);
        }

        $validated = $request->validate([
            'body' => 'required|string|max:4000',
            'visibility' => 'required|in:private,shared',
        ]);

        $note = TutorNote::create($validated + [
            'student_user_id' => $studentUserId,
            'tutor_user_id' => $identity->userId,
        ]);

        return $this->ok(['id' => $note->id], status: 201);
    }

    // ------------------------------------------------------------- Schedule

    public function calendar(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $from = $request->date('from') ?? now()->startOfWeek();
        $to = $request->date('to') ?? now()->endOfWeek()->addWeeks(3);

        $sessions = TutoringSession::where('tutor_user_id', $identity->userId)
            ->whereBetween('starts_at', [$from, $to])
            ->orderBy('starts_at')
            ->get();

        return $this->ok([
            'from' => $from->toDateString(),
            'to' => $to->toDateString(),
            'sessions' => $sessions->map(fn (TutoringSession $s): array => $this->home->sessionRow($s))->all(),
            'availability' => $this->directory->availability($identity->userId),
        ]);
    }

    public function scheduleSession(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $validated = $request->validate([
            'package_id' => 'required|string',
            'starts_at' => 'required|date',
            'planned_min' => 'required|integer|min:15|max:240',
            'mode' => 'required|in:home,online',
            'address' => 'nullable|string|max:500',
            'meeting_url' => 'nullable|url|max:500',
            'subject' => 'nullable|string|max:120',
        ]);

        $package = Package::where('id', $validated['package_id'])
            ->where('tutor_user_id', $identity->userId)
            ->where('status', 'active')
            ->first();

        if (! $package) {
            return $this->fail('not_found', 'That package does not exist or has ended.', 404);
        }

        $session = $this->sessions->schedule(
            $package,
            new \DateTimeImmutable($validated['starts_at']),
            $validated['planned_min'],
            $validated['mode'],
            $validated['address'] ?? null,
            $validated['meeting_url'] ?? null,
            $validated['subject'] ?? null,
        );

        return $this->ok($this->home->sessionRow($session), status: 201);
    }

    public function checkIn(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($identity->userId, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        $validated = $request->validate([
            'method' => 'required|in:parent_otp,geofence,online_join,manual',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'accuracy_m' => 'nullable|integer',
            'device_time' => 'nullable|date',
            'offline' => 'nullable|boolean',
            // The parent reads this out when the tutor arrives. It is verified
            // server-side; a parent_otp check-in without it is refused.
            'code' => 'nullable|string|max:8',
        ]);

        $session = $this->sessions->checkIn(
            $session,
            $identity->userId,
            $validated['method'],
            isset($validated['lat']) ? (float) $validated['lat'] : null,
            isset($validated['lng']) ? (float) $validated['lng'] : null,
            $validated['accuracy_m'] ?? null,
            isset($validated['device_time']) ? new \DateTimeImmutable($validated['device_time']) : null,
            (bool) ($validated['offline'] ?? false),
            $validated['code'] ?? null,
        );

        return $this->ok($this->home->sessionRow($session));
    }

    public function checkOut(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($identity->userId, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        $validated = $request->validate([
            'topics' => 'required|array|min:1',
            'topics.*' => 'string|max:160',
            'actual_min' => 'nullable|integer|min:5|max:300',
            'confidence' => 'nullable|integer|min:1|max:5',
            'homework' => 'nullable|array',
            'homework.title' => 'nullable|string|max:200',
            'homework.instructions' => 'nullable|string|max:2000',
            'homework.due_at' => 'nullable|date',
            'shared_note' => 'nullable|string|max:2000',
        ]);

        $session = $this->sessions->checkOut(
            $session,
            $identity->userId,
            $validated['topics'],
            $validated['actual_min'] ?? null,
            $validated['confidence'] ?? null,
            $validated['homework'] ?? null,
            $validated['shared_note'] ?? null,
        );

        return $this->ok($this->home->sessionRow($session));
    }

    public function availability(Request $request): JsonResponse
    {
        return $this->ok($this->directory->availability($this->identity($request)->userId));
    }

    public function setAvailability(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $validated = $request->validate([
            'slots' => 'required|array',
            'slots.*.weekday' => 'required|integer|min:0|max:6',
            'slots.*.start_time' => 'required|string',
            'slots.*.end_time' => 'required|string',
            'slots.*.mode' => 'nullable|in:home,online,any',
        ]);

        TutorAvailability::where('tutor_user_id', $identity->userId)->delete();

        foreach ($validated['slots'] as $slot) {
            TutorAvailability::create([
                'tutor_user_id' => $identity->userId,
                'weekday' => $slot['weekday'],
                'start_time' => $slot['start_time'],
                'end_time' => $slot['end_time'],
                'mode' => $slot['mode'] ?? 'any',
            ]);
        }

        return $this->ok($this->directory->availability($identity->userId));
    }

    public function markHomework(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);

        $homework = Homework::where('id', $id)->where('tutor_user_id', $identity->userId)->first();

        if (! $homework) {
            return $this->fail('not_found', 'That homework does not exist.', 404);
        }

        $validated = $request->validate([
            'score' => 'nullable|integer|min:0|max:100',
            'grade' => 'nullable|string|max:8',
            'comment' => 'nullable|string|max:2000',
        ]);

        $submission = HomeworkSubmission::where('homework_id', $homework->id)
            ->orderByDesc('submitted_at')
            ->first();

        HomeworkMark::create($validated + [
            'homework_id' => $homework->id,
            'submission_id' => $submission?->id,
            'tutor_user_id' => $identity->userId,
            'marked_at' => now(),
        ]);

        $homework->update(['status' => 'marked']);

        return $this->ok(['id' => $homework->id, 'status' => 'marked']);
    }

    // --------------------------------------------------------------- Growth

    public function earnings(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        return $this->ok($this->ledger->tutorEarnings($identity->userId) + [
            'payouts' => \App\Nxt\Dashboard\Models\Payout::where('tutor_user_id', $identity->userId)
                ->orderByDesc('created_at')
                ->limit(24)
                ->get()
                ->map(fn ($p): array => [
                    'id' => $p->id,
                    'amount_paise' => $p->amount_paise,
                    'status' => $p->status,
                    'period_start' => $p->period_start?->toDateString(),
                    'period_end' => $p->period_end?->toDateString(),
                    'paid_at' => $p->paid_at?->toIso8601String(),
                ])->all(),
        ]);
    }

    public function growth(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        return $this->ok([
            'reliability' => $this->directory->reliability($identity->userId),
            'verification' => $this->directory->verificationSummary($identity->userId),
            'completeness' => $this->directory->completeness($identity->register),
            'reviews' => $this->directory->reviews($identity->userId),
            'plan' => $this->entitlements->snapshot($identity),
            'analytics' => $this->analytics($identity->userId),
        ]);
    }

    public function uploadVerification(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $validated = $request->validate([
            'doc_type' => 'required|in:id_proof,qualification,address_proof,police_verification',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:8192',
        ]);

        // Verification documents are private by definition: a non-public disk
        // and a signed URL, never the public storage path the site uses for
        // avatars and course images.
        $path = $request->file('file')->store('tutor-verification/'.$identity->userId, 'local');

        $doc = TutorVerification::updateOrCreate(
            ['tutor_user_id' => $identity->userId, 'doc_type' => $validated['doc_type']],
            ['file_path' => $path, 'status' => 'pending', 'reviewer_comment' => null, 'reviewed_at' => null],
        );

        return $this->ok(['id' => $doc->id, 'doc_type' => $doc->doc_type, 'status' => $doc->status]);
    }

    public function artefacts(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $rows = StudioArtefact::where('tutor_user_id', $identity->userId)
            ->orderByDesc('created_at')
            ->limit(50)
            ->get()
            ->map(fn (StudioArtefact $a): array => [
                'id' => $a->id,
                'tool' => $a->tool,
                'title' => $a->title,
                'version' => $a->version,
                'created_at' => $a->created_at?->toIso8601String(),
            ]);

        return $this->ok($rows->all());
    }

    // --------------------------------------------------------------- Shared

    /**
     * A tutor sees a student while a package is active, and for 90 days after
     * it ends so they can finish marking and answer questions. Nothing else.
     */
    private function visiblePackages(string $tutorUserId)
    {
        return Package::where('tutor_user_id', $tutorUserId)
            ->where(function ($q): void {
                $q->where('status', 'active')
                    ->orWhere('updated_at', '>=', now()->subDays(90));
            })
            ->get();
    }

    /**
     * The family did not turn up.
     *
     * A tutor who travelled to an empty house was paid nothing, because there
     * was no path to the `no_show` status the schema has always declared. The
     * class is charged in full, commission included, because the tutor did
     * everything they agreed to.
     */
    public function noShow(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($identity->userId, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        $session = $this->sessions->noShow($session, $identity->userId, 'student');

        return $this->ok($this->home->sessionRow($session));
    }

    /**
     * Issue the class's check-in code and send it to the family.
     *
     * The tutor can ask for it from the session sheet when the reminder has not
     * arrived — the code still goes to the family, never to the caller, so
     * asking for it proves nothing on its own.
     */
    public function requestCheckInCode(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);
        $session = $this->findSession($identity->userId, $id);

        if (! $session) {
            return $this->fail('not_found', 'That class does not exist.', 404);
        }

        app(\App\Nxt\Dashboard\Services\CheckInProof::class)->issueAndNotify($session);

        return $this->ok([
            'sent' => true,
            'message' => 'We have sent the code to the family. Ask them to read it out.',
        ]);
    }

    private function findSession(string $tutorUserId, string $id): ?TutoringSession
    {
        return TutoringSession::where('id', $id)->where('tutor_user_id', $tutorUserId)->first();
    }

    private function fitBucket(int $score): int
    {
        return match (true) {
            $score >= 90 => 3,
            $score >= 75 => 2,
            default => 1,
        };
    }

    /**
     * Classes already booked in the slots this lead asks for.
     *
     * Accepting a lead the tutor has no free slot for is allowed — they may
     * intend to move something — but they are shown the clash first rather than
     * discovering it when the parent tries to book.
     */
    private function scheduleConflicts(string $tutorUserId, Lead $lead): array
    {
        $upcoming = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->whereIn('status', ['scheduled', 'checked_in'])
            ->whereBetween('starts_at', [now(), now()->addDays(14)])
            ->orderBy('starts_at')
            ->get();

        $wanted = collect($lead->slots ?? [])
            ->map(fn (string $slot): string => strtolower(explode('_', $slot)[0]))
            ->unique();

        return $upcoming
            ->filter(fn (TutoringSession $s): bool => $wanted->contains(strtolower($s->starts_at?->format('D') ?? '')))
            ->map(fn (TutoringSession $s): array => [
                'session_id' => $s->id,
                'starts_at' => $s->starts_at?->toIso8601String(),
                'subject' => $s->subject,
            ])
            ->values()
            ->all();
    }

    /**
     * A first-draft reply built from the tutor's own profile and the lead's own
     * fields. It is a template until the AI Lead Assistant registers on the
     * platform; either way it is a draft the tutor edits, never something sent
     * on their behalf.
     */
    private function replyDraft(Register $tutor, Lead $lead): string
    {
        $name = trim(explode(' ', (string) $tutor->name)[0] ?: 'there');
        $subject = $lead->subject ?: 'the subject';
        $class = $lead->class_level ? 'Class '.$lead->class_level : 'this class';
        $board = $lead->board ? $lead->board.' ' : '';
        $area = $lead->locality ?: $lead->city ?: 'your area';

        $slots = collect($lead->slots ?? [])->take(3)->map(
            fn (string $slot): string => str_replace('_', ' ', $slot),
        )->implode(', ');

        return "Hello, I am {$name}. I teach {$board}{$class} {$subject} in {$area}"
            .($slots ? " and I am free {$slots}." : '.')
            .' Happy to do a free demo class this week so you can see how it goes.';
    }

    /** The tutor's own rate for this class and subject, in paise per hour. */
    private function suggestedRate(Register $tutor, Lead $lead): ?int
    {
        $budget = (string) ($tutor->budget ?? '');

        if (preg_match('/(\d[\d,]*)/', $budget, $matches)) {
            return (int) str_replace(',', '', $matches[1]) * 100;
        }

        // Fall back to the middle of what the family said they would pay.
        if ($lead->budget_min_paise && $lead->budget_max_paise) {
            return (int) round(($lead->budget_min_paise + $lead->budget_max_paise) / 2);
        }

        return null;
    }

    private function analytics(string $tutorUserId): array
    {
        $matches = TutorMatch::where('tutor_user_id', $tutorUserId)->get();
        $replied = LeadReply::where('tutor_user_id', $tutorUserId)->count();
        $won = $matches->where('status', 'hired')->count();

        $sessions = TutoringSession::where('tutor_user_id', $tutorUserId)->get();

        return [
            'leads_received' => $matches->count(),
            'leads_replied' => $replied,
            'leads_won' => $won,
            'reply_rate' => $matches->count() > 0 ? (int) round($replied / $matches->count() * 100) : null,
            'win_rate' => $replied > 0 ? (int) round($won / max(1, $replied) * 100) : null,
            'sessions_completed' => $sessions->whereIn('status', ['confirmed', 'checked_out'])->count(),
            'sessions_cancelled' => $sessions->where('status', 'cancelled')->count(),
            'lead_views_used' => LeadView::where('tutor_user_id', $tutorUserId)->count(),
        ];
    }
}
