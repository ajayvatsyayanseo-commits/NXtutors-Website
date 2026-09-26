<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Publishes the tutor-written guides in database/seo-content/blog.
 *
 * Each post is a pair: {slug}.html (the body) and {slug}.json (title,
 * meta_title, meta_desc, author). A slug that already exists is updated in
 * place, keeping its image and date; a new slug is inserted. The text a post
 * had before is kept in database/seo-content/blog/_before, and down() puts it
 * back (and removes posts this migration created).
 */
return new class extends Migration
{
    private function dir(): string
    {
        return database_path('seo-content/blog');
    }

    /** @return array<string, array{meta: array, html: string}> */
    private function posts(): array
    {
        $posts = [];
        foreach (glob($this->dir() . '/*.json') ?: [] as $json) {
            $slug = basename($json, '.json');
            $html = $this->dir() . '/' . $slug . '.html';
            if (! is_file($html)) {
                continue;
            }
            $posts[$slug] = [
                'meta' => json_decode((string) file_get_contents($json), true) ?: [],
                'html' => trim((string) file_get_contents($html)),
            ];
        }

        return $posts;
    }

    /** Existing row for a slug, tolerating the stray tab/space some slugs were saved with. */
    private function find(string $slug): ?object
    {
        return DB::table('blog_managment')->whereIn('slug', [$slug, $slug . "\t", $slug . ' '])->first();
    }

    public function up(): void
    {
        foreach ($this->posts() as $slug => $p) {
            $row = [
                'title' => $p['meta']['title'] ?? $slug,
                'bdesc' => $p['html'],
                'meta_title' => $p['meta']['meta_title'] ?? null,
                'meta_desc' => $p['meta']['meta_desc'] ?? null,
                'author' => $p['meta']['author'] ?? 'NXTutors',
                'status' => 't',
            ];

            if ($existing = $this->find($slug)) {
                DB::table('blog_managment')->where('id', $existing->id)->update($row + ['slug' => $slug]);
            } else {
                DB::table('blog_managment')->insert($row + ['slug' => $slug, 'date' => '2026-09-26']);
            }
        }
    }

    public function down(): void
    {
        $before = json_decode((string) @file_get_contents($this->dir() . '/_before/meta.json'), true) ?: [];

        foreach (array_keys($this->posts()) as $slug) {
            $existing = $this->find($slug);
            if (! $existing) {
                continue;
            }

            if (isset($before[$slug])) {
                DB::table('blog_managment')->where('id', $existing->id)->update([
                    'title' => $before[$slug]['h1'] ?? $existing->title,
                    'bdesc' => (string) @file_get_contents($this->dir() . '/_before/' . $slug . '.html'),
                    'meta_title' => $before[$slug]['meta_title'] ?? null,
                    'meta_desc' => $before[$slug]['desc'] ?? null,
                    'author' => $before[$slug]['author'] ?? 'Admin',
                ]);
            } else {
                DB::table('blog_managment')->where('id', $existing->id)->delete();
            }
        }
    }
};
