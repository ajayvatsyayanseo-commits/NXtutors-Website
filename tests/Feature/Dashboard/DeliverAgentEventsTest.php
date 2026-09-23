<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\OutboxEvent;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

/**
 * Class events pushed to the Session agent, once each, signed, without the
 * student, and never at the expense of the family's own notifications.
 */
class DeliverAgentEventsTest extends DashboardTestCase
{
    private const URL = 'https://session-agent.example.test/v1/events';

    private const SECRET = 'events-test-secret';

    protected function setUp(): void
    {
        parent::setUp();

        config()->set('nxt-dashboard.agent_events.subscribers.session_agent.url', self::URL);
        config()->set('nxt-dashboard.agent_events.subscribers.session_agent.secret', self::SECRET);
    }

    public function test_a_confirmed_class_reaches_the_agent_signed_and_without_the_student(): void
    {
        Http::fake([self::URL => Http::response(['ok' => true], 202)]);
        $event = $this->event('session.confirmed');

        $this->artisan('nxt-dashboard:deliver-agent-events')->assertSuccessful();

        Http::assertSentCount(1);
        Http::assertSent(function (Request $request) use ($event): bool {
            $body = $request->body();
            $canonical = implode("\n", ['POST', '/v1/events', $request->header('X-Nxt-Timestamp')[0], hash('sha256', $body)]);
            $decoded = json_decode($body, true);

            return hash_equals('v1='.hash_hmac('sha256', $canonical, self::SECRET), $request->header('X-Nxt-Signature')[0])
                && $decoded['event_id'] === $event->id
                && $decoded['event'] === 'session.confirmed'
                && $decoded['payload']['actual_min'] === 55
                && ! array_key_exists('student_user_id', $decoded['payload']);
        });
        $this->assertNotNull(DB::table('nxt_agent_deliveries')->value('delivered_at'));
    }

    public function test_a_delivered_event_is_not_sent_again(): void
    {
        Http::fake([self::URL => Http::response([], 200)]);
        $this->event('session.confirmed');

        $this->artisan('nxt-dashboard:deliver-agent-events');
        $this->artisan('nxt-dashboard:deliver-agent-events');

        Http::assertSentCount(1);
    }

    public function test_a_failure_backs_off_and_is_retried(): void
    {
        Http::fakeSequence(self::URL)->push([], 503)->push([], 200);
        $this->event('session.confirmed');

        $this->artisan('nxt-dashboard:deliver-agent-events');
        $this->assertSame(1, (int) DB::table('nxt_agent_deliveries')->value('attempts'));
        $this->assertSame(503, (int) DB::table('nxt_agent_deliveries')->value('last_status'));

        // Inside the backoff: not tried.
        $this->artisan('nxt-dashboard:deliver-agent-events');
        Http::assertSentCount(1);

        $this->travel(2)->minutes();
        $this->artisan('nxt-dashboard:deliver-agent-events');
        Http::assertSentCount(2);
        $this->assertNotNull(DB::table('nxt_agent_deliveries')->value('delivered_at'));
    }

    public function test_an_agent_being_down_never_touches_the_familys_relay(): void
    {
        Http::fake([self::URL => Http::response([], 500)]);
        $event = $this->event('session.confirmed');

        $this->artisan('nxt-dashboard:deliver-agent-events');

        $fresh = $event->fresh();
        $this->assertNull($fresh->published_at);
        $this->assertSame(0, (int) $fresh->attempts);
    }

    public function test_events_the_agent_did_not_subscribe_to_are_not_sent(): void
    {
        Http::fake();
        $this->event('lead.created');

        $this->artisan('nxt-dashboard:deliver-agent-events');

        Http::assertNothingSent();
    }

    public function test_with_no_url_it_is_off(): void
    {
        config()->set('nxt-dashboard.agent_events.subscribers.session_agent.url', null);
        Http::fake();
        $this->event('session.confirmed');

        $this->artisan('nxt-dashboard:deliver-agent-events')->assertSuccessful();

        Http::assertNothingSent();
        $this->assertSame(0, DB::table('nxt_agent_deliveries')->count());
    }

    public function test_old_history_is_not_replayed_to_a_new_agent(): void
    {
        Http::fake();
        $old = $this->event('session.confirmed');
        $old->forceFill(['created_at' => now()->subDays(10)])->save();

        $this->artisan('nxt-dashboard:deliver-agent-events');

        Http::assertNothingSent();
    }

    public function test_a_real_schedule_produces_a_deliverable_event(): void
    {
        Http::fake([self::URL => Http::response([], 202)]);
        $package = $this->makePackage();
        $this->fundWallet($package);
        $this->sessions()->schedule($package, now()->addDay(), 60, 'online');

        $this->artisan('nxt-dashboard:deliver-agent-events');

        Http::assertSent(fn (Request $r): bool => json_decode($r->body(), true)['payload']['package_id'] === $package->id
            && json_decode($r->body(), true)['payload']['planned_min'] === 60);
    }

    private function event(string $name): OutboxEvent
    {
        return OutboxEvent::create([
            'topic' => 'sessions',
            'event' => $name,
            'payload' => [
                'session_id' => '01J0000000000000000000000S',
                'package_id' => '01J0000000000000000000000P',
                'student_user_id' => self::STUDENT,
                'tutor_user_id' => self::TUTOR,
                'status' => 'confirmed',
                'planned_min' => 60,
                'actual_min' => 55,
            ],
        ]);
    }
}
