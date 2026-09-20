<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Console\Commands;

use App\Nxt\Dashboard\Services\SessionFlow;
use App\Nxt\Dashboard\Support\CorrelationId;
use Illuminate\Console\Command;

/**
 * Give back the fees of classes nobody ever closed.
 *
 * `checked_out_at` was the only clock in the module, so a class the tutor never
 * checked out of was invisible to every timer: the family could not confirm it,
 * the auto-confirm run never saw it, the tutor was never paid, and the fee sat
 * in `held` permanently — money that was neither spent nor available, with no
 * screen that noticed.
 */
final class SweepAbandonedSessionsCommand extends Command
{
    protected $signature = 'nxt-dashboard:sweep-abandoned';

    protected $description = 'Release the held fees of classes that were never checked out';

    public function handle(SessionFlow $sessions): int
    {
        CorrelationId::start('sweep');

        $swept = $sessions->sweepAbandoned();

        $this->info($swept === 0
            ? 'Nothing abandoned.'
            : sprintf('Swept %d class%s back to the families that paid for them.', $swept, $swept === 1 ? '' : 'es'));

        return self::SUCCESS;
    }
}
