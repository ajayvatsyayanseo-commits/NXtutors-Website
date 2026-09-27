<?php

declare(strict_types=1);

namespace App\NxtAi\Ranking;

use App\NxtAi\DTO\TutorSearchCriteria;

/**
 * Deterministic tutor ranking. The model NEVER decides order — this does.
 *
 * Weighted match over the criteria the parent actually gave (weights are
 * renormalized across active signals so absent data doesn't punish everyone).
 * Ratings use a Bayesian (confidence-adjusted) mean so a single 5★ review does
 * not outrank a tutor with many strong reviews. Fully stable + reproducible.
 */
final class TutorRanker
{
    /** Base weights; only those relevant to the query are activated + renormalized. */
    private const WEIGHTS = [
        'subject' => 0.25,
        'class' => 0.15,
        'board' => 0.10,
        'location' => 0.15,
        'mode' => 0.10,
        'rating' => 0.15,
        'experience' => 0.05,
        'completeness' => 0.05,
    ];

    // Bayesian prior: assume an unrated tutor sits at the global mean with
    // weight of PRIOR_COUNT reviews.
    private const PRIOR_MEAN = 4.0;
    private const PRIOR_COUNT = 5;

    /**
     * @param array<int,array<string,mixed>> $tutors public tutor arrays
     * @return array<int,array<string,mixed>> same arrays + match_score + match_reasons, sorted
     */
    public function rank(array $tutors, TutorSearchCriteria $c): array
    {
        $active = $this->activeWeights($c);

        $scored = [];
        foreach ($tutors as $i => $t) {
            [$score, $reasons] = $this->scoreOne($t, $c, $active);
            $t['match_score'] = (int) round($score * 100);
            $t['match_reasons'] = $reasons;
            $t['_conf'] = $this->ratingConfidence($t);   // tie-break helpers
            $t['_exp'] = (int) ($t['experience_years'] ?? 0);
            $t['_complete'] = $this->completeness($t);
            $t['_i'] = $i;
            $t['_real'] = empty($t['is_sample']) ? 1 : 0;
            $t['place_label'] = $this->placeLabel($t, $c);
            $scored[] = $t;
        }

        // Real tutors first, always; sample profiles after them (config/tutors.php).
        usort($scored, function (array $a, array $b): int {
            return [$b['_real'], $b['match_score'], $b['_conf'], $b['_exp'], $b['_complete'], $a['_i']]
                <=> [$a['_real'], $a['match_score'], $a['_conf'], $a['_exp'], $a['_complete'], $b['_i']];
        });

        return array_map(static function (array $t): array {
            unset($t['_conf'], $t['_exp'], $t['_complete'], $t['_i'], $t['_real']);

            return $t;
        }, $scored);
    }

    /** @return array<string,float> */
    private function activeWeights(TutorSearchCriteria $c): array
    {
        $active = [
            'rating' => self::WEIGHTS['rating'],
            'experience' => self::WEIGHTS['experience'],
            'completeness' => self::WEIGHTS['completeness'],
        ];
        if ($c->subject !== null) {
            $active['subject'] = self::WEIGHTS['subject'];
        }
        if ($c->classLevel !== null) {
            $active['class'] = self::WEIGHTS['class'];
        }
        if ($c->board !== null) {
            $active['board'] = self::WEIGHTS['board'];
        }
        if ($c->city !== null || $c->pincode !== null || $c->area !== null) {
            // Online: location is only a small tie-breaker (same city helps if
            // the family ever wants a home session). Home: it decides a lot.
            $active['location'] = $c->teachingMode === 'online' ? 0.03 : self::WEIGHTS['location'];
        }
        if ($c->teachingMode !== null && $c->teachingMode !== 'either') {
            $active['mode'] = self::WEIGHTS['mode'];
        }

        $sum = array_sum($active) ?: 1.0;

        return array_map(static fn ($w) => $w / $sum, $active);
    }

