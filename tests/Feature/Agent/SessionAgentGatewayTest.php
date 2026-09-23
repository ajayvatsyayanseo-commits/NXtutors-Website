<?php

declare(strict_types=1);

namespace Tests\Feature\Agent;

use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\Feature\Dashboard\DashboardTestCase;

/**
 * The Session agent's four routes.
 *
 * What matters most: the booking goes through SessionFlow, so every guard the
 * tutor's screen meets applies; a retry books nothing twice; and no response
 * names a student or carries an address.
 */
final class SessionAgentGatewayTest extends DashboardTestCase
{
    private const SECRET = 'session-agent-test-secret';

    private const AGENT = 'session_agent';

    protected function setUp(): void
    {
        parent::setUp();

        config()->set('agent.signing_key', self::SECRET);
        config()->set('agent.allowed_agents', [self::AGENT]);

        Schema::create('register', function ($t): void {
            $t->increments('id');
            foreach (['user_id', 'name', 'phone', 'phone_hash', 'status', 'join_as'] as $column) {
                $t->string($column)->nullable();
            }
            $t->dateTime('deleted_at')->nullable();
        });
        DB::table('register')->insert([
            ['user_id' => self::TUTOR, 'name' => 'Meera', 'join_as' => 'teacher', 'phone_hash' => 'b1b2c3d4e5f60718'],
            ['user_id' => self::STUDENT, 'name' => 'Aarav', 'join_as' => 'student', 'phone_hash' => 'a1b2c3d4e5f60718'],
        ]);
    }

    // ------------------------------------------------------------ booking

    public function test_a_class_is_booked_through_the_site_rules(): void
    {
        $package = $this->fundedPackage();
        $this->makeSession($package, ['starts_at' => now()->subDays(3), 'status' => 'confirmed', 'address' => '12 Rose Lane']);

        $response = $this->book($package, '2026-09-17T11:30:00Z');

        $response->assertCreated()->assertJson([
            'package_id' => $package->id,
            'starts_at' => '2026-09-17T11:30:00Z',
            'planned_min' => 60,
            'status' => 'scheduled',
            'idempotent_replay' => false,
        ]);
        $session = TutoringSession::find($response->json('session_id'));
        $this->assertSame('home', $session->mode);
        $this->assertSame('12 Rose Lane', $session->address, 'The address comes from the last class, not the agent.');
        $this->assertSame('timetable:tt1:20260917T1130Z', $session->schedule_key);
    }

    public function test_a_retry_books_nothing_twice(): void
    {
        $package = $this->fundedPackage();

        $this->book($package, '2026-09-17T11:30:00Z', mode: 'online')->assertCreated();
        $again = $this->book($package, '2026-09-17T11:30:00Z', mode: 'online');

        $again->assertOk()->assertJson(['idempotent_replay' => true]);
        $this->assertSame(1, TutoringSession::count());
    }

    public function test_a_key_reused_for_a_different_class_is_a_conflict(): void
    {
        $package = $this->fundedPackage();

        $this->book($package, '2026-09-17T11:30:00Z', mode: 'online')->assertCreated();
        $this->book($package, '2026-09-18T11:30:00Z', mode: 'online')->assertStatus(409)
            ->assertJson(['error' => 'idempotency_key_reused']);
    }

    public function test_the_package_balance_counts_classes_already_booked(): void
    {
        $package = $this->fundedPackage(['sessions_total' => 1]);

        $this->book($package, '2026-09-17T11:30:00Z', key: 'k-one-aaaa', mode: 'online')->assertCreated();
        $this->book($package, '2026-09-18T11:30:00Z', key: 'k-two-aaaa', mode: 'online')
            ->assertStatus(422)
            ->assertJsonPath('error', 'schedule_refused')
            ->assertJsonStructure(['reasons' => ['package']]);
    }

    public function test_a_first_class_needs_a_mode(): void
    {
        $this->book($this->fundedPackage(), '2026-09-17T11:30:00Z')
            ->assertStatus(422)->assertJson(['error' => 'mode_required']);
    }

    public function test_a_time_without_an_offset_is_refused(): void
    {
        $this->book($this->fundedPackage(), '2026-09-17T17:00:00', mode: 'online')->assertStatus(422);
    }

