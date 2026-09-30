<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Noida guide cluster (30 Sep 2026, NCR roll-out): fees in Noida, three
 * zone guides and moving to Noida. Bodies and meta in
 * database/seo-content/blog, covers in public/storage/blog; an existing
 * slug is left alone; down() removes only the rows this migration created.
 */
return new class extends Migration
{
    private const SLUGS = [
        'home-tuition-fees-noida',
        'old-and-central-noida-tuition-guide',
        'noida-sector-62-and-70s-tuition-guide',
        'noida-expressway-and-extension-tuition-guide',
        'moving-to-noida-school-and-tutoring-guide',
    ];

    private const DATE = '2026-09-30';

    public function up(): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        $dir = database_path('seo-content/blog');
        foreach (self::SLUGS as $slug) {
            if (DB::table('blog_managment')->whereIn('slug', [$slug, $slug . "\t", $slug . ' '])->exists()) {
                continue;
            }
            $meta = json_decode((string) @file_get_contents("$dir/$slug.json"), true) ?: [];
            $html = trim((string) @file_get_contents("$dir/$slug.html"));
            if ($html === '' || empty($meta['title'])) {
                continue;
            }
            DB::table('blog_managment')->insert([
                'title' => $meta['title'],
                'slug' => $slug,
                'bdesc' => $html,
                'meta_title' => $meta['meta_title'] ?? null,
                'meta_desc' => $meta['meta_desc'] ?? null,
                'author' => $meta['author'] ?? 'NXTutors Academic Team',
                'avatar' => $slug . '.jpg',
                'status' => 't',
                'date' => self::DATE,
            ]);
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('blog_managment')) {
            DB::table('blog_managment')->whereIn('slug', self::SLUGS)->where('date', self::DATE)->delete();
        }
    }
};
