<?php

namespace App\Support;

use Illuminate\Support\Collection;

/**
 * Zone pages: /city/{city}/zone/{zone} (config/zones.php).
 *
 * A zone page is live, indexable and in sitemap-zones.xml ONLY when both:
 *   1. its text exists in database/seo-content/zones/{citySlug}.json, as
 *      {"Zone Name": {"intro": ["para", ...], "faqs": [["q?", "a"], ...]}}
 *      with at least one non-empty intro paragraph; and
 *   2. the zone has at least MIN_AREAS active area pages (Zones::areasIn).
 * Otherwise the URL is a 404: no thin, templated zone pages.
 *
 * The zone tips (config/zone_guides.php) are shown on the page; the guide's
 * intro paragraphs are not, because every area page in the zone shows them.
 */
class ZonePages
{
    public const MIN_AREAS = 3;

    /** Where the per-city JSON lives; tests point this at a fixture folder. */
    public static function dir(): string
    {
        return rtrim((string) config('zone_pages.dir', database_path('seo-content/zones')), '/\\');
    }

    public static function file(string $citySlug): string
    {
        return self::dir() . DIRECTORY_SEPARATOR . $citySlug . '.json';
    }

    /**
     * The written text for a zone, cleaned, or null when there is none.
     *
     * @return array{intro: list<string>, faqs: list<array{0:string,1:string}>}|null
     */
    public static function content(string $citySlug, string $zone): ?array
    {
        $entry = self::all($citySlug)[$zone] ?? null;
        if (! is_array($entry)) {
            return null;
        }

        $intro = array_values(array_filter(array_map(fn ($p) => is_string($p) ? trim($p) : '', (array) ($entry['intro'] ?? [])), fn ($p) => $p !== ''));
        if ($intro === []) {
            return null;
        }

        $faqs = [];
        foreach ((array) ($entry['faqs'] ?? []) as $f) {
            if (is_array($f) && isset($f[0], $f[1]) && is_string($f[0]) && is_string($f[1]) && trim($f[0]) !== '' && trim($f[1]) !== '') {
                $faqs[] = [trim($f[0]), trim($f[1])];
            }
        }

        return ['intro' => $intro, 'faqs' => $faqs];
    }

    /** Last change to the city's zone text (file mtime), Y-m-d, or null. */
    public static function lastmod(string $citySlug): ?string
    {
        $f = self::file($citySlug);

        return is_file($f) ? date('Y-m-d', (int) filemtime($f)) : null;
    }

    /** Whether the zone page passes the gate (text written + enough area pages). */
    public static function isLive(string $citySlug, string $zone): bool
    {
        return self::content($citySlug, $zone) !== null
            && Zones::areasIn($citySlug, $zone)->count() >= self::MIN_AREAS;
    }

    /**
     * Live zone pages of a city, in config order.
     *
     * @return Collection<int, object{name:string, slug:string, url:string, areas:int}>
     */
    public static function live(string $citySlug): Collection
    {
        $zones = array_keys(config('zones.' . Zones::cityKey($citySlug), []));
        if ($zones === [] || self::all($citySlug) === []) {
            return collect();
        }

        return collect($zones)
            ->filter(fn ($z) => self::content($citySlug, (string) $z) !== null)
            ->map(fn ($z) => (object) [
                'name' => (string) $z,
                'slug' => Zones::slug((string) $z),
                'url' => self::url($citySlug, (string) $z),
                'areas' => Zones::areasIn($citySlug, (string) $z)->count(),
            ])
            ->filter(fn ($z) => $z->areas >= self::MIN_AREAS)
            ->values();
    }

    /** The zone page URL when it is live, else null (for links from hubs and area pages). */
    public static function liveUrl(string $citySlug, ?string $zone): ?string
    {
        return $zone !== null && self::isLive($citySlug, $zone) ? self::url($citySlug, $zone) : null;
    }

    public static function url(string $citySlug, string $zone): string
    {
        return url('/city/' . $citySlug . '/zone/' . Zones::slug($zone));
    }

    /**
     * Title (≤65 chars), H1 and meta description (140–160 chars) for a zone.
     * "Gurgaon" in the title for Gurugram, as on area pages.
     *
     * @return array{title:string, h1:string, desc:string}
     */
    public static function seo(string $citySlug, string $cityName, string $zone): array
    {
        $titleCity = $citySlug === 'gurugram' && Geo::akaOf($citySlug) ? Geo::akaOf($citySlug) : $cityName;
        $base = 'Home Tutors in ' . $zone . ', ' . $titleCity;
        $title = collect([$base . ' – Free Demo | NXTutors', $base . ' | NXTutors', $base, 'Home Tutors in ' . $zone . ' | NXTutors', 'Home Tutors in ' . $zone])
            ->first(fn ($t) => mb_strlen($t) <= 65) ?? mb_substr('Home Tutors in ' . $zone, 0, 65);

        $place = $zone . ', ' . $cityName;
        $leads = [
            'Home tutors in ' . $place . ' for CBSE, ICSE, IB and IGCSE, Classes 1–12, JEE and NEET.',
            'Home tutors in ' . $place . ' for CBSE, ICSE, IB, IGCSE, JEE and NEET.',
            'Home tutors in ' . $place . ': CBSE, ICSE, IB, JEE, NEET.',
            'Home tutors in ' . $place . '.',
        ];
        $tails = [
            ' Most fees ₹800–2,500/hr; see two or three matched tutors and book a free demo class.',
            ' Most fees ₹800–2,500/hr; compare matched tutors and book a free demo class.',
            ' Most fees ₹800–2,500/hr; free demo class.',
            ' Free demo class.',
        ];
        $desc = null;
        foreach ($leads as $l) {
            foreach ($tails as $t) {
                $len = mb_strlen($l . $t);
                if ($len >= 140 && $len <= 160) {
                    $desc = $l . $t;
                    break 2;
                }
            }
        }
        if ($desc === null) {
            // Very long or very short zone names: the closest fit, cut at a word.
            $desc = $leads[0] . $tails[0];
            if (mb_strlen($desc) > 160) {
                $desc = rtrim(mb_substr($desc, 0, 157), " ,;.") . '…';
            }
        }

        return ['title' => $title, 'h1' => 'Home Tutors in ' . $zone . ', ' . $cityName, 'desc' => $desc];
    }

    /** @return array<string, mixed> the city's JSON, decoded; [] when absent or invalid. */
    private static function all(string $citySlug): array
    {
        static $memo = [];
        $f = self::file($citySlug);
        clearstatcache(true, $f);
        if (! is_file($f)) {
            return [];
        }
        $key = $f . '|' . filemtime($f) . '|' . filesize($f);
        if (! array_key_exists($key, $memo)) {
            $data = json_decode((string) file_get_contents($f), true);
            $memo[$key] = is_array($data) ? $data : [];
        }

        return $memo[$key];
    }
}
