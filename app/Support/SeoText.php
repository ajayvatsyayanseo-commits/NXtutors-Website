<?php

namespace App\Support;

/**
 * Search titles and meta descriptions for the pages built from data: area
 * pages, the indexed /p/ pages and the home page. One place, so every one
 * of them follows the rules in .claude/skills/nxt-seo-rules:
 *
 *  - titles at most 65 characters, ending "| NXTutors"; "Gurgaon" in titles;
 *  - descriptions 140–160 characters, built only from facts we may state
 *    (2–3 matched tutors, nearest first, each fee shown before the demo, the
 *    first class a free demo, most fees ₹800–2,500/hr);
 *  - none of the banned words (best, top, No. 1, guaranteed, cheapest,
 *    affordable, verified tutors).
 *
 * Text typed into Super Admin (area meta_desc, page meta_description) is
 * never used for these pages: in Sep 2026 it still said "best", "top",
 * "affordable" and "₹500–₹2000/hr" on dozens of area pages.
 *
 * Several wordings per page type, picked by a hash of the slug, so 400
 * Gurgaon area pages do not all read the same; the first wording that lands
 * in 140–160 characters wins.
 */
class SeoText
{
    public const TITLE_MAX = 65;
    public const DESC_MIN = 140;
    public const DESC_MAX = 160;
    public const BRAND = 'NXTutors';

    /** Words and claims the rules ban from titles and descriptions. */
    public const BANNED = '/\b(best|top|no\.?\s*1|number\s+one|#\s*1|guarantee[ds]?|cheapest|lowest|affordable|verified|india\'?s\s+first)\b|#1/iu';

    /** The only fee figures we may show (from the one allowed fee sentence). */
    public const FEE_FIGURES = [800, 2500];

    /** Optional endings that bring a short description up to 140 characters. */
    private const EXTRAS = [' Online classes too.', ' Switching tutor later is free.', ' Classes 1–12.'];

    // ------------------------------------------------------------------
    // Checks (used by the tests and the audit script)
    // ------------------------------------------------------------------

    /**
     * Everything wrong with a title/description pair, as short labels.
     *
     * @return list<string>
     */
    public static function problems(string $title, string $desc, bool $needBrand = true): array
    {
        $out = [];
        $tl = mb_strlen($title);
        $dl = mb_strlen($desc);
        if ($tl === 0) {
            $out[] = 'title missing';
        } elseif ($tl > self::TITLE_MAX) {
            $out[] = "title $tl chars";
        }
        if ($needBrand && $title !== '' && stripos($title, self::BRAND) === false) {
            $out[] = 'title no brand';
        }
        if ($dl === 0) {
            $out[] = 'desc missing';
        } elseif ($dl < self::DESC_MIN || $dl > self::DESC_MAX) {
            $out[] = "desc $dl chars";
        }
        foreach (['title' => $title, 'desc' => $desc] as $where => $text) {
            if (preg_match_all(self::BANNED, $text, $m)) {
                $out[] = "$where banned: " . implode(', ', array_unique(array_map('mb_strtolower', array_filter(array_merge($m[1], $m[0])))));
            }
            if ($bad = self::badFees($text)) {
                $out[] = "$where fee: " . implode(', ', $bad);
            }
        }

        return $out;
    }

    /**
     * Rupee amounts in a text that are not the approved ₹800 / ₹2,500.
     *
     * @return list<string>
     */
    public static function badFees(string $text): array
    {
        $bad = [];
        if (preg_match_all('/(?:₹|\brs\.?\s*|\binr\s*)([\d,]+)(?:\s*(?:–|-|to)\s*(?:₹|\brs\.?\s*)?([\d,]+))?/iu', $text, $m, PREG_SET_ORDER)) {
            foreach ($m as $hit) {
                foreach ([1, 2] as $i) {
                    if (! isset($hit[$i]) || $hit[$i] === '') {
                        continue;
                    }
                    $n = (int) str_replace(',', '', $hit[$i]);
                    if (! in_array($n, self::FEE_FIGURES, true)) {
                        $bad[] = trim($hit[0]);
                        break;
                    }
                }
            }
        }

        return array_values(array_unique($bad));
    }

    // ------------------------------------------------------------------
    // Area pages
    // ------------------------------------------------------------------

