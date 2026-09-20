<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Models\Register;
use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\ProgressSummary;
use App\Nxt\Dashboard\Models\TestAttempt;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Support\DashboardIdentity;
use Illuminate\Support\Carbon;

/**
 * The whole of the student Home screen in one payload.
 *
 * The brief requires Home to render from a single GET, with a fixed card order
 * and absent cards collapsing rather than shifting the layout after load. Doing
 * that from one query set here — instead of a request per card in the client —
 * is what keeps the screen inside its 2.5 s budget on a mid-range Android.
 *
 * Home has two shapes and this decides between them: a family with no hired
 * tutor sees the requirement tracker; a family with one sees Today.
 */
class StudentHome
{
    public function __construct(
        private readonly Entitlements $entitlements,
        private readonly Ledger $ledger,
        private readonly TutorDirectory $tutors,
    ) {
    }

    public function build(DashboardIdentity $identity): array
    {
        $userId = $identity->userId;

        $sessions = $this->upcomingSessions($userId);
        $packages = Package::where('student_user_id', $userId)->where('status', 'active')->get();
        $openLeads = $this->openRequirements($userId);

        $hasHiredTutor = $packages->isNotEmpty();

        return [
            'shape' => $hasHiredTutor ? 'today' : 'tracker',
            'profile' => $identity->toArray(),
            'entitlements' => $this->entitlements->snapshot($identity),
            'next_session' => $sessions['next'],
            'upcoming_sessions' => $sessions['upcoming'],
            'homework' => $this->homeworkDue($userId),
            'this_week' => $this->thisWeek($userId),
            'requirements' => $openLeads,
            'renewal' => $this->renewalPrompt($packages),
            'latest_summary' => $this->latestSummary($userId),
            'wallet' => [
                'held_paise' => $this->ledger->balance($userId, Ledger::HELD),
                'active_packages' => $packages->count(),
            ],
            'unread_notifications' => AppNotification::where('user_id', $userId)->whereNull('read_at')->count(),
        ];
    }

    /**
     * @return array{next:array|null,upcoming:list<array>}
     */
    private function upcomingSessions(string $userId): array
    {
        $rows = TutoringSession::where('student_user_id', $userId)
            ->whereIn('status', ['scheduled', 'checked_in'])
            ->where('starts_at', '>=', now()->subHours(2))
            ->orderBy('starts_at')
            ->limit(10)
            ->get();

        $mapped = $rows->map(fn (TutoringSession $s): array => $this->sessionCard($s))->all();

        return [
            'next' => $mapped[0] ?? null,
            'upcoming' => array_slice($mapped, 1),
        ];
    }

    public function sessionCard(TutoringSession $session): array
    {
        $tutor = $this->tutorBrief($session->tutor_user_id);
        $startsAt = $session->starts_at;

        // diffInMinutes returns a float on this version of Carbon; the client
        // renders this as a countdown, so it is rounded here rather than
        // leaving "starts in 1401.32 minutes" to be tidied up in the UI.
        $minutesAway = $startsAt ? (int) round(now()->diffInMinutes($startsAt, false)) : null;

        return [
            'id' => $session->id,
            'subject' => $session->subject,
            'type' => $session->type,
            'mode' => $session->mode,
            'address' => $session->address,
            // The Join button only becomes live 10 minutes before an online class,
            // so a family cannot sit in an empty room for an hour.
            'meeting_url' => $session->mode === 'online' && $minutesAway !== null && $minutesAway <= 10
                ? $session->meeting_url
                : null,
            'starts_at' => $startsAt?->toIso8601String(),
            'starts_in_minutes' => $minutesAway,
            'planned_min' => $session->planned_min,
            'status' => $session->status,
            'tutor' => $tutor,
            'can_join' => $session->mode === 'online' && $minutesAway !== null && $minutesAway <= 10 && $minutesAway > -90,
        ];
    }

