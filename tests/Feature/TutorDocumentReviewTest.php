<?php

namespace Tests\Feature;

use App\Models\Register;
use App\Services\TutorDocuments;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/**
 * The admin's ID review: the photos a tutor sent on WhatsApp are shown only to
 * a signed-in admin, fetched privately through Lead Intake, and approving makes
 * the tutor public and Verified.
 */
class TutorDocumentReviewTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private int $id;

    protected function setUp(): void
    {
        parent::setUp();
        $this->createLegacySchema();
        config()->set('agent.signing_key', 'shared-agent-key');
        config()->set('agent.lead_intake_url', 'https://lead-intake.example');
        config()->set('agent.hash_pepper', 'review-test-pepper');
        $this->id = DB::table('register')->insertGetId([
            'user_id' => '2188', 'name' => 'Khushi Sarswat', 'email' => 'k@example.com', 'phone' => '9310383446',
            'city' => 'Gurugram', 'join_as' => 'teacher', 'status' => 'p', 'otp_status' => 't',
            'document_type' => 'Aadhaar', 'document_number' => '1234 5678 9012',
            'frount_image' => 'whatsapp_doc_20261002_ab12.jpg', 'back_image' => null,
        ]);
    }

    public function test_a_visitor_cannot_open_an_id_photo(): void
    {
        Http::fake();
        $this->get(route('super.teacher.document', [$this->id, 'front']))->assertRedirect();
        Http::assertNothingSent();
    }

    public function test_the_admin_sees_the_whatsapp_id_photo_through_lead_intake(): void
    {
        $this->withoutMiddleware();
        Http::fake(['https://lead-intake.example/*' => Http::response("\xff\xd8\xffID", 200, ['Content-Type' => 'image/jpeg'])]);

        $this->get(route('super.teacher.document', [$this->id, 'front']))
            ->assertOk()
            ->assertHeader('Content-Type', 'image/jpeg')
            ->assertHeader('Cache-Control', 'no-store, private');

        Http::assertSent(function (Request $r): bool {
            $canonical = implode("\n", ['POST', TutorDocuments::PATH, $r->header('X-Nxt-Timestamp')[0], hash('sha256', $r->body())]);

            return $r->url() === 'https://lead-intake.example'.TutorDocuments::PATH
                && json_decode($r->body(), true) === ['name' => 'whatsapp_doc_20261002_ab12.jpg']
                && $r->header('X-Nxt-Signature')[0] === 'v1='.hash_hmac('sha256', $canonical, 'shared-agent-key');
        });
    }

    public function test_a_side_that_was_not_sent_is_not_found(): void
    {
        $this->withoutMiddleware();
        Http::fake();
        $this->get(route('super.teacher.document', [$this->id, 'back']))->assertNotFound();
        Http::assertNothingSent();
    }

    public function test_approve_makes_the_tutor_public_with_a_phone_hash(): void
    {
        $this->withoutMiddleware();

        $this->post(route('super.teacher.approve', $this->id))
            ->assertRedirect(route('super.teacher.edit', $this->id));

        $tutor = Register::findOrFail($this->id);
        $this->assertSame('t', $tutor->status);
        $this->assertNotEmpty($tutor->phone_hash);
    }

    public function test_the_edit_page_shows_the_review_panel(): void
    {
        // Only the sign-in and role checks: the page needs the session's $errors.
        $this->withoutMiddleware([\Illuminate\Auth\Middleware\Authenticate::class, \Spatie\Permission\Middleware\RoleMiddleware::class]);
        $html = $this->get(route('super.teacher.edit', $this->id))->assertOk()->getContent();

        $this->assertStringContainsString('ID verification', $html);
        $this->assertStringContainsString('Pending review', $html);
        $this->assertStringContainsString('Approve and publish', $html);
        $this->assertStringContainsString(route('super.teacher.document', [$this->id, 'front']), $html);
        $this->assertStringContainsString('Not sent', $html);
    }
}
