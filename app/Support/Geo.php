<?php

namespace App\Support;

use App\Models\Register;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Where NXTutors works: India → state → city → area.
 *
 * The city table has no state column, and the tutor and generated-page tables
 * spell cities however they were typed ("Gurgaon", "gurugram", "Noida",
 * "Colaba"). This class is the one place that knows which state a city page
 * belongs to and which spellings count towards it, so the home page, /city and
 * every city page agree on the same numbers.
 *
 * Adding a city page in Super Admin without an entry here still works; it is
 * just listed under "Other cities" until it is given a state.
 */
class Geo
{
    /**
     * City page slug => state, whether it is a metro (shown first on the home
     * page), the older name people still search for, and the other spellings
     * that belong to it.
     */
    public const CITIES = [
        'delhi-ncr'          => ['state' => 'Delhi NCR',        'metro' => true,  'aka' => 'New Delhi', 'aliases' => ['delhi', 'new delhi', 'noida', 'greater noida', 'ghaziabad', 'gautam budh', 'gautam budh nagar', 'gautam buddha nagar', 'khora', 'indirapuram', 'dwarka', 'saket']],
        'gurugram'           => ['state' => 'Haryana',          'metro' => true,  'aka' => 'Gurgaon',   'aliases' => ['gurgaon', 'gurugram', 'dlf qe', 'dlf-qe']],
        'faridabad'          => ['state' => 'Haryana',          'metro' => false, 'aka' => null,        'aliases' => []],
        'mumbai'             => ['state' => 'Maharashtra',      'metro' => true,  'aka' => 'Bombay',    'aliases' => ['bombay', 'navi mumbai', 'thane', 'colaba', 'tardeo', 'boriwali west', 'borivali west', 'borivali', 'thakur village', 'andheri', 'powai', 'bandra']],
        'pune'               => ['state' => 'Maharashtra',      'metro' => true,  'aka' => null,        'aliases' => []],
        'nagpur'             => ['state' => 'Maharashtra',      'metro' => false, 'aka' => null,        'aliases' => []],
        'bengaluru'          => ['state' => 'Karnataka',        'metro' => true,  'aka' => 'Bangalore', 'aliases' => ['bangalore']],
        'hyderabad'          => ['state' => 'Telangana',        'metro' => true,  'aka' => null,        'aliases' => ['secunderabad']],
        'chennai'            => ['state' => 'Tamil Nadu',       'metro' => true,  'aka' => 'Madras',    'aliases' => ['madras']],
        'coimbatore'         => ['state' => 'Tamil Nadu',       'metro' => false, 'aka' => null,        'aliases' => []],
        'kolkata'            => ['state' => 'West Bengal',      'metro' => true,  'aka' => 'Calcutta',  'aliases' => ['calcutta']],
        'ahmedabad'          => ['state' => 'Gujarat',          'metro' => true,  'aka' => null,        'aliases' => []],
        'surat'              => ['state' => 'Gujarat',          'metro' => false, 'aka' => null,        'aliases' => []],
        'jaipur'             => ['state' => 'Rajasthan',        'metro' => false, 'aka' => null,        'aliases' => []],
        'chandigarh'         => ['state' => 'Chandigarh',       'metro' => false, 'aka' => null,        'aliases' => ['mohali', 'panchkula']],
        'lucknow'            => ['state' => 'Uttar Pradesh',    'metro' => false, 'aka' => null,        'aliases' => []],
        'indore'             => ['state' => 'Madhya Pradesh',   'metro' => false, 'aka' => null,        'aliases' => []],
        'bhopal'             => ['state' => 'Madhya Pradesh',   'metro' => false, 'aka' => null,        'aliases' => []],
        'kochi'              => ['state' => 'Kerala',           'metro' => false, 'aka' => 'Cochin',    'aliases' => ['cochin', 'ernakulam']],
        'thiruvananthapuram' => ['state' => 'Kerala',           'metro' => false, 'aka' => 'Trivandrum','aliases' => ['trivandrum']],
        'guwahati'           => ['state' => 'Assam',            'metro' => false, 'aka' => null,        'aliases' => []],
        'patna'              => ['state' => 'Bihar',            'metro' => false, 'aka' => null,        'aliases' => []],
        'ranchi'             => ['state' => 'Jharkhand',        'metro' => false, 'aka' => null,        'aliases' => []],
        'tata'               => ['state' => 'Jharkhand',        'metro' => false, 'aka' => 'Jamshedpur','aliases' => ['jamshedpur', 'tatanagar']],
    ];

