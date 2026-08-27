<?php

declare(strict_types=1);

use App\Http\Controllers\Api\AgentGatewayController;
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
    });
