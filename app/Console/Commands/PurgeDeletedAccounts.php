<?php

namespace App\Console\Commands;

use App\Services\AccountLifecycle;
use App\Services\AgentErasure;
use Illuminate\Console\Command;

/** Erases every account whose chosen deletion delay (24h / 3d / 7d) has passed. */
class PurgeDeletedAccounts extends Command
{
    protected $signature = 'accounts:purge-deleted';

    protected $description = 'Erase accounts whose deletion grace period has ended';

    public function handle(AccountLifecycle $lifecycle, AgentErasure $agents): int
    {
        $count = $lifecycle->purgeDue();
        $this->info("Erased {$count} account(s).");

        // Erasures the WhatsApp side has not confirmed yet (see AgentErasure).
        $confirmed = $agents->sendPending();
        $this->info("WhatsApp-side erasures confirmed: {$confirmed}.");

        return self::SUCCESS;
    }
}
