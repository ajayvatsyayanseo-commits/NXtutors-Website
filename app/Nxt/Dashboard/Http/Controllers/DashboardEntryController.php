<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * The hand-off from the old dashboard routes into the new app.
 *
 * In production nginx never lets these requests reach PHP: /user/dashboard and
 * /teacher/dashboard are proxied straight to Next.js. But there is no nginx in
 * front of `php artisan serve`, so without this a developer who logs in and
 * follows the site's own navigation lands on the old Blade stub — the one with
 * three hardcoded zeros — and never sees the new dashboard at all.
 *
 * So when NXT_DASHBOARD_URL is set, these routes redirect to it. When it is not
 * set they render exactly what they always rendered, which is what keeps this
 * safe to deploy ahead of the nginx change and safe to roll back by clearing
 * one environment variable.
 */
class DashboardEntryController extends Controller
{
    public function student(Request $request, RegisterController $legacy): mixed
    {
        return $this->handOff('student_path') ?? $legacy->dashboard();
    }

    public function tutor(Request $request, RegisterController $legacy): mixed
    {
        return $this->handOff('tutor_path') ?? $legacy->teacherdashboard();
    }

    /**
     * The redirect, or null when the new dashboard is not configured.
     *
     * Kept as an absolute redirect rather than a proxy: the browser has to end
     * up on the dashboard's own origin for its links and its session cookie to
     * behave, and a silent proxy would leave the address bar lying about where
     * the user is.
     */
    private function handOff(string $pathKey): ?RedirectResponse
    {
        $base = config('nxt-dashboard.url');

        if (blank($base)) {
            return null;
        }

        return redirect()->away(rtrim((string) $base, '/').config("nxt-dashboard.{$pathKey}"));
    }
}
