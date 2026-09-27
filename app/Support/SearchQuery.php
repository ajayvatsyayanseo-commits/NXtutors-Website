<?php

namespace App\Support;

use App\NxtAi\Support\ClassNormalizer;
use App\NxtAi\Support\SubjectNormalizer;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * Reads a parent's free text ("ib maths home tutor sector 56 gurgaon",
 * "female chemistry teacher class 12 online") into search filters: subject,
 * board, class, mode, gender, city, area and pincode. Dictionaries and rules
 * only (no model), shared by the hero search and the suggestion index.
 */
class SearchQuery
{
    private const FILLER = ['tutor', 'tutors', 'teacher', 'teachers', 'tuition', 'tuitions', 'classes', 'coaching',
        'for', 'in', 'at', 'the', 'a', 'an', 'best', 'top', 'good', 'private', 'personal', 'near', 'me', 'nearby',
        'my', 'child', 'kid', 'kids', 'son', 'daughter', 'need', 'want', 'find', 'looking', 'of', 'and', 'to', 'with'];

    private const BOARDS = ['cbse' => 'CBSE', 'icse' => 'ICSE', 'isc' => 'ISC', 'ib' => 'IB', 'igcse' => 'IGCSE',
        'ncert' => 'CBSE', 'state board' => 'State Board'];

    /**
     * @return array{subject:?string, board:?string, class:?string, mode:?string, gender:?string,
     *               city:?string, area:?string, pincode:?string, intent:list<string>, rest:string, known:bool}
     */
    public static function parse(string $search, string $place = ''): array
    {
        $out = ['subject' => null, 'board' => null, 'class' => null, 'mode' => null, 'gender' => null,
            'city' => null, 'area' => null, 'pincode' => null, 'intent' => [], 'rest' => '', 'known' => false];

        $s = ' ' . self::clean($search) . ' ';

        // Whole words only: "german" is a language, not a request for a male tutor.
        $take = function (string $pattern) use (&$s): ?array {
            if (preg_match($pattern, $s, $m)) {
                $s = preg_replace($pattern, ' ', $s, 1);

                return $m;
            }

            return null;
        };

        if ($take('/\b(?:female|lady|woman|women|girl|ma ?am|madam|mam)\b/')) {
            $out['gender'] = 'female';
        } elseif ($take('/\b(?:male|sir|gents)\b/')) {
            $out['gender'] = 'male';
        }

        if ($take('/\b(?:online|virtual|zoom)\b/')) {
            $out['mode'] = 'online';
        } elseif ($take('/\b(?:home|at home|offline|in person|home tuition|near me|nearby)\b/')) {
            $out['mode'] = 'home';
        }

        foreach (['demo' => '/\b(?:demo|trial)\b/', 'urgent' => '/\b(?:urgent|today|tomorrow|asap|immediately)\b/', 'crash' => '/\bcrash\b/'] as $intent => $pattern) {
            if ($take($pattern)) {
                $out['intent'][] = $intent;
            }
        }

        foreach (self::BOARDS as $word => $board) {
            if ($take('/\b' . preg_quote($word, '/') . '\b/')) {
                $out['board'] = $board;
                break;
            }
        }

        if ($m = $take('/\b(?:class|grade|std|standard)\s*(\d{1,2}|[ivx]{1,4})(?:st|nd|rd|th)?\b/')) {
            $out['class'] = ClassNormalizer::normalize('Class ' . $m[1]);
        } elseif ($m = $take('/\b(\d{1,2})(?:st|nd|rd|th)\b/')) {
            $out['class'] = ClassNormalizer::normalize('Class ' . $m[1]);
        } elseif ($m = $take('/\b(lkg|ukg|nursery|kg|pre ?school)\b/')) {
            $out['class'] = ClassNormalizer::normalize($m[1]);
        }

        if ($m = $take('/\b(\d{6})\b/')) {
            $out['pincode'] = $m[1];
        }

        // Place: the separate field first, then any known city or area in the text.
        foreach (array_filter([self::clean($place), trim($s)]) as $i => $text) {
            [$city, $area, $matched] = self::findPlace($text);
            if ($city || $area) {
                $out['city'] ??= $city;
                $out['area'] ??= $area;
                if ($i === 1 && $matched !== '') {
                    $s = ' ' . trim(preg_replace('/\b' . preg_quote($matched, '/') . '\b/', ' ', $s, 1)) . ' ';
                }
            } elseif ($i === 0 && $out['area'] === null) {
                // An unknown place ("near Galleria") still narrows by address text.
                $out['area'] = trim($place);
            }
        }

        $words = array_values(array_filter(preg_split('/\s+/', trim($s)), fn ($w) => $w !== '' && ! in_array($w, self::FILLER, true)));
        $out['rest'] = implode(' ', $words);
        [$out['subject'], $out['known']] = self::findSubject($out['rest']);

        return $out;
    }

