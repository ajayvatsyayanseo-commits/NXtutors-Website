<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Bhopal guide cluster (1 Oct 2026, city roll-out): home-tuition-fees-bhopal, south-and-central-bhopal-tuition-guide, bhel-and-old-bhopal-tuition-guide.
 * Bodies and meta in database/seo-content/blog, covers in
 * public/storage/blog; an existing slug is left alone; down() removes only
 * rows created here.
 */
return new class extends Migration
{
    private const SLUGS = [
        'home-tuition-fees-bhopal',
        'south-and-central-bhopal-tuition-guide',
        'bhel-and-old-bhopal-tuition-guide',
    ];

    private const DATE = '2026-10-01';

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