    /**
     * @param array<string,float> $weights
     * @return array{0:float,1:array<int,string>}
     */
    private function scoreOne(array $t, TutorSearchCriteria $c, array $weights): array
    {
        $score = 0.0;
        $reasons = [];

        if (isset($weights['subject'])) {
            $hit = $this->listContains($t['subjects'] ?? [], $c->subject);
            $score += $weights['subject'] * ($hit ? 1 : 0);
            if ($hit) {
                $reasons[] = 'Teaches '.$c->subject;
            }
        }
        if (isset($weights['class'])) {
            $hit = $this->classMatch($t['classes'] ?? [], $c->classLevel);
            $score += $weights['class'] * ($hit ? 1 : 0);
            if ($hit) {
                $reasons[] = 'Covers '.$c->classLevel;
            }
        }
        if (isset($weights['board'])) {
            $hit = $this->listContains($t['boards'] ?? [], $c->board);
            $score += $weights['board'] * ($hit ? 1 : 0);
            if ($hit) {
                $reasons[] = $c->board.' board';
            }
        }
        if (isset($weights['location'])) {
            [$locScore, $locReason] = $this->locationScore($t, $c);
            $score += $weights['location'] * $locScore;
            if ($locReason !== null) {
                $reasons[] = $locReason;
            }
        }
        if (isset($weights['mode'])) {
            $hit = $this->modeMatch($t['teaching_modes'] ?? [], $c->teachingMode);
            $score += $weights['mode'] * ($hit ? 1 : 0);
            if ($hit) {
                $reasons[] = ucfirst($c->teachingMode).' tuition';
            }
        }

        $ratingNorm = $this->bayesianRating($t) / 5.0;
        $score += $weights['rating'] * $ratingNorm;
        if (($t['review_count'] ?? 0) >= 3 && ($t['rating'] ?? 0) >= 4.0) {
            $reasons[] = 'Strong parent reviews ('.$t['review_count'].')';
        }

        $expNorm = min(($t['experience_years'] ?? 0) / 10, 1.0);
        $score += $weights['experience'] * $expNorm;
        if (($t['experience_years'] ?? 0) >= 3) {
            $reasons[] = $t['experience_years'].' years experience';
        }

        $score += $weights['completeness'] * $this->completeness($t);

        return [max(0.0, min(1.0, $score)), array_values(array_slice(array_unique($reasons), 0, 4))];
    }

    private function bayesianRating(array $t): float
    {
        $r = (float) ($t['rating'] ?? 0);
        $v = (int) ($t['review_count'] ?? 0);
        if ($v <= 0) {
            return self::PRIOR_MEAN;
        }

        return (($v * $r) + (self::PRIOR_COUNT * self::PRIOR_MEAN)) / ($v + self::PRIOR_COUNT);
    }

    private function ratingConfidence(array $t): int
    {
        // Higher = more trustworthy rating. Used only for tie-breaking.
        return (int) round($this->bayesianRating($t) * min((int) ($t['review_count'] ?? 0), 50));
    }

    private function completeness(array $t): float
    {
        $checks = [
            ! empty($t['subjects']),
            ! empty($t['classes']) || ! empty($t['boards']),
            ! empty($t['image_url']) && ! str_contains((string) $t['image_url'], 'tutor1.jpg'),
            ! empty($t['description']),
            ($t['experience_years'] ?? 0) > 0,
            ! empty($t['fee_label']),
        ];

        return count(array_filter($checks)) / count($checks);
    }

    /**
     * Home-tutor distance as a smooth decay over tiers (no coordinates on
     * profiles), s = e^(-d/2):
     *   same pincode, or teaches / travels to the area   d = 0    s = 1.00
     *   same zone of the city (config/zones.php)          d = 0.5  s = 0.78
     *   same city                                         d = 1    s = 0.61
     *   same state                                        d = 2    s = 0.37
     *   elsewhere in India (online-capable)               d = 3.5  s = 0.17
     * With no area asked, the city itself is the target (d = 0).
     */
    private function locationScore(array $t, TutorSearchCriteria $c): array
    {
        [$d, $why] = $this->locationTier($t, $c);

        return $d === null ? [0.0, null] : [exp(-$d / 2), $why];
    }

