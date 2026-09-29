<?php

namespace App\Support;

use App\Models\Register;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

/**
 * "Areas I travel to" on a tutor profile: whether a tutor reaches a place.
 * One rule for the matcher (TutorRanker) and the area pages.
 */
class TravelAreas
{
    /**
     * Whether one travel-area entry covers an area. Whole words only
     * ("Sector 5" is not in "Sector 56"), and a range such as "Sector 56–66"
     * or "DLF Phase 1–5" covers every number in it.
     */
    public static function entryCovers(string $entry, string $area): bool
    {
        $e = trim(mb_strtolower($entry));
        $a = trim(mb_strtolower($area));
        if ($e === '' || $a === '') {
            return false;
        }
        $has = fn (string $hay, string $needle) => preg_match('/(?<![a-z0-9])'.preg_quote($needle, '/').'(?![a-z0-9])/u', $hay) === 1;
        if ($has($e, $a) || $has($a, $e)) {
            return true;
        }
        if (preg_match('/^(.*?)(\d{1,3})\s*(?:-|–|to)\s*(\d{1,3})$/u', $e, $r)
            && preg_match('/^(.*?)(\d{1,3})[a-z]?$/u', $a, $q)
            && trim($r[1]) === trim($q[1])) {
            return (int) $q[2] >= (int) $r[2] && (int) $q[2] <= (int) $r[3];
        }

        return false;
    }

    /** @return list<string> */
    public static function entries(?string $travelAreas): array
    {
        return array_values(array_filter(array_map('trim', explode(',', (string) $travelAreas))));
    }

    /**
     * Visible tutors who say they travel to this area, or to its zone; the
     * ones naming the area itself first, real tutors before sample profiles.
     *
     * @return Collection<int, Register>
     */
    public static function tutorsFor(string $city, string $areaName, int $limit = 8): Collection
    {
        if (! Schema::hasColumn('register', 'travel_areas')) {
            return collect();
        }
        $zone = Zones::of($city, $areaName);

        return Register::where('join_as', 'teacher')->listable()->realFirst()
            ->whereNotNull('travel_areas')->where('travel_areas', '!=', '')
            ->limit(200)->get()
            ->map(function ($t) use ($city, $areaName, $zone) {
                $rank = null;
                foreach (self::entries($t->travel_areas) as $entry) {
                    if (self::entryCovers($entry, $areaName)) {
                        $rank = 0;
                        break;
                    }
                    if ($zone !== null && Zones::of($city, $entry) === $zone) {
                        $rank = 1;
                    }
                }

                return $rank === null ? null : [$rank, (int) ($t->is_sample ?? 0), $t];
            })
            ->filter()
            ->sortBy(fn ($r) => [$r[1], $r[0]])
            ->map(fn ($r) => $r[2])
            ->take($limit)
            ->values();
    }
}
