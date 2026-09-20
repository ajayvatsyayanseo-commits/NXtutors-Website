<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A dated override on the weekly pattern: blocked time or an extra slot.
 */
class AvailabilityException extends NxtModel
{
    protected $table = 'nxt_availability_exceptions';

    protected $casts = [
        'date' => 'date',
    ];
}
