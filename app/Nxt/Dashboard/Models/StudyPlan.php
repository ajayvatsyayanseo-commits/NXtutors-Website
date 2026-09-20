<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A week of planned work that the tutor and the family both see.
 */
class StudyPlan extends NxtModel
{
    protected $table = 'nxt_study_plans';

    protected $casts = [
        'week_start' => 'date',
    ];
}
