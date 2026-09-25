<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * SEO meta for the home page and the Gurugram city hub.
 *
 * These live in the database (pages.slug = 'home', city_managment.slug =
 * 'gurugram') and are normally edited in Super Admin. They are set here so the
 * change is deployed, recorded and reversible like any other.
 *
 * - Home: the page serves all of India, so the title names India and the
 *   boards and exams rather than one city.
 * - Gurugram: the title was 89 characters with the brand misspelt "NxtTutors",
 *   and the description was ~1,000 characters, of which Google shows ~155.
 *
 * down() puts back exactly what was live on 25 Sep 2026.
 */
return new class extends Migration
{
    private const HOME_TITLE = 'Home & Online Tutors in India – CBSE, ICSE, IB, JEE | NXTutors';
    private const HOME_DESC = 'Verified home tutors in 24 Indian cities and online tutors nationwide for CBSE, ICSE, IB, IGCSE, JEE & NEET. Get 2–3 matched tutors and a free demo class.';

    private const CITY_TITLE = 'Home Tutors in Gurgaon (Gurugram) for CBSE, ICSE, IB | NXTutors';
    private const CITY_DESC = 'Find verified home tutors in Gurgaon for Classes 6–12, CBSE, ICSE, IB, IGCSE, JEE and NEET. Tutors in 390+ sectors and societies. Book a free demo class.';

    private const OLD_HOME_TITLE = 'NXTutors – Online & Home Tutors for CBSE, ICSE, IB, JEE & NEET';
    private const OLD_HOME_DESC = 'NXTutors offers personalized 1-on-1 tutoring for CBSE, ICSE, IB, & competitive exams. Learn online or at home with experienced, verified tutors and flexible schedules.';

    private const OLD_CITY_TITLE = 'Best Home & Online Tutors in Gurugram | CBSE, ICSE, IB & IGCSE Tutors | NxtTutors';
    private const OLD_CITY_DESC = "Looking for the best home tutors and online tutors in Gurugram? NxtTutors connects students with verified, highly qualified educators who deliver personalized one-on-one learning experiences. As one of India's fastest-growing corporate and global cities, Gurugram has a strong demand for premium education services, international school support, and result-oriented tutoring. Our expert tutors provide academic assistance for CBSE, ICSE, ISC, IB, IGCSE, and State Board students, along with specialized preparation for JEE, NEET, Olympiads, SAT, and board examinations. Using an AI-powered tutor matching platform, NxtTutors helps families find the ideal tutor based on learning objectives, subject requirements, schedules, and student preferences. Whether you need home tuition, online classes, or hybrid learning anywhere in Gurugram, NxtTutors delivers flexible, personalized, and future-ready education solutions that improve academic performance, strengthen concepts, and build long-term confidence.";

    public function up(): void
    {
        $this->apply(self::HOME_TITLE, self::HOME_DESC, self::CITY_TITLE, self::CITY_DESC);
    }

    public function down(): void
    {
        $this->apply(self::OLD_HOME_TITLE, self::OLD_HOME_DESC, self::OLD_CITY_TITLE, self::OLD_CITY_DESC);
    }

    private function apply(string $homeTitle, string $homeDesc, string $cityTitle, string $cityDesc): void
    {
        DB::table('pages')->where('slug', 'home')->update([
            'meta_title' => $homeTitle,
            'meta_description' => $homeDesc,
        ]);

        DB::table('city_managment')->where('slug', 'gurugram')->update([
            'meta_title' => $cityTitle,
            'meta_desc' => $cityDesc,
        ]);
    }
};
