<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Four new parent guides (28 Sep 2026), the "Start here" row on /blog:
 * the demo-class checklist, home vs online tutor, how NXTutors uses AI, and
 * the TutorTwin guide. Bodies and titles live in database/seo-content/blog
 * ({slug}.html + {slug}.json); covers are public/storage/blog/{slug}.jpg.
 *
 * A slug that already exists is left alone (never overwrites someone's
 * edits); down() removes only the rows this migration created.
 */
return new class extends Migration
{
    private const SLUGS = [
        'demo-class-checklist-for-parents',
        'home-tutor-vs-online-tutor',
        'how-nxtutors-uses-ai',
        'tutortwin-whatsapp-homework-help-guide',
    ];

    public function up(): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        $dir = database_path('seo-content/blog');
        foreach (self::SLUGS as $slug) {
            if (DB::table('blog_managment')->whereIn('slug', [$slug, $slug."\t", $slug.' '])->exists()) {
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
                'avatar' => $slug.'.jpg',
                'status' => 't',
                'date' => '2026-09-28',
            ]);
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('blog_managment')) {
            DB::table('blog_managment')->whereIn('slug', self::SLUGS)->where('date', '2026-09-28')->delete();
        }
    }
};
