<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Ajay Vatsyayan's tutor profile (user_id 1997), as he asked on 28 Sep 2026:
 *  - courses for the boards he teaches but that were missing (IB, IGCSE, ISC,
 *    ICSE), linked to the existing category and course records by slug, so
 *    search, the IB/IGCSE/ISC pages and his profile chips find him;
 *  - location tidied: area "Wazirabad", city "Gurugram" (was "Wazirabad" in
 *    both fields, shown as "Wazirabad • WAZIRABAD"). His old profile URL
 *    301s to the new one (HomeController::showsingletutornew).
 * Rows are added only if missing; down() removes exactly what up() added
 * and restores the old location. His bio, experience and photo are kept.
 */
return new class extends Migration
{
    private const USER = '1997';

    /** board category slug => course (product) slugs he teaches on it */
    private const COURSES = [
        'ib' => ['ib-dp-mathematics-analysis-approaches-sl-hl', 'ib-dp-mathematics-applications-interpretation-sl-hl', 'ib-myp-mathematics-myp-1-5'],
        'igcse' => ['igcse-extended-mathematics'],
        'isc' => ['class-11-12-isc-mathematics'],
        'icse' => ['class-1-12-icse-mathematics'],
    ];

    public function up(): void
    {
        foreach (['register', 'category', 'teacher_course_managment'] as $t) {
            if (! Schema::hasTable($t)) {
                return;
            }
        }
        $tutor = DB::table('register')->where('user_id', self::USER)->first();
        if (! $tutor) {
            return;
        }

        $academic = DB::table('category')->where('slug', 'academic-class-i-xii')->value('id');
        foreach (self::COURSES as $boardSlug => $courseSlugs) {
            $board = DB::table('category')->where('slug', $boardSlug)->first();
            if (! $board) {
                continue;
            }
            if (DB::table('teacher_course_managment')->where('user_id', self::USER)->where('pid', $board->id)->exists()) {
                continue; // he already has this board
            }
            $productIds = Schema::hasTable('product_managment')
                ? DB::table('product_managment')->whereIn('slug', $courseSlugs)->pluck('id')->all()
                : [];

            DB::table('teacher_course_managment')->insert([
                'user_id' => self::USER,
                'cat_id' => $board->pid ?: $academic,
                'pid' => $board->id,
                'cid' => null,
                'sub_id' => $productIds ? implode(',', $productIds) : null,
            ]);
        }

        // Location: only if still the old "Wazirabad in both fields" shape.
        if (mb_strtolower(trim((string) $tutor->city)) === 'wazirabad') {
            DB::table('register')->where('user_id', self::USER)->update([
                'city' => 'Gurugram',
                'address' => trim((string) $tutor->address) !== '' ? $tutor->address : 'Wazirabad',
                'state' => trim((string) ($tutor->state ?? '')) !== '' ? $tutor->state : 'Haryana',
            ]);
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('teacher_course_managment') || ! Schema::hasTable('category')) {
            return;
        }
        $boardIds = DB::table('category')->whereIn('slug', array_keys(self::COURSES))->pluck('id')->all();
        DB::table('teacher_course_managment')->where('user_id', self::USER)->whereIn('pid', $boardIds)->whereNull('cid')->delete();

        DB::table('register')->where('user_id', self::USER)->where('city', 'Gurugram')->update(['city' => 'Wazirabad']);
    }
};
