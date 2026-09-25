<?php

namespace App\Support;

/**
 * Sorts blog posts into topic hubs from their slug, so /blog, the home page
 * and city pages can show guides grouped by what a parent is looking for
 * rather than newest-first. The blog table has no category column; the slugs
 * are consistent enough that this is reliable, and a post that matches
 * nothing lands in "Study skills & guides".
 */
class BlogTopics
{
    public const TOPICS = [
        'city'    => 'Local tutor guides',
        'boards'  => 'CBSE, ICSE, IB & IGCSE',
        'entrance'=> 'JEE, NEET & entrance exams',
        'abroad'  => 'SAT, IELTS & study abroad',
        'choose'  => 'Choosing a tutor',
        'skills'  => 'Study skills & guides',
    ];

    public static function of(string $slug): string
    {
        $s = strtolower($slug);

        // Locality posts: "maths-home-tutor-in-dlf-phase-1-…", "fees--packages-in-south-city-ii-…".
        if (preg_match('/-in-[a-z0-9-]+-(best-home-tutors|near-you|coaching-at-home)/', $s) || str_contains($s, '-near-you')) {
            return 'city';
        }
        if (preg_match('/\b(jee|neet|cuet|olympiad|rmo|inmo)\b/', str_replace('-', ' ', $s))) {
            return 'entrance';
        }
        if (preg_match('/\b(sat|ielts|toefl|dsat)\b/', str_replace('-', ' ', $s))) {
            return 'abroad';
        }
        if (preg_match('/\b(cbse|icse|isc|igcse|ib)\b/', str_replace('-', ' ', $s))) {
            return 'boards';
        }
        if (preg_match('/choose|online-vs-offline|fees/', $s)) {
            return 'choose';
        }

        return 'skills';
    }

    /** The locality a city-guide post is about, e.g. "dlf-phase-1", or null. */
    public static function localityOf(string $slug): ?string
    {
        if (preg_match('/-in-([a-z0-9-]+?)-+(best-home-tutors|cbse-|spoken-|physics-|best-|math-)/', strtolower($slug), $m)) {
            return trim($m[1], '-');
        }

        return null;
    }
}
