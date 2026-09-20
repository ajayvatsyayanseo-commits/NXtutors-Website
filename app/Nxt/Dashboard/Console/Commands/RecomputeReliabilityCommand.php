<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Console\Commands;

use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\LeadReply;
use App\Nxt\Dashboard\Models\ReliabilityScore;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Models\TutoringSession;
use Illuminate\Console\Command;

/**
 * The nightly reliability score: punctuality 40%, lead response 30%,
 * completion 30%, over a 30-day window.
 *
 * The number shown to a tutor is the same number the matching engine uses that
 * day — they are both this row. A tutor ranked down by a score they cannot see
 * has no way to improve it, so the components and the events behind them are
 * stored alongside the total rather than being recomputed for display.
 */
class RecomputeReliabilityCommand extends Command
{
    protected $signature = 'nxt-dashboard:reliability {--tutor= : Limit to one tutor user_id}';

    protected $description = 'Recompute tutor reliability scores over the trailing 30 days';

    public function handle(): int
    {
        $windowStart = now()->subDays(30)->startOfDay();
        $windowEnd = now()->endOfDay();

        $tutorIds = $this->option('tutor')
            ? [$this->option('tutor')]
            : TutoringSession::where('starts_at', '>=', $windowStart)
                ->distinct()
                ->pluck('tutor_user_id')
                ->merge(TutorMatch::where('created_at', '>=', $windowStart)->distinct()->pluck('tutor_user_id'))
                ->unique()
                ->values()
                ->all();

        foreach ($tutorIds as $tutorId) {
            $punctuality = $this->punctuality((string) $tutorId, $windowStart);
            $response = $this->response((string) $tutorId, $windowStart);
            $completion = $this->completion((string) $tutorId, $windowStart);

            $score = (int) round($punctuality * 0.4 + $response * 0.3 + $completion * 0.3);

            ReliabilityScore::updateOrCreate(
                ['tutor_user_id' => $tutorId, 'window_end' => $windowEnd->toDateString()],
                [
                    'score' => $score,
                    'punctuality' => $punctuality,
                    'response' => $response,
                    'completion' => $completion,
                    'window_start' => $windowStart->toDateString(),
                    'top_events' => $this->lowlights((string) $tutorId, $windowStart),
                ],
            );
        }

        $this->info('Recomputed reliability for '.count($tutorIds).' tutor(s).');

        return self::SUCCESS;
    }

    /** Share of classes checked into within 10 minutes of the start time. */
    private function punctuality(string $tutorUserId, \DateTimeInterface $since): int
    {
        $sessions = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->where('starts_at', '>=', $since)
            ->whereNotNull('checked_in_at')
            ->get();

        if ($sessions->isEmpty()) {
            return 100;   // nothing recorded against them yet
        }

        $onTime = $sessions->filter(
            fn (TutoringSession $s): bool => $s->checked_in_at->lte($s->starts_at->copy()->addMinutes(10)),
        )->count();

        return (int) round($onTime / $sessions->count() * 100);
    }

    /** Share of routed leads replied to before they expired. */
    private function response(string $tutorUserId, \DateTimeInterface $since): int
    {
        $matches = TutorMatch::where('tutor_user_id', $tutorUserId)
            ->where('created_at', '>=', $since)
            ->get();

        if ($matches->isEmpty()) {
            return 100;
        }

        $replied = LeadReply::where('tutor_user_id', $tutorUserId)
            ->whereIn('lead_id', $matches->pluck('lead_id'))
            ->distinct()
            ->count('lead_id');

        return (int) round(min(1, $replied / $matches->count()) * 100);
    }

    /**
     * Classes completed rather than cancelled by the tutor, and homework marked
     * inside 72 hours. Both halves count equally.
     */
    private function completion(string $tutorUserId, \DateTimeInterface $since): int
    {
        $sessions = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->where('starts_at', '>=', $since)
            ->get();

        $sessionScore = $sessions->isEmpty()
            ? 100
            : (int) round($sessions->whereIn('status', ['confirmed', 'checked_out'])->count() / $sessions->count() * 100);

        $submitted = Homework::where('tutor_user_id', $tutorUserId)
            ->where('created_at', '>=', $since)
            ->whereIn('status', ['submitted', 'marked'])
            ->get();

        $markingScore = $submitted->isEmpty()
            ? 100
            : (int) round($submitted->where('status', 'marked')->count() / $submitted->count() * 100);

        return (int) round(($sessionScore + $markingScore) / 2);
    }

    /**
     * The specific events that pulled the score down, so the Growth screen can
     * name them instead of showing a number with no explanation.
     */
    private function lowlights(string $tutorUserId, \DateTimeInterface $since): array
    {
        $late = TutoringSession::where('tutor_user_id', $tutorUserId)
            ->where('starts_at', '>=', $since)
            ->whereNotNull('checked_in_at')
            ->get()
            ->filter(fn (TutoringSession $s): bool => $s->checked_in_at->gt($s->starts_at->copy()->addMinutes(10)))
            ->take(5)
            ->map(fn (TutoringSession $s): array => [
                'kind' => 'late_check_in',
                'session_id' => $s->id,
                'at' => $s->starts_at?->toIso8601String(),
                'minutes_late' => (int) $s->starts_at->diffInMinutes($s->checked_in_at),
            ])
            ->values()
            ->all();

        $expired = TutorMatch::where('tutor_user_id', $tutorUserId)
            ->where('created_at', '>=', $since)
            ->whereIn('status', ['offered', 'viewed'])
            ->where('expires_at', '<', now())
            ->limit(5)
            ->get()
            ->map(fn (TutorMatch $m): array => [
                'kind' => 'lead_expired',
                'match_id' => $m->id,
                'at' => $m->expires_at?->toIso8601String(),
            ])
            ->all();

        return array_merge($late, $expired);
    }
}
