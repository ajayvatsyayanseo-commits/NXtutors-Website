<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

/**
 * A parent's demo request is saved even when AGENT_HASH_PEPPER is missing.
 * In production it was, and every "Book demo" form returned a 500.
 */
class DemoLeadWithoutPepperTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_demo_request_is_saved_without_the_agent_pepper(): void
    {
        config()->set('agent.hash_pepper', '');

        $this->postJson('/demo-lead/store', ['name' => 'Parent', 'phone' => '9876543210', 'subject' => 'Maths'])
            ->assertOk()->assertJson(['status' => true]);

        $row = DB::table('demo_leads')->first();
        $this->assertSame('Maths', $row->subject);
        $this->assertNull($row->phone_hash, 'filled in later by agent:backfill-phone-hashes');
    }

    public function test_with_the_pepper_the_hash_is_set(): void
    {
        config()->set('agent.hash_pepper', 'test-pepper');
        $this->postJson('/demo-lead/store', ['name' => 'Parent', 'phone' => '9876543210'])->assertOk();
        $this->assertNotNull(DB::table('demo_leads')->value('phone_hash'));
    }
}
