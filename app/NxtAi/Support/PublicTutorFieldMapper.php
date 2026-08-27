<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

use App\Models\Register;
use Illuminate\Support\Str;

/**
 * The ONLY place a tutor Eloquent model is turned into data that may leave the
 * server. It is an allowlist by construction: we build a fresh array containing
 * only fields known to be public, so private columns (email, phone, password,
 * otp, documents, dob, KYC) can never leak — even if the model changes.
 *
 * NEVER add email, phone, password, c_password, otp, document fields,
 * frount_image, back_image or dob to the output here.
 */
final class PublicTutorFieldMapper
{
    /** Public columns that are safe to read off the model. */
    public const PUBLIC_COLUMNS = [
        'name', 'gender', 'avatar', 'address', 'city', 'district', 'state',
        'pincode', 'experience', 'education', 'other_education', 'budget',
        'for_class', 'class_type', 'profile', 'profile_desc', 'pro_desc',
    ];

    /** Columns that must never appear in any output. */
    public const PRIVATE_COLUMNS = [
        'email', 'phone', 'password', 'c_password', 'otp', 'otp_status',
        'dob', 'document_type', 'document_number', 'frount_image', 'back_image',
    ];

    /**
     * @return array<string,mixed> public, model-safe tutor data
     */
    public function toPublicArray(Register $t): array
    {
        $caps = $this->capabilities($t);
        $rating = $this->ratingData($t);
        $fee = $this->parseFee((string) ($t->budget ?? ''));

        return [
            'ref' => $this->publicToken((string) $t->user_id),
            'name' => $this->clean((string) ($t->name ?? 'Tutor')),
            'gender' => $this->cleanGender($t->gender),
            'city' => $this->clean((string) ($t->city ?? '')),
            'area' => $this->clean((string) ($t->address ?? '')),
            'pincode' => $this->clean((string) ($t->pincode ?? '')),
            'subjects' => $caps['subjects'],
            'classes' => $caps['classes'],
            'boards' => $caps['boards'],
            'teaching_modes' => $caps['modes'],
            'experience_years' => $this->parseExperience((string) ($t->experience ?? '')),
            'education' => $this->clean(trim(((string) ($t->education ?? '')).' '.((string) ($t->other_education ?? '')))),
            'fee_min' => $fee['min'],
            'fee_max' => $fee['max'],
            'fee_label' => $fee['label'],
            'rating' => $rating['avg'],
            'review_count' => $rating['count'],
            'description' => $this->snippet((string) ($t->profile_desc ?? $t->profile ?? $t->pro_desc ?? '')),
            'image_url' => $this->imageUrl($t->avatar),
            'profile_url' => $this->profileUrl($t),
        ];
    }

    /** Capabilities derived from whichever course schema the tutor uses. */
    public function capabilities(Register $t): array
    {
        $subjects = [];
        $classes = [];
        $boards = [];
        $modes = [];

        foreach ($this->safeCourses($t) as $c) {
            // String-schema (teacher_courses): plain columns.
            if (isset($c->subject) && $c->subject !== null && $c->subject !== '') {
                $subjects[] = (string) $c->subject;
            }
            if (isset($c->board) && $c->board !== null && $c->board !== '') {
                $boards[] = (string) $c->board;
            }
            if (isset($c->for_class) && $c->for_class !== null && $c->for_class !== '') {
                $classes[] = (string) $c->for_class;
            }
            foreach (['class_type', 'mode'] as $modeCol) {
                if (isset($c->{$modeCol}) && $c->{$modeCol} !== null) {
                    $modes = array_merge($modes, $this->modeTokens((string) $c->{$modeCol}));
                }
            }

            // Id-schema (teacher_course_managment): read eager-loaded relations only.
            if ($c->relationLoaded('category') && $c->category && ! empty($c->category->cat_title)) {
                $subjects[] = (string) $c->category->cat_title;
            }
            if ($c->relationLoaded('board') && $c->board && is_object($c->board) && ! empty($c->board->cat_title)) {
                $boards[] = (string) $c->board->cat_title;
            }
            if ($c->relationLoaded('classCategory') && $c->classCategory && ! empty($c->classCategory->cat_title)) {
                $classes[] = (string) $c->classCategory->cat_title;
            }
        }

        // Teaching mode also hinted by the register-level class_type.
        $modes = array_merge($modes, $this->modeTokens((string) ($t->class_type ?? '')));

        return [
            'subjects' => $this->uniqueClean($subjects),
            'classes' => $this->uniqueClean($classes),
            'boards' => $this->uniqueClean($boards),
            'modes' => array_values(array_unique(array_filter($modes))),
        ];
    }

