<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A tutor a family shortlisted. Plan-limited.
 */
class SavedTutor extends NxtModel
{
    protected $table = 'nxt_saved_tutors';

    protected $casts = [
        'saved_at' => 'datetime',
    ];
}
