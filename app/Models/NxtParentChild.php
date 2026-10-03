<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * A child linked to a parent by the team in Super Admin.
 *
 * Either a real student account (`student_user_id` = `register.user_id`, a
 * join_as=student row) or a child added by name only, before or without an
 * account. The name and class are kept here in both cases so the family page
 * never depends on the student row still being there.
 */
class NxtParentChild extends Model
{
    protected $table = 'nxt_parent_children';

    protected $fillable = ['parent_id', 'student_user_id', 'child_name', 'child_class', 'board', 'relationship', 'is_primary'];

    public const RELATIONSHIPS = ['mother', 'father', 'guardian', 'other'];

    protected function casts(): array
    {
        return ['is_primary' => 'boolean'];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(NxtParent::class, 'parent_id');
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Register::class, 'student_user_id', 'user_id');
    }

    /** "Class 8 · CBSE", or whichever half is known. */
    public function classLine(): string
    {
        $class = trim((string) $this->child_class);
        if ($class !== '' && ctype_digit($class)) {
            $class = 'Class '.$class;
        }

        return implode(' · ', array_filter([$class, trim((string) $this->board)]));
    }
}
