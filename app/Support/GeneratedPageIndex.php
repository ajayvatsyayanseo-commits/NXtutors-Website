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

    /** @return list<string> */
    public static function slugs(): array
    {
        return (array) config('generated_pages.indexable', []);
    }
}
