<?php

namespace Tests\Feature\Reviews;

use App\Mail\ReviewVerificationMail;
use App\Models\Teacher_review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Tests\TestCase;

/**
 * The review path from the public form to the public page: nothing is shown
 * until an admin approves it, and nothing the visitor sends can decide that.
 */
class TutorReviewFlowTest extends TestCase
{
    use RefreshDatabase;

    private const TUTOR = 'T-100';

    protected function setUp(): void
    {
        parent::setUp();

        // `register` and `teacher_review` have no migrations (they exist only
        // in the production dump), so they are built here as they are there,
        // and the review migration is run against them the way deploy does.
        Schema::create('register', function ($t): void {
            $t->increments('id');
            $t->string('user_id')->nullable();
            $t->string('name')->nullable();
            $t->string('email')->nullable();
            $t->string('phone')->nullable();
            $t->string('phone_hash')->nullable();
            $t->string('status')->nullable();
            $t->string('join_as')->nullable();
            $t->string('avatar')->nullable();
            $t->string('city')->nullable();
        });
        Schema::create('teacher_review', function ($t): void {
            $t->increments('id');
            $t->string('name')->nullable();
            $t->string('user_id')->nullable();
            $t->string('rating')->nullable();
            $t->string('expertise')->nullable();
            $t->string('patience')->nullable();
            $t->string('reliability')->nullable();
            $t->string('communication')->nullable();
            $t->text('message')->nullable();
            $t->string('date')->nullable();
            $t->string('status')->nullable();
        });
        if (! Schema::hasTable('teacher_courses')) {
            Schema::create('teacher_courses', function ($t): void {
                $t->increments('id');
                $t->string('user_id')->nullable();
                $t->string('subject')->nullable();
            });
        }
        if (! Schema::hasTable('teacher_course_managment')) {
            Schema::create('teacher_course_managment', function ($t): void {
                $t->increments('id');
                $t->string('user_id')->nullable();
            });
        }

        DB::table('register')->insert([
            'user_id' => self::TUTOR, 'name' => 'Asha Rao', 'status' => 't', 'join_as' => 'teacher', 'city' => 'Gurugram',
        ]);
        DB::table('teacher_courses')->insert(['user_id' => self::TUTOR, 'subject' => 'Physics']);

        // One review from before verified reviews existed.
        DB::table('teacher_review')->insert([
            'name' => 'Old Reviewer', 'user_id' => self::TUTOR, 'rating' => '5', 'message' => 'Imported', 'date' => '2025-01-01', 'status' => 't',
        ]);

        (require database_path('migrations/2026_09_22_120000_add_verification_to_teacher_review.php'))->up();

        config(['reviews.verify_email' => false]);

        // AppServiceProvider shares the site settings row only outside the
        // console, and the footer reads it; give the pages something to show.
        View::share('setting', (object) ['name' => 'NXTutors', 'email' => '', 'phone' => '', 'address' => '']);
    }

    private function payload(array $overrides = []): array
    {
        return array_merge([
            'user_id' => self::TUTOR,
            'name' => 'Priya Sharma',
            'email' => 'Priya@Example.com',
            'reviewer_role' => 'parent',
            'rating' => 5,
            'expertise' => 5,
            'patience' => 4,
            'reliability' => 5,
            'communication' => 4,
            'subject' => 'Physics',
            'board' => 'ISC',
            'class_level' => '12',
            'mode' => 'home',
            'duration' => '6to12m',
            'tags' => ['clear_explanations', 'regular_tests'],
            'message' => 'Asha ma\'am made electrostatics finally make sense. Weekly tests kept my daughter on track all year.',
            'consent' => '1',
        ], $overrides);
    }

    public function test_the_review_form_renders_with_the_tutors_subjects(): void
    {
        $this->get('/teacher/'.self::TUTOR)
            ->assertOk()
            ->assertSee('Review Asha Rao')
            ->assertSee('<option value="Physics">Physics</option>', false)
            ->assertSee('noindex, follow', false);
    }

    public function test_the_review_form_404s_for_someone_who_is_not_a_tutor(): void
    {
        $this->get('/teacher/NOPE')->assertNotFound();
    }

    public function test_existing_reviews_become_hidden_legacy_reviews(): void
    {
        $old = Teacher_review::where('name', 'Old Reviewer')->first();

        $this->assertSame('legacy', $old->moderation);
        $this->assertSame('f', $old->status);
    }

    public function test_a_submitted_review_waits_for_an_admin_and_is_not_published(): void
    {
        $this->postJson('/feedback', $this->payload())->assertOk();

        $review = Teacher_review::where('name', 'Priya Sharma')->firstOrFail();
        $this->assertSame('f', $review->status);
        $this->assertSame('pending', $review->moderation);
        $this->assertSame('priya@example.com', $review->email);
        $this->assertNull($review->email_verified_at);
        $this->assertSame(['clear_explanations', 'regular_tests'], $review->tags);
        $this->assertSame('Parent · Class 12 · ISC · Physics · Home tuition', $review->contextLine());
    }

    public function test_the_visitor_cannot_publish_or_redirect_a_review_through_extra_fields(): void
    {
        $this->postJson('/feedback', $this->payload([
            'status' => 't',
            'moderation' => 'approved',
            'email_verified_at' => now()->toDateTimeString(),
        ]))->assertOk();

        $review = Teacher_review::where('name', 'Priya Sharma')->firstOrFail();
        $this->assertSame('f', $review->status);
        $this->assertSame('pending', $review->moderation);
        $this->assertNull($review->email_verified_at);
    }

