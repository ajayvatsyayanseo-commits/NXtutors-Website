<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * Proof that a tutor opened a lead. One row per tutor per lead; the meter is charged once.
 */
class LeadView extends NxtModel
{
    protected $table = 'nxt_lead_views';

    protected $casts = [
        'viewed_at' => 'datetime',
    ];
}
