<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * The site's own sign-up (RegisterController::userstore): an account starts
 * unverified and inactive, and an OTP is emailed; nobody is signed in until
 * the OTP is confirmed. (Breeze registration it replaced is not routed.)
 */
class RegistrationTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacySchema();
    }

    public function test_sign_up_creates_an_unverified_account(): void
    {
        $this->postJson('/register', [
            'name' => 'Ravi Parent', 'email' => 'ravi@example.com', 'phone' => '9876543210',
            'cpass_id' => 'secret-pass', 'join_as' => 'user',
        ])->assertOk()->assertJsonStructure(['message']);

        $row = DB::table('register')->where('email', 'ravi@example.com')->first();
        $this->assertNotNull($row);
        $this->assertSame('f', $row->status);
        $this->assertSame('f', $row->otp_status);
        $this->assertNotSame('secret-pass', $row->password, 'stored hashed');
        $this->assertTrue(strlen((string) $row->otp) === 4, 'a 4-digit OTP');
    }

    public function test_the_same_email_cannot_sign_up_twice(): void
    {
        DB::table('register')->insert(['user_id' => '5001', 'name' => 'Ravi', 'email' => 'ravi@example.com', 'phone' => '9876543210']);

        $this->postJson('/register', ['name' => 'Ravi', 'email' => 'ravi@example.com', 'phone' => '9000000000', 'cpass_id' => 'x'])
            ->assertStatus(422);
    }
}
