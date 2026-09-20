<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Console\Commands;

use App\Nxt\Dashboard\Services\SessionFlow;
use Illuminate\Console\Command;

/**
 * Confirms checked-out classes whose 24-hour window has passed.
 *
 * Without this the money never moves for the majority of classes, because most
 * parents simply do not tap Confirm. Silence has to mean yes, on a clock the
 * parent was told about, or tutors are not paid.
 */
class AutoConfirmSessionsCommand extends Command
{
    protected $signature = 'nxt-dashboard:auto-confirm';

    protected $description = 'Confirm checked-out classes past the auto-confirm window and release their holds';

    public function handle(SessionFlow $sessions): int
    {
        $count = $sessions->autoConfirmDue();

        $this->info($count === 0
            ? 'Nothing due for auto-confirmation.'
            : "Auto-confirmed {$count} class(es).");

        return self::SUCCESS;
    }
}
