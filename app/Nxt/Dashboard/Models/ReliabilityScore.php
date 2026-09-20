<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * The nightly 0-100 score, with the three components and the events that moved it.
 */
class ReliabilityScore extends NxtModel
{
    protected $table = 'nxt_reliability_scores';

    protected $casts = [
        'score' => 'integer',
        'punctuality' => 'integer',
        'response' => 'integer',
        'completion' => 'integer',
        'window_start' => 'date',
        'window_end' => 'date',
        'top_events' => 'array',
    ];
}
