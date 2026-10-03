<?php

namespace Tests\Feature\Enquiries;

use App\Mail\EnquiryDigestMail;
use App\Mail\NewEnquiryMail;
use App\Models\EnquiryActivity;
use App\Models\EnquiryLead;
use App\Models\User;
use App\Services\Enquiries\EnquiryFeed;
use App\Services\Enquiries\EnquiryNormaliser;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * Super Admin → Enquiries: every family enquiry from every form in one list,
 * with follow-up, the "New enquiry" email (no phone/email in it) and the
 * morning digest.
 */
class EnquiryDeskTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private const MIGRATION = 'migrations/seo/2026_10_08_100000_create_enquiry_desk_tables.php';

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacySchema();
        $this->withoutMiddleware(ValidateCsrfToken::class);
        (require database_path(self::MIGRATION))->up();
        if (! Schema::hasTable('student_enquiry_managment')) {
            Schema::create('student_enquiry_managment', function ($t): void {
                $t->increments('id');
                foreach (['user_id', 'name', 'email', 'phone', 'date', 'city', 'district', 'state', 'pincode', 'budget', 'status', 'for_class', 'eotp', 'otp_status'] as $c) {
                    $t->string($c)->nullable();
                }
                $t->text('message')->nullable();
            });
        }
        config()->set('enquiries.alerts', true);
        config()->set('enquiries.alert_email', 'alerts@example.com');
        RateLimiter::clear('public-form');
    }

    private function superAdmin(): User
    {
        $role = Role::findOrCreate('super_admin', 'web');
        $user = User::factory()->create(['name' => 'Desk Admin']);
        $user->assignRole($role);

        return $user;
    }

    private function contactForm(array $over = []): \Illuminate\Testing\TestResponse
    {
        return $this->from('/contact')->post('/enquiry', array_merge([
            'name' => 'Anjali Sharma',
            'email' => 'anjali@example.com',
            'phone' => '9876543210',
            'message' => 'Class 10 CBSE Maths, home tuition in Sector 56, Gurugram, weekday evenings.',
        ], $over));
    }

    private function demoForm(array $over = []): \Illuminate\Testing\TestResponse
    {
        return $this->postJson('/demo-lead/store', array_merge([
            'name' => 'Rohit Mehra',
            'phone' => '9811122233',
            'subject' => 'Physics',
            'child_class' => '12',
            'board' => 'ISC',
            'mode' => 'Online',
            'location' => 'Noida',
            'preferred_time' => 'Weekends',
            'source_page' => 'https://nxtutors.com/demo-class?utm_source=google&utm_medium=cpc',
        ], $over));
    }

    // ------------------------------------------------------------ access

    public function test_a_visitor_is_sent_to_sign_in_and_a_non_admin_is_refused(): void
    {
        $this->get(route('super.enquiries.index'))->assertRedirect();
        $this->get(route('super.enquiries.export'))->assertRedirect();

        $this->actingAs(User::factory()->create(), 'web');
        $this->get(route('super.enquiries.index'))->assertForbidden();
        $this->post(route('super.enquiries.bulk'), ['ids' => [1], 'action' => 'spam'])->assertForbidden();
    }

    // ------------------------------------------------------------ sources

    public function test_the_contact_form_now_saves_and_lists_the_enquiry(): void
    {
        Mail::fake();
        $this->contactForm()->assertRedirect('/contact')->assertSessionHas('success');

        $this->assertSame(1, DB::table('contact_enquiries')->count());
        $lead = EnquiryLead::sole();
        $this->assertSame('contact', $lead->source);
        $this->assertSame('Class 10', $lead->class_label);
        $this->assertSame('9_10', $lead->class_band);
        $this->assertSame('CBSE', $lead->board);
        $this->assertSame(['Mathematics'], $lead->subjectList());
        $this->assertSame('Gurugram', $lead->city);
        $this->assertSame('Sector 56', $lead->area);
        $this->assertSame('home', $lead->mode);
        $this->assertNotNull($lead->phone_hash);
        $this->assertSame(1, EnquiryActivity::where('type', 'created')->count());
    }

    public function test_every_source_appears_in_one_list_newest_first(): void
    {
        Mail::fake();
        DB::table('student_enquiry_managment')->insert([
            'name' => 'Old Form Parent', 'email' => 'old@example.com', 'phone' => '9000000001', 'date' => now()->subDays(3)->toDateString(),
            'city' => 'Gurgaon', 'for_class' => 'Class 8', 'message' => 'Science tutor needed', 'status' => 'f',
        ]);
        DB::table('demo_leads')->insert([
            'name' => 'AI Parent', 'phone' => '9000000002', 'subject' => 'Chemistry', 'child_class' => '11', 'mode' => 'online',
            'source_page' => 'nxt-ai', 'created_at' => now()->subDays(2), 'updated_at' => now()->subDays(2),
        ]);
        DB::table('nxt_leads')->insert([
            'id' => (string) Str::ulid(), 'source' => 'web', 'contact_name' => 'Dashboard Parent', 'phone' => '9000000003',
            'class_level' => '6', 'subject' => 'English', 'mode' => 'home', 'city' => 'Gurugram', 'locality' => 'Sector 45',
            'status' => 'received', 'created_at' => now()->subDay(), 'updated_at' => now()->subDay(),
        ]);
        // A legacy copy inside nxt_leads is not listed twice.
        DB::table('nxt_leads')->insert([
            'id' => (string) Str::ulid(), 'source' => 'enquiry', 'legacy_enquiry_id' => 1, 'contact_name' => 'Old Form Parent',
            'mode' => 'home', 'status' => 'received', 'created_at' => now(), 'updated_at' => now(),
        ]);
        $this->demoForm()->assertOk();
        $this->contactForm()->assertRedirect();

        $this->actingAs($this->superAdmin());
        $res = $this->get(route('super.enquiries.index', ['range' => 'all']))->assertOk();

        $this->assertSame(5, EnquiryLead::count());
        $res->assertSeeInOrder(['Anjali Sharma', 'Rohit Mehra', 'Dashboard Parent', 'AI Parent', 'Old Form Parent']);
        $res->assertSee('9876543210')->assertSee('anjali@example.com');
        $res->assertSee('Today: 2')->assertSee('New: 5');

        $sources = EnquiryLead::orderBy('id')->pluck('source')->all();
        $this->assertEqualsCanonicalizing(['demo_class', 'contact', 'website_form', 'ai', 'dashboard'], $sources);

        $demo = EnquiryLead::where('source', 'demo_class')->sole();
        $this->assertSame('ISC', $demo->board);
        $this->assertSame('11_12', $demo->class_band);
        $this->assertSame('Noida', $demo->city);
        $this->assertSame('online', $demo->mode);
        $this->assertSame('https://nxtutors.com/demo-class', $demo->page_url);
        $this->assertSame('source=google&medium=cpc', $demo->utm);
    }

    public function test_a_dashboard_requirement_is_listed_and_emailed(): void
    {
        Mail::fake();
        $lead = app(\App\Nxt\Dashboard\Services\LeadFlow::class)->createLead([
            'contact_name' => 'Dash Parent', 'phone' => '9000000123', 'class_level' => '9', 'board' => 'ICSE',
            'subject' => 'Maths', 'mode' => 'home', 'city' => 'Gurugram', 'locality' => 'Sector 45',
        ]);

        $row = EnquiryLead::where('source_table', 'nxt_leads')->where('source_id', $lead->id)->sole();
        $this->assertSame('dashboard', $row->source);
        $this->assertSame('ICSE', $row->board);
        $this->assertSame('9_10', $row->class_band);
        Mail::assertSent(NewEnquiryMail::class, 1);
    }

    public function test_the_demo_form_links_its_whatsapp_ref(): void
    {
        Mail::fake();
        (require database_path('migrations/seo/2026_09_28_170000_create_nxt_handoffs_and_other_names.php'))->up();
        config()->set('nxt-ai.whatsapp_number', '+91 78360 34313');

        $this->demoForm()->assertOk();
        $code = $this->postJson('/wa/handoff', ['kind' => 'demo_form', 'from' => '/demo-class', 'text' => 'Hello'])->assertOk()->json('code');

        $this->assertSame($code, EnquiryLead::sole()->wa_ref);
    }

    // ------------------------------------------------------------ filters

    public function test_filters_and_search_narrow_the_list(): void
    {
        Mail::fake();
        $this->contactForm();
        $this->demoForm();
        $old = EnquiryLead::where('source', 'demo_class')->sole();
        $old->forceFill(['received_at' => now()->subDays(10)])->save();
        $this->actingAs($this->superAdmin());

        $this->get(route('super.enquiries.index', ['range' => 'today']))->assertOk()->assertSee('Anjali Sharma')->assertDontSee('Rohit Mehra');
        $this->get(route('super.enquiries.index', ['range' => 'all', 'source' => 'demo_class']))->assertSee('Rohit Mehra')->assertDontSee('Anjali Sharma');
        $this->get(route('super.enquiries.index', ['range' => 'all', 'city' => 'Noida']))->assertSee('Rohit Mehra')->assertDontSee('Anjali Sharma');
        $this->get(route('super.enquiries.index', ['range' => 'all', 'band' => '9_10']))->assertSee('Anjali Sharma')->assertDontSee('Rohit Mehra');
        $this->get(route('super.enquiries.index', ['range' => 'all', 'subject' => 'Physics']))->assertSee('Rohit Mehra')->assertDontSee('Anjali Sharma');

        $old->forceFill(['followup_status' => 'contacted'])->save();
        $this->get(route('super.enquiries.index', ['range' => 'all', 'stage' => 'new']))->assertSee('Anjali Sharma')->assertDontSee('Rohit Mehra');
        $this->get(route('super.enquiries.index', ['range' => 'all', 'stage' => 'contacted']))->assertSee('Rohit Mehra')->assertDontSee('Anjali Sharma');

        // Search is posted and kept in the session: the phone never goes in a URL.
        $res = $this->post(route('super.enquiries.search'), ['q' => '98111 22233', 'qs' => 'range=all']);
        $res->assertRedirect(route('super.enquiries.index', ['range' => 'all']));
        $this->assertStringNotContainsString('9811122233', (string) $res->headers->get('Location'));
        $this->get(route('super.enquiries.index', ['range' => 'all']))->assertSee('Rohit Mehra')->assertDontSee('Anjali Sharma');

        $this->post(route('super.enquiries.search'), ['q' => 'anjali', 'qs' => 'range=all']);
        $this->get(route('super.enquiries.index', ['range' => 'all']))->assertSee('Anjali Sharma')->assertDontSee('Rohit Mehra');

        $this->post(route('super.enquiries.search'), ['q' => '']);
        $this->get(route('super.enquiries.index', ['range' => 'all']))->assertSee('Anjali Sharma')->assertSee('Rohit Mehra');
    }

    public function test_quick_tabs_and_the_board_view_render(): void
    {
        Mail::fake();
        $this->contactForm();
        $this->actingAs($this->superAdmin());
        $lead = EnquiryLead::sole();
        $lead->forceFill(['priority' => 'hot', 'next_follow_up_at' => now()->subHour()])->save();

        $this->get(route('super.enquiries.index', ['tab' => 'hot']))->assertOk()->assertSee('Anjali Sharma');
        $this->get(route('super.enquiries.index', ['tab' => 'due']))->assertOk()->assertSee('Anjali Sharma');
        $this->get(route('super.enquiries.index', ['tab' => 'lost']))->assertOk()->assertDontSee('Anjali Sharma');
        $this->get(route('super.enquiries.index', ['overdue' => '1']))->assertOk()->assertSee('Anjali Sharma');
        $this->get(route('super.enquiries.index', ['view' => 'board']))->assertOk()->assertSee('Tutors shortlisted')->assertSee('Anjali Sharma');
        $this->get(route('super.enquiries.index', ['range' => 'all', 'sort' => 'priority', 'per' => '50']))->assertOk();
        $this->get(route('super.dashboard'))->assertOk()->assertSee('New enquiries: 1');
    }

    // ------------------------------------------------------------ follow-up

    public function test_status_note_and_owner_are_saved_with_a_timeline(): void
    {
        Mail::fake();
        $this->contactForm();
        $admin = $this->superAdmin();
        $this->actingAs($admin);
        $lead = EnquiryLead::sole();

        $this->get(route('super.enquiries.show', $lead))->assertOk()->assertSee('Anjali Sharma')->assertSee('9876543210')
            ->assertSee('home tuition in Sector 56');

        $this->post(route('super.enquiries.update', $lead), [
            'stage' => 'demo_scheduled', 'priority' => 'hot', 'assigned_to' => (string) $admin->id,
            'next_follow_up_at' => '2026-10-04T18:30', 'demo_at' => '2026-10-05T17:00', 'tags' => 'Fees, callback',
            'note' => 'Spoke to mother; wants a woman tutor.',
        ])->assertRedirect(route('super.enquiries.show', $lead));

        $lead->refresh();
        $this->assertSame('demo_scheduled', $lead->followup_status);
        $this->assertSame('hot', $lead->priority);
        $this->assertSame($admin->id, (int) $lead->assigned_to);
        $this->assertSame('Spoke to mother; wants a woman tutor.', $lead->followup_note);
        $this->assertSame('Desk Admin', $lead->followed_up_by);
        $this->assertNotNull($lead->followed_up_at);
        $this->assertNotNull($lead->first_contacted_at);
        $this->assertSame('2026-10-04 13:00', $lead->next_follow_up_at->format('Y-m-d H:i'), 'IST input stored as UTC');
        $this->assertSame(['fees', 'callback'], $lead->tagList());
        $this->assertSame(1, EnquiryActivity::where('type', 'stage')->where('to_value', 'demo_scheduled')->count());
        $this->assertSame(1, EnquiryActivity::where('type', 'note')->count());

        $this->post(route('super.enquiries.update', $lead), ['stage' => 'lost', 'lost_reason' => 'price']);
        $this->assertSame('price', $lead->fresh()->lost_reason);

        $this->post(route('super.enquiries.update', $lead), ['stage' => 'bogus'])->assertSessionHasErrors('stage');
        $this->post(route('super.enquiries.update', $lead), ['assigned_to' => '999999'])->assertSessionHasErrors('assigned_to');

        $this->get(route('super.enquiries.show', $lead))->assertSee('Spoke to mother');
    }

    public function test_bulk_actions_and_csv_export(): void
    {
        Mail::fake();
        $this->contactForm();
        $this->demoForm();
        $admin = $this->superAdmin();
        $this->actingAs($admin);
        $ids = EnquiryLead::pluck('id')->all();

        $this->post(route('super.enquiries.bulk'), ['ids' => $ids, 'action' => 'assign', 'value' => (string) $admin->id])->assertRedirect();
        $this->assertSame(2, EnquiryLead::where('assigned_to', $admin->id)->count());

        $this->post(route('super.enquiries.bulk'), ['ids' => $ids, 'action' => 'tag', 'tag_value' => 'Batch one'])->assertRedirect();
        $this->assertSame(2, EnquiryLead::where('tags', 'like', '%,batch one,%')->count());

        $this->post(route('super.enquiries.bulk'), ['ids' => [$ids[0]], 'action' => 'spam'])->assertRedirect();
        $this->assertSame('spam', EnquiryLead::find($ids[0])->lost_reason);

        $csv = $this->get(route('super.enquiries.export', ['range' => 'all']))->assertOk()->streamedContent();
        $this->assertStringContainsString('Parent name', $csv);
        $this->assertStringContainsString('9876543210', $csv);
        $this->assertStringContainsString('Rohit Mehra', $csv);
    }

    public function test_same_phone_within_30_days_is_flagged_and_can_be_merged(): void
    {
        Mail::fake();
        $this->demoForm();
        $this->demoForm(['name' => 'Rohit M', 'phone' => '9811122233', 'source_page' => 'https://nxtutors.com/']);
        $this->contactForm(['phone' => '+91 98111 22233', 'email' => 'other@example.com']);

        $this->assertSame(3, EnquiryLead::where('possible_duplicate', true)->count());
        [$first, $second] = EnquiryLead::orderBy('id')->take(2)->get()->all();

        $this->actingAs($this->superAdmin());
        $this->get(route('super.enquiries.show', $second))->assertSee('Merge this one into #' . $first->id);
        $this->post(route('super.enquiries.duplicate', $second), ['of' => $first->id])->assertRedirect();

        $second->refresh();
        $this->assertSame($first->id, (int) $second->duplicate_of_id);
        $this->assertSame('lost', $second->followup_status);
        $this->assertSame('duplicate', $second->lost_reason);
        $this->get(route('super.enquiries.index', ['range' => 'all', 'dup' => '1']))->assertOk()->assertSee('Possible duplicate');
    }

    // ------------------------------------------------------------ emails

    public function test_a_new_enquiry_emails_the_team_without_phone_or_email(): void
    {
        Mail::fake();
        $this->contactForm()->assertRedirect();

        Mail::assertSent(NewEnquiryMail::class, function (NewEnquiryMail $mail) {
            $html = $mail->render();
            $this->assertSame('New enquiry: Class 10 Mathematics in Gurugram', $mail->envelope()->subject);
            $this->assertStringContainsString('Anjali Sharma', $html);
            $this->assertStringContainsString(route('super.enquiries.show', EnquiryLead::sole()->id), $html);
            $this->assertStringNotContainsString('9876543210', $html);
            $this->assertStringNotContainsString('98765', $html);
            $this->assertStringNotContainsString('anjali@example.com', $html);
            $this->assertStringNotContainsString('weekday evenings', $html, 'the free-text message stays on the admin page');

            return $mail->hasTo('alerts@example.com');
        });
        $this->assertNotNull(EnquiryLead::sole()->alert_sent_at);
    }

    public function test_every_form_sends_one_alert_and_the_switch_turns_them_off(): void
    {
        Mail::fake();
        $this->demoForm()->assertOk();
        Mail::assertSent(NewEnquiryMail::class, 1);
        Mail::assertSent(NewEnquiryMail::class, fn ($m) => ! str_contains($m->render(), '9811122233'));

        // A backfill (sync) never emails.
        DB::table('demo_leads')->insert(['name' => 'Old', 'phone' => '9000000009', 'created_at' => now()->subYear(), 'updated_at' => now()->subYear()]);
        app(EnquiryFeed::class)->sync();
        Mail::assertSent(NewEnquiryMail::class, 1);

        config()->set('enquiries.alerts', false);
        $this->contactForm()->assertRedirect();
        Mail::assertSent(NewEnquiryMail::class, 1);
        $this->assertSame(3, EnquiryLead::count());
    }

    public function test_the_form_still_succeeds_when_the_mail_server_fails(): void
    {
        Mail::shouldReceive('to')->andThrow(new \RuntimeException('SMTP down'));

        $this->contactForm()->assertRedirect('/contact')->assertSessionHas('success');
        $this->demoForm()->assertOk()->assertJson(['status' => true]);

        $this->assertSame(1, DB::table('contact_enquiries')->count());
        $this->assertSame(2, EnquiryLead::count());
    }

    public function test_forms_still_work_before_the_migration_has_run(): void
    {
        Mail::fake();
        (require database_path(self::MIGRATION))->down();

        $this->demoForm()->assertOk();
        $this->contactForm()->assertRedirect('/contact')->assertSessionHas('success');
        $this->assertSame(2, DB::table('demo_leads')->count(), 'contact message kept in demo_leads until the table exists');
        Mail::assertNothingSent();

        $this->actingAs($this->superAdmin());
        $this->get(route('super.enquiries.index'))->assertOk()->assertSee('not there yet');
        $this->get(route('super.dashboard'))->assertOk()->assertSee('New enquiries: 0');
    }

    public function test_the_morning_digest_lists_overdue_follow_ups_by_name_only(): void
    {
        Mail::fake();
        $this->contactForm();
        EnquiryLead::sole()->forceFill(['next_follow_up_at' => now()->subHours(3)])->save();

        Artisan::call('enquiries:digest');

        Mail::assertSent(EnquiryDigestMail::class, function (EnquiryDigestMail $mail) {
            $html = $mail->render();
            $this->assertStringContainsString('Anjali Sharma', $html);
            $this->assertStringNotContainsString('9876543210', $html);
            $this->assertStringNotContainsString('anjali@example.com', $html);

            return $mail->hasTo('alerts@example.com');
        });

        config()->set('enquiries.digest', false);
        Mail::fake();
        Artisan::call('enquiries:digest');
        Mail::assertNothingSent();
    }

    public function test_the_summary_command_prints_counts_without_personal_data(): void
    {
        Mail::fake();
        $this->contactForm();
        $this->demoForm();

        $this->assertSame(0, Artisan::call('enquiries:summary', ['--since' => '24h']));
        $out = Artisan::output();
        $this->assertStringContainsString('Contact page', $out);
        $this->assertStringContainsString('Noida', $out);
        $this->assertStringNotContainsString('Anjali', $out);
        $this->assertStringNotContainsString('9876543210', $out);

        $this->assertSame(2, Artisan::call('enquiries:summary', ['--since' => 'yesterday']), 'invalid --since');
    }

    // ------------------------------------------------------------ schema

    public function test_the_migration_goes_down_and_up_again(): void
    {
        $m = require database_path(self::MIGRATION);
        foreach (['contact_enquiries', 'enquiry_leads', 'enquiry_activities'] as $t) {
            $this->assertTrue(Schema::hasTable($t));
        }
        $this->assertTrue(Schema::hasColumns('enquiry_leads', ['followup_status', 'followup_note', 'followed_up_by', 'followed_up_at',
            'assigned_to', 'next_follow_up_at', 'priority', 'lost_reason', 'demo_at', 'shortlisted_tutor_ids', 'possible_duplicate']));

        $m->down();
        foreach (['contact_enquiries', 'enquiry_leads', 'enquiry_activities'] as $t) {
            $this->assertFalse(Schema::hasTable($t));
        }
        $m->up();
        $m->up(); // idempotent
        $this->assertTrue(Schema::hasTable('enquiry_leads'));
    }

    public function test_the_normaliser_reads_messy_input(): void
    {
        $this->assertSame('nursery_kg', EnquiryNormaliser::classBand('UKG'));
        $this->assertSame('1_5', EnquiryNormaliser::classBand('3rd'));
        $this->assertSame('6_8', EnquiryNormaliser::classBand('Class VII'));
        $this->assertSame('11_12', EnquiryNormaliser::classBand('12th'));
        $this->assertSame('college', EnquiryNormaliser::classBand('B.Tech 1st year'));
        $this->assertNull(EnquiryNormaliser::classBand('something'));
        $this->assertSame('IGCSE', EnquiryNormaliser::board('cambridge igcse'));
        $this->assertSame('ISC', EnquiryNormaliser::board('ISC'));
        $this->assertSame('IB', EnquiryNormaliser::board('IB MYP'));
        $this->assertStringStartsWith('State', (string) EnquiryNormaliser::board('HBSE Haryana board'));
        $this->assertSame('jee', EnquiryNormaliser::examGoal('Physics for JEE Mains'));
        $this->assertSame('hybrid', EnquiryNormaliser::mode('home or online'));
        $this->assertSame('female', EnquiryNormaliser::gender('prefer a female tutor'));
        $this->assertSame(['Mathematics', 'Science'], EnquiryNormaliser::subjects('maths, sci'));
        $this->assertSame(EnquiryNormaliser::phoneHash('+91 98765-43210'), EnquiryNormaliser::phoneHash('09876543210'));
        $this->assertSame('https://nxtutors.com/p/x', EnquiryNormaliser::cleanUrl('https://nxtutors.com/p/x?phone=9876543210#top'));
        $place = EnquiryNormaliser::place('Sector 56, Gurgaon');
        $this->assertSame('Gurugram', $place['city']);
        $this->assertSame('Sector 56', $place['area']);
    }
}
