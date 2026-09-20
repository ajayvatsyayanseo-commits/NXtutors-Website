<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

/**
 * Base for every dashboard table.
 *
 * All of them use ULID string keys rather than auto-increment integers. The
 * audit of the live site found tutor profile URLs exposing sequential ids
 * behind a base64 slug; non-guessable keys remove that whole class of problem
 * from the new surface, and they let a client generate an id before the row
 * exists, which the offline check-in queue depends on.
 *
 * `$guarded = []` is safe here because nothing in these models is written from
 * request input directly: every write goes through a service that builds the
 * attribute array itself.
 */
abstract class NxtModel extends Model
{
    use HasUlids;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $guarded = [];
}
