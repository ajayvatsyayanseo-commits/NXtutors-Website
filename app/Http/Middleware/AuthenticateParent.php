<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * /parent/* only: a logged-in parent on the `parent` guard, or the parent login.
 *
 * Its own middleware rather than `auth:parent`, because Laravel's guest
 * redirect is global and points at the student login; changing it would move
 * every other login on the site. A parent the team has since set to inactive
 * is logged out here on their next request, not left in until the session ends.
 */
final class AuthenticateParent
{
    public function handle(Request $request, Closure $next): Response
    {
        $guard = Auth::guard('parent');
        $parent = $guard->user();

        if (! $parent) {
            return redirect()->guest(route('parent.login'));
        }

        if (! $parent->isActive()) {
            $guard->logout();

            return redirect()->route('parent.login')
                ->withErrors(['phone' => 'This family account is paused. Message us on WhatsApp and our team will help.']);
        }

        view()->share('parent', $parent);

        return $next($request);
    }
}
