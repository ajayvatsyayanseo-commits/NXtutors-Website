<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\PagegenBackfillPremiumSchools::class,
    ];

    // Laravel 12 schedules are defined only in routes/console.php. Keeping a
    // second schedule here could dispatch imports or backfills twice.
}
