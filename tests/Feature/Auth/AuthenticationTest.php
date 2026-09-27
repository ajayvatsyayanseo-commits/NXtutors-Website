<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * The site's own sign-in (RegisterController::userlogin): parents and tutors
 * are rows in `register`, signed in by email + password into the session.
 * (The Breeze login it replaced is commented out in routes/auth.php.)
 */
class AuthenticationTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacySchema();
        DB::table('register')->insert([
            'user_id' => '5001', 'name' => 'Asha Tutor', 'email' => 'asha@example.com', 'password' => Hash::make('secret-pass'),
            'join_as' => 'teacher', 'status' => 't', 'otp_status' => 't',
        ]);
    }

    public function test_login_screen_can_be_rendered(): void
    {
        $this->get('/login')->assertStatus(200);
    }

    public function test_tutor_can_sign_in_with_email_and_password(): void
    {
        $this->postJson('/login', ['email' => 'asha@example.com', 'pass' => 'secret-pass'])
            ->assertOk()
            ->assertJson(['success' => true, 'redirect' => 'teacher/dashboard'])
            ->assertSessionHas('userid', '5001');
    }

    public function test_wrong_password_does_not_sign_in(): void
    {
        $this->postJson('/login', ['email' => 'asha@example.com', 'pass' => 'wrong'])
            ->assertSessionMissing('userid');
    }

    public function test_users_can_logout(): void
    {
        $this->withSession(['userid' => '5001', 'email' => 'asha@example.com', 'join_as' => 'teacher'])
            ->get('/logout')
            ->assertRedirect('/')
            ->assertSessionMissing('userid');
    }
}
