<?php

namespace App\Support;

/**
 * Written text for the tutor-side pages (TuitionJobsController), one JSON
 * file per page under database/seo-content/jobs/:
 *
 *   cities/{city-slug}.json  {"intro": [..], "zone_notes": {"Zone": ".."}, "boards": "..", "faqs": [[q, a], ..]}
 *   states/{state-slug}.json {"state": "..", "board": {"name","site","summary"}, "intro": [..],
 *                             "towns": [{"name","note"}, ..], "faqs": [[q, a], ..]}
 *   topics/{topic-slug}.json {"title","description","h1","intro": [..],
 *                             "sections": [{"h2","paras": [..]}, ..], "faqs": [[q, a], ..]}
 *   hub.json                 {"intro": [..], "story": [6], "women": {..}, "why": [..], "faqs": [..]}
 *
 * v2 fields (spec 2 Oct 2026), optional on cities, states, topics and the hub:
 *   "board_cards": [{"key": "cbse|cisce|ib|igcse|state", "name", "site", "classes", "note"}, ..]
 *   "women": {"intro": "..", "points": [..]}
 *   "story": [six captions for the storyboard panels, in order]
 * Absent or unusable v2 fields come back empty and the page uses its
 * defaults (App\Support\JobsPage).
 *
 * Every reader returns null when the file is absent, unreadable or has no
 * usable text, so the page falls back to its template (city, state) or 404s
 * (topic). Plain text only: the views escape everything.
 */
class JobsContent
{
    /** National subject / mode jobs pages, served at /{slug} (flat URLs). */
    public const TOPICS = ['maths-tutor-jobs', 'science-tutor-jobs', 'english-tutor-jobs', 'primary-tutor-jobs', 'online-tutor-jobs', 'female-tutor-jobs'];

    /** Topic pages drawn in the pink women-tutor role (nx-roles.css). */
    public const PINK_TOPICS = ['female-tutor-jobs'];

    /** Board card keys, in display order. */
    public const BOARD_KEYS = ['cbse', 'cisce', 'ib', 'igcse', 'state'];

    /** The parent-side national page each topic links to (null: none). */
    public const TOPIC_PARENT = [
        'maths-tutor-jobs' => 'maths-home-tutor',
        'science-tutor-jobs' => 'science-home-tutor',
        'english-tutor-jobs' => 'english-home-tutor',
        'primary-tutor-jobs' => null,
        'online-tutor-jobs' => null,
        'female-tutor-jobs' => 'female-home-tutor',
    ];

    /** Short link text for a topic page. */
    public const TOPIC_LABELS = [
        'maths-tutor-jobs' => 'Maths tutor jobs',
        'science-tutor-jobs' => 'Science tutor jobs',
        'english-tutor-jobs' => 'English tutor jobs',
        'primary-tutor-jobs' => 'Primary (Class 1–5) tutor jobs',
        'online-tutor-jobs' => 'Online tutor jobs',
        'female-tutor-jobs' => 'Women tutor jobs, home and online',
    ];

    /** Cities a topic page links to, in order (only those with an active city page are used). */
    public const TOP_CITIES = ['gurugram', 'delhi', 'mumbai', 'bengaluru', 'hyderabad', 'pune', 'chennai', 'kolkata', 'noida', 'ahmedabad'];

    public static function dir(): string
    {
        return rtrim((string) config('jobs_pages.dir', database_path('seo-content/jobs')), '/\\');
    }

    /** @return array<string, mixed>|null */
    private static function read(string $kind, string $slug): ?array
    {
        static $memo = [];
        if (! preg_match('/^[a-z0-9-]+$/', $slug)) {
            return null;
        }
        $file = self::dir() . DIRECTORY_SEPARATOR . ($kind !== '' ? $kind . DIRECTORY_SEPARATOR : '') . $slug . '.json';
        $key = $file . '|' . (is_file($file) ? filemtime($file) . ':' . filesize($file) : 'none');
        if (array_key_exists($key, $memo)) {
            return $memo[$key];
        }
        $data = is_file($file) ? json_decode((string) @file_get_contents($file), true) : null;

        return $memo[$key] = is_array($data) ? $data : null;
    }

