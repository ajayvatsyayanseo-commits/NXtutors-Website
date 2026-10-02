<?php

namespace App\Support;

use Illuminate\Support\Facades\Cache;

/**
 * The internal-link "nest" for every city: hub → zones → areas, hub →
 * boards → board × subject → classes, and the links back up and across.
 * Everything is computed from what already exists (config/subject_pages.php,
 * config/zones.php, the zone JSON, the active area pages), so a new city
 * page, zone or area joins the nest without anyone editing a link list.
 *
 *  - Subject / board / class / exam pages: the city's live zones, a rotating
 *    set of localities (every area gets at least two links from the city's
 *    pages when there are enough pages), and the board ladder.
 *  - Area pages: their zone, 4–6 city pages picked by the zone's board mix
 *    (optional "boards" list in database/seo-content/zones/{city}.json), and
 *    nearby areas in the zone.
 *  - City blog posts: hub, the zones the post's area links fall in, and
 *    4–6 city pages.
 */
class LinkNest
{
    public const LOCALITIES_MIN = 8;

    public const LOCALITIES_MAX = 12;

    /** Each area should get at least this many links from the city's subject pages. */
    public const LOCALITY_COVER = 2;

    /** City page URL slug for a city ("gurugram"), or null. */
    public static function citySlugOf(array $page): ?string
    {
        return ! empty($page['city_slug']) ? (string) $page['city_slug'] : null;
    }

    /** The name parents use in link text: "Gurgaon" for Gurugram, "Jamshedpur" for tata. */
    public static function cityLabel(string $citySlug, ?string $name = null): string
    {
        if ($citySlug === 'gurugram') {
            return 'Gurgaon';
        }

        return Geo::displayName($citySlug, $name ?: ucwords(str_replace('-', ' ', $citySlug)));
    }

    /**
     * One "Teach in {City}" chip to /tuition-jobs/{city} for a city subject
     * page, or null when the page is national or its written body already
     * links the city's jobs page (one link per page is enough).
     *
     * @return array{url:string, label:string}|null
     */
    public static function jobsChip(array $page): ?array
    {
        $city = self::citySlugOf($page);
        if (! $city) {
            return null;
        }
        $url = url('/tuition-jobs/' . $city);
        $view = 'subjects.content.' . ($page['view'] ?? '');
        try {
            $body = view()->exists($view) ? (string) @file_get_contents(view()->getFinder()->find($view)) : '';
        } catch (\Throwable $e) {
            $body = '';
        }
        if (str_contains($body, "/tuition-jobs/" . $city . "'") || str_contains($body, $url)) {
            return null;
        }

        return ['url' => $url, 'label' => 'Teach in ' . self::cityLabel($city, $page['city'] ?? null)];
    }

    /**
     * Active area pages of a city grouped by zone, zones in config order,
     * areas by name; areas with no zone last under ''. Redirected slugs
     * (config/area_redirects.php) are left out.
     *
     * @return array<string, list<object{name:string, slug:string, url:string, zone:?string}>>
     */
    public static function areasByZone(string $citySlug): array
    {
        return Cache::remember('linknest.areas.v1.' . $citySlug, 3600, function () use ($citySlug) {
            $cityName = Zones::cityKey($citySlug);
            $redirects = (array) config('area_redirects.' . $citySlug, []);
            $zones = array_keys(config('zones.' . $cityName, []));
            $out = array_fill_keys($zones, []);
            $out[''] = [];
            foreach (CityHub::areaList($citySlug)->unique('slug') as $a) {
                if (isset($redirects[$a->slug])) {
                    continue;
                }
                $zone = CityHub::zoneOfArea($citySlug, $cityName, $a);
                $out[$zone ?? ''][] = (object) [
                    'name' => CityHub::cleanAreaName($a->name, $a->slug),
                    'slug' => $a->slug,
                    'url' => url('/city/' . $citySlug . '/' . $a->slug),
                    'zone' => $zone,
                ];
            }
            foreach ($out as $z => $list) {
                usort($list, fn ($x, $y) => strnatcasecmp($x->name, $y->name));
                $out[$z] = $list;
            }

            return array_filter($out, fn ($l) => $l !== []);
        });
    }

