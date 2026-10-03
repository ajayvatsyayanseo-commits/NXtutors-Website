<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Super Admin → Enquiries (/super/enquiries).
 *
 * Why one hub table instead of follow-up columns on every source table:
 * enquiries arrive in four differently shaped tables (student_enquiry_managment,
 * demo_leads, nxt_leads, and contact_enquiries below), one of which has no
 * migration in this repo and one of which uses ULID keys. A single
 * `enquiry_leads` row per enquiry, keyed by (source_table, source_id), carries
 * the normalised request (class band, board, subjects, city, zone, mode …)
 * and the whole follow-up pipeline, so the admin list is one indexed query
 * with real pagination, and the legacy tables are never altered.
 *
 * Contact details (name, phone, email, message) stay in the source tables;
 * the hub holds only peppered hashes of phone/email for duplicate detection
 * and search.
 *
 * `contact_enquiries` is new: the /contact form posted to a controller method
 * that did not exist, so every contact-page message was lost.
 *
 * `enquiry_activities` is the notes/stage timeline: one row per note or
 * change, with who and when.
 *
 * All strings ≤ 250 (production MySQL rejects longer values; tests on SQLite
 * would not notice).
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('contact_enquiries')) {
            Schema::create('contact_enquiries', function (Blueprint $t) {
                $t->id();
                $t->string('name', 120);
                $t->string('email', 191)->nullable();
                $t->string('phone', 20)->nullable();
                $t->text('message')->nullable();
                $t->string('source_page', 250)->nullable();
                $t->string('referrer', 250)->nullable();
                $t->string('utm', 250)->nullable();
                $t->string('device', 16)->nullable();
                $t->timestamps();
            });
        }

        if (! Schema::hasTable('enquiry_leads')) {
            Schema::create('enquiry_leads', function (Blueprint $t) {
                $t->id();
                $t->string('source', 32)->index();             // contact|website_form|demo_form|demo_class|ai|dashboard
                $t->string('source_table', 40);
                $t->string('source_id', 64);
                $t->timestamp('received_at')->nullable()->index();

                // The request, normalised.
                $t->string('class_label', 64)->nullable();
                $t->string('class_band', 16)->nullable()->index(); // nursery_kg|1_5|6_8|9_10|11_12|college|adult
                $t->string('subjects', 250)->nullable();          // ",mathematics,physics,"
                $t->string('board', 40)->nullable()->index();
                $t->string('exam_goal', 24)->nullable();
                $t->string('city', 80)->nullable()->index();
                $t->string('zone', 80)->nullable();
                $t->string('area', 120)->nullable();
                $t->string('mode', 16)->nullable();               // home|online|hybrid
                $t->string('tutor_gender', 8)->nullable();
                $t->string('budget', 64)->nullable();
                $t->string('preferred_time', 120)->nullable();
                $t->string('start_by', 64)->nullable();
                $t->string('page_url', 250)->nullable();
                $t->string('referrer', 250)->nullable();
                $t->string('utm', 250)->nullable();
                $t->string('device', 16)->nullable();
                $t->string('wa_ref', 16)->nullable();

                // Duplicate detection (peppered hashes, never the values).
                $t->string('phone_hash', 64)->nullable()->index();
                $t->string('email_hash', 64)->nullable()->index();
                $t->boolean('possible_duplicate')->default(false);
                $t->unsignedBigInteger('duplicate_of_id')->nullable();

                // Follow-up pipeline. followup_status null = New.
                $t->string('followup_status', 32)->nullable()->index();
                $t->text('followup_note')->nullable();
                $t->string('followed_up_by', 64)->nullable();
                $t->timestamp('followed_up_at')->nullable();
                $t->string('lost_reason', 32)->nullable();
                $t->string('priority', 8)->nullable();             // hot|warm|cold
                $t->string('tags', 250)->nullable();               // ",fees,callback,"
                $t->unsignedBigInteger('assigned_to')->nullable()->index();
                $t->timestamp('next_follow_up_at')->nullable()->index();
                $t->timestamp('first_contacted_at')->nullable();
                $t->timestamp('last_contacted_at')->nullable();
                $t->timestamp('stage_changed_at')->nullable();
                $t->timestamp('demo_at')->nullable();
                $t->string('shortlisted_tutor_ids', 250)->nullable();
                $t->string('demo_tutor_id', 64)->nullable();
                $t->timestamp('alert_sent_at')->nullable();
                $t->timestamps();

                $t->unique(['source_table', 'source_id']);
            });
        }

        if (! Schema::hasTable('enquiry_activities')) {
            Schema::create('enquiry_activities', function (Blueprint $t) {
                $t->id();
                $t->unsignedBigInteger('enquiry_lead_id')->index();
                $t->string('type', 24);                          // created|note|stage|assign|priority|tag|follow_up|demo|tutors|duplicate
                $t->string('from_value', 64)->nullable();
                $t->string('to_value', 64)->nullable();
                $t->text('body')->nullable();
                $t->unsignedBigInteger('user_id')->nullable();
                $t->string('user_name', 64)->nullable();
                $t->timestamp('created_at')->nullable();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiry_activities');
        Schema::dropIfExists('enquiry_leads');
        Schema::dropIfExists('contact_enquiries');
    }
};