    private function homeworkDue(string $userId): array
    {
        $open = Homework::where('student_user_id', $userId)
            ->whereIn('status', ['open', 'submitted'])
            ->orderBy('due_at')
            ->get();

        $overdue = $open->filter(fn (Homework $h): bool => $h->status === 'open' && $h->due_at && $h->due_at->isPast());

        return [
            'count' => $open->count(),
            'overdue_count' => $overdue->count(),
            'items' => $open->take(2)->map(fn (Homework $h): array => $this->homeworkCard($h))->values()->all(),
        ];
    }

    public function homeworkCard(Homework $homework): array
    {
        return [
            'id' => $homework->id,
            'title' => $homework->title,
            'subject' => $homework->subject,
            'instructions' => $homework->instructions,
            'due_at' => $homework->due_at?->toIso8601String(),
            'due_label' => $this->dueLabel($homework->due_at),
            'status' => $homework->status,
            'overdue' => $homework->status === 'open' && $homework->due_at !== null && $homework->due_at->isPast(),
            'tutor' => $this->tutorBrief($homework->tutor_user_id),
        ];
    }

    /**
     * Attendance and test counters for the week. Every number here is counted
     * from session rows rather than stored, so it cannot disagree with the
     * Sessions list the family can open to check it.
     */
    private function thisWeek(string $userId): array
    {
        $start = now()->startOfWeek();
        $end = now()->endOfWeek();

        $sessions = TutoringSession::where('student_user_id', $userId)
            ->whereBetween('starts_at', [$start, $end])
            ->get();

        $completed = $sessions->whereIn('status', ['checked_out', 'confirmed']);

        $attempts = TestAttempt::where('student_user_id', $userId)
            ->where('status', 'finished')
            ->whereBetween('finished_at', [$start, $end])
            ->get();

        return [
            'week_start' => $start->toDateString(),
            'attended' => $completed->count(),
            'scheduled' => $sessions->whereNotIn('status', ['cancelled'])->count(),
            'tests_taken' => $attempts->count(),
            'test_average' => $attempts->isEmpty()
                ? null
                : (int) round($attempts->avg(fn (TestAttempt $a): float => $a->total ? ($a->score / max(1, $a->total)) * 100 : 0)),
            'homework_done' => Homework::where('student_user_id', $userId)
                ->where('status', 'marked')
                ->whereBetween('updated_at', [$start, $end])
                ->count(),
        ];
    }

    /**
     * The requirement tracker: Received, Matching, Matches ready, Demo booked,
     * Demo done, Hired — with the one action that moves the family forward.
     */
    private function openRequirements(string $userId): array
    {
        $leads = Lead::where('student_user_id', $userId)
            ->whereNotIn('status', ['hired', 'cancelled', 'expired'])
            ->orderByDesc('created_at')
            ->get();

        return $leads->map(function (Lead $lead): array {
            $matches = TutorMatch::where('lead_id', $lead->id)
                ->whereNotIn('status', ['rejected', 'replaced'])
                ->count();

            return [
                'id' => $lead->id,
                'subject' => $lead->subject,
                'class_level' => $lead->class_level,
                'board' => $lead->board,
                'mode' => $lead->mode,
                'locality' => $lead->locality,
                'city' => $lead->city,
                'slots' => $lead->slots ?? [],
                'budget_min_paise' => $lead->budget_min_paise,
                'budget_max_paise' => $lead->budget_max_paise,
                'note' => $lead->note,
                'status' => $lead->status,
                'match_count' => $matches,
                'created_at' => $lead->created_at?->toIso8601String(),
                'steps' => $this->trackerSteps($lead->status),
                'next_action' => $this->nextAction($lead->status, $matches),
            ];
        })->all();
    }

