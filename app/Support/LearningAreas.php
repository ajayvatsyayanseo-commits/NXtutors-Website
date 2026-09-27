<?php

namespace App\Support;

/**
 * The five learning areas (config/learning_areas.php) resolved for display:
 * each item gets its live page URL, if any, and only items parents can
 * actually be served (a live page, or tutors who teach it) are returned.
 */
class LearningAreas
{
    /** An item without its own page needs this many tutors to be offered. */
    public const MIN_TUTORS = 2;

    /** @return array<string, array{label:string, items:array}> */
    public static function areas(): array
    {
        static $areas = null;
        if ($areas !== null) {
            return $areas;
        }

        $live = SubjectLinks::live();
        $areas = [];
        foreach (config('learning_areas.areas', []) as $key => $area) {
            $items = [];
            foreach ($area['items'] as $item) {
                $url = ! empty($item['page']) && isset($live[$item['page']]) ? url('/' . $item['page']) : null;
                if (! $url && (int) ($item['tutors'] ?? 0) < self::MIN_TUTORS) {
                    continue;
                }
                $items[] = $item + ['url' => $url, 'search' => $item['search'] ?? $item['label']];
            }
            if ($items) {
                $areas[$key] = ['label' => $area['label'], 'items' => $items];
            }
        }

        return $areas;
    }

    /** Every label and alternative spelling, for the search suggestions. */
    public static function suggestions(): array
    {
        return collect(self::areas())
            ->flatMap(fn ($a) => collect($a['items'])->flatMap(fn ($i) => array_merge([$i['label']], $i['aka'] ?? [])))
            ->unique()->values()->all();
    }

    /**
     * Popular searches under the hero: the core school subjects and exams,
     * then the non-academic items with the most tutors.
     */
    public static function popular(int $limit = 8): array
    {
        $all = collect(self::areas())->flatMap(fn ($a, $k) => collect($a['items'])->map(fn ($i) => $i + ['area' => $k]));
        $core = $all->filter(fn ($i) => in_array($i['label'], ['Maths', 'Science', 'Physics', 'Chemistry', 'JEE Physics', 'NEET Biology', 'IB Maths'], true));
        // Languages and skills earn a place only with a real bench of tutors.
        $other = $all->filter(fn ($i) => in_array($i['area'], ['languages', 'skills'], true) && (int) ($i['tutors'] ?? 0) >= 5)
            ->sortByDesc(fn ($i) => (int) ($i['tutors'] ?? 0));

        return $core->concat($other)->unique('label')->take($limit)->values()->all();
    }
}
