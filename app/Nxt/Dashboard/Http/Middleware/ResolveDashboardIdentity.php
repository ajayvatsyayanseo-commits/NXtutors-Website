<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Middleware;

use App\Models\Register;
use App\Nxt\Dashboard\Support\DashboardIdentity;
use App\Nxt\Dashboard\Support\DashboardToken;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Establishes the caller for every dashboard API request, and refuses the
 * request when it cannot.
 *
 * Two credentials are accepted, in this order:
 *
 *  1. the existing PHP session (`session('userid')`) — the dashboard is served
 *     from the same host as the site, so the browser sends the site's own
 *     session cookie and no second login exists;
 *  2. a signed bearer token, for a dashboard served from another origin.
 *
 * The site's own `UserMiddleware` and `TeacherMiddleware` only share the user
 * with views and let unauthenticated requests through. That is tolerable for a
 * page that renders nothing sensitive; it is not tolerable for an API that
 * returns a family's schedule, so this middleware blocks instead.
 */
class ResolveDashboardIdentity
{
    public function handle(Request $request, Closure $next, ?string $requiredRole = null): Response
    {
        $identity = $this->fromSession($request) ?? $this->fromBearerToken($request);

        if (! $identity) {
            return $this->deny('unauthenticated', 'Sign in to continue.', 401);
        }

        if ($identity->register->status !== 't') {
            return $this->deny('account_inactive', 'This account is inactive. Message us on WhatsApp and we will sort it out.', 403);
        }

        if ($requiredRole !== null && $identity->role !== $requiredRole) {
            return $this->deny('wrong_role', 'This screen belongs to a different kind of account.', 403);
        }

        $request->attributes->set('nxt_identity', $identity);

        return $next($request);
    }

    private function fromSession(Request $request): ?DashboardIdentity
    {
        if (! $request->hasSession() || ! $request->session()->has('userid')) {
            return null;
        }

        return $this->lookup((string) $request->session()->get('userid'));
    }

    private function fromBearerToken(Request $request): ?DashboardIdentity
    {
        $token = $request->bearerToken();

        if (! $token) {
            return null;
        }

        $payload = DashboardToken::verify($token, 'session');

        return $payload ? $this->lookup((string) $payload['sub']) : null;
    }

    private function lookup(string $userId): ?DashboardIdentity
    {
        $register = Register::where('user_id', $userId)->first();

        return $register ? DashboardIdentity::fromRegister($register) : null;
    }

    private function deny(string $code, string $message, int $status): JsonResponse
    {
        return response()->json([
            'data' => null,
            'meta' => [],
            'errors' => [['code' => $code, 'message' => $message]],
        ], $status);
    }
}
