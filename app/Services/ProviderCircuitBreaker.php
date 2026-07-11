<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use RuntimeException;

class ProviderCircuitBreaker
{
    public function ensureAvailable(string $provider): void
    {
        if (Cache::has($this->openKey($provider))) {
            throw new RuntimeException("{$provider} is temporarily unavailable after repeated failures.");
        }
    }

    public function recordFailure(string $provider): void
    {
        $failureKey = $this->failureKey($provider);
        Cache::add($failureKey, 0, now()->addMinutes(10));
        $failures = (int) Cache::increment($failureKey);
        $threshold = max(1, (int) config('services.provider_circuit.failure_threshold', 5));

        if ($failures >= $threshold) {
            Cache::put(
                $this->openKey($provider),
                true,
                max(30, (int) config('services.provider_circuit.open_seconds', 120))
            );
        }
    }

    public function recordSuccess(string $provider): void
    {
        Cache::forget($this->failureKey($provider));
        Cache::forget($this->openKey($provider));
    }

    private function failureKey(string $provider): string
    {
        return 'provider-circuit:'.$provider.':failures';
    }

    private function openKey(string $provider): string
    {
        return 'provider-circuit:'.$provider.':open';
    }
}
