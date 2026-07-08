<?php

// use Illuminate\Foundation\Inspiring;
// use Illuminate\Support\Facades\Artisan;

// use Illuminate\Support\Facades\Schedule;

// Schedule::command('pagegen:process-imports')
//     ->everyMinute()
//     ->withoutOverlapping();

// Schedule::command('tutor:process-imports --limit=2')->everyMinute();

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote');
 
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Schedule::command('pagegen:process-imports')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('queue:work --queue=pagegen --stop-when-empty --tries=1 --timeout=300')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('tutor:process-imports --limit=2')
    ->everyMinute()
    ->withoutOverlapping();

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
