<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * 23 city meta descriptions (set 25 Sep 2026) opened with "Verified home
 * and online tutors". The counts behind city pages include sample
 * profiles, so "verified" is not a claim we may make (nxt-seo-rules §2).
 * up() drops the word; down() puts it back on the same rows.
 */
return new class extends Migration
{
    private const FROM = 'Verified home and online tutors';

    private const TO = 'Home and online tutors';

    private function swap(string $from, string $to): void
    {
        if (! Schema::hasTable('city_managment')) {
            return;
        }
        foreach (DB::table('city_managment')->where('meta_desc', 'like', $from . '%')->get(['id', 'meta_desc']) as $row) {
            DB::table('city_managment')->where('id', $row->id)
                ->update(['meta_desc' => $to . substr((string) $row->meta_desc, strlen($from))]);
        }
    }

    public function up(): void
    {
        $this->swap(self::FROM, self::TO);
    }

    public function down(): void
    {
        $this->swap(self::TO, self::FROM);
    }
};
