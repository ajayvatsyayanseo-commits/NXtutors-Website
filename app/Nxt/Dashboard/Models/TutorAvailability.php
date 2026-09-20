<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A repeating weekly slot the tutor is free to teach in.
 */
class TutorAvailability extends NxtModel
{
    protected $table = 'nxt_tutor_availability';

    protected $casts = [
        'weekday' => 'integer',
    ];
}
