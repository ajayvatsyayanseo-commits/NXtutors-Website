<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * One line of a study plan. Locked items survive regeneration.
 */
class StudyPlanItem extends NxtModel
{
    protected $table = 'nxt_study_plan_items';

    protected $casts = [
        'locked' => 'boolean',
        'position' => 'integer',
        'due_at' => 'datetime',
        'done_at' => 'datetime',
    ];
}
