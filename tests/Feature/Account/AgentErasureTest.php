<?php

namespace Tests\Feature\Account;

use App\Models\Register;
use App\Services\AccountLifecycle;
use App\Services\AgentErasure;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

/**
 * Erasing an account here must also erase the person on the WhatsApp side
 * (Lead Intake and the onboarding agent), and keep trying until it is done.
 */
class AgentErasureTest extends TestCase
{
    use RefreshDatabase;

    private const KEY = 'shared-agent-key';

    private const LEAD_INTAKE = 'https://lead-intake.example';

    protected function setUp(): void
    {
        parent::setUp();
        Schema::create('register', function ($t): void {
            $t->increments('id');
            foreach (['user_id', 'name', 'email', 'phone', 'phone_hash', 'password', 'c_password', 'status', 'join_as',
                'avatar', 'frount_image', 'back_image', 'city'] as $c) {
                $t->string($c)->nullable();
            }
        });
        (require database_path('migrations/2026_09_23_090000_add_visibility_and_deletion_to_register.php'))->up();
        (require app_path('NxtAi/Database/Migrations/2026_10_03_100000_create_agent_erasure_requests_table.php'))->up();

        config()->set('agent.signing_key', self::KEY);
        config()->set('agent.lead_intake_url', self::LEAD_INTAKE);

        DB::table('register')->insert([
            'user_id' => '2188', 'name' => 'Khushi Sarswat', 'email' => 'k@example.com', 'phone' => '9310383446',
            'status' => 'p', 'join_as' => 'teacher', 'city' => 'Gurugram',
            'avatar' => 'https://onboarding.nxtutors.com/media/avatar/tutor_20261002_ab12.jpg',
            'frount_image' => 'whatsapp_doc_20261002_cd34.jpg', 'back_image' => null,
        ]);
    }

    private function purge(): void
    {
        app(AccountLifecycle::class)->purge(Register::where('user_id', '2188')->firstOrFail());
    }

    public function test_purge_tells_lead_intake_with_a_valid_signature(): void
    {
        Http::fake([self::LEAD_INTAKE.'/*' => Http::response(['status' => 'erased'], 200)]);

        $this->purge();

        Http::assertSent(function (Request $r): bool {
            $body = $r->body();
            $canonical = implode("\n", ['POST', AgentErasure::PATH, $r->header('X-Nxt-Timestamp')[0], hash('sha256', $body)]);
            $data = json_decode($body, true);

            return $r->url() === self::LEAD_INTAKE.AgentErasure::PATH
                && $r->header('X-Nxt-Signature')[0] === 'v1='.hash_hmac('sha256', $canonical, self::KEY)
                && $data['phones'] === ['9310383446']
                // file names only, never URLs or paths
                && $data['files'] === ['tutor_20261002_ab12.jpg', 'whatsapp_doc_20261002_cd34.jpg'];
        });

        $row = DB::table('agent_erasure_requests')->first();
        $this->assertNotNull($row->done_at);
        $this->assertNull($row->phones, 'the number is forgotten here too once confirmed');
        $this->assertNull($row->files);
    }

    public function test_an_unconfirmed_erasure_is_retried_by_the_purge_job(): void
    {
        Http::fakeSequence(self::LEAD_INTAKE.'/*')->push(['detail' => 'retry'], 502)->push(['status' => 'erased'], 200);

        $this->purge();
        $row = DB::table('agent_erasure_requests')->first();
        $this->assertNull($row->done_at);
        $this->assertSame('http_502', $row->last_error);
        $this->assertSame('["9310383446"]', $row->phones);

        Artisan::call('accounts:purge-deleted');

        $this->assertNotNull(DB::table('agent_erasure_requests')->first()->done_at);
    }

    public function test_the_website_erasure_never_depends_on_the_agents(): void
    {
        Http::fake(fn () => throw new \RuntimeException('network down'));

        $this->purge();

        $this->assertSame('Deleted user', DB::table('register')->where('user_id', '2188')->value('name'));
        $this->assertNull(DB::table('agent_erasure_requests')->first()->done_at);
    }

    public function test_without_a_key_it_waits_instead_of_sending_unsigned(): void
    {
        config()->set('agent.signing_key', '');
        Http::fake();

        $this->purge();

        Http::assertNothingSent();
        $this->assertSame('not_configured', DB::table('agent_erasure_requests')->first()->last_error);
    }
}
