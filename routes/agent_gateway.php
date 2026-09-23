<?php

declare(strict_types=1);

use App\Http\Controllers\Api\AgentGatewayController;
use App\Http\Controllers\Api\StudentAgentController;
use App\Http\Middleware\VerifyAgentSignature;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Agent gateway
|--------------------------------------------------------------------------
|
| Everything the Demo Command Center agent needs about a real person: who they
| are, how to reach them, what a plan costs, and — the only writes any agent
| has on this site — the demo it booked and the subscription it activated.
|
| Separate from routes/api.php on purpose. That file is the read-only tutor
| feed and must stay GET-only; a contract test in the agent's own suite reads
| it and fails on any write verb. Keeping the two apart means the feed's
| read-only guarantee is still checkable by looking at one file.
|
| Same signature middleware as the feed, so there is one verifier for both.
| The writes carry `X-Idempotency-Key` and are safe to retry, which matters
| because the agent does retry a timeout — and a second subscription for one
| payment is not recoverable by apologising.
*/

Route::middleware([VerifyAgentSignature::class, 'throttle:agent-gateway'])
    ->prefix('api/agent/v1')
    ->name('api.agent.v1.')
    ->group(function (): void {
        Route::post('/identity/resolve', [AgentGatewayController::class, 'resolveIdentity'])
            ->name('identity.resolve');
        Route::get('/tutors/{ref}/contacts', [AgentGatewayController::class, 'tutorContacts'])
            ->name('tutors.contacts');
        Route::get('/tutors/{ref}/availability', [AgentGatewayController::class, 'tutorAvailability'])
            ->name('tutors.availability');
        Route::get('/plans/quote', [AgentGatewayController::class, 'planQuote'])
            ->name('plans.quote');
        Route::get('/customers/discount-eligibility', [AgentGatewayController::class, 'discountEligibility'])
            ->name('customers.discount-eligibility');
        Route::post('/demos', [AgentGatewayController::class, 'recordDemo'])
            ->name('demos.record');
        Route::post('/subscriptions/activate', [AgentGatewayController::class, 'activateSubscription'])
            ->name('subscriptions.activate');
        Route::get('/operators/{operatorRef}/regions', [AgentGatewayController::class, 'regionAuthorization'])
            ->name('operators.regions');

        /*
         * The Student agent. Three reads and one write, behind the same
         * signature gate as everything above.
         *
         * It owns the analytics over attendance and syllabus coverage and
         * nothing else — Session owns whether a class happened — so it reads
         * classes and topic logs and never writes either. The one write is a
         * notification: the agent raises an alert and stops, because its
         * contract forbids it from messaging a parent, and this site decides
         * what to do with the fact.
         */
        Route::get('/students/{ref}/attendance', [StudentAgentController::class, 'attendance'])
            ->name('students.attendance');
        Route::get('/students/{ref}/session-logs', [StudentAgentController::class, 'sessionLogs'])
            ->name('students.session-logs');
        Route::get('/students/{ref}/goals', [StudentAgentController::class, 'goals'])
            ->name('students.goals');
        Route::post('/students/{ref}/alerts', [StudentAgentController::class, 'recordAlert'])
            ->name('students.alerts');
    });
