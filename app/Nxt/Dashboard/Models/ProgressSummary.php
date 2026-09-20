<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * The weekly summary. Narrative for Premium plans; counters for every plan.
 */
class ProgressSummary extends NxtModel
{
    protected $table = 'nxt_progress_summaries';

    protected $casts = [
        'counters' => 'array',
        'week_start' => 'date',
        'week_end' => 'date',
        'read_at' => 'datetime',
    ];
}
