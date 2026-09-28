<?php

namespace Tests\Concerns;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * The site's own tables (register, pages, banner_manager, …) predate its
 * migrations, so a fresh test database does not have them. This creates the
 * ones a page needs, every column nullable, only where missing.
 */
trait LegacySchema
{
    protected function createLegacySchema(): void
    {
        if (DB::connection()->getDriverName() === 'sqlite') {
            DB::connection()->getPdo()->sqliteCreateCollation('utf8mb4_unicode_ci', 'strcmp');
        }

        $tables = [
            'register' => ['phone_hash', 'user_id', 'name', 'email', 'password', 'user_type', 'phone', 'dob', 'avatar', 'gender', 'date',
                'address', 'city', 'district', 'state', 'pincode', 'c_password', 'otp', 'class_type', 'otp_status', 'status', 'join_as',
                'for_class', 'frount_image', 'back_image', 'degree', 'experience', 'education', 'budget', 'other_education', 'document_type',
                'document_number', 'profile', 'profile_desc', 'pro_desc', 'travel_areas', 'other_names', 'hidden_until', 'deleted_at', 'delete_after', 'deletion_requested_at'],
            'pages' => ['title', 'slug', 'status', 'description', 'meta_title', 'meta_keywords', 'meta_description', 'avatar'],
            'banner_manager' => ['title', 'sub_title', 'description', 'avatar', 'status', 'link'],
            'category' => ['pid', 'cid', 'slug', 'cat_title', 'cdesc', 'avatar', 'meta_title', 'meta_desc', 'status'],
            'blog_managment' => ['title', 'slug', 'status', 'bdesc', 'avatar', 'meta_title', 'meta_key', 'meta_desc', 'author', 'date'],
            'city_managment' => ['city_name', 'slug', 'city_desc', 'meta_title', 'meta_desc', 'avatar', 'status'],
            'city_area_list_managment' => ['city_id', 'name', 'main_title', 'slug', 'pincode', 'status'],
            'teacher_review' => ['user_id', 'rating', 'review', 'status', 'review_status', 'name', 'message', 'date', 'verified_at'],
            'teacher_courses' => ['user_id', 'board', 'for_class', 'subject', 'class_type', 'mode', 'fee', 'status', 'date'],
            'teacher_course_managment' => ['user_id', 'pid', 'cid', 'cat_id', 'sub_id'],
            'generated_pages' => ['slug', 'title', 'city', 'location', 'status', 'meta_title', 'meta_description', 'payload', 'page_type'],
            'product_managment' => ['title', 'slug', 'status', 'cat_id', 'pid', 'cid', 'avatar', 'meta_title', 'meta_desc'],
            'settings' => ['name', 'email', 'phone', 'address', 'facebook', 'twitter', 'instagram', 'logo', 'offer_text'],
        ];

        foreach ($tables as $name => $columns) {
            if (Schema::hasTable($name)) {
                continue;
            }
            Schema::create($name, function ($t) use ($columns) {
                $t->id();
                foreach ($columns as $c) {
                    $t->text($c)->nullable();
                }
                $t->timestamps();
            });
        }

        // Every page reads the site settings row (shared at boot, before these
        // tables existed), so give it one.
        if (! DB::table('settings')->exists()) {
            DB::table('settings')->insert(['name' => 'NXTutors', 'email' => 'support@nxtutors.com', 'phone' => '+91 78360 34313', 'address' => 'Gurugram']);
        }
        \Illuminate\Support\Facades\View::share('setting', \App\Models\Setting::first());
    }
}
