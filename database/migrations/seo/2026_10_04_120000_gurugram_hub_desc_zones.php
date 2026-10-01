<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * The Gurgaon hub description said "390+ sectors and societies"; after the
 * micro-page merge there are about 357 area pages. Describe the nine zones
 * instead of a count that drifts. Only replaces the text 2026_09_30_100000
 * set; down() puts it back.
 */
return new class extends Migration
{
    private const OLD = 'Home tutors in Gurgaon for Classes 6–12, CBSE, ICSE, IB, IGCSE, JEE and NEET, across 390+ sectors and societies. See fees, compare tutors and book a free demo.';
    private const NEW = 'Home tutors in Gurgaon for CBSE, ICSE, IB, IGCSE, JEE and NEET in all 9 zones, DLF to Sohna Road. Get 2–3 matched tutors, see fees first; first class free.';

    public function up(): void
    {
        if (Schema::hasTable('city_managment')) {
            DB::table('city_managment')->where('slug', 'gurugram')->where('meta_desc', self::OLD)->update(['meta_desc' => self::NEW]);
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('city_managment')) {
            DB::table('city_managment')->where('slug', 'gurugram')->where('meta_desc', self::NEW)->update(['meta_desc' => self::OLD]);
        }
    }
};
