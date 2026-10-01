<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Five national CBSE posts said "all tutors are ID-verified". Sample profiles
 * exist, so the rule wording is "tutors who join go through an ID check".
 * Plain substring swaps inside bdesc; a post edited by hand since (text no
 * longer present) is left alone. down() swaps back.
 */
return new class extends Migration
{
    private const SLUGS = [
        'cbse-class-10-maths-preparation',
        'cbse-class-10-science-notes',
        'cbse-class-12-chemistry-organicinorganic',
        'cbse-class-12-maths-calculusalgebra',
        'cbse-class-12-physics-strategies',
    ];

    private const PAIRS = [
        'All tutors are ID-verified' => 'Tutors who join go through an ID check',
        'all tutors are ID-verified' => 'tutors who join go through an ID check',
    ];

    private function swap(array $pairs): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        foreach (self::SLUGS as $slug) {
            $rows = DB::table('blog_managment')->whereIn('slug', [$slug, $slug . "\t", $slug . ' '])->get(['id', 'bdesc']);
            foreach ($rows as $row) {
                $html = str_replace(array_keys($pairs), array_values($pairs), (string) $row->bdesc);
                if ($html !== (string) $row->bdesc) {
                    DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => $html]);
                }
            }
        }
    }

    public function up(): void
    {
        $this->swap(self::PAIRS);
    }

    public function down(): void
    {
        $this->swap(array_flip(self::PAIRS));
    }
};
