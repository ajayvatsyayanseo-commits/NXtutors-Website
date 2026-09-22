<?php

namespace App\Console\Commands;

use App\Services\AccountLifecycle;
use Illuminate\Console\Command;

/** Erases every account whose chosen deletion delay (24h / 3d / 7d) has passed. */
class PurgeDeletedAccounts extends Command
{
    protected $signature = 'accounts:purge-deleted';

    protected $description = 'Erase accounts whose deletion grace period has ended';

    public function handle(AccountLifecycle $lifecycle): int
    {
        $count = $lifecycle->purgeDue();
        $this->info("Erased {$count} account(s).");

        return self::SUCCESS;
    }
}
