<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Guides for the eleven capitals launched on 7 Oct 2026 (Shimla, Panaji,
 * Shillong, Imphal, Agartala, Gangtok, Aizawl, Kohima, Itanagar, Port Blair, Leh):
 * home-tuition-fees-{city} and {city}-home-tuition-guide for each.
 * Bodies and meta in database/seo-content/blog, covers in
 * public/storage/blog; a slug whose .html or .json is missing (or has no
 * title) is skipped, an existing slug is left alone; down() removes only
 * rows created here.
 */
return new class extends Migration
{
    private const CITIES = ['shimla', 'panaji', 'shillong', 'imphal', 'agartala', 'gangtok', 'aizawl', 'kohima', 'itanagar', 'port-blair', 'leh'];

    private const DATE = '2026-10-07';

    /** @return list<string> */
    public static function slugs(): array
    {
        $out = [];
        foreach (self::CITIES as $c) {
            $out[] = 'home-tuition-fees-' . $c;
            $out[] = $c . '-home-tuition-guide';
        }

        return $out;
    }

    public function up(): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        $dir = database_path('seo-content/blog');
        foreach (self::slugs() as $slug) {
            if (DB::table('blog_managment')->whereIn('slug', [$slug, $slug . "\t", $slug . ' '])->exists()) {
                continue;
            }
            $meta = json_decode((string) @file_get_contents("$dir/$slug.json"), true) ?: [];
            $html = trim((string) @file_get_contents("$dir/$slug.html"));
            if ($html === '' || empty($meta['title'])) {
                continue;
            }
            DB::table('blog_managment')->insert([
                'title' => mb_substr((string) $meta['title'], 0, 250),
                'slug' => $slug,
                'bdesc' => $html,
                'meta_title' => isset($meta['meta_title']) ? mb_substr((string) $meta['meta_title'], 0, 250) : null,
                'meta_desc' => isset($meta['meta_desc']) ? mb_substr((string) $meta['meta_desc'], 0, 250) : null,
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
            DB::table('blog_managment')->whereIn('slug', self::slugs())->where('date', self::DATE)->delete();
        }
    }
};
