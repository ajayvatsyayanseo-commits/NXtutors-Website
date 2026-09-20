<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * A student's submitted work. Files are private objects served by signed URL.
 */
class HomeworkSubmission extends NxtModel
{
    protected $table = 'nxt_homework_submissions';

    protected $casts = [
        'files' => 'array',
        'submitted_at' => 'datetime',
    ];
}
