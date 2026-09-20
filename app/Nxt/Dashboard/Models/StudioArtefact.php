<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

/**
 * Something a Studio tool produced: a lesson plan, worksheet, script or template.
 */
class StudioArtefact extends NxtModel
{
    protected $table = 'nxt_studio_artefacts';

    protected $casts = [
        'inputs' => 'array',
        'version' => 'integer',
    ];
}
