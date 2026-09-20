<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Console\Commands;

use App\Nxt\Dashboard\Models\CheckInCode;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Services\CheckInProof;
use App\Nxt\Dashboard\Support\CorrelationId;
use Illuminate\Console\Command;

/**
 * Send each family the code that proves their tutor turned up.
 *
 * Brief 6.4 issues it with the reminder, an hour before the class. It is
 * deliberately not issued on demand at the door: a code the tutor can summon
 * while standing outside proves less than one the family already has.
 *
 * Schedule beside the auto-confirm timer:
 *   $schedule->command('nxt-dashboard:issue-check-in-codes')->everyTenMinutes();
 */
final class IssueCheckInCodesCommand extends Command
{
    protected $signature = 'nxt-dashboard:issue-check-in-codes {--minutes= : How far ahead to look}';

    protected $description = 'Issue and deliver parent check-in codes for classes about to start';

    public function handle(CheckInProof $proof): int
    {
        CorrelationId::start('check-in-codes');

        $ahead = (int) ($this->option('minutes') ?: 60);

        $due = TutoringSession::where('status', 'scheduled')
            ->where('mode', 'home')
            ->whereBetween('starts_at', [now(), now()->addMinutes($ahead)])
            ->whereNotIn('id', CheckInCode::query()->select('session_id'))
            ->get();

        foreach ($due as $session) {
            $proof->issueAndNotify($session);
        }

        $this->info(sprintf('issued=%d', $due->count()));

        return self::SUCCESS;
    }
}
