<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

class AjayProfileMigrationTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    public function test_adds_missing_boards_and_tidies_location_and_rolls_back(): void
    {
        $this->createLegacySchema();
        DB::table('category')->insert([
            ['id' => 1, 'slug' => 'academic-class-i-xii', 'cat_title' => 'Academic (Class I–XII)', 'pid' => null, 'status' => 't'],
            ['id' => 2, 'slug' => 'cbse', 'cat_title' => 'CBSE', 'pid' => 1, 'status' => 't'],
            ['id' => 3, 'slug' => 'ib', 'cat_title' => 'IB', 'pid' => 1, 'status' => 't'],
            ['id' => 4, 'slug' => 'igcse', 'cat_title' => 'IGCSE', 'pid' => 1, 'status' => 't'],
            ['id' => 5, 'slug' => 'isc', 'cat_title' => 'ISC', 'pid' => 1, 'status' => 't'],
            ['id' => 6, 'slug' => 'icse', 'cat_title' => 'ICSE', 'pid' => 1, 'status' => 't'],
        ]);
        DB::table('product_managment')->insert([
            ['id' => 11, 'slug' => 'ib-dp-mathematics-analysis-approaches-sl-hl', 'status' => 't'],
            ['id' => 12, 'slug' => 'igcse-extended-mathematics', 'status' => 't'],
        ]);
        DB::table('register')->insert(['user_id' => '1997', 'name' => 'Ajay Vatsyayan', 'city' => 'WAZIRABAD', 'address' => '', 'join_as' => 'teacher', 'status' => 't']);
        DB::table('teacher_course_managment')->insert(['user_id' => '1997', 'cat_id' => 1, 'pid' => 2, 'cid' => 9, 'sub_id' => null]);

        $m = require database_path('migrations/seo/2026_09_28_150000_complete_ajay_vatsyayan_profile.php');
        $m->up();

        $boards = DB::table('teacher_course_managment')->where('user_id', '1997')->pluck('pid')->map(fn ($v) => (int) $v)->sort()->values()->all();
        $this->assertSame([2, 3, 4, 5, 6], $boards, 'CBSE kept; IB, IGCSE, ISC, ICSE added');
        $this->assertSame('11', (string) DB::table('teacher_course_managment')->where('user_id', '1997')->where('pid', 3)->value('sub_id'));
        $row = DB::table('register')->where('user_id', '1997')->first();
        $this->assertSame('Gurugram', $row->city);
        $this->assertSame('Wazirabad', $row->address);

        $m->up(); // idempotent
        $this->assertSame(5, DB::table('teacher_course_managment')->where('user_id', '1997')->count());

        $m->down();
        $this->assertSame([2], DB::table('teacher_course_managment')->where('user_id', '1997')->pluck('pid')->map(fn ($v) => (int) $v)->all());
        $this->assertSame('Wazirabad', DB::table('register')->where('user_id', '1997')->value('city'));
    }

    public function test_dashboard_uploaded_photos_are_found(): void
    {
        $name = 'phpunit-photo-' . uniqid() . '.jpg';
        @mkdir(public_path('uploads'), 0775, true);
        file_put_contents(public_path('uploads/' . $name), 'x');
        try {
            $this->assertStringEndsWith('/uploads/' . $name, \App\Support\TutorPhoto::url($name));
            $this->assertStringEndsWith('/storage/user/missing.jpg', \App\Support\TutorPhoto::url('missing.jpg'));
            $this->assertSame('https://cdn.example.com/a.jpg', \App\Support\TutorPhoto::url('https://cdn.example.com/a.jpg'));
        } finally {
            @unlink(public_path('uploads/' . $name));
        }
    }
}
