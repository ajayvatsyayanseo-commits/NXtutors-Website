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
         'pro_desc',
        'travel_areas',
        'other_names',
    ];
    // hidden_until, deletion_requested_at, delete_after and deleted_at are
    // deliberately not fillable: only App\Services\AccountLifecycle sets them.
 public $timestamps = false;

    /** "Hidden until I turn it back on" — stored as a date nobody will reach. */
    public const HIDDEN_INDEFINITELY = '9999-12-31 00:00:00';

    /**
     * register.status: 't' live (public, signs in), 'f' inactive (cannot
     * sign in), 'p' pending review: a tutor whose ID the team has not checked
     * yet and who is not public yet (config tutors.publish_before_review off).
     * They sign in and finish their profile, but every public query asks for
     * 't', so nobody sees them until an admin approves.
     *
     * Live is not Verified: the Verified badge needs register.id_verified_at,
     * set only by the admin's Approve after the ID check (isIdVerified()).
     */
    public const STATUS_LIVE = 't';

    public const STATUS_INACTIVE = 'f';

    public const STATUS_PENDING_REVIEW = 'p';

    /** Admin labels, in the order the admin select shows them. */
    public const STATUS_LABELS = ['p' => 'Pending review', 't' => 'Active', 'f' => 'Inactive'];

    public function isPendingReview(): bool
    {
        return $this->status === self::STATUS_PENDING_REVIEW && $this->join_as === 'teacher';
    }

    /** May this account sign in? Live accounts, and tutors waiting for review. */
    public function canSignIn(): bool
    {
        return $this->status === self::STATUS_LIVE || $this->isPendingReview();
    }

    protected $casts = [
        'hidden_until' => 'datetime',
        'deletion_requested_at' => 'datetime',
        'delete_after' => 'datetime',
        'deleted_at' => 'datetime',
        'id_verified_at' => 'datetime',
        'review_notified_at' => 'datetime',
    ];

    /**
     * Whether register.id_verified_at exists yet. The deploy runs migrations
     * after the code is live; until then the old badge rule (real + live)
     * applies. Checked once per application instance.
     */
    public static function hasIdVerifiedColumn(): bool
    {
        $key = 'register.id_verified_column';
        if (! app()->bound($key)) {
            try {
                app()->instance($key, \Illuminate\Support\Facades\Schema::hasColumn('register', 'id_verified_at'));
            } catch (\Throwable $e) {
                app()->instance($key, false);
            }
        }

        return app($key);
    }

    /** Whether register.review_notified_at (the "email sent once" marker) exists yet. */
    public static function hasReviewNotifiedColumn(): bool
    {
        $key = 'register.review_notified_column';
        if (! app()->bound($key)) {
            try {
                app()->instance($key, \Illuminate\Support\Facades\Schema::hasColumn('register', 'review_notified_at'));
            } catch (\Throwable $e) {
                app()->instance($key, false);
            }
        }

        return app($key);
    }

    /**
     * user_ids of every tutor who may carry the Verified badge: real (not a
     * sample), live ('t') and approved after the ID check. One small query
     * per request (only approved tutors), so any card can ask by user_id
     * whatever columns its own query selected. Forgotten on every save.
     *
     * @return array<string,true>
     */
    public static function idVerifiedUserIds(): array
    {
        $key = 'register.id_verified_ids';
        if (! app()->bound($key)) {
            $ids = [];
            try {
                $ids = \Illuminate\Support\Facades\DB::table('register')
                    ->where('join_as', 'teacher')
                    ->where('status', self::STATUS_LIVE)
                    ->whereNotNull('id_verified_at')
                    ->when(self::hasSampleColumn(), fn ($q) => $q->where(fn ($w) => $w->where('is_sample', 0)->orWhereNull('is_sample')))
                    ->pluck('user_id')
                    ->map(fn ($id) => (string) $id)
                    ->flip()
                    ->map(fn () => true)
                    ->all();
            } catch (\Throwable $e) {
                $ids = [];
            }
            app()->instance($key, $ids);
        }

        return app($key);
    }

    public static function forgetIdVerifiedCache(): void
    {
        app()->forgetInstance('register.id_verified_ids');
    }

    /**
     * The one rule for the Verified badge on this tutor (App\Support\TutorBadge).
     */
    public function isIdVerified(): bool
    {
        return $this->join_as === 'teacher'
            && \App\Support\TutorBadge::verified($this, (bool) ($this->is_sample ?? false));
    }

    /**
     * Live tutors whose ID the team has not approved yet, and tutors still
     * pending review: the admin's "awaiting ID check" list. Real accounts only
     * (a phone on record, not a sample), so generated profiles stay out.
     */
    public function scopeAwaitingIdCheck($query)
    {
        $query->where('join_as', 'teacher')
            ->whereNotNull('phone')->where('phone', '!=', '')
            ->when(self::hasSampleColumn(), fn ($q) => $q->where(fn ($w) => $w->where('is_sample', 0)->orWhereNull('is_sample')));

        if (! self::hasIdVerifiedColumn()) {
            return $query->where('status', self::STATUS_PENDING_REVIEW);
        }

        return $query->where(fn ($w) => $w->where('status', self::STATUS_PENDING_REVIEW)
            ->orWhere(fn ($l) => $l->where('status', self::STATUS_LIVE)->whereNull('id_verified_at')));
    }

    /**
     * Tutors that may appear on any public surface: listings, profile pages,
     * the sitemap, search, the AI assistant and the agent feeds. Every one of
     * those must go through this (or visibleSql() for raw queries) so a hidden
     * or deleted profile disappears everywhere at once.
     */
    public function scopePubliclyVisible($query, string $table = 'register')
    {
        $query->where("$table.status", 't');

        // The auto-deploy does not run migrations, so code can briefly be live
        // before the columns exist. Fall back to the old rule rather than 500.
        if (! self::hasVisibilityColumns()) {
            return $query;
        }

        return $query->whereNull("$table.deleted_at")
            ->where(fn ($q) => $q->whereNull("$table.hidden_until")->orWhere("$table.hidden_until", '<=', now()));
    }

    /** Checked once per application instance (per request, per test). */
    private static function hasVisibilityColumns(): bool
    {
        $key = 'register.visibility_columns';
        if (! app()->bound($key)) {
            app()->instance($key, \Illuminate\Support\Facades\Schema::hasColumn('register', 'hidden_until')
                && \Illuminate\Support\Facades\Schema::hasColumn('register', 'deleted_at'));
        }

        return app($key);
    }

    /**
     * Whether the is_sample column exists yet (the deploy runs migrations
     * after the code is live). Checked once per application instance.
     */
    public static function hasSampleColumn(): bool
    {
        $key = 'register.sample_column';
        if (! app()->bound($key)) {
            try {
                app()->instance($key, \Illuminate\Support\Facades\Schema::hasColumn('register', 'is_sample'));
            } catch (\Throwable $e) {
                app()->instance($key, false);
            }
        }

        return app($key);
    }

    /**
     * Real tutors before sample profiles (config/tutors.php) in any list.
     */
    public function scopeRealFirst($query, string $table = 'register')
    {
        return self::hasSampleColumn() ? $query->orderBy("$table.is_sample") : $query;
    }

    /** The same rule for DB::table() queries. */
    public static function applyPublicVisibility($query, string $table = 'register')
    {
        return (new static)->scopePubliclyVisible($query, $table);
    }

    /**
     * Visible AND fit to list: search, suggestions, home cards, city counts
     * and the sitemap. Leaves out profiles carrying another tutor's bio
     * (App\Support\CopiedBios); those stay reachable by their own link.
     */
    public function scopeListable($query, string $table = 'register')
    {
        $this->scopePubliclyVisible($query, $table);
        $copied = \App\Support\CopiedBios::list();

        return $copied ? $query->whereNotIn("$table.user_id", $copied) : $query;
    }

    public static function applyListable($query, string $table = 'register')
    {
        return (new static)->scopeListable($query, $table);
    }

    public function isHidden(): bool
    {
        return $this->hidden_until !== null && $this->hidden_until->isFuture();
    }

    public function isHiddenIndefinitely(): bool
    {
        return $this->isHidden() && $this->hidden_until->year >= 9999;
    }

    public function isDeletionPending(): bool
    {
        return $this->delete_after !== null && $this->deleted_at === null;
    }

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
        // A status change or an approval moves a tutor in or out of the
        // Verified set; the next card in this request must see it.
        static::saved(fn () => self::forgetIdVerifiedCache());
        static::deleted(fn () => self::forgetIdVerifiedCache());

        static::saving(function (self $model): void {
            // Also when the hash is missing: tutors created by the WhatsApp
            // onboarding agent arrive by a plain INSERT with no hash, and get
            // one the first time the site saves them (e.g. the admin's approval).
            if (! $model->isDirty('phone') && filled($model->getAttribute('phone_hash'))) {
                return;
            }
            if (! $model->isDirty('phone') && ! array_key_exists('phone_hash', $model->getAttributes())) {
                return; // a partial select without the column: leave it alone
            }
            $phone = (string) ($model->phone ?? '');
            $model->phone_hash = $phone === ''
                ? null
                : \App\NxtAi\Support\AgentPseudonymiser::tryPhoneHash($phone);
        });
    }
}
