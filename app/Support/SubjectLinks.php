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
            ->filter(fn ($p) => $citySlug && ($p['city_slug'] ?? null) === $citySlug)
            ->map(fn ($p, $k) => ['url' => url('/' . $k), 'label' => $p['h1'], 'subject' => $p['subject']]);

        $covered = $local->pluck('subject')->all();
        $national = collect(self::pillars())->reject(fn ($p) => in_array($p['subject'], $covered, true));

        return $local->values()->concat($national)->values()->all();
    }

    /** Link groups, in display order, with their headings. */
    public const KINDS = [
        'board' => 'By board',
        'board_subject' => 'By board and subject',
        'subject' => 'By subject',
        'class' => 'By class',
        'exam' => 'Entrance exams',
        'audience' => 'More ways to find a tutor',
        'other' => 'More',
    ];

    /** Entrance exams that have their own pages (subject_label). */
    public const EXAMS = ['JEE', 'NEET', 'MHT-CET', 'MHT CET', 'CUET', 'KCET', 'WBJEE', 'BITSAT', 'COMEDK', 'EAMCET', 'NDA', 'CLAT'];

    /** Board words and the board they stand for (ISC rides with ICSE, as parents treat them). */
    private const BOARD_WORDS = ['ib' => 'IB', 'igcse' => 'IGCSE', 'icse' => 'ICSE', 'isc' => 'ICSE', 'cbse' => 'CBSE', 'ssc' => 'SSC/HSC', 'hsc' => 'SSC/HSC', 'state-board' => 'State'];

    /**
     * What kind of page a subject_pages entry is, inferred from the fields it
     * already has (an optional 'kind' field wins):
     * board + subject → board_subject; board alone → board; JEE/NEET/MHT-CET
     * label → exam; a class or a school stage → class; gender, online, home
     * or a stream → audience; a subject → subject.
     */
    public static function kind(array $p, string $key = ''): string
    {
        if (! empty($p['kind']) && isset(self::KINDS[$p['kind']])) {
            return $p['kind'];
        }
        $sl = strtoupper(trim((string) ($p['subject_label'] ?? '')));
        $board = trim((string) ($p['board'] ?? ''));
        $subject = trim((string) ($p['subject'] ?? ''));

        if ($board !== '' && $subject !== '') {
            return 'board_subject';
        }
        if ($board !== '') {
            return 'board';
        }
        if (in_array($sl, self::EXAMS, true) || preg_match('/^(jee|neet|mht-cet|cuet)-/', $key)) {
            return 'exam';
        }
        if ($subject === '' && preg_match('/^(CBSE|ICSE|ISC|IB|IGCSE|SSC|HSC|STATE BOARD|MAHARASHTRA)\b/', $sl)) {
            return 'board';
        }
        if (! empty($p['gender']) || in_array($sl, ['ONLINE', 'COMMERCE', 'SCIENCE STREAM', 'ARTS', 'HUMANITIES'], true)
            || ($sl === 'HOME' && empty($p['class']))) {
            return 'audience';
        }
        if (! empty($p['class']) || in_array($sl, ['PRIMARY', 'NURSERY AND KG', 'NURSERY & KG', 'KG', 'PRE-PRIMARY'], true)) {
            return $subject !== '' ? 'subject_class' : 'class';
        }
        if ($subject !== '') {
            return 'subject';
        }

        return 'other';
    }

    /**
     * Boards a page is about: its 'board' field plus board words in its key
     * ("ib-igcse-chemistry-tutor-gurgaon" is IB and IGCSE). ISC counts as ICSE.
     *
     * @return list<string>
     */
    public static function boardsOf(array $p, string $key = ''): array
    {
        $out = [];
        $b = strtolower(trim((string) ($p['board'] ?? '')));
        if ($b !== '') {
            $out[] = self::BOARD_WORDS[$b] ?? strtoupper($b);
        }
        foreach (self::BOARD_WORDS as $word => $board) {
            if (preg_match('/(^|-)' . preg_quote($word, '/') . '(-|$)/', $key)) {
                $out[] = $board;
            }
        }

        return array_values(array_unique($out));
    }

    /** Class numbers a page covers: "Class 10" → [10], "Class 6–8" → [6,7,8], primary → 1–5, nursery → [0]. */
    public static function classNumbers(array $p): array
    {
        $c = (string) ($p['class'] ?? '');
        if (preg_match('/(\d{1,2})\s*[–—-]\s*(\d{1,2})/u', $c, $m)) {
            return range((int) $m[1], (int) $m[2]);
        }
        if (preg_match('/(\d{1,2})/', $c, $m)) {
            return [(int) $m[1]];
        }
        $sl = strtolower((string) ($p['subject_label'] ?? ''));

        return match (true) {
            str_contains($sl, 'primary') && ! str_contains($sl, 'pre') => [1, 2, 3, 4, 5],
            str_contains($sl, 'nursery') || $sl === 'kg' || str_contains($sl, 'pre-primary') => [0],
            default => [],
        };
    }

    /**
     * Link text for a page: its H1 without the bracketed detail
     * ("IB Tutors in Mumbai (PYP, MYP & Diploma)" → "IB Tutors in Mumbai").
     */
    public static function anchor(array $p): string
    {
        $h = trim((string) ($p['h1'] ?? $p['label'] ?? ''));
        $short = trim((string) preg_replace('/\s*\(.*$/u', '', $h));

        return $short !== '' ? $short : $h;
    }

    /**
     * The live pages of one city, keyed by page key, each with its kind,
     * boards, URL and link text. Memoised per request.
     *
     * @return array<string, array>
     */
    public static function cityPages(?string $citySlug): array
    {
        static $memo = [];
        if (! $citySlug) {
            return [];
        }
        $sig = $citySlug . '|' . count(self::live());

        return $memo[$sig] ??= collect(self::live())
            ->filter(fn ($p) => ($p['city_slug'] ?? null) === $citySlug)
            ->map(fn ($p, $k) => $p + [
                'key' => $k,
                'kind' => self::kind($p, $k),
                'boards' => self::boardsOf($p, $k),
                'url' => url('/' . $k),
                'anchor' => self::anchor($p),
            ])
            ->all();
    }

    /**
     * A city's pages grouped by kind (board, board × subject, subject, class,
     * exam, audience), for hub, zone and area link blocks. Board and board ×
     * subject links follow $boardOrder when given (a zone's board mix).
     * Cities without pages of their own get the national subject pillars.
     *
     * @param  list<string>  $boardOrder
     * @return array<string, array{title:string, items:list<array{url:string,label:string,key:string}>}>
     */
    public static function forCityGrouped(?string $citySlug, array $boardOrder = []): array
    {
        $pages = self::cityPages($citySlug);
        if ($pages === []) {
            return ['subject' => ['title' => self::KINDS['subject'], 'items' => array_map(fn ($p) => $p + ['key' => ltrim(parse_url($p['url'], PHP_URL_PATH) ?? '', '/')], self::pillars())]];
        }

        $rank = self::boardRank($boardOrder);
        $groups = [];
        foreach ($pages as $k => $p) {
            $kind = $p['kind'] === 'subject_class' ? 'class' : $p['kind'];
            $groups[$kind][] = $p;
        }

        $out = [];
        foreach (array_keys(self::KINDS) as $kind) {
            if (empty($groups[$kind])) {
                continue;
            }
            $items = $groups[$kind];
            if (in_array($kind, ['board', 'board_subject'], true) && $rank) {
                $items = self::sortByBoards($items, $boardOrder);
            }
            $out[$kind] = [
                'title' => self::KINDS[$kind],
                'items' => array_map(fn ($p) => ['url' => $p['url'], 'label' => $p['anchor'], 'key' => $p['key']], $items),
            ];
        }

        return $out;
    }

    /**
     * Pages sorted so those about the earliest board in $boardOrder come
     * first; a stable sort, so config order holds otherwise.
     *
     * @param  list<array>  $items  pages with 'boards'
     * @param  list<string>  $boardOrder
     */
    public static function sortByBoards(array $items, array $boardOrder): array
    {
        $rank = self::boardRank($boardOrder);
        if (! $rank) {
            return array_values($items);
        }
        $i = 0;
        $keyed = array_map(function ($p) use ($rank, &$i) {
            $best = PHP_INT_MAX;
            foreach ($p['boards'] ?? [] as $b) {
                $best = min($best, $rank[$b] ?? PHP_INT_MAX);
            }

            return [$best, $i++, $p];
        }, array_values($items));
        usort($keyed, fn ($a, $b) => [$a[0], $a[1]] <=> [$b[0], $b[1]]);

        return array_column($keyed, 2);
    }

    /** @return array<string,int> normalised board => position */
    private static function boardRank(array $boardOrder): array
    {
        $rank = [];
        foreach (array_values($boardOrder) as $i => $b) {
            $n = strtolower(trim((string) $b));
            $n = self::BOARD_WORDS[$n] ?? (str_contains($n, 'ssc') || str_contains($n, 'hsc') || str_contains($n, 'maharashtra') ? 'SSC/HSC' : strtoupper($n));
            $rank[$n] ??= $i;
        }

        return $rank;
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
        $a['author_url'] = ! empty($a['slug']) ? url('/authors/' . $a['slug']) : null;

        // The team has no tutor profile: logo, no personal facts, link to all tutors.
        if (empty($a['user_id'])) {
            return $a + ['image' => asset('uploads/logo/newlogo-512.png'), 'education' => '', 'experience' => '', 'profile_url' => url('/tutors')];
        }

        $row = \App\Models\Register::query()->where('user_id', $a['user_id'] ?? '')->publiclyVisible()->first();

        $avatar = (string) ($row->avatar ?? '');
        $a['image'] = $avatar !== '' ? (str_starts_with($avatar, 'http') ? $avatar : \App\Support\TutorPhoto::url($avatar)) : null;
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

    /** Author config (with key) for an author page slug, or null. */
    public static function authorBySlug(string $slug): ?array
    {
        foreach (config('nx_authors', []) as $key => $a) {
            if (($a['slug'] ?? null) === $slug) {
                return $a + ['key' => $key];
            }
        }

        return null;
    }

    /**
     * Live subject pages an author signs, lead-author pages first:
     * [['url','label','title','lead'], …]
     */
    public static function pagesBy(string $authorKey): array
    {
        return collect(self::live())
            ->filter(fn ($p) => in_array($authorKey, $p['authors'] ?? [], true))
            ->map(fn ($p, $k) => [
                'url' => url('/' . $k),
                'label' => $p['h1'],
                'lede' => $p['lede'] ?? '',
                'kicker' => trim(($p['board'] ?? '') . ' ' . ($p['subject'] ?? '') . (! empty($p['city']) ? ' · ' . $p['city'] : '')),
                'lead' => ($p['authors'][0] ?? null) === $authorKey,
            ])
            ->sortByDesc('lead')
            ->values()->all();
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

    /** Lowercase a label for running text but keep acronyms ("IB Maths" -> "IB maths", "JEE" stays). */
    public static function lcLabel(?string $label): string
    {
        return (string) preg_replace_callback('/\b[A-Z][a-z]+\b/u', fn ($m) => strtolower($m[0]), (string) $label);
    }
}
