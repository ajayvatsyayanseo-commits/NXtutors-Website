<?php

namespace App\Support;

use App\Models\Register;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * The link and data blocks shared by city pages, area pages and generated
 * /p/ pages: who teaches in a city, which generated pages belong to it, which
 * of those belong to one area, and which guides to point to.
 *
 * Everything here is read-only and cached for an hour. It exists so each of
 * the 3,000+ local pages links up (area → city → state → India) and across
 * (sibling areas, sibling subjects) using the pages that already exist,
 * instead of leaving most of them reachable only from the sitemap.
 */
class CityHub
{
    /** Board / exam groups, in display order, matched against a page's slug and title. */
    public const TRACKS = [
        'jee'   => ['JEE',   '/\bjee\b/'],
        'neet'  => ['NEET',  '/\bneet\b/'],
        'ib'    => ['IB',    '/\bib\b/'],
        'igcse' => ['IGCSE', '/\bigcse\b/'],
        'icse'  => ['ICSE & ISC', '/\b(icse|isc)\b/'],
        'cbse'  => ['CBSE',  '/\bcbse\b/'],
        'other' => ['More subjects', '/.*/'],
    ];

    /** Visible tutors whose city is this city page (any spelling), newest first. */
    public static function tutors(string $citySlug, int $limit = 6): Collection
    {
        $names = self::rawNames('register', $citySlug);
        if (! $names) {
            return collect();
        }

        return Register::where('join_as', 'teacher')
            ->publiclyVisible()
            ->whereIn('city', $names)
            ->orderByDesc('user_id')
            ->limit($limit)
            ->get();
    }

    /**
     * Published generated pages for a city page: slug, title, location.
     *
     * @return Collection<int, object{slug:string, title:string, location:?string}>
     */
    public static function pages(string $citySlug): Collection
    {
        return collect(Cache::remember("cityhub.pages.v1.$citySlug", 3600, function () use ($citySlug) {
            $names = self::rawNames('generated_pages', $citySlug);
            if (! $names) {
                return [];
            }

            return DB::table('generated_pages')
                ->where('status', 'published')
                ->whereIn('city', $names)
                ->orderBy('title')
                ->get(['slug', 'title', 'location'])
                ->map(fn ($p) => (object) ['slug' => $p->slug, 'title' => $p->title, 'location' => $p->location])
                ->all();
        }));
    }

    /** Group pages by board / exam track. @return array<string, Collection> */
    public static function byTrack(Collection $pages): array
    {
        $out = [];
        foreach ($pages as $p) {
            $hay = strtolower(str_replace('-', ' ', $p->slug . ' ' . $p->title));
            foreach (self::TRACKS as $key => [, $re]) {
                if (preg_match($re, $hay)) {
                    $out[$key][] = $p;
                    break;
                }
            }
        }

        $ordered = [];
        foreach (array_keys(self::TRACKS) as $key) {
            if (! empty($out[$key])) {
                $ordered[$key] = collect($out[$key]);
            }
        }

        return $ordered;
    }

    /**
     * Generated pages about one area: the page's location names the area
     * ("DLF Phase 4", "Sector 49"), or its slug contains the area's slug.
     */
    public static function pagesForArea(Collection $cityPages, object $area): Collection
    {
        $areaKeys = array_filter([self::norm($area->name ?? ''), self::norm(str_replace('-', ' ', $area->slug ?? ''))]);
        $areaSlug = trim((string) ($area->slug ?? ''), '-');

        return $cityPages->filter(function ($p) use ($areaKeys, $areaSlug) {
            $loc = self::norm($p->location ?? '');
            if ($loc !== '') {
                foreach ($areaKeys as $k) {
                    if ($loc === $k || preg_match('/\b' . preg_quote($loc, '/') . '\b/', $k)) {
                        return true;
                    }
                }
            }

            return $areaSlug !== '' && strlen($areaSlug) >= 6 && str_contains($p->slug, $areaSlug);
        })->values();
    }

    /**
     * The area page a generated page's location belongs to, if there is one:
     * the area whose name is the location ("DLF Phase 4") or contains it as
     * whole words ("Vatika City, Sector 49" for "Sector 49").
     *
     * @return object{name:string, slug:string}|null
     */
    public static function areaFor(string $citySlug, ?string $location): ?object
    {
        $loc = self::norm($location);
        if ($loc === '') {
            return null;
        }

        $areas = collect(Cache::remember("cityhub.areas.v1.$citySlug", 3600, fn () => DB::table('city_area_list_managment as a')
            ->join('city_managment as c', 'c.id', '=', 'a.city_id')
            ->where('c.slug', $citySlug)->where('a.status', 't')
            ->whereNotNull('a.slug')->where('a.slug', '!=', '')
            ->orderBy('a.name')
            ->get(['a.name', 'a.slug'])
            ->map(fn ($a) => (object) ['name' => (string) $a->name, 'slug' => (string) $a->slug])
            ->all()));

        return $areas->first(fn ($a) => self::norm($a->name) === $loc)
            ?? $areas->first(fn ($a) => (bool) preg_match('/\b' . preg_quote($loc, '/') . '\b/', self::norm($a->name)));
    }

    /**
     * Guides to show on a city or area page: the local posts for the given
     * area slugs first, then a few national board / exam guides.
     */
    public static function guides(array $areaSlugs = [], int $national = 6): Collection
    {
        $posts = collect(Cache::remember('cityhub.blogs.v1', 3600, fn () => DB::table('blog_managment')
            ->where('status', 't')->whereNotNull('slug')->where('slug', '!=', '')
            ->orderByDesc('id')->get(['title', 'slug'])
            ->map(fn ($b) => (object) ['title' => $b->title, 'slug' => trim($b->slug)])->all()));

        $local = $areaSlugs
            ? $posts->filter(fn ($b) => in_array(BlogTopics::localityOf($b->slug), $areaSlugs, true))
            : collect();

        $nat = $posts->filter(fn ($b) => in_array(BlogTopics::of($b->slug), ['boards', 'entrance', 'choose'], true))
            ->take($national);

        return $local->values()->concat($nat->values());
    }

    /**
     * The spellings of this city actually present in a table's `city` column,
     * so queries can use a plain whereIn on the index instead of LOWER().
     *
     * @return string[]
     */
    public static function rawNames(string $table, string $citySlug): array
    {
        $all = Cache::remember("cityhub.rawnames.v1.$table", 3600, fn () => DB::table($table)
            ->whereNotNull('city')->where('city', '!=', '')
            ->distinct()->pluck('city')->all());

        return array_values(array_filter($all, fn ($name) => Geo::slugFor($name) === $citySlug
            || self::norm($name) === self::norm(str_replace('-', ' ', $citySlug))));
    }

    private static function norm(?string $s): string
    {
        return trim(preg_replace('/[^a-z0-9]+/', ' ', strtolower((string) $s)));
    }
}