    /** @return list<string> non-empty trimmed strings */
    private static function paras(mixed $v): array
    {
        return array_values(array_filter(array_map(fn ($p) => is_string($p) ? trim($p) : '', (array) $v), fn ($p) => $p !== ''));
    }

    private static function str(mixed $v): string
    {
        return is_string($v) ? trim($v) : '';
    }

    /** @return list<array{0:string,1:string}> */
    private static function faqs(mixed $v): array
    {
        $out = [];
        foreach ((array) $v as $f) {
            if (is_array($f) && isset($f[0], $f[1]) && self::str($f[0]) !== '' && self::str($f[1]) !== '') {
                $out[] = [self::str($f[0]), self::str($f[1])];
            }
        }

        return $out;
    }

    /**
     * @return array{intro: list<string>, zone_notes: array<string,string>, boards: string, faqs: list<array{0:string,1:string}>}|null
     */
    public static function city(string $slug): ?array
    {
        $d = self::read('cities', $slug);
        $intro = self::paras($d['intro'] ?? []);
        if ($intro === []) {
            return null;
        }
        $notes = [];
        foreach ((array) ($d['zone_notes'] ?? []) as $zone => $note) {
            if (is_string($zone) && self::str($note) !== '') {
                $notes[$zone] = self::str($note);
            }
        }

        return ['intro' => $intro, 'zone_notes' => $notes, 'boards' => self::str($d['boards'] ?? ''), 'faqs' => self::faqs($d['faqs'] ?? [])] + self::v2($d);
    }

    /**
     * @return array{state: string, board: array{name:string, site:string, summary:string}|null, intro: list<string>, towns: list<array{name:string, note:string}>, faqs: list<array{0:string,1:string}>}|null
     */
    public static function state(string $slug): ?array
    {
        $d = self::read('states', $slug);
        $name = self::str($d['state'] ?? '');
        $intro = self::paras($d['intro'] ?? []);
        if ($name === '' || $intro === []) {
            return null;
        }
        $board = null;
        if (is_array($d['board'] ?? null) && self::str($d['board']['name'] ?? '') !== '') {
            $site = self::str($d['board']['site'] ?? '');
            $board = [
                'name' => self::str($d['board']['name']),
                'site' => preg_match('#^https?://#i', $site) ? $site : '',
                'summary' => self::str($d['board']['summary'] ?? ''),
            ];
        }
        $towns = [];
        foreach ((array) ($d['towns'] ?? []) as $t) {
            if (is_array($t) && self::str($t['name'] ?? '') !== '' && self::str($t['note'] ?? '') !== '') {
                $towns[] = ['name' => self::str($t['name']), 'note' => self::str($t['note'])];
            }
        }

        return ['state' => $name, 'board' => $board, 'intro' => $intro, 'towns' => $towns, 'faqs' => self::faqs($d['faqs'] ?? [])] + self::v2($d);
    }

    /**
     * @return array{title:string, description:string, h1:string, intro: list<string>, sections: list<array{h2:string, paras: list<string>}>, faqs: list<array{0:string,1:string}>}|null
     */
    public static function topic(string $slug): ?array
    {
        if (! in_array($slug, self::TOPICS, true)) {
            return null;
        }
        $d = self::read('topics', $slug);
        $title = self::str($d['title'] ?? '');
        $h1 = self::str($d['h1'] ?? '');
        $intro = self::paras($d['intro'] ?? []);
        if ($title === '' || $h1 === '' || $intro === []) {
            return null;
        }
        $sections = [];
        foreach ((array) ($d['sections'] ?? []) as $s) {
            if (is_array($s) && self::str($s['h2'] ?? '') !== '' && ($p = self::paras($s['paras'] ?? [])) !== []) {
                $sections[] = ['h2' => self::str($s['h2']), 'paras' => $p];
            }
        }

        return ['title' => $title, 'description' => self::str($d['description'] ?? ''), 'h1' => $h1, 'intro' => $intro, 'sections' => $sections, 'faqs' => self::faqs($d['faqs'] ?? [])] + self::v2($d);
    }

    /**
     * The India hub's own text (jobs/hub.json); null when absent.
     *
     * @return array{intro: list<string>, why: list<array{title:string, text:string}>, faqs: list<array{0:string,1:string}>, board_cards: list<array>, women: array|null, story: array<int,string>}|null
     */
    public static function hub(): ?array
    {
        $d = self::read('', 'hub');
        if (! $d) {
            return null;
        }

        return ['intro' => self::paras($d['intro'] ?? []), 'why' => self::why($d['why'] ?? []), 'faqs' => self::faqs($d['faqs'] ?? [])] + self::v2($d);
    }

