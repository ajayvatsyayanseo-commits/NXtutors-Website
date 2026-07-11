<?php

namespace Tests\Feature\CostSafety;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class RateLimitSafetyTest extends TestCase
{
    public function test_expensive_endpoint_returns_429_after_limit(): void
    {
        RateLimiter::for('cost-test', fn () => Limit::perMinute(1)->by('test-client'));
        Route::post('/_cost-safety-rate-limit', fn () => response()->json(['ok' => true]))
            ->middleware('throttle:cost-test');

        $this->postJson('/_cost-safety-rate-limit')->assertOk();
        $this->postJson('/_cost-safety-rate-limit')->assertStatus(429);
    }
}
