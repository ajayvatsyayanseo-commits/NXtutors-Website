<?php

namespace App\Support;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Throwable;

/**
 * Where a tutor or a parent is, in home-tutoring terms: the city, and the
 * zone inside it (config/zones.php). Tutor profiles often hold a locality in
 * their "city" field ("Wazirabad", "Sector 37D", "DLF QE"); those are mapped
 * to their city through the area pages and Geo aliases.
 */
class Zones
{
    /** The zone of a place in a city, from a sector number or a known name. */
    public static function of(?string $city, ?string $text): ?string
    {
        $zones = config('zones.' . self::cityKey($city), []);
        $t = ' ' . self::norm($text) . ' ';
        if (! $zones || trim($t) === '') {
            return null;
        }

        // Named places first ("sector 37d" is Dwarka Expressway, not sector 37).
        foreach ($zones as $zone => $z) {
            foreach ($z['names'] ?? [] as $name) {
                if (str_contains($t, ' ' . $name . ' ') || str_contains($t, ' ' . $name)) {
                    return $zone;
                }
            }
        }
        if (preg_match('/\bsector\s*(\d{1,3})/', $t, $m)) {
            foreach ($zones as $zone => $z) {
                if (in_array((int) $m[1], $z['sectors'] ?? [], true)) {
                    return $zone;
                }
            }
        }

        return null;
    }

    /**
     * Lowercased raw register.city values that belong to a city: its Geo
     * aliases plus any locality name of one of its area pages.
     *
     * @return list<string>
     */
    public static function rawCityNames(string $city): array
    {
        try {
            $all = Cache::remember('zones.rawcities.v1', 3600, fn () => DB::table('register')
                ->where('join_as', 'teacher')->whereNotNull('city')->where('city', '!=', '')
                ->distinct()->pluck('city')->map(fn ($c) => mb_strtolower(trim((string) $c)))->unique()->values()->all());
        } catch (Throwable $e) {
            return [];
        }

        $places = SearchQuery::places();
        $want = Geo::slugFor($city) ?: mb_strtolower(trim($city));

        return array_values(array_filter($all, function ($raw) use ($places, $want) {
            if (Geo::slugFor($raw) === $want) {
                return true;
            }
            $k = self::norm($raw);
            if (isset($places[$k]) && Geo::slugFor((string) $places[$k][0]) === $want) {
                return true;
            }
            // "sector 37d" style values: the sector alone names a Gurugram area.
            return $want === 'gurugram' && preg_match('/^sector\s*\d{1,3}[a-z]?$/', $k) === 1;
        }));
    }

    /** The city a raw tutor location belongs to ("Wazirabad" -> "Gurugram"), or null. */
    public static function cityOf(?string $raw): ?string
    {
        $k = self::norm($raw);
        if ($k === '') {
            return null;
        }
        $slug = Geo::slugFor($k);
        if ($slug !== '') {
            return Geo::displayName($slug, ucwords(str_replace('-', ' ', $slug)));
        }
        $places = SearchQuery::places();
        if (isset($places[$k])) {
            return (string) $places[$k][0];
        }

        return preg_match('/^sector\s*\d{1,3}[a-z]?$/', $k) ? 'Gurugram' : null;
    }

    public static function cityKey(?string $city): string
    {
        $c = trim((string) $city);
        $slug = Geo::slugFor($c);

        return $slug !== '' ? ucfirst(Geo::displayName($slug, ucfirst($slug))) : ucfirst(mb_strtolower($c));
    }

    private static function norm(?string $s): string
    {
        $s = mb_strtolower((string) $s);
        $s = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $s);

        return trim(preg_replace('/\s+/', ' ', $s));
    }
}