    public function test_a_class_in_the_past_is_refused(): void
    {
        $this->book($this->fundedPackage(), '2026-09-14T11:30:00Z', mode: 'online')
            ->assertStatus(422)->assertJson(['error' => 'starts_at_in_past']);
    }

    public function test_booking_needs_an_idempotency_key(): void
    {
        $package = $this->fundedPackage();
        $path = "/api/agent/v1/packages/{$package->id}/sessions";
        $body = json_encode(['starts_at' => '2026-09-17T11:30:00Z', 'planned_min' => 60, 'mode' => 'online']);

        $this->call('POST', $path, [], [], [], $this->server('POST', $path, $body), $body)
            ->assertStatus(400);
    }

    public function test_an_unsigned_booking_is_refused(): void
    {
        $package = $this->fundedPackage();

        $this->postJson("/api/agent/v1/packages/{$package->id}/sessions", [
            'starts_at' => '2026-09-17T11:30:00Z', 'planned_min' => 60, 'mode' => 'online',
        ])->assertStatus(401);
        $this->assertSame(0, TutoringSession::count());
    }

    // ------------------------------------------------------------ reads

    public function test_the_package_read_matches_the_booking_guard(): void
    {
        $package = $this->fundedPackage(['sessions_total' => 10, 'sessions_used' => 4, 'expires_at' => now()->addDays(30)]);
        $this->makeSession($package, ['starts_at' => now()->addDays(1)]);
        $this->makeSession($package, ['starts_at' => now()->addDays(2), 'status' => 'cancelled']);

        $this->signedGet("/api/agent/v1/packages/{$package->id}")
            ->assertOk()
            ->assertJson([
                'package_id' => $package->id,
                'tutor_ref' => self::TUTOR,
                'sessions_total' => 10,
                'sessions_used' => 4,
                'booked_ahead' => 1,
                'expires_at' => '2026-10-15T09:00:00Z',
                'scheduled_starts' => ['2026-09-16T09:00:00Z'],
            ])
            ->assertJsonMissingPath('student_user_id');
    }

    public function test_a_tutors_classes_by_start_and_by_confirmation(): void
    {
        $package = $this->fundedPackage();
        $this->makeSession($package, [
            'starts_at' => '2026-08-30 11:30:00', 'status' => 'confirmed',
            'actual_min' => 55, 'confirmed_at' => '2026-09-02 10:00:00',
        ]);
        $this->makeSession($package, ['starts_at' => '2026-09-05 11:30:00', 'status' => 'scheduled']);

        $byStart = $this->signedGet('/api/agent/v1/tutors/'.self::TUTOR.'/sessions?since=2026-09-01T00:00:00Z&until=2026-10-01T00:00:00Z');
        $byStart->assertOk()->assertJsonCount(1, 'sessions');
        $this->assertSame('scheduled', $byStart->json('sessions.0.status'));

        $byConfirm = $this->signedGet('/api/agent/v1/tutors/'.self::TUTOR.'/sessions?since=2026-09-01T00:00:00Z&until=2026-10-01T00:00:00Z&by=confirmed_at');
        $byConfirm->assertOk()->assertJsonPath('sessions.0.actual_min', 55)
            ->assertJsonPath('sessions.0.planned_min', 60)
            ->assertJsonPath('sessions.0.confirmed_at', '2026-09-02T10:00:00Z');
        $this->assertStringNotContainsString(self::STUDENT, $byConfirm->getContent());
    }

    public function test_a_student_is_not_a_tutor(): void
    {
        $this->signedGet('/api/agent/v1/tutors/'.self::STUDENT.'/sessions?since=2026-09-01T00:00:00Z')
            ->assertNotFound();
    }

    public function test_a_long_window_is_refused(): void
    {
        $this->signedGet('/api/agent/v1/tutors/'.self::TUTOR.'/sessions?since=2026-01-01T00:00:00Z&until=2026-09-01T00:00:00Z')
            ->assertStatus(422)->assertJson(['error' => 'window_too_large']);
    }

