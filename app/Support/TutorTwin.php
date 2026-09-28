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
 *  - the price is TutorTwin's live "from" price, or no price at all, never a
 *    number typed into a template that silently goes stale.
 *
 * What the copy may claim is limited to what the product does today: see
 * the never-claim list in docs and the TutorTwin README (it is an AI, it can
 * make mistakes, maths is not machine-verified, no free trial).
 */
final class TutorTwin
{
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
     * The cheapest monthly single-subject price in rupees, from TutorTwin's
     * public plans, or null when it cannot be read. Cached for 6 hours; a
     * failed read is cached for 10 minutes so a TutorTwin outage never slows
     * this site's pages.
     */
    public static function fromPrice(): ?int
    {
        $cached = Cache::get('tutortwin.from_price');
        if ($cached !== null) {
            return $cached === 0 ? null : (int) $cached;
        }

        $price = null;
        if ((string) config('tutortwin.api') === '') {
            return null; // no API configured (tests, local): no price shown
        }
        try {
            $plans = Http::timeout(2)->acceptJson()->get(config('tutortwin.api').'/public/plans')->json();
            foreach ((array) $plans as $p) {
                if (! is_array($p) || ($p['currency'] ?? 'INR') !== 'INR' || str_starts_with((string) ($p['code'] ?? ''), 'ALL')) {
                    continue;
                }
                if ((int) ($p['duration_days'] ?? 0) !== 30) {
                    continue;
                }
                $rupees = intdiv((int) ($p['price_minor'] ?? $p['price_paise'] ?? 0), 100);
                if ($rupees > 0 && ($price === null || $rupees < $price)) {
                    $price = $rupees;
                }
            }
        } catch (Throwable) {
            $price = null;
        }

        Cache::put('tutortwin.from_price', $price ?? 0, $price ? now()->addHours(6) : now()->addMinutes(10));

        return $price;
    }

    /** "from ₹1,199/month", or null when the price is unknown. */
    public static function priceLabel(): ?string
    {
        $p = self::fromPrice();

        return $p ? 'from ₹'.number_format($p).'/month' : null;
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
