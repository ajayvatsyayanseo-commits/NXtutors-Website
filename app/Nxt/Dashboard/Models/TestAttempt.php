<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One attempt at a practice test. The entitlement is consumed on start, not on finish.
 */
class TestAttempt extends NxtModel
{
    protected $table = 'nxt_test_attempts';

    protected $casts = [
        'per_topic' => 'array',
        'answers' => 'array',
        'score' => 'integer',
        'total' => 'integer',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];
}