    /**
     * The subject named in what is left of the query, as the search expects
     * it, and whether it is one we know (a name like "Ajay" is not).
     *
     * @return array{0:?string, 1:bool}
     */
    private static function findSubject(string $rest): array
    {
        $rest = trim($rest);
        if ($rest === '') {
            return [null, false];
        }

        // Longest learning-area label or alias wins ("spoken english" over "english").
        $best = null;
        foreach (self::subjectDictionary() as $phrase => $subject) {
            if (preg_match('/\b' . preg_quote($phrase, '/') . '\b/', $rest) && (! $best || strlen($phrase) > strlen($best[0]))) {
                $best = [$phrase, $subject];
            }
        }
        if ($best) {
            return [$best[1], true];
        }

        return [SubjectNormalizer::normalize($rest), false];
    }

    /** lowercased phrase => subject name the search matches on */
    public static function subjectDictionary(): array
    {
        static $dict = null;
        if ($dict !== null) {
            return $dict;
        }

        $dict = [
            'math' => 'Mathematics', 'maths' => 'Mathematics', 'mathematics' => 'Mathematics',
            'phy' => 'Physics', 'phys' => 'Physics', 'physics' => 'Physics',
            'chem' => 'Chemistry', 'chemistry' => 'Chemistry', 'bio' => 'Biology', 'biology' => 'Biology',
            'sst' => 'Social Science', 'eco' => 'Economics', 'accounts' => 'Accountancy', 'cs' => 'Computer Science',
            'iit' => 'JEE', 'iit jee' => 'JEE', 'jee' => 'JEE', 'neet' => 'NEET',
        ];
        foreach (config('learning_areas.areas', []) as $area) {
            foreach ($area['items'] as $item) {
                if (! empty($item['page'])) {
                    continue; // page items ("IB Maths", "Class 10 Maths") are board/class + subject, parsed above
                }
                // `subject` is what tutors list ("JEE Maths" tutors list Maths).
                $name = $item['subject'] ?? $item['search'] ?? $item['label'];
                foreach (array_merge([$item['label'], $item['search'] ?? $item['label']], $item['aka'] ?? []) as $phrase) {
                    $dict[strtolower($phrase)] ??= $name;
                }
            }
        }

        return $dict;
    }

    /**
     * A known city or area in the text: [city name, area name, matched text].
     * Areas are the live area pages; cities include their aliases (Gurgaon).
     */
    private static function findPlace(string $text): array
    {
        $text = ' ' . $text . ' ';
        $best = [null, null, ''];

        foreach (self::places() as $phrase => [$city, $area]) {
            if (strlen($phrase) > strlen($best[2]) && str_contains($text, ' ' . $phrase . ' ')) {
                $best = [$city, $area, $phrase];
            }
        }

        return $best;
    }

    /** lowercased place phrase => [city name, area name|null], cached a day */
    public static function places(): array
    {
        // Reading a query must never break a request: no place list, no places.
        try {
            return self::loadPlaces();
        } catch (\Throwable $e) {
            return [];
        }
    }

    private static function loadPlaces(): array
    {
        return Cache::remember('search.places.v1', 86400, function () {
            $cities = DB::table('city_managment')->where('status', 't')->whereNotNull('slug')->get(['id', 'city_name', 'slug']);
            $out = [];
            foreach ($cities as $c) {
                $name = Geo::displayName($c->slug, $c->city_name);
                $out[strtolower($c->city_name)] = [$name, null];
                $out[strtolower($name)] = [$name, null];
                foreach (Geo::CITIES[$c->slug]['aliases'] ?? [] as $alias) {
                    $out[strtolower($alias)] = [$name, null];
                }
            }
            $byId = $cities->keyBy('id');
            DB::table('city_area_list_managment')->where('status', 't')->whereNotNull('name')
                ->get(['city_id', 'name'])
                ->each(function ($a) use (&$out, $byId) {
                    $c = $byId[$a->city_id] ?? null;
                    $area = trim((string) $a->name);
                    if ($c && $area !== '' && mb_strlen($area) > 3) {
                        $out[strtolower(self::clean($area))] ??= [Geo::displayName($c->slug, $c->city_name), $area];
                    }
                });

            return $out;
        });
    }

    private static function clean(string $s): string
    {
        $s = mb_strtolower($s);
        $s = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $s);

        return trim(preg_replace('/\s+/', ' ', $s));
    }
}