    /** The city as written in titles: "Gurgaon" for Gurugram (what people type). */
    public static function titleCity(string $citySlug, string $cityName): string
    {
        return $citySlug === 'gurugram' ? (Geo::akaOf($citySlug) ?: 'Gurgaon') : $cityName;
    }

    /**
     * "Home Tutors in {place}, Gurgaon – Free Demo | NXTutors", shortened to
     * fit 65. An area named like its zone (Dwarka, Indirapuram) gets another
     * ending, since the zone page already carries the "Free Demo" title.
     */
    public static function areaTitle(string $place, string $titleCity, bool $sameAsZone = false): string
    {
        return self::firstFit([
            $sameAsZone ? "Home Tutors in $place, $titleCity – Fees & Free Demo | " . self::BRAND : "Home Tutors in $place, $titleCity – Free Demo | " . self::BRAND,
            "Home Tutors in $place, $titleCity | " . self::BRAND,
            "Home Tutors in $place | " . self::BRAND,
            "Tutors in $place | " . self::BRAND,
        ], self::TITLE_MAX) ?? self::cut("Tutors in $place", self::TITLE_MAX - mb_strlen(' | ' . self::BRAND)) . ' | ' . self::BRAND;
    }

    /**
     * The kind of place an area page is about: a numbered sector, a housing
     * society (its sector known from config/area_sectors.php) or a named
     * place (DLF Phase 1, Palam Vihar, Sushant Lok).
     */
    public static function areaKind(string $place, ?string $sector): string
    {
        if (preg_match('/^sector[\s-]*\d+[a-z]?\b/iu', $place)) {
            return 'sector';
        }

        return $sector ? 'society' : 'place';
    }

    /**
     * Meta description for an area page, 140–160 characters.
     *
     * @param  string       $place      the area's clean name ("Sector 88")
     * @param  string       $city       city name used in the text ("Gurgaon")
     * @param  string|null  $zone       zone from Zones::of ("New Gurugram")
     * @param  string|null  $sector     sector of a society page ("Sector 102")
     * @param  string       $seed       the slug, to vary the wording
     */
    public static function areaDesc(string $place, string $city, ?string $zone, ?string $sector, string $seed): string
    {
        $kind = self::areaKind($place, $sector);
        $P = self::descPlace($place);
        $Z = $zone !== null && strcasecmp($zone, $place) !== 0 ? $zone : null; // not "Dwarka, Delhi (Dwarka)"
        $S = $sector ? str_replace('-', '–', $sector) : null;

        // Each wording is tried with the city and zone, then without the city,
        // then without the zone, so long zone names do not push every page
        // onto the same short fall-back.
        $ways = array_values(array_unique(array_filter([
            [$city, $Z], [null, $Z], [$city, null],
        ], fn ($w) => $w[0] !== null || $w[1] !== null), SORT_REGULAR));
        $at = function (?string $c, ?string $z, bool $withSector = false) use ($P, $S) {
            $tail = array_filter([$withSector ? $S : null, $c]);
            $s = $P . ($tail ? ', ' . implode(', ', $tail) : '');

            return $z ? "$s ($z)" : $s;
        };
        $group = fn (callable $f) => array_map(fn ($w) => $f($w[0], $w[1]), $ways);

        $t = [];
        if ($kind === 'sector') {
            $t[] = $group(fn ($c, $z) => "Home tutors in {$at($c, $z)}, nearest first: get 2–3 matched tutors, see each tutor's fee before the demo; the first class is free.");
            $t[] = $group(fn ($c, $z) => "Need a home tutor in $P" . ($c ? ", $c" : '') . "? Get 2–3 matched tutors near $place" . ($z ? " ($z)" : '') . ", see each fee first; the first class is a free demo.");
            $t[] = $group(fn ($c, $z) => "{$at($c, $z)}: home tutors for CBSE, ICSE, IB, IGCSE, JEE and NEET. Most fees ₹800–2,500/hr, shown before a free first demo.");
        } elseif ($kind === 'society') {
            $t[] = $group(fn ($c, $z) => "Home tutors near {$at($c, $z, true)}: tutors who live or travel nearby come first. Get 2–3 matched tutors and a free first demo.");
            $t[] = $group(fn ($c, $z) => "{$at($c, $z, true)}: home tuition with 2–3 matched tutors, nearest first. See each tutor's fee before the demo; the first class is free.");
            $t[] = $group(fn ($c, $z) => "Tutors for {$P} residents ({$S}" . ($c ? ", $c" : '') . ($z ? ", $z" : '') . "): CBSE, ICSE, IB, IGCSE. Most fees ₹800–2,500/hr; free first demo.");
        } else {
            $t[] = $group(fn ($c, $z) => "Home tutors in {$at($c, $z)} for Classes 1–12, JEE and NEET: 2–3 matched tutors, nearest first, fees shown before a free first demo.");
            $t[] = $group(fn ($c, $z) => "Looking for a home tutor in $P" . ($c ? ", $c" : '') . "? Get 2–3 matched tutors near $place" . ($z ? " ($z)" : '') . "; see fees before a free first demo.");
            $t[] = $group(fn ($c, $z) => "{$at($c, $z)}: home tutors for CBSE, ICSE, IB and IGCSE. Most fees ₹800–2,500/hr, shown before a free first demo class.");
        }

        // Shorter fall-backs for long names, true for any kind.
        $t[] = $group(fn ($c, $z) => "Home tutors in {$at($c, $z)}: 2–3 matched tutors, nearest first, fees shown before a free first demo.");
        $t[] = "Home tutors near $P: 2–3 matched tutors, fees shown first, free first demo.";

        return self::fitDesc($t, $seed, 3);
    }