    /**
     * @return list<array{key:string,label:string,state:string}>
     */
    private function trackerSteps(string $status): array
    {
        $order = ['received', 'matching', 'matches_ready', 'demo_booked', 'demo_done', 'hired'];
        $labels = [
            'received' => 'Received',
            'matching' => 'Matching',
            'matches_ready' => 'Matches ready',
            'demo_booked' => 'Demo booked',
            'demo_done' => 'Demo done',
            'hired' => 'Hired',
        ];

        $currentIndex = array_search($status, $order, true);
        $currentIndex = $currentIndex === false ? 0 : $currentIndex;

        $steps = [];

        foreach ($order as $index => $key) {
            $steps[] = [
                'key' => $key,
                'label' => $labels[$key],
                'state' => match (true) {
                    $index < $currentIndex => 'done',
                    $index === $currentIndex => 'current',
                    default => 'pending',
                },
            ];
        }

        return $steps;
    }

    private function nextAction(string $status, int $matchCount): ?array
    {
        return match ($status) {
            'matches_ready' => [
                'label' => $matchCount === 1 ? 'See your match' : "See your {$matchCount} matches",
                'href' => '/user/tutors',
            ],
            'demo_booked' => ['label' => 'View the demo booking', 'href' => '/user/learn'],
            'demo_done' => ['label' => 'Continue with this tutor', 'href' => '/user/tutors'],
            default => null,
        };
    }

    /**
     * The renewal card appears at two sessions left, with the same tutor
     * pre-selected — the brief is specific about the threshold.
     */
    private function renewalPrompt($packages): ?array
    {
        $running = $packages
            ->map(fn (Package $p): array => ['package' => $p, 'left' => $p->sessions_total - $p->sessions_used])
            ->filter(fn (array $row): bool => $row['left'] <= 2)
            ->sortBy('left')
            ->first();

        if (! $running) {
            return null;
        }

        $package = $running['package'];

        return [
            'package_id' => $package->id,
            'sessions_left' => max(0, $running['left']),
            'tutor' => $this->tutorBrief($package->tutor_user_id),
            'subject' => $package->subject,
            'rate_paise' => $package->rate_paise,
            'suggested_sessions' => $package->sessions_total,
            'suggested_amount_paise' => $package->rate_paise * $package->sessions_total,
        ];
    }

    private function latestSummary(string $userId): ?array
    {
        $summary = ProgressSummary::where('student_user_id', $userId)
            ->orderByDesc('week_start')
            ->first();

        if (! $summary) {
            return null;
        }

        return [
            'id' => $summary->id,
            'week_start' => $summary->week_start?->toDateString(),
            'week_end' => $summary->week_end?->toDateString(),
            'counters' => $summary->counters ?? [],
            'has_narrative' => filled($summary->narrative),
            'unread' => $summary->read_at === null,
        ];
    }

    /**
     * A small, cached-by-request tutor summary for cards. Full profiles go
     * through TutorDirectory; this is only what a card needs.
     *
     * @var array<string,array|null>
     */
    private array $tutorCache = [];

    public function tutorBrief(?string $tutorUserId): ?array
    {
        if (! $tutorUserId) {
            return null;
        }

        if (array_key_exists($tutorUserId, $this->tutorCache)) {
            return $this->tutorCache[$tutorUserId];
        }

        $tutor = Register::where('user_id', $tutorUserId)->first();

        return $this->tutorCache[$tutorUserId] = $tutor ? [
            'user_id' => $tutor->user_id,
            'name' => $tutor->name,
            'avatar' => $tutor->avatar,
            'city' => $tutor->city,
            'verified' => $this->tutors->isVerified($tutorUserId),
        ] : null;
    }

    private function dueLabel(?Carbon $dueAt): ?string
    {
        if (! $dueAt) {
            return null;
        }

        return match (true) {
            $dueAt->isToday() => 'due today',
            $dueAt->isTomorrow() => 'due tomorrow',
            $dueAt->isPast() => 'overdue',
            default => 'due '.$dueAt->format('D j M'),
        };
    }
}
