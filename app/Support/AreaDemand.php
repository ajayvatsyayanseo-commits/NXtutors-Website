<?php

namespace App\Support;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Throwable;

/**
 * "Recent tutor requests near {area}" on area pages: what families nearby
 * asked NXTutors for, from demo requests (demo_leads), anonymised.
 *
 * Agreed with Ajay on 30 Sep 2026, with these safeguards:
 *  - only class, board and subject are shown, and only as labels from the
 *    fixed lists below, so no free text a parent typed can ever appear;
 *  - never a name, phone, email, society, school or exact date: the month only;
 *  - nothing unless the area (or, failing that, its zone) has at least
 *    MIN_REQUESTS requests in the window, so one family cannot be singled out;
 *  - test entries are skipped; nothing is invented when data is thin.
 * The privacy policy says we do this.
 */
class AreaDemand
{
    public const MIN_REQUESTS = 3;
    private const DAYS = 180;
    private const SHOW = 6;

    private const BOARDS = [
        'IB DP' => '/\b(ib\s*dp|diploma|ibdp)\b/i',
        'IB MYP' => '/\b(myp)\b/i',
        'IB PYP' => '/\b(pyp)\b/i',
        'IB' => '/\bib\b/i',
        'IGCSE' => '/\bigcse\b/i',
        'ISC' => '/\bisc\b/i',
        'ICSE' => '/\bicse\b/i',
        'CBSE' => '/\bcbse\b/i',
    ];

    private const SUBJECTS = [
        'Maths' => '/\bmath(s|ematics)?\b/i',
        'Physics' => '/\bphysics\b/i',
        'Chemistry' => '/\bchemistry\b/i',
        'Biology' => '/\bbiology\b/i',
        'Science' => '/\bscience\b/i',
        'English' => '/\benglish\b/i',
        'Hindi' => '/\bhindi\b/i',
        'Sanskrit' => '/\bsanskrit\b/i',
        'French' => '/\bfrench\b/i',
        'Accountancy' => '/\baccount(s|ancy|ing)\b/i',
        'Economics' => '/\beconomics\b/i',
        'Business' => '/\bbusiness\b/i',
        'Computer Science' => '/\b(computer|coding|python)\b/i',
        'Social Science' => '/\b(social\s*science|sst)\b/i',
        'EVS' => '/\bevs\b/i',
        'All subjects' => '/\ball\s*subjects\b/i',
    ];

    private const EXAMS = ['JEE' => '/\bjee\b/i', 'NEET' => '/\bneet\b/i', 'CUET' => '/\bcuet\b/i', 'SAT' => '/\bsat\b/i'];

    /**
     * @return array{scope: string, rows: list<array{month: string, what: string}>}|null
     *         scope is "area" or the zone name; null when there is not enough to show.
     */
    public static function recentFor(string $city, string $areaName, ?string $zone): ?array
    {
        $key = 'areademand.v1.' . md5(mb_strtolower($city . '|' . $areaName . '|' . $zone));

        try {
            return Cache::remember($key, 21600, fn () => self::build($city, $areaName, $zone));
        } catch (Throwable $e) {
            return null;
        }
    }

    /** Recent requests anywhere in one zone of a city, same safeguards (zone pages). */
    public static function recentForZone(string $city, string $zone): ?array
    {
        try {
            return Cache::remember('areademand.zone.v1.' . md5(mb_strtolower($city . '|' . $zone)), 21600, function () use ($city, $zone) {
                if (! Schema::hasTable('demo_leads')) {
                    return null;
                }

                return self::rows(self::leads()->filter(fn ($l) => Zones::of($city, (string) $l->location) === $zone), $zone, self::SHOW);
            });
        } catch (Throwable $e) {
            return null;
        }
    }

    /** Recent requests anywhere in a city, same safeguards (for the tuition-jobs page). */
    public static function recentForCity(string $city): ?array
    {
        try {
            return Cache::remember('areademand.city.v1.' . md5(mb_strtolower($city)), 21600, function () use ($city) {
                if (! Schema::hasTable('demo_leads')) {
                    return null;
                }
                $pool = self::leads()->filter(fn ($l) => Zones::cityOf((string) $l->location) === $city || Zones::of($city, (string) $l->location) !== null);

                return self::rows($pool, $city, 10);
            });
        } catch (Throwable $e) {
            return null;
        }
    }

