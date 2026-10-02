<?php

namespace Tests\Feature;

use App\Models\Register;
use App\Support\TutorAbout;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * The About section of the tutor profile ("the tank"): the bio is shown as
 * separate cards a parent can scan, nothing is invented, and what NXTutors
 * checked is never mixed with what the tutor says about themselves.
 */
class TutorAboutSectionTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private function ajayBio(): string
    {
        return (string) file_get_contents(base_path('tests/Fixtures/ajay-bio.txt'));
    }

    public function test_a_long_bio_becomes_cards_a_path_and_quotes(): void
    {
        $about = TutorAbout::parse($this->ajayBio(), array_map(fn ($i) => "Sector $i", range(43, 52)));

        $this->assertSame('His approach is clarity before complexity.', $about['headline']);
        $this->assertStringStartsWith('Ajay Vatsyayan is a Mathematics and Physics tutor', $about['intro']['lead']);

        $titles = array_column($about['cards'], 'title');
        $this->assertSame([
            'What he teaches', 'How he teaches', 'A typical cycle', 'Why families choose Ajay Sir',
            'For board students', 'For IB and IGCSE students', 'For JEE and NEET aspirants', 'Classes at home and online',
        ], $titles);

        // The headline is said once: the "How he teaches" card goes on from the next sentence.
        $this->assertStringStartsWith('Before a student practises', $about['cards'][1]['lead']);

        $cycle = $about['cards'][2];
        $this->assertCount(6, $cycle['steps']);
        $this->assertSame(12, $cycle['span'], 'the step path takes a whole row');

        $this->assertCount(5, $about['cards'][0]['tags'], 'short teaching items become chips');
        $this->assertCount(10, $about['cards'][7]['tags'], 'the where card shows the travel areas');

        // Quotes leave the running text and are shown once, on their own.
        $this->assertCount(2, $about['quotes']);
        $this->assertStringContainsString('65 to 94', $about['quotes'][0]);
        $this->assertSame(2, $about['quotesAfter']);
        $everything = json_encode($about['cards']);
        $this->assertStringNotContainsString('65 to 94', $everything);

        // The closing "Book a demo class" section is the call to action, not a card.
        $this->assertStringStartsWith('The best way to know', (string) $about['cta']);
        $this->assertSame(['board', 'intl', 'entrance', 'where'], array_keys($about['intents']));
    }

    public function test_nothing_is_lost_from_the_bio(): void
    {
        $about = TutorAbout::parse($this->ajayBio());
        $shown = json_encode($about, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        foreach (['Scottish High International School', 'Once the idea is clear, marks follow.',
            'Rated 5.0 by students and parents across 130 reviews on UrbanPro', 'Families know him as Ajay Sir',
            'NEET students get focused Physics preparation'] as $phrase) {
            $this->assertStringContainsString($phrase, $shown, $phrase);
        }
    }

    public function test_a_short_bio_without_headings_is_just_the_intro(): void
    {
        $about = TutorAbout::parse("I teach Maths to Classes 6 to 10. I have 5 years of experience.");

        $this->assertSame([], $about['cards']);
        $this->assertSame([], $about['intents']);
        $this->assertSame('I teach Maths to Classes 6 to 10. I have 5 years of experience.', $about['intro']['lead']);
        $this->assertNull($about['headline']);
    }

    public function test_tutor_input_is_escaped(): void
    {
        $html = view('tutor.partials.about-tank', [
            'tutor' => (object) ['name' => 'Test Tutor', 'user_id' => '5'],
            'about' => TutorAbout::parse("<script>alert(1)</script> bio.\n\nHow I teach\n\n<b>Bold</b> claim here."),
            'fallbackText' => '', 'img' => '', 'isSampleProfile' => false, 'isWomanVerified' => false,
            'reviewCount' => 0, 'avgRating' => null, 'qualText' => '',
        ])->render();

        $this->assertStringNotContainsString('<script>alert(1)</script>', $html);
        $this->assertStringContainsString('&lt;script&gt;', $html);
        $this->assertStringNotContainsString('<b>Bold</b>', $html);
    }

    private function seedTutor(array $attrs, bool $sampleColumn = false): Register
    {
        $this->createLegacySchema();
        if ($sampleColumn) {
            // Added in production by migration 2026_09_28_120000_add_is_sample_to_register.
            \Illuminate\Support\Facades\Schema::table('register', fn ($t) => $t->boolean('is_sample')->default(false));
            app()->forgetInstance('register.sample_column');
        }
        DB::table('register')->insert($attrs + [
            'user_id' => '1997', 'name' => 'Ajay Vatsyayan', 'city' => 'Gurugram', 'address' => 'Wazirabad',
            'join_as' => 'teacher', 'status' => 't', 'experience' => '14', 'education' => 'B.Tech, Computer Science & Engineering (AKTU, 2014)',
            'profile_desc' => $this->ajayBio(), 'class_type' => 'both',
        ]);

        return Register::where('user_id', $attrs['user_id'] ?? '1997')->firstOrFail();
    }

    public function test_the_profile_page_shows_the_tank(): void
    {
        $tutor = $this->seedTutor([]);
        $html = $this->get(parse_url($tutor->profileUrl(), PHP_URL_PATH))->assertOk()->getContent();

        $this->assertStringContainsString('class="nxsec nxtank" id="aboutTutor"', $html);
        $this->assertStringContainsString('nx-about.css', $html);
        $this->assertStringContainsString('His approach is clarity before complexity.', $html);
        $this->assertStringContainsString('data-intent="entrance"', $html);
        $this->assertStringContainsString('ID checked by the NXTutors team', $html);
        $this->assertStringContainsString('No NXTutors reviews yet', $html);
        $this->assertSame(1, substr_count($html, 'id="aboutTutor"'), 'one About section');
        $this->assertStringContainsString('>Qualification<', $html);
    }

    public function test_a_sample_profile_is_never_shown_as_checked(): void
    {
        $tutor = $this->seedTutor(['user_id' => '3001', 'name' => 'Neha Bhatia', 'is_sample' => 1], true);
        $html = $this->get(parse_url($tutor->profileUrl(), PHP_URL_PATH))->assertOk()->getContent();

        $this->assertStringContainsString('nxtank__seal--sample', $html);
        $this->assertStringNotContainsString('ID checked by the NXTutors team', $html);
        $this->assertStringNotContainsString('Checked by NXTutors', $html);
    }
}
