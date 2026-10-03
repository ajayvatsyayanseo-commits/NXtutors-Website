<?php

namespace App\Services\Enquiries;

use App\NxtAi\Support\CityNormalizer;
use App\NxtAi\Support\SubjectNormalizer;
use App\Support\Zones;

/**
 * Turns whatever a form sent ("10th", "cbse,icse", "Sector 56, Gurgaon",
 * "maths, sci") into the enquiry desk's fixed vocabulary. Pure functions:
 * an unknown value comes back null (or tidied), never invented.
 */
final class EnquiryNormaliser
{
    public static function classBand(?string $class): ?string
    {
        $c = mb_strtolower(trim((string) $class));
        if ($c === '') {
            return null;
        }
        if (preg_match('/nursery|pre.?school|play.?group|\blkg\b|\bukg\b|\bkg\b|kinder/', $c)) {
            return 'nursery_kg';
        }
        if (preg_match('/college|b\.?\s?tech|b\.?\s?sc|b\.?\s?com|graduat|universit|undergrad|\bug\b|\bpg\b|degree/', $c)) {
            return 'college';
        }
        if (preg_match('/adult|working|professional|spoken/', $c)) {
            return 'adult';
        }
        $n = null;
        if (preg_match('/\b(\d{1,2})(?:st|nd|rd|th)?\b/', $c, $m)) {
            $n = (int) $m[1];
        } else {
            $roman = ['xii' => 12, 'xi' => 11, 'x' => 10, 'ix' => 9, 'viii' => 8, 'vii' => 7, 'vi' => 6, 'v' => 5, 'iv' => 4, 'iii' => 3, 'ii' => 2, 'i' => 1];
            foreach ($roman as $r => $v) {
                if (preg_match('/(^|class\s*|std\s*)' . $r . '\b/', $c)) {
                    $n = $v;
                    break;
                }
            }
        }
        if ($n === null) {
            return null;
        }

        return match (true) {
            $n >= 1 && $n <= 5 => '1_5',
            $n >= 6 && $n <= 8 => '6_8',
            $n >= 9 && $n <= 10 => '9_10',
            $n >= 11 && $n <= 12 => '11_12',
            default => null,
        };
    }

    public static function board(?string $text): ?string
    {
        $t = mb_strtolower(trim((string) $text));
        if ($t === '') {
            return null;
        }
        $map = [
            'IGCSE' => '/igcse|cambridge/', 'ISC' => '/\bisc\b/', 'ICSE' => '/icse|cisce/', 'IB' => '/\bib\b|\bmyp\b|\bpyp\b|\bdp\b|international baccalaureate/',
            'CBSE' => '/cbse|ncert/', 'NIOS' => '/nios/',
        ];
        foreach ($map as $board => $re) {
            if (preg_match($re, $t)) {
                return $board;
            }
        }
        if (preg_match('/state|hbse|haryana|up board|upmsp|maharashtra|mahahsc|ssc|hsc|kseab|pue|wbbse|wbchse|gseb|rbse|rajasthan|tamil|samacheer|telangana|karnataka|bihar|bseb|punjab|pseb|kerala/', $t, $m)) {
            return 'State: ' . mb_substr(ucwords($m[0]), 0, 32);
        }

        return null;
    }

    public static function examGoal(?string $text): ?string
    {
        $t = mb_strtolower((string) $text);
        if (trim($t) === '') {
            return null;
        }

        return match (true) {
            (bool) preg_match('/\bjee\b|iit/', $t) => 'jee',
            (bool) preg_match('/\bneet\b|medical entrance/', $t) => 'neet',
            (bool) preg_match('/\bcuet\b/', $t) => 'cuet',
            (bool) preg_match('/olympiad|\bimo\b|\bnso\b|ntse/', $t) => 'olympiad',
            (bool) preg_match('/\bsat\b/', $t) => 'sat',
            (bool) preg_match('/board exam|boards\b|pre.?board/', $t) => 'boards',
            default => null,
        };
    }

    /** @return list<string> canonical subject names */
    public static function subjects(?string $text): array
    {
        $out = [];
        foreach (preg_split('/[,;\/|+&]|\band\b/i', (string) $text) ?: [] as $part) {
            $part = trim($part);
            if ($part === '' || mb_strlen($part) > 40) {
                continue;
            }
            $s = SubjectNormalizer::normalize($part);
            if ($s !== null && preg_match('/[a-z]/i', $s)) {
                $out[] = $s;
            }
        }

        return array_values(array_unique($out));
    }

    /** Subjects as the stored ",A,B," string (≤ 250). */
    public static function subjectField(array $subjects): ?string
    {
        $subjects = array_values(array_filter(array_map(fn ($s) => str_replace(',', ' ', trim((string) $s)), $subjects)));
        if ($subjects === []) {
            return null;
        }
        $s = ',' . implode(',', $subjects) . ',';

        return mb_strlen($s) > 250 ? mb_substr($s, 0, mb_strrpos(mb_substr($s, 0, 250), ',') + 1) : $s;
    }