    public function test_every_rating_and_class_detail_is_required(): void
    {
        $this->postJson('/feedback', $this->payload([
            'expertise' => null, 'board' => 'NOT-A-BOARD', 'message' => 'Too short', 'consent' => null,
        ]))->assertStatus(422)->assertJsonValidationErrors(['expertise', 'board', 'message', 'consent']);

        $this->assertSame(0, Teacher_review::where('name', 'Priya Sharma')->count());
    }

    public function test_unknown_tags_and_too_many_tags_are_refused(): void
    {
        $this->postJson('/feedback', $this->payload(['tags' => ['best_tutor_in_gurgaon']]))
            ->assertStatus(422)->assertJsonValidationErrors(['tags.0']);

        $this->postJson('/feedback', $this->payload(['tags' => [
            'patient', 'punctual', 'regular_tests', 'doubt_solving', 'improved_marks', 'exam_focused', 'friendly',
        ]]))->assertStatus(422)->assertJsonValidationErrors(['tags']);
    }

    public function test_a_review_for_someone_who_is_not_a_tutor_is_refused(): void
    {
        DB::table('register')->insert(['user_id' => 'S-1', 'name' => 'A Student', 'status' => 't', 'join_as' => 'student']);

        $this->postJson('/feedback', $this->payload(['user_id' => 'S-1']))->assertNotFound();
    }

    public function test_one_review_per_email_per_tutor(): void
    {
        $this->postJson('/feedback', $this->payload())->assertOk();
        $this->postJson('/feedback', $this->payload(['email' => 'priya@example.com', 'name' => 'Priya again']))
            ->assertStatus(422);

        $this->assertSame(1, Teacher_review::where('email', 'priya@example.com')->count());
    }

    public function test_the_bot_trap_accepts_silently_and_saves_nothing(): void
    {
        $this->postJson('/feedback', $this->payload(['website' => 'http://spam.example']))->assertOk();

        $this->assertSame(0, Teacher_review::where('name', 'Priya Sharma')->count());
    }

    public function test_a_photo_is_stored_under_a_random_name(): void
    {
        $this->postJson('/feedback', $this->payload([
            'photo' => UploadedFile::fake()->image('../../evil name.png', 200, 200),
        ]))->assertOk();

        $review = Teacher_review::where('name', 'Priya Sharma')->firstOrFail();
        $this->assertMatchesRegularExpression('/^[a-z0-9]{32}\.png$/', $review->photo);
        $this->assertFileExists(public_path('storage/reviews/'.$review->photo));

        @unlink(public_path('storage/reviews/'.$review->photo));
    }

    public function test_with_email_verification_on_the_link_moves_the_review_to_the_admin_queue(): void
    {
        config(['reviews.verify_email' => true]);
        Mail::fake();

        $this->postJson('/feedback', $this->payload())->assertOk();

        $review = Teacher_review::where('name', 'Priya Sharma')->firstOrFail();
        $this->assertSame('unverified', $review->moderation);

        $token = null;
        Mail::assertSent(ReviewVerificationMail::class, function (ReviewVerificationMail $mail) use (&$token) {
            $token = $mail->token;

            return $mail->hasTo('priya@example.com');
        });
        $this->assertNotSame($token, $review->verify_token_hash, 'Only a hash of the token is stored.');

        $this->get('/review/verify/'.$token)->assertOk();

        $review->refresh();
        $this->assertSame('pending', $review->moderation);
        $this->assertNotNull($review->email_verified_at);
        $this->assertSame('f', $review->status, 'Verifying the email does not publish the review.');

        // The link is single-use.
        $this->get('/review/verify/'.$token)->assertOk()->assertSee('not valid');
    }

    public function test_an_expired_link_does_not_verify(): void
    {
        config(['reviews.verify_email' => true]);
        Mail::fake();
        $this->postJson('/feedback', $this->payload())->assertOk();

        $token = null;
        Mail::assertSent(ReviewVerificationMail::class, function ($mail) use (&$token) {
            $token = $mail->token;

            return true;
        });

        $this->travel(49)->hours();
        $this->get('/review/verify/'.$token)->assertOk()->assertSee('expired');

        $this->assertNull(Teacher_review::where('name', 'Priya Sharma')->value('email_verified_at'));
    }

    public function test_only_an_approved_review_is_published_and_it_can_be_taken_down_again(): void
    {
        $this->withoutMiddleware();
        $this->postJson('/feedback', $this->payload())->assertOk();
        $review = Teacher_review::where('name', 'Priya Sharma')->firstOrFail();

        $this->post(route('super.teacher.review.approve', $review->id))->assertRedirect();
        $review->refresh();
        $this->assertSame('t', $review->status);
        $this->assertSame('approved', $review->moderation);
        $this->assertNotNull($review->moderated_at);

        $this->post(route('super.teacher.review.reject', $review->id), ['reason' => 'Duplicate'])->assertRedirect();
        $review->refresh();
        $this->assertSame('f', $review->status);
        $this->assertSame('rejected', $review->moderation);
        $this->assertSame('Duplicate', $review->reject_reason);

        $this->delete(route('super.teacher.review.destroy', $review->id))->assertRedirect();
        $this->assertNull(Teacher_review::find($review->id));
    }

    public function test_a_legacy_review_can_be_restored_by_an_admin(): void
    {
        $this->withoutMiddleware();
        $old = Teacher_review::where('name', 'Old Reviewer')->firstOrFail();

        $this->post(route('super.teacher.review.approve', $old->id))->assertRedirect();

        $this->assertSame('t', $old->fresh()->status);
    }

    public function test_the_migration_rolls_back_to_the_old_published_state(): void
    {
        (require database_path('migrations/2026_09_22_120000_add_verification_to_teacher_review.php'))->down();

        $this->assertFalse(Schema::hasColumn('teacher_review', 'moderation'));
        $this->assertSame('t', DB::table('teacher_review')->where('name', 'Old Reviewer')->value('status'));
    }
}
