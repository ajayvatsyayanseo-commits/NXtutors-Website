<?php

namespace App\Support;

use App\Models\GeneratedPage;

/**
 * Whether a generated /p/ page may be indexed. One rule for the page's
 * robots tag and the sitemap, so the two cannot disagree.
 * See config/generated_pages.php for why most are not.
 */
class GeneratedPageIndex
{
    public static function indexable(GeneratedPage $page): bool
    {
        if ((string) data_get($page->payload, 'index_flag', 'Index') !== 'Index') {
            return false;
        }

        return in_array(trim((string) $page->slug), self::slugs(), true);
    }

    /**
     * Search title and description for an indexed page, or null to keep
     * the stored ones. See config/generated_pages.php ('seo').
     *
     * @return array{title: string, desc: string}|null
     */
    public static function seo(GeneratedPage $page): ?array
    {
        $row = config('generated_pages.seo.' . trim((string) $page->slug));
        if (! is_array($row) || count($row) < 3) {
            return null;
        }
        [$area, $city, $what] = $row;

        $base = "Home Tutor in $area, $city – $what";
        $title = mb_strlen($base . ' | NXTutors') <= 65 ? $base . ' | NXTutors' : $base;
        $desc = "Home tutor for $what in $area, $city. See tutors near you with their fees, get two or three matched tutors and book a free demo class.";

        return ['title' => $title, 'desc' => $desc];
    }

    /** @return list<string> */
    public static function slugs(): array
    {
        return (array) config('generated_pages.indexable', []);
    }
}