    private static function build(string $city, string $areaName, ?string $zone): ?array
    {
        if (! Schema::hasTable('demo_leads')) {
            return null;
        }
        $leads = self::leads();

        $areaRe = '/(?<![a-z0-9])' . preg_quote(mb_strtolower($areaName), '/') . '(?![a-z0-9])/u';
        $pool = $leads->filter(fn ($l) => preg_match($areaRe, mb_strtolower((string) $l->location . ' ' . str_replace('-', ' ', (string) $l->source_page))) === 1);
        $scope = 'area';
        if ($pool->count() < self::MIN_REQUESTS && $zone !== null) {
            $scope = $zone;
            $pool = $leads->filter(fn ($l) => Zones::of($city, (string) $l->location) === $zone);
        }

        return self::rows($pool, $scope, self::SHOW);
    }

    /** Recent demo requests, minus test entries and parents who opted out. */
    private static function leads(): Collection
    {
        return DB::table('demo_leads')
            ->where('created_at', '>=', now()->subDays(self::DAYS))
            ->orderByDesc('created_at')
            ->limit(2000)
            ->get(['id', 'name', 'subject', 'child_class', 'service', 'location', 'source_page', 'created_at'])
            ->reject(fn ($l) => preg_match('/\btest\b/i', (string) $l->name) === 1)
            // Parents who asked to be left out (privacy policy): demo_leads ids.
            ->reject(fn ($l) => in_array((int) $l->id, array_map('intval', (array) config('tutors.demand_exclude_ids', [])), true));
    }

    /** Whitelisted rows, month only; null below the minimum. */
    private static function rows(Collection $pool, string $scope, int $show): ?array
    {
        if ($pool->count() < self::MIN_REQUESTS) {
            return null;
        }
        $rows = $pool->map(function ($l) {
            $what = self::describe($l);

            return $what === null ? null : ['month' => date('M Y', strtotime((string) $l->created_at)), 'what' => $what];
        })->filter()->unique(fn ($r) => $r['month'] . '|' . $r['what'])->take($show)->values();

        return $rows->count() >= self::MIN_REQUESTS ? ['scope' => $scope, 'rows' => $rows->all()] : null;
    }

    /** "Class 10 · CBSE · Maths", from whitelisted labels only; null if nothing usable. */
    public static function describe(object $lead): ?string
    {
        $text = ' ' . implode(' ', [(string) ($lead->child_class ?? ''), (string) ($lead->subject ?? ''), (string) ($lead->service ?? '')]) . ' ';

        $class = null;
        if (preg_match('/\b(?:class|grade|std)\s*[-:]?\s*(1[0-2]|[1-9])\b/i', $text, $m) || preg_match('/^\s*(1[0-2]|[1-9])(?:st|nd|rd|th)?\s*$/i', (string) ($lead->child_class ?? ''), $m)) {
            $class = 'Class ' . $m[1];
        }
        $board = self::first(self::BOARDS, $text);
        $exam = self::first(self::EXAMS, $text);
        $subjects = collect(self::SUBJECTS)->filter(fn ($re) => preg_match($re, $text) === 1)->keys()
            // "Science" alone only when no specific science was named.
            ->pipe(fn (Collection $s) => $s->intersect(['Physics', 'Chemistry', 'Biology'])->isNotEmpty() ? $s->reject(fn ($x) => $x === 'Science') : $s)
            ->take(2)->implode(' & ');

        if ($subjects === '' && $class === null && $exam === null) {
            return null;
        }

        return implode(' · ', array_filter([$class, $board, $exam, $subjects ?: null]));
    }

    private static function first(array $patterns, string $text): ?string
    {
        foreach ($patterns as $label => $re) {
            if (preg_match($re, $text)) {
                return $label;
            }
        }

        return null;
    }
}
