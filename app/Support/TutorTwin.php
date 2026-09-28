<?php

namespace App\Support;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * TutorTwin, the WhatsApp AI tutor, as this site advertises it.
 *
 * Two rules every placement follows:
 *  - every link carries UTM tags naming the surface (home_hero, profile, a
 *    subject page…), so TutorTwin's analytics show which placement sells;
 *  - prices are TutorTwin's live ones, read from its public plan list, or no
 *    price at all, never a number typed into a template that goes stale.
 *
 * The plan list has tiers (28 Sep 2026): a paid 1-day TRIAL, SOLO (typed
 * questions only), PRO (adds photos, PDFs and voice notes) and ELITE (all
 * subjects). What a price is quoted for matters: a "send a photo" promise
 * may only sit next to the price of a plan that includes photos.
 */
final class TutorTwin
{
    private const CACHE = 'tutortwin.plans.v2';

    public static function base(): string
    {
        return rtrim((string) config('tutortwin.url', 'https://nxtutortwin.nxtutors.com'), '/');
    }

    /** An absolute TutorTwin link tagged with where on this site it was clicked. */
    public static function link(string $path, string $placement, ?string $content = null): string
    {
        $query = http_build_query(array_filter([
            'utm_source' => 'nxtutors',
            'utm_medium' => $placement,
            'utm_campaign' => 'tutortwin',
            'utm_content' => $content,
        ]));

        return self::base().'/'.ltrim($path, '/').'?'.$query;
    }

    /**
     * TutorTwin's public INR plans, or [] when they cannot be read. Cached for
     * 6 hours; a failed read for 10 minutes, so an outage never slows a page.
     *
     * @return list<array<string,mixed>>
     */
    public static function plans(): array
    {
        $cached = Cache::get(self::CACHE);
        if (is_array($cached)) {
            return $cached;
        }
        if ((string) config('tutortwin.api') === '') {
            return []; // no API configured (tests, local): no prices shown
        }

        $plans = [];
        try {
            foreach ((array) Http::timeout(3)->acceptJson()->get(config('tutortwin.api').'/public/plans')->json() as $p) {
                if (is_array($p) && ($p['currency'] ?? 'INR') === 'INR' && (int) ($p['price_minor'] ?? $p['price_paise'] ?? 0) > 0) {
                    $plans[] = $p;
                }
            }
        } catch (Throwable) {
            $plans = [];
        }

        Cache::put(self::CACHE, $plans, $plans ? now()->addHours(6) : now()->addMinutes(10));

        return $plans;
    }

    private static function rupees(array $p): int
    {
        return intdiv((int) ($p['price_minor'] ?? $p['price_paise'] ?? 0), 100);
    }

    private static function tier(array $p): string
    {
        return strtoupper((string) ($p['tier'] ?? (($p['code'] ?? '') === 'TRIAL' ? 'TRIAL' : '')));
    }

    /** The paid trial, when TutorTwin offers one: ['price' => 49, 'days' => 1, 'answers' => 15, 'photos' => true]. */
    public static function trial(): ?array
    {
        foreach (self::plans() as $p) {
            if (self::tier($p) === 'TRIAL') {
                return [
                    'price' => self::rupees($p),
                    'days' => max(1, (int) ($p['duration_days'] ?? 1)),
                    'answers' => (int) ($p['limits']['answers_included'] ?? 0),
                    'photos' => (int) ($p['limits']['photos_per_day'] ?? 0) > 0,
                ];
            }
        }

        return null;
    }

    /**
     * The cheapest 30-day plan in rupees (trial excluded), optionally only
     * among plans that include photos. Null when unknown.
     */
    public static function fromPrice(bool $withPhotos = false): ?int
    {
        $best = null;
        foreach (self::plans() as $p) {
            if (self::tier($p) === 'TRIAL' || (int) ($p['duration_days'] ?? 0) !== 30) {
                continue;
            }
            if ($withPhotos && (int) ($p['limits']['photos_per_day'] ?? 0) <= 0) {
                continue;
            }
            $r = self::rupees($p);
            if ($best === null || $r < $best) {
                $best = $r;
            }
        }

        return $best;
    }

    /** "from ₹499/month", or null when the price is unknown. */
    public static function priceLabel(bool $withPhotos = false): ?string
    {
        $p = self::fromPrice($withPhotos);

        return $p ? 'from ₹'.number_format($p).'/month' : null;
    }

    /** "Try 1 day for ₹49", or null when there is no trial. */
    public static function trialLabel(): ?string
    {
        $t = self::trial();

        return $t ? 'Try '.$t['days'].' day'.($t['days'] > 1 ? 's' : '').' for ₹'.number_format($t['price']) : null;
    }

    /**
     * The TutorTwin subject a page is about ("Maths" for "Class 10 CBSE Maths"),
     * or null when TutorTwin does not sell it. `Science` maps to the sciences
     * it does sell; skills, languages it does not teach and exams map to null.
     */
    public static function subjectFor(?string $text): ?string
    {
        $t = ' '.mb_strtolower(trim((string) $text)).' ';
        if (trim($t) === '') {
            return null;
        }
        foreach ([
            'Computer Science' => '/computer science|\bcomputer\b|\bcoding\b|\bpython\b|\bjava\b/',
            'Social Science' => '/social science|social studies|\bsst\b|\bhistory\b|\bgeography\b|\bcivics\b/',
            'Maths' => '/\bmaths?\b|mathematics/',
            'Physics' => '/\bphysics\b/',
            'Chemistry' => '/\bchemistry\b/',
            'Biology' => '/\bbiology\b/',
            'Economics' => '/\beconomics\b/',
            'English' => '/\benglish\b/',
            'Science' => '/\bscience\b/',
        ] as $subject => $pattern) {
            if (preg_match($pattern, $t)) {
                return $subject;
            }
        }

        return null;
    }
}
