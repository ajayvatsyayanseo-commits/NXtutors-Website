<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";

    protected $fillable = [
        'phone_hash',
        'user_id',
        'name',
        'email',
        'password',
        'user_type',
        'phone',
        'dob',
        'avatar',
        'gender',
        'date',
        'address',
        'city',
        'district',
        'state',
        'pincode',
        'c_password',
        'otp',
        'class_type',
        'otp_status',
        'status',
        'join_as',
        'for_class',
        'frount_image',
        'back_image',
        'degree',
        'experience',
        'education',
          'budget',
         'other_education',
         'document_type',
         'document_number',
         'profile',
         'profile_desc',
         'pro_desc'
    ];
 public $timestamps = false;

 public function reviews()
{
    
    return $this->hasMany(Teacher_review::class, 'user_id', 'user_id');
}

public function courses()
{
    return $this->hasMany(Teacher_course::class, 'user_id', 'user_id');
}

public function coursess()
{
    return $this->hasMany(Teacher_courses::class, 'user_id', 'user_id');
}

/**
 * The one public URL for this tutor's profile.
 *
 * Every surface that names a tutor page — the sitemap, the canonical tag,
 * internal links — must call this. They used to build the URL independently
 * and the canonical tag built it with encrypt(), whose random IV returns a
 * different ciphertext on every call. That gave each tutor an unbounded
 * supply of distinct canonical URLs, none of them self-referencing, so
 * Google indexed none of them. Keep the callers on one method so the shapes
 * cannot drift apart again.
 *
 * Returns null when the tutor has no city: that URL shape renders a broken
 * page, so it must not reach a sitemap or a canonical tag.
 */
public function profileUrl(): ?string
{
    $city = trim((string) ($this->city ?? ''));

    if (! $this->user_id || $city === '') {
        return null;
    }

    $encodedId = rtrim(strtr(base64_encode($this->user_id . '-nxt'), '+/', '-_'), '=');

    return route('tutor.newshow', [
        'city'    => \Illuminate\Support\Str::slug($city),
        'user_id' => $encodedId,
        'name'    => \Illuminate\Support\Str::slug((string) ($this->name ?: 'tutor')),
    ]);
}

public function getEffectiveCoursesAttribute()
{
    if ($this->relationLoaded('courses') && $this->courses && $this->courses->count()) {
        return $this->courses;
    }

    if ($this->relationLoaded('coursess') && $this->coursess && $this->coursess->count()) {
        return $this->coursess;
    }

    // fallback queries if not eager loaded
    $a = $this->courses()->get();
    return $a->count() ? $a : $this->coursess()->get();
}
    

    /**
     * Keep `phone_hash` in step with `phone`.
     *
     * Derived data, never input: recomputed on every save so a number changed
     * through any path — admin edit, signup form, import — cannot leave a
     * stale hash behind. A stale hash is not a visible bug. It means the
     * agents can no longer find that person, so every message to them is
     * suppressed as "unknown contact", with nothing logged anywhere.
     */
    protected static function booted(): void
    {
        static::saving(function (self $model): void {
            if (! $model->isDirty('phone')) {
                return;
            }
            $phone = (string) ($model->phone ?? '');
            $model->phone_hash = $phone === ''
                ? null
                : \App\NxtAi\Support\AgentPseudonymiser::fromConfig()->phoneHash($phone);
        });
    }
}
