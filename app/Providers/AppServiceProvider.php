<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;

use App\Models\Setting;
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting = null;

        if (! $this->app->runningInConsole()) {
            try {
                $setting = Setting::first();
            } catch (Throwable $e) {
                $setting = null;
            }
        }

        View::share('setting', $setting);

        RateLimiter::for('ip_visit_limit', function (Request $request) {
            return Limit::perMinute(10)->by($request->ip());
        });

        RateLimiter::for('public-form', function (Request $request) {
            return Limit::perMinute(max(1, (int) config('cost-safety.rate_limits.public_form', 10)))->by($request->ip());
        });

        RateLimiter::for('public-api', function (Request $request) {
            return Limit::perMinute(max(1, (int) config('cost-safety.rate_limits.public_api', 30)))->by($request->ip());
        });

        RateLimiter::for('payment', function (Request $request) {
            return Limit::perMinute(max(1, (int) config('cost-safety.rate_limits.payment', 10)))->by($request->ip());
        });

        RateLimiter::for('webhook', function (Request $request) {
            return Limit::perMinute(max(1, (int) config('cost-safety.rate_limits.webhook', 120)))->by($request->ip());
        });

        RateLimiter::for('admin-generation', function (Request $request) {
            return Limit::perMinute(max(1, (int) config('cost-safety.rate_limits.admin_generation', 5)))
                ->by((string) ($request->user()?->getAuthIdentifier() ?? $request->ip()));
        });

        RateLimiter::for('admin-import', function (Request $request) {
            return Limit::perMinute(max(1, (int) config('cost-safety.rate_limits.admin_import', 3)))
                ->by((string) ($request->user()?->getAuthIdentifier() ?? $request->ip()));
        });
    }
}
