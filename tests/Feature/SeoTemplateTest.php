<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class SeoTemplateTest extends TestCase
{
    public function test_gurgaon_city_urls_redirect_permanently_to_gurugram(): void
    {
        $this->get('/city/gurgaon')->assertStatus(301)->assertRedirect('/city/gurugram');
        $this->get('/city/gurgaon/dlf-phase-1')->assertStatus(301)->assertRedirect('/city/gurugram/dlf-phase-1');
    }

    /**
     * Blade compiles a quoted '@context' outside a php block as its own
     * context directive, which printed PHP source into the JSON-LD.
     */
    public function test_json_ld_blocks_do_not_compile_the_context_directive(): void
    {
        foreach ([
            'home/partials/cities-served.blade.php',
            'home/partials/course-marquee.blade.php',
            'contact.blade.php',
        ] as $view) {
            $compiled = Blade::compileString(file_get_contents(resource_path('views/' . $view)));

            $this->assertStringNotContainsString('context()->has', $compiled, $view);
        }
    }

    /**
     * include.header is the only place <title> and the meta description are
     * written; a template printing its own gives the page two of each.
     */
    public function test_templates_leave_title_and_description_to_the_shared_header(): void
    {
        $offenders = [];

        foreach (glob(resource_path('views/{*,*/*,*/*/*}.blade.php'), GLOB_BRACE) as $file) {
            $source = file_get_contents($file);

            if (! str_contains($source, "@include('include.header')")) {
                continue;
            }

            $head = strstr($source, "@include('include.header')", true);

            if (preg_match('/<title>|<meta name="description"/', $head)) {
                $offenders[] = str_replace(resource_path('views') . DIRECTORY_SEPARATOR, '', $file);
            }
        }

        $this->assertSame([], $offenders);
    }

    public function test_header_writes_one_title_description_and_open_graph(): void
    {
        $html = view('include.header', [
            'metatitle' => 'Home Tutors in Gurgaon | NXTutors',
            'metadesc' => 'Verified home tutors in Gurugram.',
            'setting' => (object) ['phone' => '', 'email' => '', 'address' => '', 'name' => 'NXTutors'],
        ])->render();

        $this->assertSame(1, substr_count($html, '<title>'));
        $this->assertSame(1, substr_count($html, '<meta name="description"'));
        $this->assertStringContainsString('<meta property="og:title" content="Home Tutors in Gurgaon | NXTutors">', $html);
    }
}
