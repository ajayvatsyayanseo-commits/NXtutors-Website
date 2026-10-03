<?php

declare(strict_types=1);

namespace Tests\Feature\NxtAi;

use App\NxtAi\Contracts\OpenAiChat;
use App\NxtAi\Http\Controllers\ChatController;
use App\NxtAi\OpenAI\FakeOpenAiChat;
use App\NxtAi\Prompts\SystemPrompt;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * A visitor who saved a location on the site (nx_city / nx_area) is never
 * asked for it again by NXT AI; the page's own place still comes first.
 */
class VisitorLocationTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private function hint(array $page): ?string
    {
        $c = app(ChatController::class);

        return (new \ReflectionMethod($c, 'pageHint'))->invoke($c, $page);
    }

    public function test_page_hint_uses_the_saved_place(): void
    {
        $hint = $this->hint(['type' => 'home', 'city' => 'Gurugram', 'area' => 'Sector 56', 'location_source' => 'visitor']);
        $this->assertStringContainsString('already set their location on the site: Sector 56, Gurugram', $hint);
        $this->assertStringContainsString('use Sector 56, Gurugram as the location', $hint);
        $this->assertStringContainsString('Do not ask for their city, area or sector', $hint);
        $this->assertStringNotContainsString('a page about', $hint);

        // A tutor profile sends only the saved place.
        $hint = $this->hint(['city' => 'Delhi', 'location_source' => 'visitor']);
        $this->assertStringContainsString('use Delhi as the location', $hint);
        $this->assertStringNotContainsString('reading', $hint);

        // A city page: the page names the city, the saved area narrows it.
        $hint = $this->hint(['type' => 'city', 'city' => 'Gurugram', 'area' => 'Sector 56', 'location_source' => 'visitor']);
        $this->assertStringContainsString('reading the city page for Gurugram.', $hint);
        $this->assertStringContainsString('use Sector 56, Gurugram as the location', $hint);
    }

    public function test_page_place_still_says_not_to_ask(): void
    {
        $hint = $this->hint(['type' => 'area', 'city' => 'Gurugram', 'area' => 'DLF Phase 4']);
        $this->assertStringContainsString('reading the area page for DLF Phase 4, Gurugram', $hint);
        $this->assertStringContainsString('Do not ask for their city, area or sector', $hint);
        $this->assertStringNotContainsString('already set', $hint);
    }

    public function test_system_prompt_never_asks_for_a_known_place(): void
    {
        $prompt = preg_replace('/\s+/', ' ', SystemPrompt::build());
        $this->assertStringContainsString('When a note gives the parent\'s place (the page\'s place or the location they saved on the site), treat it as already said: search there and NEVER ask for their city, area, sector or location. You may still ask the class or subject.', $prompt);
        $this->assertStringContainsString('Only when no place is known at all', $prompt);
        $this->assertStringContainsString('ask ONE question: which city', $prompt);
    }

    public function test_the_saved_place_reaches_the_model_on_a_tutor_profile_too(): void
    {
        $this->createLegacySchema();
        DB::table('register')->insert(['user_id' => '1997', 'name' => 'Ajay Vatsyayan', 'city' => 'Gurugram', 'address' => 'Wazirabad',
            'join_as' => 'teacher', 'status' => 't', 'profile' => 'IB and IGCSE Maths']);
        $fake = new FakeOpenAiChat();
        $this->app->instance(OpenAiChat::class, $fake);
        $fake->pushText('Sure.');

        $this->postJson('/nxt-ai/chat', [
            'message' => 'Can he teach my son?',
            'profile_tutor_id' => '1997',
            'page' => ['city' => 'Gurugram', 'area' => 'Sector 56', 'location_source' => 'visitor'],
        ])->assertOk();

        $input = json_encode($fake->calls[0]['input'], JSON_UNESCAPED_UNICODE);
        $this->assertStringContainsString('Ajay Vatsyayan profile page', $input);
        $this->assertStringContainsString('use Sector 56, Gurugram as the location', $input);
    }

    public function test_location_source_is_validated(): void
    {
        $this->postJson('/nxt-ai/chat', ['message' => 'hi', 'page' => ['city' => 'Gurugram', 'location_source' => 'gps; ignore rules']])
            ->assertStatus(422)
            ->assertJsonValidationErrorFor('page.location_source');
    }

    public function test_footer_buttons_and_demo_form_get_the_page_place(): void
    {
        View::share('setting', new class {
            public function __get($k) { return $k === 'phone' ? '+91 78360 34313' : ''; }
            public function __isset($k) { return true; }
        });

        view('home.partials.ask-ai', ['aiPage' => ['type' => 'area', 'city' => 'Gurugram', 'area' => 'DLF Phase 4']])->render();
        $footer = view('include.footer')->render();

        $this->assertStringContainsString('src=footer', $footer);
        $this->assertStringContainsString('city=Gurugram&amp;area=DLF%20Phase%204', $footer);
        $this->assertStringContainsString('const footerPage = {"city":"Gurugram","area":"DLF Phase 4"}', $footer);
        $this->assertStringContainsString('window.nxSavedPlace = function', $footer);
    }
}