    /** All areas, interleaved one per zone in turn, so any run of them spans many zones. */
    public static function interleavedAreas(string $citySlug): array
    {
        $groups = array_values(self::areasByZone($citySlug));
        $out = [];
        for ($i = 0, $max = max(array_map('count', $groups ?: [[]])); $i < $max; $i++) {
            foreach ($groups as $g) {
                if (isset($g[$i])) {
                    $out[] = $g[$i];
                }
            }
        }

        return $out;
    }

    /**
     * The localities a city page links to: a window of 8–12 areas from the
     * interleaved list (so it spans zones). Pages take consecutive windows in
     * the order of a hash of their key, so the windows tile the list and every
     * area is linked from at least LOCALITY_COVER pages whenever the city has
     * enough pages (pages × 12 ≥ 2 × areas). Deterministic: same config, same links.
     *
     * @param  list<string>|null  $pageKeys  the city's pages that show the block (default: all live)
     * @return list<object{name:string, slug:string, url:string, zone:?string}>
     */
    public static function localities(string $citySlug, string $pageKey, ?array $pageKeys = null): array
    {
        $areas = self::interleavedAreas($citySlug);
        $a = count($areas);
        if ($a === 0) {
            return [];
        }
        $keys = $pageKeys ?? array_keys(SubjectLinks::cityPages($citySlug));
        if (! in_array($pageKey, $keys, true)) {
            $keys[] = $pageKey;
        }
        usort($keys, fn ($x, $y) => [crc32($x), $x] <=> [crc32($y), $y]);
        $n = count($keys);
        $idx = (int) array_search($pageKey, $keys, true);

        $k = self::windowSize($a, $n);
        if ($a <= $k) {
            return $areas;
        }
        $out = [];
        for ($i = 0; $i < $k; $i++) {
            $out[] = $areas[($idx * $k + $i) % $a];
        }

        return $out;
    }

    /** Areas per page: enough for LOCALITY_COVER links each, within 8–12. */
    public static function windowSize(int $areas, int $pages): int
    {
        return max(self::LOCALITIES_MIN, min(self::LOCALITIES_MAX, (int) ceil(self::LOCALITY_COVER * $areas / max(1, $pages))));
    }

    /**
     * Live zone pages of a city with a one-line hint ("Andheri East, Andheri
     * West and 4 more").
     *
     * @return list<object{name:string, url:string, hint:string}>
     */
    public static function zones(string $citySlug): array
    {
        $byZone = self::areasByZone($citySlug);

        return ZonePages::live($citySlug)->map(function ($z) use ($byZone) {
            $names = array_map(fn ($a) => $a->name, $byZone[$z->name] ?? []);
            $hint = match (true) {
                count($names) === 0 => '',
                count($names) <= 2 => implode(' and ', $names),
                default => $names[0] . ', ' . $names[1] . ' and ' . (count($names) - 2) . ' more',
            };

            return (object) ['name' => $z->name, 'url' => $z->url, 'hint' => $hint];
        })->values()->all();
    }

    /**
     * A zone's board mix from the optional "boards" list in its zone JSON
     * entry (e.g. ["IB", "IGCSE", "ICSE", "CBSE"]); [] when absent.
     *
     * @return list<string>
     */
    public static function zoneBoards(string $citySlug, ?string $zone): array
    {
        if ($zone === null) {
            return [];
        }
        $f = ZonePages::file($citySlug);
        if (! is_file($f)) {
            return [];
        }
        static $memo = [];
        $sig = $f . '|' . filemtime($f);
        $memo[$sig] ??= (array) (json_decode((string) file_get_contents($f), true) ?: []);
        $boards = $memo[$sig][$zone]['boards'] ?? [];

        return is_array($boards) ? array_values(array_filter($boards, 'is_string')) : [];
    }