    /** @return iterable<object> */
    private function safeCourses(Register $t): iterable
    {
        try {
            $courses = $t->effective_courses;

            return is_iterable($courses) ? $courses : [];
        } catch (\Throwable) {
            return [];
        }
    }

    private function modeTokens(string $raw): array
    {
        $raw = strtolower($raw);
        $out = [];
        if (str_contains($raw, 'both')) {
            return ['Online', 'Home'];
        }
        if (str_contains($raw, 'online') || str_contains($raw, 'remote') || str_contains($raw, 'virtual')) {
            $out[] = 'Online';
        }
        if (str_contains($raw, 'home') || str_contains($raw, 'offline') || str_contains($raw, 'academic')) {
            $out[] = 'Home';
        }

        return $out;
    }

    private function ratingData(Register $t): array
    {
        // rating_avg / reviews_count are attached by the search subquery select.
        $avg = $t->rating_avg ?? null;
        $count = $t->reviews_count ?? null;

        return [
            'avg' => $avg !== null ? round((float) $avg, 1) : null,
            'count' => $count !== null ? (int) $count : 0,
        ];
    }

    /** @return array{min:?int,max:?int,label:?string} */
    public function parseFee(string $budget): array
    {
        preg_match_all('/\d[\d,]*/', $budget, $m);
        $nums = array_map(static fn ($n) => (int) str_replace(',', '', $n), $m[0] ?? []);
        $nums = array_values(array_filter($nums, static fn ($n) => $n > 0));

        if ($nums === []) {
            return ['min' => null, 'max' => null, 'label' => null];
        }

        $min = min($nums);
        $max = max($nums);
        // Deliberately no "per hour" — the schema has no fee unit, so we never
        // claim one (spec: never present budget as per-hour without proof).
        $label = $min === $max
            ? '₹'.number_format($min)
            : '₹'.number_format($min).'–₹'.number_format($max);

        return ['min' => $min, 'max' => $max, 'label' => $label];
    }

    public function parseExperience(string $raw): ?int
    {
        if (preg_match('/\d{1,2}/', $raw, $m)) {
            return (int) $m[0];
        }

        return null;
    }

    /** URL-safe base64 token of "{user_id}-nxt" — matches the site's tutor.newshow scheme. */
    public function publicToken(string $userId): string
    {
        return rtrim(strtr(base64_encode($userId.'-nxt'), '+/', '-_'), '=');
    }

    public function profileUrl(Register $t): string
    {
        $token = $this->publicToken((string) $t->user_id);
        $citySlug = Str::slug((string) ($t->city ?? 'india')) ?: 'india';
        $nameSlug = Str::slug((string) ($t->name ?? 'tutor')) ?: 'tutor';

        try {
            return route('tutor.newshow', [$citySlug, $token, $nameSlug], false);
        } catch (\Throwable) {
            return '/tutor/'.$citySlug.'/'.$token.'/'.$nameSlug;
        }
    }

    public function imageUrl(?string $avatar): string
    {
        $avatar = trim((string) $avatar);
        $fallback = $this->asset('frount/assets/images/tutor1.jpg');

        if ($avatar === '') {
            return $fallback;
        }
        if (str_starts_with($avatar, 'http://') || str_starts_with($avatar, 'https://')) {
            return $avatar;
        }

        return $this->asset('storage/user/'.$avatar);
    }

    private function asset(string $path): string
    {
        try {
            return asset($path);
        } catch (\Throwable) {
            return '/'.ltrim($path, '/');
        }
    }

    private function cleanGender($gender): ?string
    {
        $g = strtolower(trim((string) $gender));

        return in_array($g, ['male', 'female'], true) ? ucfirst($g) : null;
    }

    private function clean(string $v): string
    {
        return trim(preg_replace('/\s+/', ' ', strip_tags($v)) ?? '');
    }

    private function snippet(string $v, int $len = 220): string
    {
        $v = $this->clean($v);

        return Str::limit($v, $len);
    }

    private function uniqueClean(array $items): array
    {
        $seen = [];
        $out = [];
        foreach ($items as $item) {
            $c = $this->clean((string) $item);
            $key = strtolower($c);
            if ($c !== '' && ! isset($seen[$key])) {
                $seen[$key] = true;
                $out[] = $c;
            }
        }

        return array_slice($out, 0, 8);
    }
}
