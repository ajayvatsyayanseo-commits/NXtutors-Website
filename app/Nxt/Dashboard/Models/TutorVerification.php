<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One uploaded document and its review state. A profile is not visible until approved.
 */
class TutorVerification extends NxtModel
{
    protected $table = 'nxt_tutor_verifications';

    protected $casts = [
        'reviewed_at' => 'datetime',
    ];
}