    /**
     * The board ladder for a city page: board hub ↔ its board × subject pages
     * ↔ relevant class pages, and a subject page ↔ its board × subject pages.
     * Same city only.
     *
     * @return list<array{url:string, label:string}>
     */
    public static function ladder(string $key, array $page): array
    {
        $city = self::citySlugOf($page);
        if (! $city) {
            return [];
        }
        $pages = SubjectLinks::cityPages($city);
        $me = $pages[$key] ?? ($page + ['kind' => SubjectLinks::kind($page, $key), 'boards' => SubjectLinks::boardsOf($page, $key)]);
        $kind = $me['kind'];
        $myBoards = $me['boards'] ?? [];
        $shares = fn ($p) => array_intersect($p['boards'] ?? [], $myBoards) !== [];
        $classesFor = function (array $boards) use ($pages) {
            $senior = array_intersect($boards, ['IB', 'IGCSE']) !== [];

            return array_filter($pages, function ($p) use ($senior) {
                $n = SubjectLinks::classNumbers($p);
                if ($p['kind'] !== 'class' || $n === [] || max($n) < 6) {
                    return false;
                }

                return ! $senior || max($n) >= 9;
            });
        };

        $out = match ($kind) {
            'board' => array_merge(
                array_filter($pages, fn ($p) => $p['kind'] === 'board_subject' && $shares($p)),
                $classesFor($myBoards)
            ),
            'board_subject' => array_merge(
                array_filter($pages, fn ($p) => $p['kind'] === 'board' && $shares($p)),
                array_filter($pages, fn ($p) => $p['kind'] === 'subject' && ($p['subject'] ?? null) === ($page['subject'] ?? null)),
                array_filter($pages, fn ($p) => $p['kind'] === 'board_subject' && $shares($p)),
                $classesFor($myBoards)
            ),
            'subject' => array_filter($pages, fn ($p) => $p['kind'] === 'board_subject' && ($p['subject'] ?? null) === ($page['subject'] ?? null)),
            'class' => array_merge(
                array_filter($pages, function ($p) use ($page) {
                    if ($p['kind'] !== 'board') {
                        return false;
                    }
                    $n = SubjectLinks::classNumbers($page);
                    $senior = array_intersect($p['boards'], ['IB', 'IGCSE']) !== [];

                    return $n !== [] && max($n) >= 6 && (! $senior || max($n) >= 9);
                }),
                array_filter($pages, fn ($p) => $p['kind'] === 'exam' && array_intersect(SubjectLinks::classNumbers($page), [11, 12]) !== [])
            ),
            'exam' => array_filter($pages, fn ($p) => $p['kind'] === 'class' && array_intersect(SubjectLinks::classNumbers($p), [11, 12]) !== []),
            default => [],
        };

        $seen = [];
        $links = [];
        foreach ($out as $p) {
            if ($p['key'] === $key || isset($seen[$p['key']])) {
                continue;
            }
            $seen[$p['key']] = true;
            $links[] = ['url' => $p['url'], 'label' => $p['anchor']];
        }

        return $links;
    }

