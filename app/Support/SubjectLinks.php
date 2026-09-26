<?php

namespace App\Support;

/**
 * Links into the subject pages (config/subject_pages.php) from the rest of
 * the site: city, area, generated and course pages, the home page and blog
 * posts. Only pages whose guide exists are returned, so nothing links to a
 * page that would 404.
 */
class SubjectLinks
{
    /** @return array<string, array> key => page config, live pages only */
    public static function live(): array
    {
        static $live = null;

        return $live ??= collect(config('subject_pages', []))
            ->filter(fn ($p) => view()->exists('subjects.content.' . $p['view']))
            ->all();
    }

    /** National subject pillars: [['url','label','subject'], …] */
    public static function pillars(): array
    {
        return collect(self::live())
            ->filter(fn ($p) => empty($p['parent']) && empty($p['city']))
            ->map(fn ($p, $k) => ['url' => url('/' . $k), 'label' => $p['h1'], 'subject' => $p['subject']])
            ->values()->all();
    }

    /**
     * Subject pages for one city (by city page slug), falling back to the
     * national pillars when the city has none of its own.
     */
    public static function forCity(?string $citySlug): array
    {
        $local = collect(self::live())
            ->filter(fn ($p) => $citySlug && ($p['city_slug'] ?? null) === $citySlug && empty($p['class']))
            ->map(fn ($p, $k) => ['url' => url('/' . $k), 'label' => $p['h1'], 'subject' => $p['subject']]);

        $covered = $local->pluck('subject')->all();
        $national = collect(self::pillars())->reject(fn ($p) => in_array($p['subject'], $covered, true));

        return $local->values()->concat($national)->values()->all();
    }

    /**
     * The best subject page for a subject name found in a title or slug
     * ("maths", "physics", …), preferring the city's own page.
     */
    public static function forSubject(string $text, ?string $citySlug = null): ?array
    {
        $t = strtolower($text);
        $subject = match (true) {
            str_contains($t, 'math') => 'Mathematics',
            (bool) preg_match('/\bscience\b/', str_replace(['social-science', 'social science', 'computer-science', 'computer science'], '', $t)) => 'Science',
            str_contains($t, 'physics') => 'Physics',
            str_contains($t, 'chemistry') => 'Chemistry',
            default => null,
        };
        if (! $subject) {
            return null;
        }

        foreach (self::forCity($citySlug) as $p) {
            if ($p['subject'] === $subject) {
                return $p;
            }
        }

        return null;
    }

    /**
     * An author's config plus their live tutor profile: photo, qualification,
     * experience and profile link (from register.user_id).
     */
    public static function withProfile(array $a): array
    {
        // The team has no tutor profile: logo, no personal facts, link to all tutors.
        if (empty($a['user_id'])) {
            return $a + ['image' => asset('uploads/logo/newlogo.png'), 'education' => '', 'experience' => '', 'profile_url' => url('/tutors')];
        }

        $row = \App\Models\Register::query()->where('user_id', $a['user_id'] ?? '')->publiclyVisible()->first();

        $avatar = (string) ($row->avatar ?? '');
        $a['image'] = $avatar !== '' ? (str_starts_with($avatar, 'http') ? $avatar : asset('storage/user/' . $avatar)) : null;
        $a['education'] = trim((string) ($row->education ?? ''));
        $a['experience'] = trim((string) ($row->experience ?? ''));
        $a['profile_url'] = $row?->profileUrl();

        return $a;
    }

    /** "1" → "1 year", "14+" → "14+ years", "6 years" stays. */
    public static function experience(string $raw): string
    {
        $raw = trim($raw);
        if (preg_match('/^(\d+)(\+?)$/', $raw, $m)) {
            return $m[1] . $m[2] . ((int) $m[1] === 1 && $m[2] === '' ? ' year' : ' years');
        }

        return $raw;
    }

    /** Author config for a blog "author" string, or null. */
    public static function authorByName(?string $name): ?array
    {
        $n = strtolower(trim((string) $name));
        if ($n === '') {
            return null;
        }
        foreach (config('nx_authors', []) as $key => $a) {
            if (in_array($n, $a['names'] ?? [], true)) {
                return $a + ['key' => $key];
            }
        }

        return null;
    }
}
