<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One class. The state machine behind it drives attendance, payment and the parent's update.
 */
class TutoringSession extends NxtModel
{
    protected $table = 'nxt_sessions';

    protected $casts = [
        'topics' => 'array',
        'starts_at' => 'datetime',
        'planned_min' => 'integer',
        'actual_min' => 'integer',
        'confidence' => 'integer',
        'fee_paise' => 'integer',
        'commission_paise' => 'integer',
        'checked_in_at' => 'datetime',
        'checked_out_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];
}