    /**
     * The v2 fields shared by every file.
     *
     * @return array{board_cards: list<array{key:string,name:string,site:string,classes:string,note:string}>, women: array{intro:string, points: list<string>}|null, story: array<int,string>}
     */
    private static function v2(?array $d): array
    {
        $cards = [];
        foreach ((array) ($d['board_cards'] ?? []) as $c) {
            $key = is_array($c) ? strtolower(self::str($c['key'] ?? '')) : '';
            if (! in_array($key, self::BOARD_KEYS, true) || self::str($c['name'] ?? '') === '') {
                continue;
            }
            $site = self::str($c['site'] ?? '');
            $cards[] = [
                'key' => $key,
                'name' => self::str($c['name']),
                'site' => preg_match('#^https?://#i', $site) ? $site : '',
                'classes' => self::str($c['classes'] ?? ''),
                'note' => self::str($c['note'] ?? ''),
            ];
        }
        $women = null;
        if (is_array($d['women'] ?? null)) {
            $intro = self::str($d['women']['intro'] ?? '');
            $points = self::paras($d['women']['points'] ?? []);
            if ($intro !== '' || $points !== []) {
                $women = ['intro' => $intro, 'points' => $points];
            }
        }
        // Captions keep their panel position; a blank one falls back to that panel's default.
        $story = [];
        foreach (array_slice(array_values((array) ($d['story'] ?? [])), 0, 6) as $i => $cap) {
            if (self::str($cap) !== '') {
                $story[$i] = self::str($cap);
            }
        }

        return ['board_cards' => $cards, 'women' => $women, 'story' => $story];
    }

    /** "why" items: strings ("Title. Text", or text alone) or {"title","text"}. */
    private static function why(mixed $v): array
    {
        $out = [];
        foreach ((array) $v as $w) {
            if (is_array($w)) {
                $t = self::str($w['title'] ?? '');
                $x = self::str($w['text'] ?? '');
            } else {
                $x = self::str($w);
                $t = '';
                if (preg_match('/^([^.:!?]{3,60})[.:]\s+(.+)$/su', $x, $m)) {
                    [$t, $x] = [trim($m[1]), trim($m[2])];
                }
            }
            if ($x !== '') {
                $out[] = ['title' => $t, 'text' => $x];
            }
        }

        return $out;
    }

    /** Topic slugs whose page is live (JSON present and usable), in TOPICS order. */
    public static function liveTopics(): array
    {
        return array_values(array_filter(self::TOPICS, fn ($t) => self::topic($t) !== null));
    }

    /**
     * States that have written text: slug => state name.
     *
     * @return array<string, string>
     */
    public static function writtenStates(): array
    {
        $out = [];
        foreach (glob(self::dir() . DIRECTORY_SEPARATOR . 'states' . DIRECTORY_SEPARATOR . '*.json') ?: [] as $f) {
            $slug = basename($f, '.json');
            if (($s = self::state($slug)) !== null) {
                $out[$slug] = $s['state'];
            }
        }
        ksort($out);

        return $out;
    }

    /**
     * Escape a content string and turn our own site paths written in it
     * ("/pricing", "(/how-we-verify-tutors)", "/city/raipur") into links. JSON content is
     * plain text, so this is the only markup it ever gets.
     */
    public static function rich(?string $text): \Illuminate\Support\HtmlString
    {
        $html = e((string) $text);
        $html = preg_replace_callback(
            '#(?<![\w/.])/(pricing|how-we-verify-tutors|become-a-tutor|demo-class|safeguarding-policy|tutor-terms|female-home-tutor|tutors|tuition-jobs(?:/[a-z0-9-]+){0,2}|city/[a-z0-9-]+|[a-z0-9-]+-tutor-jobs)(?![\w/-])#',
            fn ($m) => '<a href="' . e(url('/' . $m[1])) . '">/' . e($m[1]) . '</a>',
            $html
        );

        return new \Illuminate\Support\HtmlString((string) $html);
    }
}
