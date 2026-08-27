<?php

declare(strict_types=1);

use App\Http\Controllers\Api\AgentTutorFeedController;
use App\Http\Middleware\VerifyAgentSignature;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Internal agent API
|--------------------------------------------------------------------------
|
| Machine-to-machine only. Every route here is HMAC-signed and read-only.
|
| It exists because the NXTutors Tutor Intelligence Agent runs on AWS Lambda
| with no network route to this database — deliberately, since the alternative
| is a NAT Gateway or exposing MySQL publicly. So it reads tutors over a signed
| HTTPS feed instead, and this is that feed.
|
| Two rules for anything added below:
|   1. GET only. The agent holds no write grant of any kind on this site.
|   2. Shape it with App\NxtAi\Support\PublicTutorFieldMapper, which is the one
|      place allowed to turn a tutor model into data that leaves the server.
|
| Throttled independently of the public forms: a stuck sync job retrying should
| never consume the rate budget a real visitor needs.
*/

Route::middleware([VerifyAgentSignature::class, 'throttle:agent-feed'])
    ->prefix('internal/agent')
    ->name('internal.agent.')
    ->group(function (): void {
        Route::get('/tutors', [AgentTutorFeedController::class, 'index'])->name('tutors');
    });

/*
| The gateway — identity, contacts, pricing, activation — lives in
| routes/agent_gateway.php, not here. This file stays GET-only: it is the
| read-only tutor feed, and the agent holds no write grant on this site at all.
| A contract test in the Tutor agent's suite asserts that, by reading this file
| and refusing any write verb in it.
*/
