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
     * the stored ones (only for pages without a 'seo' row). See config/generated_pages.php ('seo').
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

        // "{Subject} Home Tutor in {area}, Gurgaon – Class {n} | NXTutors" and a
        // 140–160 character description with the free demo (App\Support\SeoText).
        // An optional fourth entry words the description ("Class 11–12
        // Accountancy (CBSE or ISC)").
        return SeoText::generatedPage($area, $city, $what, $row[3] ?? null, trim((string) $page->slug));
    }

    /** @return list<string> */
    public static function slugs(): array
    {
        return (array) config('generated_pages.indexable', []);
    }
}
