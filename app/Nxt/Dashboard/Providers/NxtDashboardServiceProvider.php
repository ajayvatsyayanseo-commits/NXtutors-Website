<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Providers;

use App\Nxt\Dashboard\Console\Commands\AutoConfirmSessionsCommand;
use App\Nxt\Dashboard\Console\Commands\DeliverAgentEventsCommand;
use App\Nxt\Dashboard\Console\Commands\IssueCheckInCodesCommand;
use App\Nxt\Dashboard\Console\Commands\RecomputeReliabilityCommand;
use App\Nxt\Dashboard\Console\Commands\RelayOutboxCommand;
use App\Nxt\Dashboard\Console\Commands\SeedDashboardDemoCommand;
use App\Nxt\Dashboard\Console\Commands\SweepAbandonedSessionsCommand;
use App\Nxt\Dashboard\Outbox\LogOutboxPublisher;
use App\Nxt\Dashboard\Outbox\OutboxPublisher;
use Illuminate\Support\ServiceProvider;

/**
 * Wires the dashboard module: its own routes, its own migration path and the
 * jobs that keep the derived numbers honest.
 *
 * Kept self-contained in the same shape as the NxtAi module, so the dashboard
 * can be deployed, migrated and reasoned about without touching the rest of
 * the site.
 */
class NxtDashboardServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../../../config/nxt-dashboard.php', 'nxt-dashboard');

        // The transport the outbox relay publishes through. `log` keeps every
        // event inside this process, which is what a single-host deployment
        // needs; the binding is the seam an event bus arrives through later.
        $this->app->bind(OutboxPublisher::class, fn () => match (config('nxt-dashboard.outbox.transport', 'log')) {
            default => $this->app->make(LogOutboxPublisher::class),
        });
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                AutoConfirmSessionsCommand::class,
                DeliverAgentEventsCommand::class,
                IssueCheckInCodesCommand::class,
                RecomputeReliabilityCommand::class,
                RelayOutboxCommand::class,
                SeedDashboardDemoCommand::class,
                SweepAbandonedSessionsCommand::class,
            ]);
        }
    }
}
