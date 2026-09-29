<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * The Gurgaon guide cluster (29 Sep 2026), with the Gurugram city page as
 * its pillar: fees, hiring safely, JEE, NEET, IB/IGCSE, ICSE/ISC maths,
 * CBSE Class 10, and five zone guides that replace the ~80 noindexed
 * locality posts. Also rewrites the two IB posts Search Console shows with
 * many impressions and a poor position.
 *
 * Bodies and meta live in database/seo-content/blog ({slug}.html + .json);
 * covers of new posts are public/storage/blog/{slug}.jpg.
 *
 * A new slug is inserted; a slug that already exists is updated in place,
 * keeping its image and date. The IB posts' previous text is kept in
 * database/seo-content/blog/_before and down() puts it back; posts this
 * migration created are removed.
 */
return new class extends Migration
{
    private const NEW = [
        'home-tuition-fees-gurgaon',
        'choose-home-tutor-gurgaon-safety-checklist',
        'jee-preparation-gurgaon-coaching-or-home-tutor',
        'neet-preparation-gurgaon-coaching-or-home-tutor',
        'ib-igcse-tutoring-gurgaon-parents-guide',
        'icse-isc-maths-gurgaon-guide',
        'cbse-class-10-board-year-plan-gurgaon',
        'gurgaon-golf-course-road-dlf-tuition-guide',
        'gurgaon-golf-course-extension-spr-tuition-guide',
        'gurgaon-sohna-road-south-city-tuition-guide',
        'new-gurgaon-dwarka-expressway-tuition-guide',
        'old-gurgaon-palam-vihar-tuition-guide',
    ];

    private const REFRESH = [
        '-ib-math-aaai-slhl',
        '-ib-physics-slhl-iaee',
    ];

    private const DATE = '2026-09-29';

    private function dir(): string
    {
        return database_path('seo-content/blog');
    }

    /** @return array{meta: array, html: string}|null */
    private function post(string $slug): ?array
    {
        $meta = json_decode((string) @file_get_contents($this->dir() . "/$slug.json"), true) ?: [];
        $html = trim((string) @file_get_contents($this->dir() . "/$slug.html"));

        return ($html === '' || empty($meta['title'])) ? null : ['meta' => $meta, 'html' => $html];
    }

    /** Existing row for a slug, tolerating the stray tab/space some slugs were saved with. */
    private function find(string $slug): ?object
    {
        return DB::table('blog_managment')->whereIn('slug', [$slug, $slug . "\t", $slug . ' '])->first();
    }

    public function up(): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        foreach (array_merge(self::NEW, self::REFRESH) as $slug) {
            if (! $p = $this->post($slug)) {
                continue;
            }
            $row = [
                'title' => $p['meta']['title'],
                'bdesc' => $p['html'],
                'meta_title' => $p['meta']['meta_title'] ?? null,
                'meta_desc' => $p['meta']['meta_desc'] ?? null,
                'author' => $p['meta']['author'] ?? 'NXTutors Academic Team',
                'status' => 't',
            ];

            if ($existing = $this->find($slug)) {
                // A new-cluster slug that already exists was made by someone
                // else: leave it alone. Only the IB posts are rewritten.
                if (in_array($slug, self::REFRESH, true)) {
                    DB::table('blog_managment')->where('id', $existing->id)->update($row);
                }
                continue;
            }
            if (in_array($slug, self::NEW, true)) {
                DB::table('blog_managment')->insert($row + ['slug' => $slug, 'avatar' => $slug . '.jpg', 'date' => self::DATE]);
            }
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        DB::table('blog_managment')->whereIn('slug', self::NEW)->where('date', self::DATE)->delete();

        $before = json_decode((string) @file_get_contents($this->dir() . '/_before/meta.json'), true) ?: [];
        foreach (self::REFRESH as $slug) {
            $existing = $this->find($slug);
            $html = (string) @file_get_contents($this->dir() . "/_before/$slug.html");
            if (! $existing || ! isset($before[$slug]) || trim($html) === '') {
                continue;
            }
            DB::table('blog_managment')->where('id', $existing->id)->update([
                'title' => $before[$slug]['h1'] ?? $existing->title,
                'bdesc' => $html,
                'meta_title' => $before[$slug]['meta_title'] ?? null,
                'meta_desc' => $before[$slug]['desc'] ?? null,
                'author' => $before[$slug]['author'] ?? 'Admin',
            ]);
        }
    }
};
