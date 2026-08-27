<?php

declare(strict_types=1);

namespace Tests\Feature\NxtAi;

use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Services\TutorSearchService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * Real tutor search against a minimal recreation of the legacy `register` /
 * `teacher_review` / `teacher_courses` schema (those tables have no Laravel
 * migrations). Requires pdo_sqlite. Proves active/public filtering, subject
 * hard-filtering, Gurgaon=Gurugram, and that no private data reaches a card.
 */
class TutorSearchIntegrationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacyTables();
        $this->seedTutors();
    }

    private function createLegacyTables(): void
    {
        Schema::create('register', function ($t): void {
            $t->increments('id');
            $t->string('user_id')->nullable();
            $t->string('name')->nullable();
            $t->string('email')->nullable();
            $t->string('phone')->nullable();
            $t->string('gender')->nullable();
            $t->string('avatar')->nullable();
            $t->text('address')->nullable();
            $t->string('city')->nullable();
            $t->string('district')->nullable();
            $t->string('state')->nullable();
            $t->string('pincode')->nullable();
            $t->string('status')->nullable();
            $t->string('join_as')->nullable();
            $t->string('for_class')->nullable();
            $t->string('experience')->nullable();
            $t->string('education')->nullable();
            $t->text('other_education')->nullable();
            $t->string('class_type')->nullable();
            $t->string('budget')->nullable();
            $t->text('profile')->nullable();
            $t->text('profile_desc')->nullable();
            $t->text('pro_desc')->nullable();
            $t->string('document_number')->nullable();
        });

        Schema::create('teacher_review', function ($t): void {
            $t->increments('id');
            $t->string('user_id')->nullable();
            $t->string('rating')->nullable();
            $t->string('status')->nullable();
        });

        Schema::create('teacher_courses', function ($t): void {
            $t->bigIncrements('id');
            $t->string('user_id')->nullable();
            $t->string('subject')->nullable();
            $t->string('board')->nullable();
            $t->string('for_class')->nullable();
            $t->string('class_type')->nullable();
            $t->string('mode')->nullable();
            $t->string('status')->nullable();
        });

        // Empty parallel-schema tables so eager loads resolve cleanly.
        Schema::create('teacher_course_managment', function ($t): void {
            $t->increments('id');
            $t->string('user_id')->nullable();
            $t->string('pid')->nullable();
            $t->string('cid')->nullable();
            $t->string('cat_id')->nullable();
            $t->string('sub_id')->nullable();
        });
        Schema::create('category', function ($t): void {
            $t->increments('id');
            $t->string('pid')->nullable();
            $t->string('cid')->nullable();
            $t->string('cat_title')->nullable();
            $t->string('status')->nullable();
        });
    }

    private function seedTutors(): void
    {
        // Active Maths tutor in Gurugram (stored as 'Gurugram').
        DB::table('register')->insert([
            'user_id' => '1000', 'name' => 'Anita Sharma', 'email' => 'anita.secret@example.com',
            'phone' => '9876500000', 'gender' => 'female', 'city' => 'Gurugram', 'address' => 'Sector 30',
            'pincode' => '122001', 'status' => 't', 'join_as' => 'teacher', 'experience' => '8 years',
            'budget' => '1000', 'class_type' => 'both', 'profile_desc' => 'CBSE Maths specialist',
            'document_number' => 'DOC-SECRET-1',
        ]);
        DB::table('teacher_courses')->insert([
            'user_id' => '1000', 'subject' => 'Mathematics', 'board' => 'CBSE', 'for_class' => '6-12',
            'class_type' => 'both', 'mode' => 'Tutoring', 'status' => 't',
        ]);
        DB::table('teacher_review')->insert([
            ['user_id' => '1000', 'rating' => '5', 'status' => 't'],
            ['user_id' => '1000', 'rating' => '4', 'status' => 't'],
        ]);

        // Inactive tutor (status 'f') — must never be returned.
        DB::table('register')->insert([
            'user_id' => '1001', 'name' => 'Blocked Tutor', 'gender' => 'male', 'city' => 'Gurugram',
            'status' => 'f', 'join_as' => 'teacher', 'budget' => '900',
        ]);
        DB::table('teacher_courses')->insert([
            'user_id' => '1001', 'subject' => 'Mathematics', 'board' => 'CBSE', 'status' => 't',
        ]);

        // Active Hindi tutor — must be excluded from a Maths search (hard filter).
        DB::table('register')->insert([
            'user_id' => '1002', 'name' => 'Hindi Only', 'gender' => 'male', 'city' => 'Gurugram',
            'status' => 't', 'join_as' => 'teacher', 'budget' => '800',
        ]);
        DB::table('teacher_courses')->insert([
            'user_id' => '1002', 'subject' => 'Hindi', 'board' => 'CBSE', 'status' => 't',
        ]);
    }

    private function service(): TutorSearchService
    {
        return app(TutorSearchService::class);
    }

    public function test_gurgaon_alias_and_subject_filter_return_only_the_maths_tutor(): void
    {
        $criteria = TutorSearchCriteria::fromToolArgs(['city' => 'Gurgaon', 'subject' => 'Maths'], 6);
        $result = $this->service()->search($criteria);

        $this->assertCount(1, $result['cards']);
        $this->assertSame('Anita Sharma', $result['cards'][0]['name']);
    }

    public function test_inactive_tutor_is_never_returned(): void
    {
        $result = $this->service()->search(TutorSearchCriteria::fromToolArgs(['city' => 'Gurugram'], 6));
        $names = array_column($result['cards'], 'name');

        $this->assertNotContains('Blocked Tutor', $names);
    }

    public function test_cards_contain_no_private_data(): void
    {
        $result = $this->service()->search(TutorSearchCriteria::fromToolArgs(['city' => 'Gurgaon'], 6));
        $json = json_encode($result['cards']);

        foreach (['anita.secret@example.com', '9876500000', 'DOC-SECRET-1'] as $secret) {
            $this->assertStringNotContainsString($secret, $json);
        }
    }

    public function test_ratings_are_aggregated_from_reviews(): void
    {
        $result = $this->service()->search(TutorSearchCriteria::fromToolArgs(['city' => 'Gurgaon', 'subject' => 'Maths'], 6));

        $this->assertSame(2, $result['cards'][0]['review_count']);
        $this->assertEqualsWithDelta(4.5, $result['cards'][0]['rating'], 0.01);
    }
}
