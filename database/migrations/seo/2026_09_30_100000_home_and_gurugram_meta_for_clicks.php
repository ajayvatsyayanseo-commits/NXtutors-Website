<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Search Console (23 Jul - 27 Sep 2026): the home page ranks around position
 * 2 for "home tutor" and "home tutors" and around 1.5 for "home tutor near
 * me", but gets a 1.2% click rate. The title now says what those searches
 * ask for. Both descriptions drop "verified", because the tutor counts
 * behind them include sample profiles.
 *
 * Only replaces the text 2026_09_25_150000 set, so an edit made in Super
 * Admin since then is never overwritten; down() puts that text back.
 */
return new class extends Migration
{
    private const HOME_TITLE = 'Home Tutors Near You & Online Tutors – CBSE, IB, JEE | NXTutors';
    private const HOME_DESC = 'Home tutors near you in 24 Indian cities, and online tutors across India, for CBSE, ICSE, IB, IGCSE, JEE and NEET. Get 2–3 matched tutors and a free demo class.';
    private const CITY_DESC = 'Home tutors in Gurgaon for Classes 6–12, CBSE, ICSE, IB, IGCSE, JEE and NEET, across 390+ sectors and societies. See fees, compare tutors and book a free demo.';

    private const PREV_HOME_TITLE = 'Home & Online Tutors in India – CBSE, ICSE, IB, JEE | NXTutors';
    private const PREV_HOME_DESC = 'Verified home tutors in 24 Indian cities and online tutors nationwide for CBSE, ICSE, IB, IGCSE, JEE & NEET. Get 2–3 matched tutors and a free demo class.';
    private const PREV_CITY_DESC = 'Find verified home tutors in Gurgaon for Classes 6–12, CBSE, ICSE, IB, IGCSE, JEE and NEET. Tutors in 390+ sectors and societies. Book a free demo class.';

    public function up(): void
    {
        if (Schema::hasTable('pages')) {
            DB::table('pages')->where('slug', 'home')->where('meta_title', self::PREV_HOME_TITLE)->update(['meta_title' => self::HOME_TITLE]);
            DB::table('pages')->where('slug', 'home')->where('meta_description', self::PREV_HOME_DESC)->update(['meta_description' => self::HOME_DESC]);
        }
        if (Schema::hasTable('city_managment')) {
            DB::table('city_managment')->where('slug', 'gurugram')->where('meta_desc', self::PREV_CITY_DESC)->update(['meta_desc' => self::CITY_DESC]);
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('pages')) {
            DB::table('pages')->where('slug', 'home')->where('meta_title', self::HOME_TITLE)->update(['meta_title' => self::PREV_HOME_TITLE]);
            DB::table('pages')->where('slug', 'home')->where('meta_description', self::HOME_DESC)->update(['meta_description' => self::PREV_HOME_DESC]);
        }
        if (Schema::hasTable('city_managment')) {
            DB::table('city_managment')->where('slug', 'gurugram')->where('meta_desc', self::CITY_DESC)->update(['meta_desc' => self::PREV_CITY_DESC]);
        }
    }
};
