<?php

namespace Tests\Feature;

use App\Models\Register;
use Tests\TestCase;

/**
 * Register::profileUrl() is what the sitemap and the canonical tag both call.
 * The bug it replaced was a canonical built with encrypt(), which returns a
 * different ciphertext every call, so a tutor page never pointed at itself and
 * Google indexed none of them. Stability is the whole point of the method.
 */
class TutorProfileUrlTest extends TestCase
{
    private function tutor(array $attrs = []): Register
    {
        // array_key_exists, not ??, so a deliberate null overrides the default
        // instead of falling through to it.
        $attrs += ['user_id' => '1000', 'city' => 'Gurugram', 'name' => 'Sonu Kumar'];

        $t = new Register();
        $t->user_id = $attrs['user_id'];
        $t->city = $attrs['city'];
        $t->name = $attrs['name'];

        return $t;
    }

    public function test_profile_url_is_stable_across_calls(): void
    {
        $t = $this->tutor();

        $this->assertSame(
            $t->profileUrl(),
            $t->profileUrl(),
            'canonical URL must not change between renders'
        );
    }

    public function test_profile_url_is_slugged_and_base64url_encoded(): void
    {
        $url = $this->tutor(['user_id' => '1000', 'city' => 'Gurugram', 'name' => 'Sonu Kumar'])
            ->profileUrl();

        // base64url of "1000-nxt", unpadded — the shape showsingletutornew decodes.
        $this->assertStringEndsWith('/tutor/gurugram/MTAwMC1ueHQ/sonu-kumar', $url);
        $this->assertStringNotContainsString('=', parse_url($url, PHP_URL_PATH));
    }

    public function test_encoded_id_round_trips_the_way_the_controller_decodes_it(): void
    {
        $url = $this->tutor(['user_id' => '2187'])->profileUrl();
        $encoded = explode('/', parse_url($url, PHP_URL_PATH))[3];

        $b64 = strtr($encoded, '-_', '+/');
        $b64 .= str_repeat('=', (4 - strlen($b64) % 4) % 4);
        $decoded = base64_decode($b64, true);

        $this->assertSame('2187-nxt', $decoded);
        $this->assertSame('2187', str_replace('-nxt', '', $decoded));
    }

    /**
     * A tutor with no city used to be written into the sitemap as the literal
     * "/tutor/city/..." and that URL serves a 500. Null keeps it out.
     */
    public function test_city_less_tutor_has_no_public_url(): void
    {
        $this->assertNull($this->tutor(['city' => ''])->profileUrl());
        $this->assertNull($this->tutor(['city' => '   '])->profileUrl());
        $this->assertNull($this->tutor(['city' => null])->profileUrl());
    }

    public function test_tutor_without_user_id_has_no_public_url(): void
    {
        $this->assertNull($this->tutor(['user_id' => null])->profileUrl());
    }
}
