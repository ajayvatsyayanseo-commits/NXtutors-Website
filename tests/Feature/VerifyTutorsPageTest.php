<?php

namespace Tests\Feature;

use Tests\TestCase;

/** The tutor-verification page describes only what the site does. */
class VerifyTutorsPageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        \Illuminate\Support\Facades\View::share('setting', new class {
            public function __get($k) { return $k === 'phone' ? '+91 78360 34313' : ''; }
            public function __isset($k) { return true; }
        });
    }

    public function test_page_explains_the_id_check_without_overclaiming(): void
    {
        $html = $this->get('/how-we-verify-tutors')->assertOk()->getContent();
        $this->assertStringContainsString('How NXTutors verifies tutors', $html);
        $this->assertStringContainsString('"@type":"FAQPage"', $html);
        $this->assertStringContainsString('Sample profile', $html);
        $this->assertStringContainsString('not a police verification', $html);
        foreach (['same day', 'background-verified', 'police-verified', 'every tutor is id-verified'] as $bad) {
            $this->assertStringNotContainsStringIgnoringCase($bad, strip_tags($html), $bad);
        }
    }
}
