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

// Dashboard: the two jobs the money and the rankings depend on.
//
// Auto-confirm runs every ten minutes rather than nightly because it is what
// releases a held class fee to the tutor. Most parents never tap Confirm, so
// without this running, most tutors are never paid.
Schedule::command('nxt-dashboard:auto-confirm')
    ->everyTenMinutes()
    ->withoutOverlapping(10);

// The relay is what makes the outbox an outbox. Every money transition writes a
// row inside its own transaction; without this running, none of them are ever
// published and no family is told anything.
Schedule::command('nxt-dashboard:relay-outbox')
    ->everyMinute()
    ->withoutOverlapping(5);

// The same events, pushed to the agents that subscribe to them (the Session
// agent's timesheets and roll-up), each with its own delivery record so an
// agent that is down never holds back the relay above. With no subscriber
// configured it finds nothing to do.
Schedule::command('nxt-dashboard:deliver-agent-events')
    ->everyMinute()
    ->withoutOverlapping(5);

// The parent's check-in code goes out with the reminder, an hour before class.
Schedule::command('nxt-dashboard:issue-check-in-codes')
    ->everyTenMinutes()
    ->withoutOverlapping(10);

// Classes nobody ever closed: the family's fee comes back rather than sitting
// in `held` for ever behind a class that no timer will ever look at again.
Schedule::command('nxt-dashboard:sweep-abandoned')
    ->dailyAt('04:00')
    ->withoutOverlapping(30);

// The reliability score is a 30-day window recomputed once a day, before the
// morning lead routing uses it to rank tutors.
Schedule::command('nxt-dashboard:reliability')
    ->dailyAt('03:30')
    ->withoutOverlapping(30);

// Accounts whose owner asked for deletion and whose chosen delay (24h / 3 days
// / 7 days) has passed. Ten minutes keeps "deleted after 24 hours" honest.
Schedule::command('accounts:purge-deleted')
    ->everyTenMinutes()
    ->withoutOverlapping(10);

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