    public const OTHER_STATE = 'Other cities';

    /** Map any typed city name to a city page slug, or '' when it is not one. */
    public static function slugFor(?string $name): string
    {
        $k = self::norm($name);
        if ($k === '') {
            return '';
        }

        foreach (self::CITIES as $slug => $c) {
            if ($k === self::norm($slug) || in_array($k, array_map([self::class, 'norm'], $c['aliases']), true)) {
                return $slug;
            }
        }

        return '';
    }

    public static function stateOf(string $slug): string
    {
        return self::CITIES[$slug]['state'] ?? self::OTHER_STATE;
    }

    public static function stateSlug(string $state): string
    {
        return Str::slug($state);
    }

    public static function isMetro(string $slug): bool
    {
        return (bool) (self::CITIES[$slug]['metro'] ?? false);
    }

    public static function akaOf(string $slug): ?string
    {
        return self::CITIES[$slug]['aka'] ?? null;
    }

    /** Other city pages in the same state (Delhi NCR also counts Gurugram and Faridabad as neighbours). */
    public static function neighbours(string $slug): array
    {
        $state = self::stateOf($slug);
        $ncr = ['delhi-ncr', 'gurugram', 'faridabad'];

        return collect(self::CITIES)
            ->filter(fn ($c, $s) => $s !== $slug && ($c['state'] === $state || (in_array($slug, $ncr, true) && in_array($s, $ncr, true))))
            ->keys()
            ->all();
    }

    /**
     * Live counts per city page slug: visible tutors, active areas and
     * published generated pages. Cached for an hour; these only feed
     * headings and badges, never anything a parent pays for.
     *
     * @return array<string, array{tutors:int, areas:int, pages:int}>
     */
    public static function counts(): array
    {
        return Cache::remember('geo.counts.v1', 3600, function () {
            $out = [];
            $bump = function (string $slug, string $key, int $n) use (&$out) {
                if ($slug === '') {
                    return;
                }
                $out[$slug] ??= ['tutors' => 0, 'areas' => 0, 'pages' => 0];
                $out[$slug][$key] += $n;
            };

            foreach (Register::applyPublicVisibility(DB::table('register')->where('join_as', 'teacher'))
                ->select('city', DB::raw('COUNT(*) as n'))->groupBy('city')->get() as $row) {
                $bump(self::slugFor($row->city), 'tutors', (int) $row->n);
            }

            foreach (DB::table('city_area_list_managment as a')
                ->join('city_managment as c', 'c.id', '=', 'a.city_id')
                ->where('a.status', 't')
                ->select('c.slug', DB::raw('COUNT(*) as n'))->groupBy('c.slug')->get() as $row) {
                $bump((string) $row->slug, 'areas', (int) $row->n);
            }

            foreach (DB::table('generated_pages')->where('status', 'published')
                ->select('city', DB::raw('COUNT(*) as n'))->groupBy('city')->get() as $row) {
                $bump(self::slugFor($row->city), 'pages', (int) $row->n);
            }

            return $out;
        });
    }

    /**
     * Active city pages grouped by state, states in alphabetical order with
     * "Other cities" last.
     *
     * @param  iterable<object{city_name:string, slug:string}>  $cities
     * @return array<string, array<int, object>>
     */
    public static function groupByState(iterable $cities): array
    {
        $groups = [];
        foreach ($cities as $c) {
            $groups[self::stateOf((string) $c->slug)][] = $c;
        }

        uksort($groups, fn ($a, $b) => ($a === self::OTHER_STATE) <=> ($b === self::OTHER_STATE) ?: strcmp($a, $b));

        foreach ($groups as &$list) {
            usort($list, fn ($a, $b) => strcmp($a->city_name, $b->city_name));
        }

        return $groups;
    }

    private static function norm(?string $s): string
    {
        return trim(preg_replace('/[^a-z]+/', ' ', strtolower((string) $s)));
    }
}