    /** DLF Phase 1–5 are also searched as "DLF City Phase n". */
    private static function descPlace(string $place): string
    {
        return preg_match('/^DLF Phase \d$/i', $place) ? $place . ' (DLF City)' : $place;
    }

    // ------------------------------------------------------------------
    // Generated /p/ pages
    // ------------------------------------------------------------------

    /**
     * Title and description for an indexed /p/ page.
     *
     * @param  string       $what      "IB Maths, Class 6" or "JEE Maths"
     * @param  string|null  $descWhat  optional wording for the description
     *                                 ("Class 11–12 Accountancy, CBSE or ISC")
     * @return array{title:string, desc:string}
     */
    public static function generatedPage(string $area, string $city, string $what, ?string $descWhat, string $seed): array
    {
        $tc = self::titleCity(Geo::slugFor($city) ?: strtolower($city), $city);
        $what = trim(preg_replace('/\s*\((commerce|science|humanities)\)\s*/i', ' ', $what));
        $subject = $what;
        $class = null;
        if (preg_match('/^(.*?),?\s*Class\s+([\w–-]+)$/u', $what, $m)) {
            $subject = trim($m[1], ' ,');
            $class = $m[2];
        }

        $titles = $class ? [
            "$subject Home Tutor in $area, $tc – Class $class | " . self::BRAND,
            "Class $class $subject Home Tutor in $area, $tc | " . self::BRAND,
            "$subject Tutor in $area, $tc – Class $class | " . self::BRAND,
            "$subject Home Tutor in $area, $tc | " . self::BRAND,
            "$subject Home Tutor in $area | " . self::BRAND,
        ] : [
            "$subject Home Tutor in $area, $tc – Free Demo | " . self::BRAND,
            "$subject Home Tutor in $area, $tc | " . self::BRAND,
            "$subject Home Tutor in $area | " . self::BRAND,
        ];
        $title = self::firstFit($titles, self::TITLE_MAX)
            ?? self::cut("$subject Tutor in $area", self::TITLE_MAX - mb_strlen(' | ' . self::BRAND)) . ' | ' . self::BRAND;

        $dw = $descWhat ?: ($class ? "$subject Class $class" : $subject);
        $desc = self::fitDesc([
            "$dw home tutor in $area, $tc: get 2–3 matched tutors near you, see each tutor's fee before the demo, and the first class is free.",
            "Find $dw home tutors in $area, $tc. Get 2–3 matched tutors, nearest first, with each fee shown before a free first demo class.",
            "$dw home tutor in $area, $tc: 2–3 matched tutors, nearest first, fees shown before a free first demo.",
            "$dw tutor near $area: 2–3 matched tutors, fees shown first, free first demo.",
        ], $seed, 2);

        return ['title' => $title, 'desc' => $desc];
    }

    // ------------------------------------------------------------------
    // Home page
    // ------------------------------------------------------------------

