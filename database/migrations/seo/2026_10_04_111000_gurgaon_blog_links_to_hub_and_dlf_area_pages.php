<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Gurgaon core rankings, 1 Oct 2026 (blog side).
 *
 * 1. Every Gurgaon guide post links the /city/gurugram hub once, with a vague
 *    anchor ("Gurugram tutors page", "Gurugram home tuition hub"). Each is
 *    swapped for a descriptive one ("home tutors in Gurgaon", "home tuition
 *    in Gurgaon"). The same swaps are made in database/seo-content/blog/*.html.
 *    A plain substring replace inside bdesc, so a post edited by hand since
 *    (no match) is left alone; down() swaps back.
 *
 * 2. The two old DLF maths posts (noindexed locality posts that still earn
 *    impressions) get a short note at the top pointing down to the matching
 *    area page, the Gurgaon maths page and the zone guide, so the hierarchy
 *    is clear. Nothing else in them changes; they are not deleted or
 *    redirected. down() removes the note by its markers.
 */
return new class extends Migration
{
    private const HUB = '<a href="/city/gurugram">';

    /** old anchor text => replacement (the whole <a> plus any words around it) */
    private const ANCHORS = [
        'Gurugram tutors page' => 'page of <a href="/city/gurugram">home tutors in Gurgaon</a>',
        'Gurugram tutors hub' => 'page of <a href="/city/gurugram">home tutors in Gurgaon</a>',
        'Gurugram tutoring hub' => 'page of <a href="/city/gurugram">home tutors in Gurgaon</a>',
        'Gurugram home tuition hub' => 'guide to <a href="/city/gurugram">home tuition in Gurgaon</a>',
        'home tutors across Gurugram' => '<a href="/city/gurugram">home tutors in Gurgaon</a>',
        'tutors across Gurugram' => '<a href="/city/gurugram">home tutors in Gurgaon</a>',
    ];

    /** post slug => its current hub anchor text (one per post) */
    private const POSTS = [
        'cambridge-vs-edexcel-igcse-gurgaon' => 'Gurugram tutors page',
        'cbse-class-10-board-year-plan-gurgaon' => 'Gurugram tutors page',
        'choose-home-tutor-gurgaon-safety-checklist' => 'home tutors across Gurugram',
        'class-11-stream-choice-gurgaon' => 'Gurugram tutors page',
        'gurgaon-golf-course-extension-spr-tuition-guide' => 'Gurugram home tuition hub',
        'gurgaon-golf-course-road-dlf-tuition-guide' => 'Gurugram home tuition hub',
        'gurgaon-sohna-road-south-city-tuition-guide' => 'Gurugram home tuition hub',
        'home-tuition-fees-gurgaon' => 'home tutors across Gurugram',
        'ib-igcse-tutoring-gurgaon-parents-guide' => 'Gurugram tutors page',
        'icse-isc-maths-gurgaon-guide' => 'Gurugram tutors hub',
        'jee-preparation-gurgaon-coaching-or-home-tutor' => 'tutors across Gurugram',
        'moving-to-gurgaon-school-and-tutoring-guide' => 'Gurugram tutors page',
        'neet-preparation-gurgaon-coaching-or-home-tutor' => 'tutors across Gurugram',
        'new-gurgaon-dwarka-expressway-tuition-guide' => 'Gurugram home tuition hub',
        'old-gurgaon-palam-vihar-tuition-guide' => 'Gurugram home tuition hub',
        'olympiad-preparation-gurgaon-imo-nso-rmo' => 'Gurugram tutoring hub',
        'study-abroad-from-gurgaon-sat-ap-ib-timeline' => 'Gurugram tutoring hub',
        'study-routine-long-commute-gurgaon' => 'Gurugram tutoring hub',
        'switching-cbse-to-ib-or-igcse-gurgaon' => 'Gurugram tutors page',
    ];

    private const NOTE_START = '<!-- nxt:dlf-hierarchy -->';

    private const NOTE_END = '<!-- /nxt:dlf-hierarchy -->';

    /** old DLF maths post => [phase name, area slug] */
    private const DLF_POSTS = [
        'maths-home-tutor-in-dlf-phase-4-best-home-tutors-near-you' => ['DLF Phase 4', 'dlf-phase-4'],
        'maths-home-tutor-in-dlf-phase-5-best-home-tutors-near-you' => ['DLF Phase 5', 'dlf-phase-5'],
    ];

    private function note(string $phase, string $slug): string
    {
        return self::NOTE_START
            . '<p><strong>Looking for a maths tutor in ' . $phase . ' now?</strong> This is an older post. The tutors who teach in the phase today are on our page of '
            . '<a href="/city/gurugram/' . $slug . '">home tutors in ' . $phase . '</a>; for maths across the city, by board and class, see '
            . '<a href="/maths-home-tutor-gurgaon">maths home tutors in Gurgaon</a>; and for timings, entry and parking in this part of the city, read our '
            . '<a href="/blog/gurgaon-golf-course-road-dlf-tuition-guide">guide to home tuition on Golf Course Road and in DLF</a>.</p>'
            . self::NOTE_END;
    }

    /** Rows for a slug, tolerating the stray tab/space some slugs were saved with. */
    private function rows(string $slug)
    {
        return DB::table('blog_managment')->whereIn('slug', [$slug, $slug . "\t", $slug . ' '])->get(['id', 'bdesc']);
    }

    public function up(): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        foreach (self::POSTS as $slug => $old) {
            foreach ($this->rows($slug) as $row) {
                $html = str_replace(self::HUB . $old . '</a>', self::ANCHORS[$old], (string) $row->bdesc);
                if ($html !== (string) $row->bdesc) {
                    DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => $html]);
                }
            }
        }
        foreach (self::DLF_POSTS as $slug => [$phase, $area]) {
            foreach ($this->rows($slug) as $row) {
                if (! str_contains((string) $row->bdesc, self::NOTE_START)) {
                    DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => $this->note($phase, $area) . (string) $row->bdesc]);
                }
            }
        }
    }

    public function down(): void
    {
        if (! Schema::hasTable('blog_managment')) {
            return;
        }
        foreach (self::POSTS as $slug => $old) {
            foreach ($this->rows($slug) as $row) {
                $html = str_replace(self::ANCHORS[$old], self::HUB . $old . '</a>', (string) $row->bdesc);
                if ($html !== (string) $row->bdesc) {
                    DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => $html]);
                }
            }
        }
        foreach (array_keys(self::DLF_POSTS) as $slug) {
            foreach ($this->rows($slug) as $row) {
                $html = preg_replace('/' . preg_quote(self::NOTE_START, '/') . '.*?' . preg_quote(self::NOTE_END, '/') . '/s', '', (string) $row->bdesc, 1);
                if ($html !== (string) $row->bdesc) {
                    DB::table('blog_managment')->where('id', $row->id)->update(['bdesc' => $html]);
                }
            }
        }
    }
};
