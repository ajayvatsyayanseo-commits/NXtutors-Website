<?php

namespace Tests\Feature;

use App\Models\Register;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * Tutors who sign up on WhatsApp arrive as status 'p' (pending review): they
 * can sign in and finish their profile, nobody else can see them, and they
 * become public and Verified only when an admin sets 't'.
 */
class TutorPendingReviewTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacySchema();
        config()->set('agent.hash_pepper', 'pending-review-test-pepper');
        // Exactly what the onboarding agent writes: a plain INSERT, no phone_hash.
        DB::table('register')->insert([
            'user_id' => '2188', 'name' => 'Khushi Sarswat', 'email' => 'khushi@example.com',
            'password' => Hash::make('temp-pass-123'), 'phone' => '9310383446', 'city' => 'Gurugram',
            'join_as' => 'teacher', 'status' => 'p', 'otp_status' => 't',
        ]);
    }

    public function test_a_pending_tutor_can_sign_in_and_is_told_why_they_are_not_live(): void
    {
        $this->postJson('/login', ['email' => 'khushi@example.com', 'pass' => 'temp-pass-123'])
            ->assertOk()
            ->assertJson(['success' => true, 'redirect' => 'teacher/dashboard'])
            ->assertJsonFragment(['message' => 'Login successful. Your profile is pending review: it goes live once our team has checked your ID.'])
            ->assertSessionHas('userid', '2188');
    }

    public function test_an_inactive_account_still_cannot_sign_in(): void
    {
        DB::table('register')->where('user_id', '2188')->update(['status' => 'f']);

        $this->postJson('/login', ['email' => 'khushi@example.com', 'pass' => 'temp-pass-123'])
            ->assertStatus(401)
            ->assertSessionMissing('userid');
    }

    public function test_a_pending_student_is_not_a_thing(): void
    {
        DB::table('register')->where('user_id', '2188')->update(['join_as' => 'student']);

        $this->postJson('/login', ['email' => 'khushi@example.com', 'pass' => 'temp-pass-123'])
            ->assertStatus(401);
    }

    public function test_a_pending_tutor_is_not_public(): void
    {
        $tutor = Register::where('user_id', '2188')->firstOrFail();

        $this->get(parse_url($tutor->profileUrl(), PHP_URL_PATH))->assertNotFound();
        $this->assertSame(0, Register::query()->publiclyVisible()->where('user_id', '2188')->count());
    }

    public function test_approval_makes_the_tutor_public_and_reachable_by_the_agents(): void
    {
        $tutor = Register::where('user_id', '2188')->firstOrFail();
        $this->assertNull($tutor->phone_hash);

        // The admin's approval saves through the model, as teacherupdate does.
        $tutor->update(['status' => 't']);

        $tutor->refresh();
        $this->assertSame('t', $tutor->status);
        $this->assertNotEmpty($tutor->phone_hash, 'a hash is filled in on the first save, phone unchanged');
        $this->assertSame(\App\NxtAi\Support\AgentPseudonymiser::tryPhoneHash('9310383446'), $tutor->phone_hash);
        $this->get(parse_url($tutor->profileUrl(), PHP_URL_PATH))->assertOk();
    }

    public function test_admin_labels(): void
    {
        $this->assertSame(['p' => 'Pending review', 't' => 'Active', 'f' => 'Inactive'], Register::STATUS_LABELS);
        $this->assertTrue(Register::where('user_id', '2188')->first()->canSignIn());
    }
}