    /** @return array{0:?float, 1:?string} tier distance and the reason shown */
    private function locationTier(array $t, TutorSearchCriteria $c): array
    {
        if ($c->pincode !== null && (string) ($t['pincode'] ?? '') === $c->pincode) {
            return [0.0, 'Same pincode ('.$c->pincode.')'];
        }

        $area = trim((string) $c->area);
        if ($area !== '') {
            $where = $this->ci(((string) ($t['area'] ?? '')).' '.((string) ($t['city'] ?? '')));
            if (str_contains($where, $this->ci($area))) {
                return [0.0, 'In '.$area];
            }
            foreach ((array) ($t['travel_areas'] ?? []) as $ta) {
                if ($ta !== '' && (str_contains($this->ci($ta), $this->ci($area)) || str_contains($this->ci($area), $this->ci($ta)))) {
                    return [0.0, 'Travels to '.$area];
                }
            }
            $zone = \App\Support\Zones::of($c->city, $area);
            if ($zone !== null) {
                $tutorZones = array_filter(array_merge(
                    [$t['zone'] ?? null],
                    array_map(fn ($ta) => \App\Support\Zones::of($c->city, (string) $ta), (array) ($t['travel_areas'] ?? []))
                ));
                if (in_array($zone, $tutorZones, true)) {
                    return [0.5, 'Near '.$area.' ('.$zone.')'];
                }
            }
        }

        if ($c->city === null) {
            return [null, null];
        }
        $want = \App\Support\Geo::slugFor($c->city);
        $tutorCity = (string) ($t['home_city'] ?? '') ?: (string) ($t['city'] ?? '');
        $tutorSlug = \App\Support\Geo::slugFor($tutorCity);
        if (($want !== '' && $tutorSlug === $want) || $this->ci($tutorCity) === $this->ci($c->city)) {
            return [$area !== '' ? 1.0 : 0.0, 'In '.$c->city];
        }
        if ($want !== '' && $tutorSlug !== '' && \App\Support\Geo::stateOf($tutorSlug) === \App\Support\Geo::stateOf($want)) {
            return [2.0, 'In '.\App\Support\Geo::stateOf($want)];
        }

        return [3.5, $tutorCity !== '' ? 'From '.ucwords($tutorCity).' · online' : 'Online'];
    }

    /** The short place line on a result card ("In Sector 56", "In Haryana"). */
    private function placeLabel(array $t, TutorSearchCriteria $c): ?string
    {
        if ($c->city === null && $c->pincode === null && $c->area === null) {
            return null;
        }

        return $this->locationTier($t, $c)[1];
    }

    private function classMatch(array $classes, ?string $needle): bool
    {
        if ($needle === null) {
            return false;
        }
        // Match "Class 10" against ranges like "6-12" or free text "Class 10".
        if (preg_match('/\d{1,2}/', $needle, $m)) {
            $want = (int) $m[0];
            foreach ($classes as $cl) {
                if (preg_match_all('/\d{1,2}/', (string) $cl, $r) && $r[0] !== []) {
                    $nums = array_map('intval', $r[0]);
                    if (count($nums) >= 2) {
                        if ($want >= min($nums) && $want <= max($nums)) {
                            return true;
                        }
                    } elseif (in_array($want, $nums, true)) {
                        return true;
                    }
                }
            }
        }

        return $this->listContains($classes, $needle);
    }

    private function modeMatch(array $modes, ?string $want): bool
    {
        if ($want === null || $want === 'either') {
            return false;
        }
        $target = $want === 'online' ? 'online' : 'home';
        foreach ($modes as $m) {
            if (str_contains(strtolower((string) $m), $target)) {
                return true;
            }
        }

        return false;
    }

    private function listContains(array $haystack, ?string $needle): bool
    {
        if ($needle === null || $needle === '') {
            return false;
        }
        $n = $this->ci($needle);
        foreach ($haystack as $h) {
            $h = $this->ci((string) $h);
            if ($h !== '' && (str_contains($h, $n) || str_contains($n, $h))) {
                return true;
            }
        }

        return false;
    }

    private function ci(string $v): string
    {
        return trim(strtolower($v));
    }
}
