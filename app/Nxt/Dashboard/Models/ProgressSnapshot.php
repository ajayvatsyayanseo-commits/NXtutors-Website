<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One cell of the chapter heatmap, carrying the ids of the events it was computed from.
 */
class ProgressSnapshot extends NxtModel
{
    protected $table = 'nxt_progress_snapshots';

    protected $casts = [
        'evidence' => 'array',
        'score' => 'integer',
        'computed_for' => 'date',
    ];
}
