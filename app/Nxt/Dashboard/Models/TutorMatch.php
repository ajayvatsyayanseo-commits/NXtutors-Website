<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One tutor the matching engine put in front of one lead, with its reasons.
 */
class TutorMatch extends NxtModel
{
    protected $table = 'nxt_matches';

    protected $casts = [
        'reasons' => 'array',
        'score' => 'integer',
        'rank' => 'integer',
        'expires_at' => 'datetime',
    ];
}