    /**
     * 4–6 city pages for an area page: the zone's boards first (its board mix
     * when written, else a rotation by the area), then subjects and exams in a
     * rotation by the area, so neighbouring pages differ. Link text names the
     * area ("IB tutors near Bandra West").
     *
     * @return list<array{url:string, label:string}>
     */
    public static function forArea(string $citySlug, string $areaSlug, string $areaName, ?string $zone, int $count = 6): array
    {
        $pages = SubjectLinks::cityPages($citySlug);
        if ($pages === []) {
            return array_map(fn ($p) => ['url' => $p['url'], 'label' => $p['label']], array_slice(SubjectLinks::forCity($citySlug), 0, $count));
        }
        $hint = self::zoneBoards($citySlug, $zone);
        $seed = crc32($areaSlug);
        $rotate = function (array $list) use ($seed) {
            $list = array_values($list);
            $n = count($list);

            return $n ? array_merge(array_slice($list, $seed % $n), array_slice($list, 0, $seed % $n)) : [];
        };

        $boards = array_values(array_filter($pages, fn ($p) => $p['kind'] === 'board'));
        $boards = $hint ? SubjectLinks::sortByBoards($boards, $hint) : $rotate($boards);
        $picked = array_slice($boards, 0, 2);
        if ($hint) {
            // The zone's leading board's subject page too, when the city has one (IB maths for an IB-heavy zone).
            $lead = SubjectLinks::boardsOf(['board' => $hint[0]]);
            foreach (array_filter($pages, fn ($p) => $p['kind'] === 'board_subject') as $p) {
                if (array_intersect($p['boards'], $lead) !== []) {
                    $picked[] = $p;
                    break;
                }
            }
        }
        $subjects = $rotate(array_filter($pages, fn ($p) => in_array($p['kind'], ['subject', 'exam'], true)));
        // Spread the subject picks (every other one) so two adjacent areas rarely share all of them.
        $spread = [];
        foreach ([0, 2, 4, 1, 3, 5, 6, 7, 8, 9] as $i) {
            if (isset($subjects[$i])) {
                $spread[] = $subjects[$i];
            }
        }
        foreach ($spread as $p) {
            if (count($picked) >= $count) {
                break;
            }
            $picked[] = $p;
        }
        if (count($picked) < 4) {
            foreach ($pages as $p) {
                if (count($picked) >= 4) {
                    break;
                }
                if (! in_array($p, $picked, true)) {
                    $picked[] = $p;
                }
            }
        }

        return array_map(fn ($p) => ['url' => $p['url'], 'label' => self::nearLabel($p, $areaName)], $picked);
    }

    /** "IB Tutors in Mumbai" → "IB tutors near Bandra West". */
    public static function nearLabel(array $p, string $place): string
    {
        $base = trim((string) preg_replace('/\s+in\s+[^()]*$/u', '', $p['anchor'] ?? SubjectLinks::anchor($p)));
        $base = SubjectLinks::lcLabel($base);

        return ucfirst($base) . ' near ' . $place;
    }

    /**
     * Other areas near an area: the rest of its zone (the ones either side of
     * it by name), topped up from the neighbouring zones in config order when
     * the zone is small.
     *
     * @return list<object{name:string, slug:string, url:string, zone:?string}>
     */
    public static function nearby(string $citySlug, ?string $zone, string $areaSlug, int $count = 8): array
    {
        $byZone = self::areasByZone($citySlug);
        $same = array_values(array_filter($byZone[$zone ?? ''] ?? [], fn ($a) => $a->slug !== $areaSlug));
        if (count($same) > $count) {
            $all = $byZone[$zone ?? ''];
            $pos = (int) array_search($areaSlug, array_map(fn ($a) => $a->slug, $all), true);
            $start = max(0, min($pos - intdiv($count, 2), count($same) - $count));
            $same = array_slice($same, $start, $count);
        }
        if ($zone !== null && count($same) < 3) {
            $zones = array_keys(array_filter($byZone, fn ($l, $z) => $z !== '', ARRAY_FILTER_USE_BOTH));
            $i = array_search($zone, $zones, true);
            if ($i !== false) {
                foreach ([$i - 1, $i + 1] as $j) {
                    if (! isset($zones[$j])) {
                        continue;
                    }
                    foreach (array_slice($byZone[$zones[$j]], 0, 3) as $a) {
                        if (count($same) < 6) {
                            $same[] = $a;
                        }
                    }
                }
            }
        }

        return $same;
    }

