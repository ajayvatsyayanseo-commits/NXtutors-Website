<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * The tutor's marking of one submission.
 */
class HomeworkMark extends NxtModel
{
    protected $table = 'nxt_homework_marks';

    protected $casts = [
        'score' => 'integer',
        'marked_at' => 'datetime',
    ];
}
