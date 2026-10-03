<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Correction to 2026_10_07_140000 (owner, 3 Oct 2026): live tutors with no
 * phone on record are original tutors, not AI-generated profiles, so they keep
 * the Verified badge they had before the badge was split from "live".
 *
 * Sets id_verified_at for live ('t'), non-sample tutors with no phone and no
 * id_verified_at yet. New sign-ups (WhatsApp) always carry a phone, so they are
 * not touched and still wait for the team's Approve. down() clears only the
 * rows marked here.
 */
return new class extends Migration
{
    private const MARK = 'backfill-2026-10-03-original';

    public function up(): void
    {
        if (! Schema::hasTable('register') || ! Schema::hasColumn('register', 'id_verified_at')) {
            return;
        }

        DB::table('register')
            ->where('join_as', 'teacher')
            ->where('status', 't')
            ->whereNull('id_verified_at')
            ->when(Schema::hasColumn('register', 'is_sample'), fn ($q) => $q->where(fn ($w) => $w->where('is_sample', 0)->orWhereNull('is_sample')))
            ->where(fn ($p) => $p->whereNull('phone')->orWhere('phone', ''))
            ->update(['id_verified_at' => now(), 'id_verified_by' => self::MARK]);
    }

    public function down(): void
    {
        if (! Schema::hasTable('register') || ! Schema::hasColumn('register', 'id_verified_by')) {
            return;
        }

        DB::table('register')
            ->where('id_verified_by', self::MARK)
            ->update(['id_verified_at' => null, 'id_verified_by' => null]);
    }
};
