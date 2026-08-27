<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        // Signed, read-only, machine-to-machine. See routes/api.php.
        api: __DIR__.'/../routes/api.php',
        then: function (): void {
            // The agent gateway. Separate file so routes/api.php stays
            // GET-only for the read-only tutor feed.
            Illuminate\Support\Facades\Route::group([], __DIR__.'/../routes/agent_gateway.php');
        },
        apiPrefix: '',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
        'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
        'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
    ]);
     $middleware->validateCsrfTokens(except: [
            'cashfree/webhook',
        ]);
})
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