    public function test_the_day_is_an_indian_day(): void
    {
        $package = $this->fundedPackage();
        // 18:00 UTC on the 16th is 23:30 IST on the 16th: in.
        $in = $this->makeSession($package, ['starts_at' => '2026-09-16 18:00:00']);
        // 19:00 UTC on the 16th is 00:30 IST on the 17th: out.
        $this->makeSession($package, ['starts_at' => '2026-09-16 19:00:00']);
        // 18:40 UTC on the 15th is 00:10 IST on the 16th: in.
        $early = $this->makeSession($package, ['starts_at' => '2026-09-15 18:40:00']);

        $response = $this->signedGet('/api/agent/v1/sessions?date=2026-09-16');

        $response->assertOk();
        $ids = collect($response->json('sessions'))->pluck('session_id')->sort()->values()->all();
        $this->assertSame(collect([$in->id, $early->id])->sort()->values()->all(), $ids);
        $this->assertStringNotContainsString(self::STUDENT, $response->getContent());
    }

    public function test_a_no_show_carries_who_was_absent_and_never_a_guess(): void
    {
        $package = $this->fundedPackage();
        // Earlier today (NOW is 09:00 UTC on the 15th), so a no-show can be recorded.
        $missed = $this->makeSession($package, ['starts_at' => '2026-09-15 03:00:00', 'status' => 'scheduled']);
        $this->sessions()->noShow($missed, 'ops', 'tutor');
        // A no-show with no event behind it: nobody recorded who was absent.
        $this->makeSession($package, ['starts_at' => '2026-09-15 05:00:00', 'status' => 'no_show']);

        $rows = collect($this->signedGet('/api/agent/v1/sessions?date=2026-09-15')->json('sessions'))
            ->keyBy('session_id');

        $this->assertSame('tutor', $rows[$missed->id]['absent_party']);
        $this->assertNull($rows->firstWhere('session_id', '!=', $missed->id)['absent_party']);
    }

    public function test_a_busy_day_is_paged(): void
    {
        $package = $this->fundedPackage(['sessions_total' => 20]);
        foreach (range(0, 4) as $i) {
            $this->makeSession($package, ['starts_at' => '2026-09-16 0'.(3 + $i).':00:00']);
        }

        $first = $this->signedGet('/api/agent/v1/sessions?date=2026-09-16&limit=3');
        $first->assertJsonCount(3, 'sessions');
        $after = $first->json('next_after');
        $this->assertNotNull($after);

        $second = $this->signedGet('/api/agent/v1/sessions?date=2026-09-16&limit=3&after='.$after);
        $second->assertJsonCount(2, 'sessions')->assertJson(['next_after' => null]);
    }

    public function test_a_bad_date_is_refused(): void
    {
        $this->signedGet('/api/agent/v1/sessions?date=2026-02-30')->assertStatus(422);
        $this->signedGet('/api/agent/v1/sessions')->assertStatus(422);
    }

    // ---------------------------------------------------------- helpers

    private function fundedPackage(array $overrides = []): Package
    {
        $package = $this->makePackage($overrides);
        $this->fundWallet($package);

        return $package;
    }

    private function book(Package $package, string $startsAt, ?string $key = null, ?string $mode = null)
    {
        $path = "/api/agent/v1/packages/{$package->id}/sessions";
        $body = json_encode(array_filter([
            'starts_at' => $startsAt,
            'planned_min' => 60,
            'mode' => $mode,
        ], fn ($v) => $v !== null));

        $server = $this->server('POST', $path, $body);
        $server['HTTP_X_IDEMPOTENCY_KEY'] = $key ?? 'timetable:tt1:20260917T1130Z';

        return $this->call('POST', $path, [], [], [], $server, $body);
    }

    private function signedGet(string $path)
    {
        return $this->call('GET', $path, [], [], [], $this->server('GET', $path, ''));
    }

    /** @return array<string, string> */
    private function server(string $method, string $path, string $body): array
    {
        $timestamp = (string) time();
        $canonical = implode("\n", [$method, $path, $timestamp, hash('sha256', $body)]);

        return [
            'HTTP_X_NXT_SIGNATURE' => 'v1='.hash_hmac('sha256', $canonical, self::SECRET),
            'HTTP_X_NXT_TIMESTAMP' => $timestamp,
            'HTTP_X_NXT_AGENT' => self::AGENT,
            'HTTP_ACCEPT' => 'application/json',
            'CONTENT_TYPE' => 'application/json',
        ];
    }
}
