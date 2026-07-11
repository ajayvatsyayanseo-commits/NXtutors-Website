<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use RuntimeException;

class ExternalApiBudget
{
    public function consume(string $bucket, int $dailyLimit): void
    {
        if ($dailyLimit <= 0) {
            return;
        }

        $key = 'api-budget:'.now()->format('Y-m-d').':'.$bucket;
        Cache::add($key, 0, now()->endOfDay());
        $count = (int) Cache::increment($key);

        if ($count > $dailyLimit) {
            throw new RuntimeException("Daily {$bucket} generation limit reached.");
        }
    }
}
