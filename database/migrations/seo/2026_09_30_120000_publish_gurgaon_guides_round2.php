<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Gurgaon guides, round 2 (30 Sep 2026): moving to Gurgaon, switching to
 * IB/IGCSE, Cambridge vs Edexcel, the Class 11 stream choice, study abroad,
 * olympiads and study routines around long commutes. Same approach as
 * 2026_09_29_120000: bodies and meta in database/seo-content/blog, covers in
 * public/storage/blog; an existing slug is left alone; down() removes only
 * the rows this migration created.
 */
return new class extends Migration
{
    private const SLUGS = [
        'moving-to-gurgaon-school-and-tutoring-guide',
        'switching-cbse-to-ib-or-igcse-gurgaon',
        'cambridge-vs-edexcel-igcse-gurgaon',
        'class-11-stream-choice-gurgaon',
        'study-abroad-from-gurgaon-sat-ap-ib-timeline',
        'olympiad-preparation-gurgaon-imo-nso-rmo',
        'study-routine-long-commute-gurgaon',
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
