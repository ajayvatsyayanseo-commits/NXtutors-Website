<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Full names on the tutor profiles of two named authors, so the profile page,
 * its title and URL match the byline on the guides they sign:
 *   NXT-2026-W7PBUU  "abhinandan"       -> "Abhinandan Tiwary"
 *   NXT-2026-3FULEA  "Aaditya kashyap"  -> "Aaditya Kashyap"
 * Only a row still holding the old name is changed, so an edit the tutor has
 * made since is never overwritten. down() puts the old names back. The old
 * profile URLs (…/abhinandan) 301 to the new ones (HomeController).
 */
return new class extends Migration
{
    private const CHANGES = [
        'NXT-2026-W7PBUU' => ['abhinandan', 'Abhinandan Tiwary'],
        'NXT-2026-3FULEA' => ['Aaditya kashyap', 'Aaditya Kashyap'],
    ];

    public function up(): void
    {
        foreach (self::CHANGES as $userId => [$old, $new]) {
            DB::table('register')
                ->where('user_id', $userId)
                ->whereRaw('LOWER(TRIM(name)) = ?', [strtolower($old)])
                ->update(['name' => $new]);
        }
    }

    public function down(): void
    {
        foreach (self::CHANGES as $userId => [$old, $new]) {
            DB::table('register')
                ->where('user_id', $userId)
                ->where('name', $new)
                ->update(['name' => $old]);
        }
    }
};