    /**
     * Home title and description. $cities is the number of cities with live
     * area pages (Geo::counts), counted at request time, never typed in.
     *
     * @return array{title:string, desc:string}
     */
    public static function home(int $cities, bool $hasGurgaon = true): array
    {
        $more = max(0, $cities - ($hasGurgaon ? 1 : 0));
        $mcs = $more === 1 ? '1 City' : "$more Cities";
        $mcl = $more === 1 ? 'one more city' : "$more more cities";
        $titles = $more > 0 ? [
            "Home Tutors Near You – Gurgaon + {$mcs} & Online | " . self::BRAND,
            "Home Tutors Near You – Gurgaon + {$mcs} | " . self::BRAND,
        ] : [];
        $titles[] = 'Home Tutors Near You in Gurgaon & Online Tutors | ' . self::BRAND;
        $title = self::firstFit($titles, self::TITLE_MAX);

        $desc = self::fitDesc($more > 0 ? [
            "Home tutors near you in Gurgaon and $mcl, and online tutors across India. Get 2–3 matched tutors, see each fee first; the first class is free.",
            "Home tutors near you in Gurgaon and $mcl, online tutors across India: 2–3 matched tutors, fees shown first, free first demo class.",
        ] : [
            'Home tutors near you in Gurgaon and online tutors across India for CBSE, ICSE, IB, IGCSE, JEE and NEET. Get 2–3 matched tutors and a free first demo.',
        ], 'home', 1);

        return ['title' => $title, 'desc' => $desc];
    }

    // ------------------------------------------------------------------
    // Fitting
    // ------------------------------------------------------------------

    /**
     * The first candidate (starting at a seeded one among the first $rotate)
     * that fits 140–160 as is or with optional endings; else the closest one,
     * cut to 160 at a word.
     *
     * @param  list<string>  $candidates
     */
    public static function fitDesc(array $candidates, string $seed, int $rotate): string
    {
        // An entry is one wording, or a list of versions of one wording
        // (longest first) tried in turn.
        $groups = array_values(array_map(fn ($c) => array_map(fn ($v) => trim(preg_replace('/\s+/u', ' ', $v)), (array) $c), $candidates));
        $rotate = max(1, min($rotate, count($groups)));
        $start = crc32($seed) % $rotate;
        $order = [];
        for ($i = 0; $i < $rotate; $i++) {
            $order[] = $groups[($start + $i) % $rotate];
        }
        $order = array_merge($order, array_slice($groups, $rotate));

        // First versions of every wording before any second version: a
        // shorter wording that keeps the zone beats one that drops it.
        $depth = max(array_map('count', $order));
        for ($v = 0; $v < $depth; $v++) {
            foreach ($order as $versions) {
                if (isset($versions[$v]) && ($fit = self::padToFit($versions[$v]))) {
                    return $fit;
                }
            }
        }

        // Nothing fits (a very long place name): the shortest, cut at a word.
        $all = array_merge(...$order);
        usort($all, fn ($a, $b) => mb_strlen($a) <=> mb_strlen($b));

        return self::padToFit(self::cut($all[0], self::DESC_MAX)) ?? self::cut($all[0], self::DESC_MAX);
    }

    private static function padToFit(string $c): ?string
    {
        if (mb_strlen($c) > self::DESC_MAX) {
            return null;
        }
        if (mb_strlen($c) >= self::DESC_MIN) {
            return $c;
        }
        // Add endings, in order, skipping one that would overshoot.
        foreach (self::EXTRAS as $extra) {
            if (mb_strlen($c . $extra) <= self::DESC_MAX) {
                $c .= $extra;
                if (mb_strlen($c) >= self::DESC_MIN) {
                    return $c;
                }
            }
        }

        return null;
    }

    /** @param list<string> $candidates */
    private static function firstFit(array $candidates, int $max): ?string
    {
        foreach ($candidates as $c) {
            $c = trim(preg_replace('/\s+/u', ' ', $c));
            if (mb_strlen($c) <= $max) {
                return $c;
            }
        }

        return null;
    }

    /** Cut to $max characters at a word boundary, with no dangling punctuation. */
    public static function cut(string $s, int $max): string
    {
        if (mb_strlen($s) <= $max) {
            return $s;
        }
        $s = mb_substr($s, 0, $max + 1);
        $s = preg_replace('/\s+\S*$/u', '', $s);

        return rtrim(mb_substr($s, 0, $max), " ,;:–-");
    }
}
