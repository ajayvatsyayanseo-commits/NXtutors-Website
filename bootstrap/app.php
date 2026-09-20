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
            // The dashboard API. It rides the site session cookie but is called
            // by the Next.js server, which has no Blade form to read a CSRF
            // token from. Authorisation is enforced per request by
            // ResolveDashboardIdentity instead.
            'api/dashboard/v1/*',
        ]);
})
    ->withExceptions(function (Exceptions $exceptions): void {
        // The dashboard API answers in JSON whatever the request's Accept
        // header says. Without this, a validation failure on these routes is
        // rendered as a 302 back to a Blade page the caller never asked for,
        // and a JSON client sees a redirect it cannot read instead of the error.
        $exceptions->shouldRenderJsonWhen(
            fn ($request, $throwable) => $request->is('api/dashboard/v1/*') || $request->expectsJson(),
        );
    })->create();
