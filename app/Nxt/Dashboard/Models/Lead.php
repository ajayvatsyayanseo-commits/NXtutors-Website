<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A family's requirement: what they need taught, where, when and for how much.
 */
class Lead extends NxtModel
{
    protected $table = 'nxt_leads';

    protected $casts = [
        'subjects' => 'array',
        'slots' => 'array',
        'start_by' => 'date',
        'expires_at' => 'datetime',
        'lat' => 'float',
        'lng' => 'float',
        'budget_min_paise' => 'integer',
        'budget_max_paise' => 'integer',
    ];
}