    /**
     * For a blog post about a city: the city, the zones its area links fall
     * in (all live zones for a city-wide post such as the fee guide), and
     * 4–6 city pages. Null when the post is not about one city.
     *
     * The city comes from, in order: the zone guides that name this post
     * (config/zone_guides.php), the city most linked in the post body
     * (/city/{city}/…), or the city named in the slug.
     *
     * @return array{city_slug:string, city:string, hub:string, zones:list<object>, pages:list<array{url:string,label:string}>}|null
     */
    public static function forBlog(string $slug, ?string $html): ?array
    {
        $slug = trim($slug);
        $city = null;
        $zoneNames = [];

        foreach ((array) config('zone_guides', []) as $cityKey => $zones) {
            foreach ((array) $zones as $zone => $g) {
                if (($g['guide'] ?? null) === $slug) {
                    $city = Geo::slugFor((string) $cityKey) ?: null;
                    $zoneNames[] = (string) $zone;
                }
            }
            if ($city) {
                break;
            }
        }

        $areaSlugs = [];
        $linkedZones = [];
        if (preg_match_all('#/city/([a-z0-9-]+)(?:/(zone/)?([a-z0-9-]+))?#i', (string) $html, $m, PREG_SET_ORDER)) {
            $counts = [];
            foreach ($m as $hit) {
                $c = strtolower($hit[1]);
                $counts[$c] = ($counts[$c] ?? 0) + 1;
                if (! empty($hit[3])) {
                    if (! empty($hit[2])) {
                        $linkedZones[$c][] = strtolower($hit[3]);
                    } else {
                        $areaSlugs[$c][] = strtolower($hit[3]);
                    }
                }
            }
            if (! $city) {
                arsort($counts);
                foreach (array_keys($counts) as $c) {
                    if (isset(Geo::CITIES[$c])) {
                        $city = $c;
                        break;
                    }
                }
            }
        }

        if (! $city) {
            foreach (Geo::CITIES as $c => $cfg) {
                $words = array_filter([$c, strtolower(str_replace(' ', '-', (string) ($cfg['aka'] ?? '')))]);
                foreach ($words as $w) {
                    if (preg_match('/(^|-)' . preg_quote($w, '/') . '(-|$)/', $slug)) {
                        $city = $c;
                        break 2;
                    }
                }
            }
        }

        if (! $city || (SubjectLinks::cityPages($city) === [] && config('zones.' . Zones::cityKey($city), []) === [])) {
            return null;
        }

        // Zones from the post's area links.
        $byZone = self::areasByZone($city);
        $zoneOfSlug = [];
        foreach ($byZone as $z => $list) {
            foreach ($list as $a) {
                $zoneOfSlug[$a->slug] = $z;
            }
        }
        foreach (array_unique($areaSlugs[$city] ?? []) as $s) {
            if (! empty($zoneOfSlug[$s])) {
                $zoneNames[] = $zoneOfSlug[$s];
            }
        }
        foreach (array_unique($linkedZones[$city] ?? []) as $zs) {
            if ($z = Zones::fromSlug($city, $zs)) {
                $zoneNames[] = $z;
            }
        }
        $zoneNames = array_values(array_unique($zoneNames));

        $live = collect(self::zones($city));
        $zones = $zoneNames
            ? $live->filter(fn ($z) => in_array($z->name, $zoneNames, true))->values()->all()
            : $live->all();

        // Pages: boards ordered by the zones' board mix, then a rotation of subjects.
        $hint = [];
        foreach ($zoneNames as $z) {
            $hint = array_merge($hint, self::zoneBoards($city, $z));
        }
        $pages = SubjectLinks::cityPages($city);
        $picked = [];
        if ($pages) {
            $boards = SubjectLinks::sortByBoards(array_values(array_filter($pages, fn ($p) => $p['kind'] === 'board')), array_values(array_unique($hint)));
            $picked = array_slice($boards, 0, 2);
            $subjects = array_values(array_filter($pages, fn ($p) => in_array($p['kind'], ['subject', 'exam'], true)));
            $n = count($subjects);
            for ($i = 0; $i < $n && count($picked) < 6; $i++) {
                $picked[] = $subjects[(crc32($slug) + $i) % $n];
            }
            $picked = array_map(fn ($p) => ['url' => $p['url'], 'label' => $p['anchor']], $picked);
        } else {
            $picked = array_map(fn ($p) => ['url' => $p['url'], 'label' => $p['label']], array_slice(SubjectLinks::forCity($city), 0, 6));
        }

        $name = Geo::displayName($city, Zones::cityKey($city));

        return [
            'city_slug' => $city,
            'city' => $name,
            'hub' => url('/city/' . $city),
            'hub_label' => 'Home tutors in ' . self::cityLabel($city, $name),
            'zones' => $zones,
            'pages' => $picked,
        ];
    }
}
