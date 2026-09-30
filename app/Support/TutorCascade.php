<?php

namespace App\Support;

use App\Models\Register;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

/**
 * Tutors for an area page, nearest first, so no page is ever empty
 * (agreed with Ajay, 30 Sep 2026):
 *
 *   1. lives in the area (name or pincode)      "In Sector 57"
 *   2. lists the area under "Areas I travel to"  "Travels to Sector 57"
 *   3. lists the zone, or lives in it            "Nearby · Golf Course Extension Road"
 *   4. elsewhere in the city                     "Elsewhere in Gurugram"
 *   5. in the same state, teaches online         "Online · Faridabad"
 *   6. anywhere in India, teaches online         "Online · Kolkata"
 *
 * Beyond the city only online tutors are offered: a tutor in another city
 * cannot come to the house, and the label says so. Real tutors always come
 * before sample profiles, whatever their tier.
 */
class TutorCascade
{
    public const LIMIT = 8;

    /** @return Collection<int, array{tutor: Register, label: string, tier: int}> */
    public static function forArea(string $citySlug, string $cityName, string $areaName, ?string $zone, ?string $pincode = null, int $limit = self::LIMIT): Collection
    {
        $ranked = self::rank($citySlug, $cityName, $areaName, $zone, $pincode)
            ->sortBy(fn ($t) => [$t['sample'], $t['tier'], -$t['id']])
            ->take($limit)->values();

        $models = Register::whereIn('user_id', $ranked->pluck('user_id'))->get()->keyBy(fn ($m) => (string) $m->user_id);

        return $ranked->map(fn ($t) => isset($models[$t['user_id']]) ? ['tutor' => $models[$t['user_id']], 'label' => $t['label'], 'tier' => $t['tier']] : null)
            ->filter()->values();
    }

    /** Every tutor with its tier and label for this area (no database access). */
    private static function rank(string $citySlug, string $cityName, string $areaName, ?string $zone, ?string $pincode): Collection
    {
        $state = Geo::stateOf($citySlug);
        $area = mb_strtolower(trim($areaName));
        $areaRe = '/(?<![a-z0-9])' . preg_quote($area, '/') . '(?![a-z0-9])/u';

        return collect(self::pool())->map(function (array $t) use ($citySlug, $cityName, $state, $area, $areaRe, $areaName, $zone, $pincode) {
            $inCity = $t['city_slug'] === $citySlug;
            $tier = null;
            $label = null;

            if ($inCity && (($pincode !== null && $pincode !== '' && $t['pincode'] === $pincode) || ($area !== '' && preg_match($areaRe, $t['where']) === 1))) {
                [$tier, $label] = [1, 'In ' . $areaName];
            } elseif (collect($t['travel'])->contains(fn ($e) => TravelAreas::entryCovers($e, $areaName))) {
                [$tier, $label] = [2, 'Travels to ' . $areaName];
            } elseif ($zone !== null && ($t['zone'] === $zone || collect($t['travel'])->contains(fn ($e) => Zones::of($cityName, $e) === $zone))) {
                [$tier, $label] = [3, 'Nearby · ' . $zone];
            } elseif ($inCity) {
                [$tier, $label] = [4, 'Elsewhere in ' . $cityName];
            } elseif ($t['online'] && $t['state'] === $state && $state !== Geo::OTHER_STATE) {
                [$tier, $label] = [5, 'Online · ' . $t['city_name']];
            } elseif ($t['online']) {
                [$tier, $label] = [6, 'Online' . ($t['city_name'] !== '' ? ' · ' . $t['city_name'] : '')];
            }

            return $tier === null ? null : $t + ['tier' => $tier, 'label' => $label];
        })->filter()->values();
    }

    /**
     * Real (non-sample) tutors for one area: living there, listing it under
     * "Areas I travel to", or covering its zone. For the area "at a glance".
     *
     * @return array{in: int, travel: int, zone: int}
     */
    public static function realCountsFor(string $citySlug, string $cityName, string $areaName, ?string $zone, ?string $pincode = null): array
    {
        $out = ['in' => 0, 'travel' => 0, 'zone' => 0];
        foreach (self::rank($citySlug, $cityName, $areaName, $zone, $pincode) as $c) {
            if ($c['sample']) {
                continue;
            }
            match ($c['tier']) {
                1 => $out['in']++,
                2 => $out['travel']++,
                3 => $out['zone']++,
                default => null,
            };
        }

        return $out;
    }

    /** Real (non-sample) tutors whose home city is this city page. */
    public static function realTutorsInCity(string $citySlug): int
    {
        return collect(self::pool())->filter(fn ($t) => ! $t['sample'] && $t['city_slug'] === $citySlug)->count();
    }

    /** Real tutors who teach online, anywhere in India. */
    public static function realOnlineTutors(): int
    {
        return collect(self::pool())->filter(fn ($t) => ! $t['sample'] && $t['online'])->count();
    }

    /**
     * Real (non-sample) tutors per zone of a city: living in the zone or
     * listing it (or a place in it) under "Areas I travel to". For the
     * tuition-jobs page: which parts of the city need tutors.
     *
     * @return array<string, int>
     */
    public static function realTutorsByZone(string $citySlug, string $cityName): array
    {
        $zones = array_keys(config('zones.' . Zones::cityKey($cityName), []));
        $out = array_fill_keys($zones, 0);
        foreach (self::pool() as $t) {
            if ($t['sample']) {
                continue;
            }
            $covered = [];
            if ($t['city_slug'] === $citySlug && $t['zone'] !== null) {
                $covered[$t['zone']] = true;
            }
            foreach ($t['travel'] as $e) {
                if (($z = Zones::of($cityName, $e)) !== null) {
                    $covered[$z] = true;
                }
            }
            foreach (array_keys($covered) as $z) {
                if (isset($out[$z])) {
                    $out[$z]++;
                }
            }
        }

        return $out;
    }

    /**
     * Every listable tutor, reduced to what the cascade needs. Cached: it is
     * the same for every area page.
     *
     * @return list<array<string, mixed>>
     */
    private static function pool(): array
    {
        return Cache::remember('tutorcascade.pool.v2', 900, function () {
            $cols = ['id', 'user_id', 'name', 'city', 'address', 'pincode', 'class_type'];
            foreach (['travel_areas', 'is_sample'] as $c) {
                if (Schema::hasColumn('register', $c)) {
                    $cols[] = $c;
                }
            }

            return Register::where('join_as', 'teacher')->listable()->get($cols)->map(function ($t) {
                $cityName = Zones::cityOf((string) $t->city) ?? '';
                $slug = $cityName !== '' ? Geo::slugFor($cityName) : '';

                return [
                    'id' => (int) $t->id,
                    'user_id' => (string) $t->user_id,
                    'city_name' => $cityName,
                    'city_slug' => $slug,
                    'state' => $slug !== '' ? Geo::stateOf($slug) : Geo::OTHER_STATE,
                    'where' => mb_strtolower(trim((string) $t->address . ' ' . (string) $t->city)),
                    'zone' => $cityName !== '' ? Zones::of($cityName, (string) $t->address . ' ' . (string) $t->city) : null,
                    'pincode' => trim((string) $t->pincode),
                    'travel' => TravelAreas::entries($t->travel_areas ?? ''),
                    'online' => preg_match('/online|both/i', (string) $t->class_type) === 1,
                    'sample' => (int) ($t->is_sample ?? 0),
                ];
            })->all();
        });
    }
}
