<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A tutor's note on a student. Private notes never reach a parent-facing surface, exports included.
 */
class TutorNote extends NxtModel
{
    protected $table = 'nxt_tutor_notes';
}
