<?php

namespace Tests\Feature\Account;

use App\Models\Register;
use App\Services\AccountLifecycle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * Hide profile and delete account: a hidden or deleted tutor disappears from
 * every public query, deletion waits the chosen delay and can be cancelled,
 * and the purge erases personal data while keeping the row.
 */
class AccountLifecycleTest extends TestCase
{
    use RefreshDatabase;

    private const TUTOR = 'T-1';
    private const STUDENT = 'S-1';

    protected function setUp(): void
    {
        parent::setUp();

        // `register` and `teacher_review` exist only in the production dump.
        Schema::create('register', function ($t): void {
            $t->increments('id');
            foreach (['user_id', 'name', 'email', 'phone', 'phone_hash', 'password', 'c_password', 'status', 'join_as',
                'avatar', 'city', 'address', 'pincode', 'profile', 'profile_desc', 'pro_desc', 'document_number', 'otp'] as $c) {
                $t->string($c)->nullable();
            }
        });
        Schema::create('teacher_review', function ($t): void {
            $t->increments('id');
            foreach (['name', 'user_id', 'rating', 'message', 'date', 'status', 'email', 'photo'] as $c) {
                $t->string($c)->nullable();
            }
        });
        if (! Schema::hasTable('teacher_courses')) {
            Schema::create('teacher_courses', function ($t): void {
                $t->increments('id');
                $t->string('user_id')->nullable();
                $t->string('subject')->nullable();
            });
        }

        (require database_path('migrations/2026_09_23_090000_add_visibility_and_deletion_to_register.php'))->up();

        DB::table('register')->insert([
            ['user_id' => self::TUTOR, 'name' => 'Asha Rao', 'email' => 'asha@example.com', 'phone' => '9800000000',
                'password' => Hash::make('secret-pass'), 'status' => 't', 'join_as' => 'teacher', 'city' => 'Gurugram',
                'profile_desc' => 'About Asha', 'document_number' => 'ABCDE1234F'],
            ['user_id' => self::STUDENT, 'name' => 'Ravi', 'email' => 'ravi@example.com', 'phone' => '9811111111',
                'password' => null, 'status' => 't', 'join_as' => 'student', 'city' => 'Gurugram',
                'profile_desc' => null, 'document_number' => null],
        ]);
        DB::table('teacher_courses')->insert(['user_id' => self::TUTOR, 'subject' => 'Physics']);
        DB::table('teacher_review')->insert([
            ['name' => 'A parent', 'user_id' => self::TUTOR, 'rating' => '5', 'message' => 'About Asha', 'status' => 't', 'email' => 'p@example.com'],
            ['name' => 'Ravi', 'user_id' => 'T-OTHER', 'rating' => '4', 'message' => 'Written by Ravi', 'status' => 't', 'email' => 'ravi@example.com'],
        ]);
    }

    private function visibleTutors(): array
    {
        return Register::where('join_as', 'teacher')->publiclyVisible()->pluck('user_id')->all();
    }

    private function tutor(): Register
    {
        return Register::where('user_id', self::TUTOR)->firstOrFail();
    }

    public function test_hiding_for_a_period_removes_the_tutor_until_it_ends(): void
    {
        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/visibility', ['hide' => '3d'])
            ->assertOk()
            ->assertJsonPath('data.hidden', true)
            ->assertJsonPath('data.hidden_indefinitely', false);

        $this->assertSame([], $this->visibleTutors());

        $this->travel(73)->hours();
        $this->assertSame([self::TUTOR], $this->visibleTutors(), 'It comes back by itself.');
    }

    public function test_hiding_indefinitely_lasts_until_shown_again(): void
    {
        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/visibility', ['hide' => 'indefinite'])
            ->assertJsonPath('data.hidden_indefinitely', true);

        $this->travel(400)->days();
        $this->assertSame([], $this->visibleTutors());

        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/visibility', ['hide' => 'show'])
            ->assertJsonPath('data.hidden', false);
        $this->assertSame([self::TUTOR], $this->visibleTutors());
    }

    public function test_students_have_no_public_profile_to_hide(): void
    {
        $this->withSession(['userid' => self::STUDENT])
            ->postJson('/api/dashboard/v1/account/visibility', ['hide' => '24h'])
            ->assertForbidden();
    }

