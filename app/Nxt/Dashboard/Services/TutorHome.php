<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Models\Register;
use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\LeadReply;
use App\Nxt\Dashboard\Models\LeadView;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Support\DashboardIdentity;

/**
 * The tutor Home payload: what to do next, and how the month is going.
 *
 * Order matters here and is decided on the server, not in the client. A tutor
 * whose verification is still pending sees that card first and cannot receive
 * leads at all, so putting anything above it would be telling them to act on a
 * queue they are not in yet.
 */
class TutorHome
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
        $register = $identity->register;

        $verification = $this->tutors->verificationSummary($userId);

        return [
            'profile' => $identity->toArray(),
            'entitlements' => $this->entitlements->snapshot($identity),
            'verification' => $verification,
            'can_receive_leads' => $verification['verified'],
            'today' => $this->today($userId),
            'next_session' => $this->nextAfterToday($userId),
            'leads' => $this->leadSummary($userId, $verification['verified']),
            'this_month' => $this->thisMonth($userId),
            'completeness' => $this->tutors->completeness($register),
            'reliability' => $this->tutors->reliability($userId),
            'rating' => $this->ratingSummary($userId),
            'students' => $this->studentCounts($userId),
            'unmarked_homework' => $this->unmarkedHomework($userId),
            'unread_notifications' => AppNotification::where('user_id', $userId)->whereNull('read_at')->count(),
        ];
    }

    /** Today's classes, each with the action its mode calls for. */
    private function today(string $userId): array
    {
        $sessions = TutoringSession::where('tutor_user_id', $userId)
            ->whereBetween('starts_at', [now()->startOfDay(), now()->endOfDay()])
            ->whereNotIn('status', ['cancelled'])
            ->orderBy('starts_at')
            ->get();

        return [
            'count' => $sessions->count(),
            'sessions' => $sessions->map(fn (TutoringSession $s): array => $this->sessionRow($s))->all(),
        ];
    }

    public function sessionRow(TutoringSession $session): array
    {
        $minutesAway = $session->starts_at ? (int) round(now()->diffInMinutes($session->starts_at, false)) : null;

        return [
            'id' => $session->id,
            'student' => $this->studentBrief($session->student_user_id),
            'subject' => $session->subject,
            'type' => $session->type,
            'mode' => $session->mode,
            'address' => $session->address,
            'meeting_url' => $session->meeting_url,
            'starts_at' => $session->starts_at?->toIso8601String(),
            'starts_in_minutes' => $minutesAway,
            'planned_min' => $session->planned_min,
            'status' => $session->status,
            'fee_paise' => $session->fee_paise,
            // Check-in opens 15 minutes before the class and the sheet stays
            // reachable afterwards, because a tutor who forgot still has to log it.
            'can_check_in' => $session->status === 'scheduled' && $minutesAway !== null && $minutesAway <= 15,
            'can_check_out' => $session->status === 'checked_in',
            'late_by_minutes' => $session->status === 'scheduled' && $minutesAway !== null && $minutesAway < -20
                ? abs($minutesAway)
                : null,
        ];
    }

    private function nextAfterToday(string $userId): ?array
    {
        $session = TutoringSession::where('tutor_user_id', $userId)
            ->where('starts_at', '>', now()->endOfDay())
            ->whereNotIn('status', ['cancelled'])
            ->orderBy('starts_at')
            ->first();

        return $session ? $this->sessionRow($session) : null;
    }

    /**
     * New leads, the first one in full, and the response-time figure the brief
     * treats as the biggest driver of conversion in home tutoring.
     */
    private function leadSummary(string $userId, bool $verified): array
    {
        if (! $verified) {
            return ['new_count' => 0, 'first' => null, 'avg_reply_minutes' => null, 'expiring_soon' => 0, 'blocked' => true];
        }

        $matches = TutorMatch::where('tutor_user_id', $userId)
            ->whereIn('status', ['offered', 'viewed'])
            ->where(function ($q): void {
                $q->whereNull('expires_at')->orWhere('expires_at', '>', now());
            })
            ->orderByDesc('score')
            ->orderBy('expires_at')
            ->get();

        $leads = Lead::whereIn('id', $matches->pluck('lead_id'))->get()->keyBy('id');

        $first = $matches->first();

        return [
            'new_count' => $matches->where('status', 'offered')->count(),
            'total_open' => $matches->count(),
            // Measured forward from now, not from the expiry date. Carbon's
            // diff is signed, so `$expiry->diffInHours(now())` is negative for
            // anything in the future and "<= 1" quietly matched every open
            // lead — the card claimed several were about to expire when none
            // were, which is the kind of false alarm that gets ignored.
            'expiring_soon' => $matches->filter(
                fn (TutorMatch $m): bool => $m->expires_at !== null
                    && $m->expires_at->isFuture()
                    && now()->diffInMinutes($m->expires_at, false) <= 60,
            )->count(),
            'avg_reply_minutes' => $this->averageReplyMinutes($userId),
            'first' => $first && $leads->has($first->lead_id)
                ? $this->leadCard($leads[$first->lead_id], $first)
                : null,
            'blocked' => false,
        ];
    }

    public function leadCard(Lead $lead, TutorMatch $match, bool $full = false): array
    {
        $card = [
            'match_id' => $match->id,
            'lead_id' => $lead->id,
            'class_level' => $lead->class_level,
            'board' => $lead->board,
            'subject' => $lead->subject,
            'mode' => $lead->mode,
            'locality' => $lead->locality,
            'city' => $lead->city,
            'slots' => $lead->slots ?? [],
            'budget_min_paise' => $lead->budget_min_paise,
            'budget_max_paise' => $lead->budget_max_paise,
            'fit_score' => $match->score,
            'status' => $match->status,
            'received_at' => $lead->created_at?->toIso8601String(),
            'expires_at' => $match->expires_at?->toIso8601String(),
            'expires_in_minutes' => $match->expires_at ? (int) round(now()->diffInMinutes($match->expires_at, false)) : null,
            'viewed' => $match->status !== 'offered',
        ];

        // The parent's note and the engine's reasons are only released once the
        // tutor has spent a lead view on this lead. That is what the meter buys.
        if ($full) {
            $card += [
                'note' => $lead->note,
                'student_name' => $lead->student_name,
                'reasons' => $match->reasons ?? [],
                'start_by' => $lead->start_by?->toDateString(),
                'subjects' => $lead->subjects ?? [],
                'source' => $lead->source,
            ];
        }

        return $card;
    }

    /**
     * Median-ish reply time over the last 30 days: the gap between a lead
     * arriving and this tutor replying to it.
     */
    private function averageReplyMinutes(string $userId): ?int
    {
        $replies = LeadReply::where('tutor_user_id', $userId)
            ->where('created_at', '>=', now()->subDays(30))
            ->get();

        if ($replies->isEmpty()) {
            return null;
        }

        $leads = Lead::whereIn('id', $replies->pluck('lead_id'))->get()->keyBy('id');

        $gaps = $replies
            ->map(function (LeadReply $r) use ($leads): ?int {
                $lead = $leads->get($r->lead_id);

                return $lead && $lead->created_at && $r->created_at
                    ? (int) $lead->created_at->diffInMinutes($r->created_at)
                    : null;
            })
            ->filter()
            ->values();

        return $gaps->isEmpty() ? null : (int) round($gaps->avg());
    }

    private function thisMonth(string $userId): array
    {
        $earnings = $this->ledger->tutorEarnings($userId);

        $leadViewsUsed = LeadView::where('tutor_user_id', $userId)
            ->where('viewed_at', '>=', now()->startOfMonth())
            ->count();

        return $earnings + [
            'lead_views_used' => $leadViewsUsed,
            'next_payout_on' => now()->next('Friday')->toDateString(),
        ];
    }

    private function ratingSummary(string $userId): array
    {
        $reviews = $this->tutors->reviews($userId, 5);

        return [
            'average' => $reviews['average'],
            'count' => $reviews['count'],
            'breakdown' => $reviews['breakdown'],
        ];
    }

    private function studentCounts(string $userId): array
    {
        $packages = Package::where('tutor_user_id', $userId)->get();

        return [
            'active' => $packages->where('status', 'active')->pluck('student_user_id')->unique()->count(),
            'total' => $packages->pluck('student_user_id')->unique()->count(),
            'packages_ending' => $packages
                ->where('status', 'active')
                ->filter(fn (Package $p): bool => ($p->sessions_total - $p->sessions_used) <= 2)
                ->count(),
        ];
    }

    /**
     * Submissions left unmarked for more than 72 hours surface on Home and count
     * against the completion part of the reliability score.
     */
    private function unmarkedHomework(string $userId): array
    {
        $rows = Homework::where('tutor_user_id', $userId)
            ->where('status', 'submitted')
            ->get();

        return [
            'count' => $rows->count(),
            'overdue_count' => $rows->filter(
                fn (Homework $h): bool => $h->updated_at !== null && $h->updated_at->lt(now()->subHours(72)),
            )->count(),
        ];
    }

    /** @var array<string,array|null> */
    private array $studentCache = [];

    public function studentBrief(?string $studentUserId): ?array
    {
        if (! $studentUserId) {
            return null;
        }

        if (array_key_exists($studentUserId, $this->studentCache)) {
            return $this->studentCache[$studentUserId];
        }

        $student = Register::where('user_id', $studentUserId)->first();

        return $this->studentCache[$studentUserId] = $student ? [
            'user_id' => $student->user_id,
            'name' => $student->name,
            'avatar' => $student->avatar,
            'class' => $student->for_class,
            'board' => $student->class_type,
            'city' => $student->city,
            'locality' => $student->address,
        ] : null;
    }
}
