<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Register custom commands
     */
    protected $commands = [
        \App\Console\Commands\PagegenBackfillPremiumSchools::class,
    ];

    /**
     * Define schedule
     */
    // protected function schedule(Schedule $schedule)
    // {
    //     // 1️⃣ Excel import processor (every minute)
    //     $schedule->command('pagegen:process-imports')
    //         ->everyMinute()
    //         ->withoutOverlapping();

    //     // 2️⃣ Premium schools backfill (10 pages every 5 min)
    //     $schedule->command('pagegen:backfill-premium-schools --limit=10 --regen=0 --status=published')
    //         ->everyFiveMinutes()
    //         ->withoutOverlapping()
    //         ->onOneServer();
    // }
    protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
{
    // imports
    $schedule->command('pagegen:process-imports')
        ->everyMinute()
        ->withoutOverlapping()
        ->onOneServer();

    // backfill batches (recommended regen=0 for cost+speed)
    $schedule->command('pagegen:backfill-premium-schools --limit=50 --regen=0 --status=published --only_missing=1')
        ->everyFiveMinutes()
        ->withoutOverlapping()
        ->onOneServer();
}

}
