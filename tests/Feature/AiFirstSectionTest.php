<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * "AI-first tutoring, with real teachers" above the home FAQs, and the two FAQs
 * that go with it. The FAQPage markup may only carry questions that are also
 * visible on the page, so both are checked in both places.
 */
class AiFirstSectionTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    public function test_the_section_sits_above_the_faqs_with_honest_copy(): void
    {
        $this->createLegacySchema();
        $html = $this->get('/')->assertOk()->getContent();

        $this->assertStringContainsString('AI-first tutoring, <span>with real teachers</span>', $html);
        $this->assertLessThan(strpos($html, 'Frequently asked questions'), strpos($html, 'id="nxAifTitle"'), 'above the FAQs');
        $this->assertStringContainsString('Where AI stops and people start', $html);
        $this->assertStringContainsString('aria-label="Illustration: Nix, the friendly NXT AI robot', $html, 'the picture has alt text');
        $this->assertStringNotContainsString("India's first", $html);
    }

    public function test_the_two_new_faqs_are_visible_and_in_the_faq_markup(): void
    {
        $this->createLegacySchema();
        $html = $this->get('/')->getContent();

        foreach (['How does NXTutors use AI?', 'Is TutorTwin a real teacher?'] as $q) {
            $this->assertStringContainsString('<summary>'.$q.'</summary>', $html, 'visible: '.$q);
            $this->assertStringContainsString('"name":"'.$q.'"', str_replace('\/', '/', $html), 'FAQPage: '.$q);
        }
    }

    public function test_the_chat_panel_carries_the_mascot(): void
    {
        $this->createLegacySchema();
        $this->assertStringContainsString('Ask <span>NXT AI</span>', $this->get('/')->getContent());
    }
}
