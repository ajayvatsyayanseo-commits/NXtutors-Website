<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * TutorTwin on the homepage.
 *
 * The links are ABSOLUTE to another host - TutorTwin is a separate application
 * on its own subdomain, so a relative link would quietly 404 on this site. That
 * is the part worth a test: it is invisible in review and only shows up as a
 * dead link on the live homepage.
 */
class TutorTwinHomeSectionTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    public function test_the_home_page_offers_tutortwin_to_students_and_to_teachers(): void
    {
        $this->createLegacySchema();

        $page = $this->get('/');

        $page->assertStatus(200);
        $page->assertSee('TutorTwin for students', false);
        $page->assertSee('TutorTwin for teachers', false);
    }

    public function test_both_cards_link_to_the_tutortwin_host_absolutely(): void
    {
        $this->createLegacySchema();

        $base = rtrim(config('tutortwin.url'), '/');
        $html = $this->get('/')->getContent();

        $this->assertStringContainsString('href="'.$base.'/"', $html);
        $this->assertStringContainsString('href="'.$base.'/for-tutors"', $html);
        $this->assertStringContainsString('href="'.$base.'/humai-tutor"', $html);
    }

    public function test_the_host_is_configurable_rather_than_written_into_the_markup(): void
    {
        // So a staging site can point elsewhere without editing a Blade file.
        config(['tutortwin.url' => 'https://twin.example.test']);
        $this->createLegacySchema();

        $this->get('/')->assertSee('https://twin.example.test/for-tutors', false);
    }
}