    public static function mode(?string $text): ?string
    {
        $t = mb_strtolower((string) $text);

        return match (true) {
            trim($t) === '' => null,
            str_contains($t, 'hybrid') || (str_contains($t, 'home') && str_contains($t, 'online')) || str_contains($t, 'both') || str_contains($t, 'either') => 'hybrid',
            str_contains($t, 'online') => 'online',
            str_contains($t, 'home') || str_contains($t, 'offline') || str_contains($t, 'in person') => 'home',
            default => null,
        };
    }

    public static function gender(?string $text): ?string
    {
        $t = mb_strtolower((string) $text);

        return match (true) {
            (bool) preg_match('/female|woman|lady|ma.?am\b/', $t) => 'female',
            (bool) preg_match('/\bmale\b|\bsir\b|\bman\b/', $t) => 'male',
            default => null,
        };
    }

    /**
     * City and area from free text such as "Sector 56, Gurugram" or "Noida".
     *
     * @return array{city:?string, area:?string, zone:?string}
     */
    public static function place(?string $city, ?string $area = null): array
    {
        $city = trim((string) $city);
        $area = trim((string) $area);

        if ($area === '' && str_contains($city, ',')) {
            $parts = array_values(array_filter(array_map('trim', explode(',', $city))));
            $city = (string) array_pop($parts);
            $area = implode(', ', $parts);
        }

        $canonical = null;
        if ($city !== '') {
            try {
                $canonical = Zones::cityOf($city);
            } catch (\Throwable $e) {
                $canonical = null;
            }
            $canonical = $canonical ?: CityNormalizer::normalize($city);
            // "Sector 56" given as the city: the area, in Gurugram.
            if ($area === '' && preg_match('/^sector\s*\d/i', $city)) {
                $area = $city;
            }
        } elseif ($area !== '') {
            try {
                $canonical = Zones::cityOf($area);
            } catch (\Throwable $e) {
                $canonical = null;
            }
        }

        $zone = null;
        if ($canonical !== null && ($area !== '' || $city !== '')) {
            try {
                $zone = Zones::of($canonical, $area !== '' ? $area : $city);
            } catch (\Throwable $e) {
                $zone = null;
            }
        }

        return [
            'city' => $canonical !== null ? mb_substr($canonical, 0, 80) : null,
            'area' => $area !== '' ? mb_substr($area, 0, 120) : null,
            'zone' => $zone !== null ? mb_substr($zone, 0, 80) : null,
        ];
    }

    /** Indian mobile → 10 digits, or null. */
    public static function phone(?string $phone): ?string
    {
        $d = preg_replace('/\D/', '', (string) $phone);
        if (strlen($d) > 10 && (str_starts_with($d, '91') || str_starts_with($d, '0'))) {
            $d = substr($d, -10);
        }

        return strlen($d) === 10 ? $d : null;
    }

    public static function phoneHash(?string $phone): ?string
    {
        $p = self::phone($phone);

        return $p === null ? null : hash_hmac('sha256', 'phone:' . $p, (string) config('app.key'));
    }

    public static function emailHash(?string $email): ?string
    {
        $e = mb_strtolower(trim((string) $email));

        return ($e === '' || ! str_contains($e, '@')) ? null : hash_hmac('sha256', 'email:' . $e, (string) config('app.key'));
    }

    public static function device(?string $userAgent): ?string
    {
        $ua = mb_strtolower((string) $userAgent);

        return match (true) {
            $ua === '' => null,
            str_contains($ua, 'ipad') || str_contains($ua, 'tablet') => 'tablet',
            str_contains($ua, 'mobi') || str_contains($ua, 'android') || str_contains($ua, 'iphone') => 'mobile',
            default => 'desktop',
        };
    }

    /** A URL without its query string or fragment (no personal data travels on), ≤ 250. */
    public static function cleanUrl(?string $url): ?string
    {
        $u = trim((string) $url);
        if ($u === '') {
            return null;
        }
        $parts = parse_url($u);
        if ($parts === false) {
            return null;
        }
        $clean = (isset($parts['host']) ? ($parts['scheme'] ?? 'https') . '://' . $parts['host'] : '') . ($parts['path'] ?? '');

        return $clean === '' ? null : mb_substr($clean, 0, 250);
    }

    /** utm_* parameters of a URL as "source=x&medium=y" (≤ 250), or null. */
    public static function utmFrom(?string $url): ?string
    {
        $q = parse_url((string) $url, PHP_URL_QUERY);
        if (! is_string($q) || $q === '') {
            return null;
        }
        parse_str($q, $params);
        $utm = [];
        foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid'] as $k) {
            if (isset($params[$k]) && is_string($params[$k]) && $params[$k] !== '') {
                $utm[str_replace('utm_', '', $k)] = mb_substr($params[$k], 0, 60);
            }
        }

        return $utm ? mb_substr(http_build_query($utm), 0, 250) : null;
    }

    public static function cut(?string $s, int $max): ?string
    {
        $s = trim((string) $s);

        return $s === '' ? null : mb_substr($s, 0, $max);
    }
}
