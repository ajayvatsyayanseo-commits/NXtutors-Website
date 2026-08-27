<?php

declare(strict_types=1);

use App\NxtAi\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

/*
| NXT AI module routes (loaded by NxtAiServiceProvider). Same-origin, CSRF-
| protected (web middleware). Primary endpoint is /nxt-ai/chat; the legacy
| /ask-nxt-ai alias lives in routes/web.php and points at the same controller.
*/
Route::middleware('web')
    ->prefix('nxt-ai')
    ->name('nxt-ai.')
    ->group(function (): void {
        Route::post('/chat', [ChatController::class, 'chat'])
            ->middleware('throttle:public-api')
            ->name('chat');
    });
