<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * Two ways anyone could take over any account, found in the 2 Oct 2026 audit:
 * forgot-password trusted step 1's email without step 2's code, and the
 * password/profile forms trusted a hidden `id` with no sign-in at all.
 */
class AccountTakeoverTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class);
        $this->createLegacySchema();
        DB::table('register')->insert([
            ['user_id' => '5001', 'name' => 'Asha Tutor', 'email' => 'asha@example.com', 'phone' => '9811100001',
                'password' => Hash::make('asha-pass'), 'join_as' => 'teacher', 'status' => 't', 'otp_status' => 't', 'otp' => '4821'],
            ['user_id' => '5002', 'name' => 'Ravi Parent', 'email' => 'ravi@example.com', 'phone' => '9811100002',
                'password' => Hash::make('ravi-pass'), 'join_as' => 'student', 'status' => 't', 'otp_status' => 't', 'otp' => null],
        ]);
    }

    private function passwordOf(string $email): string
    {
        return (string) DB::table('register')->where('email', $email)->value('password');
    }

    public function test_forgot_password_cannot_skip_the_code(): void
    {
        $before = $this->passwordOf('asha@example.com');

        // Step 1 knows only the email. Jumping to step 3 used to set the password.
        $this->withSession(['forget_email' => 'asha@example.com'])
            ->postJson('/forget', ['step' => 3, 'newpassword' => 'stolen', 'confirmpassword' => 'stolen'])
            ->assertStatus(403);
        $this->assertSame($before, $this->passwordOf('asha@example.com'));
    }

    public function test_forgot_password_works_after_the_code(): void
    {
        $this->withSession(['forget_email' => 'asha@example.com'])
            ->postJson('/forget', ['step' => 2, 'otp' => '4821'])
            ->assertOk()->assertJson(['success' => true])
            ->assertSessionHas('forget_verified', 'asha@example.com');

        $this->withSession(['forget_email' => 'asha@example.com', 'forget_verified' => 'asha@example.com'])
            ->postJson('/forget', ['step' => 3, 'newpassword' => 'new-pass-1', 'confirmpassword' => 'new-pass-1'])
            ->assertOk()->assertJson(['success' => true])
            ->assertSessionMissing('forget_verified');
        $this->assertTrue(Hash::check('new-pass-1', $this->passwordOf('asha@example.com')));
        // Starting over does not inherit the old verification.
        $this->assertSame('t', DB::table('register')->where('email', 'asha@example.com')->value('otp_status'), 'login is not pushed into the OTP branch');
    }

    public function test_change_password_needs_a_sign_in_and_ignores_the_id_field(): void
    {
        $asha = $this->passwordOf('asha@example.com');
        $victim = DB::table('register')->where('email', 'asha@example.com')->value('id');

        // Nobody signed in: redirected, nothing changed.
        $this->post('/teacher/change-password', ['id' => $victim, 'newpassword' => 'stolen', 'cpassword' => 'stolen'])
            ->assertRedirect(route('login'));
        $this->assertSame($asha, $this->passwordOf('asha@example.com'));

        // Ravi signed in, naming Asha's id: Ravi's own password changes, not Asha's.
        $this->withSession(['userid' => '5002', 'join_as' => 'student'])
            ->post('/user/change-password', ['id' => $victim, 'newpassword' => 'ravi-new', 'cpassword' => 'ravi-new'])
            ->assertRedirect(route('login'));
        $this->assertSame($asha, $this->passwordOf('asha@example.com'));
        $this->assertTrue(Hash::check('ravi-new', $this->passwordOf('ravi@example.com')));
    }

    public function test_profile_update_edits_only_the_signed_in_account(): void
    {
        $victim = DB::table('register')->where('email', 'asha@example.com')->value('id');

        $this->post('/teacher/profile', ['id' => $victim, 'form_type' => 'address', 'city' => 'Elsewhere'])
            ->assertRedirect(route('login'));

        $this->withSession(['userid' => '5002', 'join_as' => 'student'])
            ->post('/user/profile', ['id' => $victim, 'form_type' => 'address', 'city' => 'Gurugram']);
        $this->assertNull(DB::table('register')->where('email', 'asha@example.com')->value('city'));
        $this->assertSame('Gurugram', DB::table('register')->where('email', 'ravi@example.com')->value('city'));
    }

    public function test_the_public_register_form_cannot_create_a_tutor(): void
    {
        $this->post('/register', [
            'name' => 'Mallory', 'email' => 'mallory@example.com', 'phone' => '9811100009',
            'cpass_id' => 'x', 'join_as' => 'teacher', 'status' => 't',
        ]);
        $row = DB::table('register')->where('email', 'mallory@example.com')->first();
        $this->assertNotNull($row);
        $this->assertSame('student', $row->join_as);
        $this->assertSame('f', $row->status);
    }

    public function test_an_email_code_does_not_publish_a_tutor(): void
    {
        DB::table('register')->insert(['email' => 'new.tutor@example.com', 'otp' => '1234', 'otp_status' => 'f', 'status' => 'f', 'join_as' => 'teacher']);
        $this->withSession(['emails' => 'new.tutor@example.com'])
            ->post('/verify-otp', ['otp' => '1234'])
            ->assertOk();
        $row = DB::table('register')->where('email', 'new.tutor@example.com')->first();
        $this->assertSame('t', $row->otp_status);
        $this->assertSame('f', $row->status, 'a tutor goes live after the ID review, not on an email code');
    }
}
