<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One change to a metered entitlement, so a consumed credit can be explained and refunded.
 */
class MeterEvent extends NxtModel
{
    protected $table = 'nxt_meter_events';

    protected $casts = [
        'delta' => 'integer',
    ];
}
