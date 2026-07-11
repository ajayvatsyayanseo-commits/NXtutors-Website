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
    ->withoutOverlapping(10);

Schedule::command('tutor:process-imports --limit=2')
    ->everyMinute()
    ->withoutOverlapping(10);

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
