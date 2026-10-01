<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * /verify-otp and /everify-otp must compare the code we sent; calling them
 * directly with a wrong or missing code must not activate the account.
 */
class OtpVerificationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(\Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class);

        if (! Schema::hasTable('register')) {
            Schema::create('register', function ($t): void {
                $t->increments('id');
                foreach (['user_id', 'name', 'email', 'otp', 'otp_status', 'status'] as $c) {
                    $t->string($c)->nullable();
                }
            });
        }
        if (! Schema::hasTable('student_enquiry_managment')) {
            Schema::create('student_enquiry_managment', function ($t): void {
                $t->increments('id');
                foreach (['email', 'eotp', 'otp_status', 'status'] as $c) {
                    $t->string($c)->nullable();
                }
                $t->timestamps();
            });
        }
    }

    public function test_wrong_or_missing_code_does_not_verify(): void
    {
        DB::table('register')->insert(['email' => 'a@example.com', 'otp' => '4821', 'otp_status' => 'f', 'status' => 'f']);

        foreach (['', '0000'] as $code) {
            $this->withSession(['emails' => 'a@example.com'])
                ->post('/verify-otp', ['otp' => $code])
                ->assertStatus(422);
        }
        $this->assertSame('f', DB::table('register')->where('email', 'a@example.com')->value('otp_status'));
    }

    public function test_correct_code_verifies_once(): void
    {
        DB::table('register')->insert(['email' => 'b@example.com', 'otp' => '4821', 'otp_status' => 'f', 'status' => 'f']);

        $this->withSession(['emails' => 'b@example.com'])
            ->post('/verify-otp', ['otp' => '4821'])
            ->assertOk()->assertJson(['success' => true]);

        $row = DB::table('register')->where('email', 'b@example.com')->first();
        $this->assertSame('t', $row->otp_status);
        $this->assertNull($row->otp, 'the code is single-use');
    }

    public function test_enquiry_otp_must_match(): void
    {
        DB::table((new \App\Models\Student_Enquiry_Managment)->getTable())
            ->insert(['email' => 'c@example.com', 'eotp' => '1357', 'otp_status' => 'f', 'status' => 'f']);
        $table = (new \App\Models\Student_Enquiry_Managment)->getTable();

        $this->withSession(['emails' => 'c@example.com'])
            ->post('/everify-otp', ['eotp' => '9999'])
            ->assertStatus(422);
        $this->assertSame('f', DB::table($table)->where('email', 'c@example.com')->value('otp_status'));

        $this->withSession(['emails' => 'c@example.com'])
            ->post('/everify-otp', ['eotp' => '1357'])
            ->assertOk();
        $this->assertSame('t', DB::table($table)->where('email', 'c@example.com')->value('otp_status'));
    }
}
