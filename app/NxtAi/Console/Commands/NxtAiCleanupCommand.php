<?php

declare(strict_types=1);

namespace App\NxtAi\Console\Commands;

use App\NxtAi\Models\NxtAiConversation;
use Illuminate\Console\Command;

/** Expire abandoned guest conversations per configured retention. */
class NxtAiCleanupCommand extends Command
{
    protected $signature = 'nxt-ai:cleanup {--days= : Override guest retention days}';

    protected $description = 'Delete stale guest NXT AI conversations (and their messages/actions).';

    public function handle(): int
    {
        $days = (int) ($this->option('days') ?: config('nxt-ai.guest_retention_days', 14));
        $cutoff = now()->subDays(max(1, $days));

        $deleted = NxtAiConversation::query()
            ->whereNull('user_id')
            ->where(function ($q) use ($cutoff): void {
                $q->where('last_activity_at', '<', $cutoff)
                    ->orWhereNull('last_activity_at');
            })
            ->where('created_at', '<', $cutoff)
            ->delete(); // messages/actions cascade via FK

        $this->info("NXT AI cleanup: removed {$deleted} stale guest conversation(s) older than {$days} day(s).");

        return self::SUCCESS;
    }
}
