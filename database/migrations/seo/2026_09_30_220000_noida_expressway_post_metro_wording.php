<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * The Noida expressway guide called the Aqua Line extension "approved";
 * the Greater Noida research only supports "planned" (it went to the
 * Public Investment Board in July 2026). Swaps the two sentences in the
 * published body; down() swaps them back.
 */
return new class extends Migration
{
    private const SLUG = 'noida-expressway-and-extension-tuition-guide';

    private const SWAPS = [
        "has been approved but is not built, so plan with today's stations." => "is planned but not built, so plan with today's stations.",
        'has been approved, with stations including Sector 122 and 123. It is approved, not built, so it does not help today.' => 'is planned, with stations including Sector 122 and 123. It is not built, so it does not help today.',
    ];

    private function swap(array $pairs): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        foreach (DB::table('blog_managment')->where('slug', self::SLUG)->get(['id', 'bdesc']) as $row) {
            $body = str_replace(array_keys($pairs), array_values($pairs), (string) $row->bdesc);
            if ($body !== $row->bdesc) {
                DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => $body]);
            }
        }
    }

    public function up(): void
    {
        $this->swap(self::SWAPS);
    }

    public function down(): void
    {
        $this->swap(array_flip(self::SWAPS));
    }
};