    public function test_deletion_needs_the_password_and_the_word_delete(): void
    {
        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/deletion', ['after' => '24h', 'confirm' => 'delete', 'password' => 'secret-pass'])
            ->assertStatus(422)->assertJsonPath('errors.0.code', 'not_confirmed');

        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/deletion', ['after' => '24h', 'confirm' => 'DELETE', 'password' => 'wrong'])
            ->assertStatus(422)->assertJsonPath('errors.0.code', 'wrong_password');

        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/deletion', ['after' => '2h', 'confirm' => 'DELETE', 'password' => 'secret-pass'])
            ->assertStatus(422);

        $this->assertFalse($this->tutor()->isDeletionPending());
    }

    public function test_an_account_without_a_password_confirms_with_delete_alone(): void
    {
        $this->withSession(['userid' => self::STUDENT])
            ->postJson('/api/dashboard/v1/account/deletion', ['after' => '7d', 'confirm' => 'DELETE'])
            ->assertOk()
            ->assertJsonPath('data.deletion_pending', true);
    }

    public function test_deletion_hides_at_once_waits_the_chosen_delay_then_erases(): void
    {
        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/deletion', ['after' => '3d', 'confirm' => 'DELETE', 'password' => 'secret-pass'])
            ->assertOk()
            ->assertJsonPath('data.deletion_pending', true);

        $this->assertSame([], $this->visibleTutors(), 'Hidden straight away.');

        $lifecycle = app(AccountLifecycle::class);
        $this->travel(71)->hours();
        $this->assertSame(0, $lifecycle->purgeDue(), 'Not before the delay.');
        $this->assertSame('Asha Rao', $this->tutor()->name);

        $this->travel(2)->hours();
        $this->artisan('accounts:purge-deleted')->assertSuccessful();

        $row = DB::table('register')->where('user_id', self::TUTOR)->first();
        $this->assertSame('Deleted user', $row->name);
        $this->assertNull($row->email);
        $this->assertNull($row->phone);
        $this->assertNull($row->profile_desc);
        $this->assertNull($row->document_number);
        $this->assertSame('f', $row->status);
        $this->assertNotNull($row->deleted_at);
        $this->assertFalse(Hash::check('secret-pass', $row->password), 'The old password no longer works.');

        $this->assertSame(0, DB::table('teacher_courses')->where('user_id', self::TUTOR)->count());
        $this->assertSame(0, DB::table('teacher_review')->where('user_id', self::TUTOR)->count());
        $this->assertSame(1, DB::table('teacher_review')->where('user_id', 'T-OTHER')->count(), 'Other tutors keep their reviews.');

        // A session that still names the erased account gets nothing.
        $this->withSession(['userid' => self::TUTOR])->getJson('/api/dashboard/v1/me')->assertUnauthorized();
    }

    public function test_reviews_the_person_wrote_are_erased_with_them(): void
    {
        app(AccountLifecycle::class)->purge(Register::where('user_id', self::STUDENT)->firstOrFail());

        $this->assertSame(0, DB::table('teacher_review')->where('email', 'ravi@example.com')->count());
    }

    public function test_cancelling_restores_the_account_and_its_visibility(): void
    {
        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/deletion', ['after' => '24h', 'confirm' => 'DELETE', 'password' => 'secret-pass'])
            ->assertOk();

        $this->withSession(['userid' => self::TUTOR])
            ->deleteJson('/api/dashboard/v1/account/deletion')
            ->assertOk()
            ->assertJsonPath('data.deletion_pending', false)
            ->assertJsonPath('data.hidden', false);

        $this->travel(2)->days();
        $this->assertSame(0, app(AccountLifecycle::class)->purgeDue());
        $this->assertSame([self::TUTOR], $this->visibleTutors());
    }

    public function test_hiding_is_refused_while_a_deletion_is_pending(): void
    {
        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/deletion', ['after' => '7d', 'confirm' => 'DELETE', 'password' => 'secret-pass']);

        $this->withSession(['userid' => self::TUTOR])
            ->postJson('/api/dashboard/v1/account/visibility', ['hide' => 'show'])
            ->assertStatus(409);
        $this->assertSame([], $this->visibleTutors());
    }

    public function test_the_profile_payload_reports_the_account_state(): void
    {
        $this->withSession(['userid' => self::TUTOR])
            ->getJson('/api/dashboard/v1/me')
            ->assertOk()
            ->assertJsonPath('data.user.account.hidden', false)
            ->assertJsonPath('data.user.account.deletion_pending', false)
            ->assertJsonPath('data.user.account.has_password', true);
    }

    public function test_the_migration_rolls_back(): void
    {
        (require database_path('migrations/2026_09_23_090000_add_visibility_and_deletion_to_register.php'))->down();

        $this->assertFalse(Schema::hasColumn('register', 'hidden_until'));
        $this->assertFalse(Schema::hasColumn('register', 'deleted_at'));
    }
}
