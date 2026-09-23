<?php

declare(strict_types=1);

namespace Tests\Feature\Agent;

use App\Nxt\Dashboard\Models\AppNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Tests\TestCase;

/**
 * The Student agent's four routes.
 *
 * The property worth most here is that `absent_party` is never invented. The
 * agent excludes a miss it cannot attribute rather than counting it against a
 * child, and that only holds if this side never fills the gap with a guess —
 * so most of these tests are about a tutor's absence, and about silence.
 */
final class StudentAgentGatewayTest extends TestCase
{
    use RefreshDatabase;

    private const SECRET = 'student-agent-test-secret';

    private const AGENT = 'student_agent';

    private const STUDENT = 'S-77';

    private const TUTOR = 'T-12';

    protected function setUp(): void
    {
        parent::setUp();

        config()->set('agent.signing_key', self::SECRET);
        config()->set('agent.allowed_agents', [self::AGENT]);

        // `register` lives only in the production dump, as in every other
        // feature test that touches it.
        Schema::create('register', function ($t): void {
            $t->increments('id');
            foreach (['user_id', 'name', 'email', 'phone', 'phone_hash', 'password',
                'status', 'join_as', 'city'] as $column) {
                $t->string($column)->nullable();
            }
            // Added by a later migration that only runs against a real dump.
            $t->dateTime('deleted_at')->nullable();
        });

        // Both rows carry the same keys: a multi-row insert with differing
        // columns is a hard error on SQLite ("all VALUES must have the same
        // number of terms") even though MySQL would accept it.
        DB::table('register')->insert([
            ['user_id' => self::STUDENT, 'name' => 'Aarav', 'join_as' => 'student', 'status' => 't', 'phone_hash' => 'a1b2c3d4e5f60718'],
            ['user_id' => self::TUTOR, 'name' => 'Meera', 'join_as' => 'teacher', 'status' => 't', 'phone_hash' => null],
        ]);
    }

    /** @return array<string,string> */
    private function signed(string $method, string $path, string $body = ''): array
    {
        $timestamp = time();
        $canonical = implode("\n", [$method, $path, (string) $timestamp, hash('sha256', $body)]);

        return [
            'X-Nxt-Signature' => 'v1='.hash_hmac('sha256', $canonical, self::SECRET),
            'X-Nxt-Timestamp' => (string) $timestamp,
            'X-Nxt-Agent' => self::AGENT,
            'Accept' => 'application/json',
        ];
    }

    /**
     * `get()`, not `getJson()`.
     *
     * `getJson` serialises an empty payload to `[]` and sends it as the body
     * even on a GET, which no real agent does — the agent signs `sha256(b"")`.
     * Signing what the framework happens to send would pin a test artefact
     * instead of the production contract, and every one of these would pass
     * against a middleware that had stopped verifying reads at all.
     */
    private function agentGet(string $path): \Illuminate\Testing\TestResponse
    {
        return $this->get($path, $this->signed('GET', $path));
    }

    private function makeSession(string $id, string $startsAt, string $status, ?string $topics = null): void
    {
        DB::table('nxt_sessions')->insert([
            'id' => $id,
            'student_user_id' => self::STUDENT,
            'tutor_user_id' => self::TUTOR,
            'subject' => 'Mathematics',
            'type' => 'regular',
            'mode' => 'home',
            'starts_at' => $startsAt,
            'planned_min' => 60,
            'status' => $status,
            'topics' => $topics,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    private function attendanceEvent(string $sessionId, string $kind, string $method, ?array $payload = null): void
    {
        DB::table('nxt_attendance_events')->insert([
            'id' => (string) Str::ulid(),
            'session_id' => $sessionId,
            'kind' => $kind,
            'actor_user_id' => self::TUTOR,
            'method' => $method,
            'server_time' => now(),
            'payload' => $payload === null ? null : json_encode($payload),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    // ------------------------------------------------------------ attendance

    public function test_attendance_returns_sessions_in_the_window(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed');
        $this->makeSession('s2', '2026-09-05 10:00:00', 'confirmed');
        $this->makeSession('s3', '2026-12-01 10:00:00', 'scheduled');

        $response = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z&until=2026-10-01T00:00:00Z');

        $response->assertOk();
        $this->assertSame(['s1', 's2'], array_column($response->json('sessions'), 'session_id'));
    }

    public function test_a_student_no_show_reports_the_student_as_the_absent_party(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'no_show');
        // SessionFlow puts the party in `method` and in the payload.
        $this->attendanceEvent('s1', 'no_show', 'student', ['party' => 'student']);

        $session = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->json('sessions.0');

        $this->assertSame('student', $session['absent_party']);
    }

    public function test_a_tutor_no_show_is_never_reported_as_the_students(): void
    {
        // The single most damaging thing this endpoint could get wrong: it
        // would make a tutor who overslept count against a child's record.
        $this->makeSession('s1', '2026-09-01 10:00:00', 'no_show');
        $this->attendanceEvent('s1', 'no_show', 'tutor', ['party' => 'tutor']);

        $session = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->json('sessions.0');

        $this->assertSame('tutor', $session['absent_party']);
    }

    public function test_a_no_show_with_no_recorded_party_reports_null_rather_than_a_guess(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'no_show');
        $this->attendanceEvent('s1', 'no_show', 'system');

        $session = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->json('sessions.0');

        $this->assertNull($session['absent_party']);
    }

    public function test_a_no_show_with_no_attendance_event_at_all_reports_null(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'no_show');

        $session = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->json('sessions.0');

        $this->assertNull($session['absent_party']);
        $this->assertNull($session['method']);
    }

    public function test_the_party_is_not_leaked_into_the_method_field(): void
    {
        // `method` holds "student" on a no-show row. Passing it through would
        // tell the agent the absence was verified by a method that does not
        // exist.
        $this->makeSession('s1', '2026-09-01 10:00:00', 'no_show');
        $this->attendanceEvent('s1', 'no_show', 'student', ['party' => 'student']);

        $session = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->json('sessions.0');

        $this->assertNull($session['method']);
    }

    public function test_the_verification_method_is_the_first_check_in(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed');
        $this->attendanceEvent('s1', 'check_in', 'parent_otp');
        $this->attendanceEvent('s1', 'check_out', 'manual');

        $session = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->json('sessions.0');

        $this->assertSame('parent_otp', $session['method']);
    }

    public function test_a_missing_since_is_rejected(): void
    {
        $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance')
            ->assertStatus(422)
            ->assertJson(['error' => 'since_required']);
    }

    public function test_an_oversized_window_is_rejected_rather_than_served(): void
    {
        $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2000-01-01T00:00:00Z')
            ->assertStatus(422)
            ->assertJson(['error' => 'window_too_large']);
    }

    public function test_a_deleted_account_stops_being_a_subject_of_analytics_at_once(): void
    {
        // Withdrawing consent has to take effect now, not when the purge job
        // next runs. The row and its sessions still exist; the agent may no
        // longer read them.
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed');
        DB::table('register')->where('user_id', self::STUDENT)->update(['deleted_at' => now()]);

        $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->assertStatus(404);
    }

    public function test_a_hidden_profile_is_still_tracked(): void
    {
        // Hiding is about a public listing. A family who hid their profile did
        // not ask for their child's attendance to stop being recorded.
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed');
        DB::table('register')->where('user_id', self::STUDENT)->update(['status' => 'f']);

        $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z')
            ->assertOk();
    }

    public function test_an_unknown_student_is_a_404_not_an_empty_window(): void
    {
        // An empty list would read as "this child has never had a class",
        // which is a very different thing to say to a parent.
        $this->agentGet('/api/agent/v1/students/S-NOPE/attendance?since=2026-09-01T00:00:00Z')
            ->assertStatus(404);
    }

    public function test_a_hashed_student_ref_resolves_to_the_same_student(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed');

        $this->agentGet('/api/agent/v1/students/stu_a1b2c3d4e5f60718/attendance?since=2026-09-01T00:00:00Z')
            ->assertOk()
            ->assertJsonPath('sessions.0.session_id', 's1');
    }

    public function test_no_phone_number_appears_in_an_attendance_response(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed');

        $response = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/attendance?since=2026-09-01T00:00:00Z');

        // assertOk first, on purpose: a 401 body contains no phone number
        // either, so without this the assertion below passes while proving
        // nothing at all.
        $response->assertOk();
        $this->assertStringNotContainsString('phone', (string) $response->getContent());
    }

    // ---------------------------------------------------------- session logs

    public function test_session_logs_return_tutor_typed_topics_as_free_text(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed', json_encode(['Arithmetic progressions', 'Sum of n terms']));

        $log = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/session-logs?since=2026-09-01T00:00:00Z')
            ->json('logs.0');

        $this->assertSame(['Arithmetic progressions', 'Sum of n terms'], $log['free_text']);
        // Present and empty until the check-out form has a taxonomy picker, so
        // populating it later is additive rather than a new shape.
        $this->assertSame([], $log['topic_ids']);
    }

    public function test_a_cancelled_class_has_no_topic_log(): void
    {
        // Counting one as covered would credit a family for a lesson nobody
        // gave.
        $this->makeSession('s1', '2026-09-01 10:00:00', 'cancelled', json_encode(['Trigonometry']));
        $this->makeSession('s2', '2026-09-02 10:00:00', 'scheduled', json_encode(['Circles']));

        $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/session-logs?since=2026-09-01T00:00:00Z')
            ->assertOk()
            ->assertJsonCount(0, 'logs');
    }

    public function test_blank_topics_are_dropped_rather_than_returned_as_empty_strings(): void
    {
        $this->makeSession('s1', '2026-09-01 10:00:00', 'confirmed', json_encode(['Circles', '', '   ']));

        $log = $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/session-logs?since=2026-09-01T00:00:00Z')
            ->json('logs.0');

        $this->assertSame(['Circles'], $log['free_text']);
    }

    // ----------------------------------------------------------------- goals

    public function test_goals_return_the_free_text_the_family_typed(): void
    {
        DB::table('nxt_leads')->insert([
            'id' => (string) Str::ulid(),
            'student_user_id' => self::STUDENT,
            'source' => 'web',
            'class_level' => 'Class 10',
            'board' => 'cbse',
            'subject' => 'Mathematics',
            'subjects' => json_encode(['Mathematics', 'Science']),
            'note' => 'Needs help with trigonometry before the March board exam.',
            'mode' => 'home',
            'status' => 'hired',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/goals')
            ->assertOk()
            ->assertJsonPath('raw_goals_text', 'Needs help with trigonometry before the March board exam.')
            ->assertJsonPath('level', 'Class 10')
            ->assertJsonPath('board', 'cbse')
            ->assertJsonPath('subjects', ['Mathematics', 'Science'])
            ->assertJsonPath('source', 'nxt_leads.note');
    }

    public function test_a_student_with_no_lead_is_not_an_error(): void
    {
        // "No goals recorded" and "lookup failed" are different facts, and a
        // 404 here would say the second when the first is true.
        $this->agentGet('/api/agent/v1/students/'.self::STUDENT.'/goals')
            ->assertOk()
            ->assertJsonPath('raw_goals_text', null)
            ->assertJsonPath('source', null);
    }

    // ---------------------------------------------------------------- alerts

    private function postAlert(string $key, array $body = []): \Illuminate\Testing\TestResponse
    {
        $path = '/api/agent/v1/students/'.self::STUDENT.'/alerts';
        $payload = $body + [
            'type' => 'attendance',
            'severity' => 'warning',
            'reason' => '2 classes in a row were missed by the student.',
            'rule' => 'consecutive_student_misses',
        ];
        $encoded = json_encode($payload);

        return $this->postJson($path, $payload, $this->signed('POST', $path, (string) $encoded) + [
            'X-Idempotency-Key' => $key,
        ]);
    }

    public function test_an_alert_becomes_an_in_app_notification(): void
    {
        $this->postAlert('student:S-77:alert:attendance:2026-09')->assertStatus(201);

        $notification = AppNotification::query()->sole();
        $this->assertSame(self::STUDENT, $notification->user_id);
        $this->assertSame('student.alert.raised', $notification->event);
        $this->assertSame('in_app', $notification->channel);
        $this->assertSame('2 classes in a row were missed by the student.', $notification->body);
    }

    public function test_the_same_alert_twice_is_one_notification(): void
    {
        // The agent recomputes on every session event and notices the same two
        // misses repeatedly. A family must not be told three times.
        $key = 'student:S-77:alert:attendance:2026-09';
        $this->postAlert($key)->assertStatus(201);
        $this->postAlert($key)->assertOk()->assertJsonPath('idempotent_replay', true);

        $this->assertSame(1, AppNotification::query()->count());
    }

    public function test_a_different_window_is_a_different_alert(): void
    {
        $this->postAlert('student:S-77:alert:attendance:2026-09')->assertStatus(201);
        $this->postAlert('student:S-77:alert:attendance:2026-10')->assertStatus(201);

        $this->assertSame(2, AppNotification::query()->count());
    }

    public function test_an_alert_without_an_idempotency_key_is_refused(): void
    {
        $path = '/api/agent/v1/students/'.self::STUDENT.'/alerts';
        $payload = ['type' => 'attendance', 'severity' => 'warning', 'reason' => 'x'];
        $encoded = (string) json_encode($payload);

        $this->postJson($path, $payload, $this->signed('POST', $path, $encoded))
            ->assertStatus(400)
            ->assertJson(['error' => 'idempotency_key_required']);
    }

    public function test_an_unknown_alert_type_is_rejected(): void
    {
        $this->postAlert('k1', ['type' => 'billing'])->assertStatus(422);
    }

    public function test_a_critical_alert_is_titled_so_a_parent_can_see_it_matters(): void
    {
        $this->postAlert('k1', ['severity' => 'critical'])->assertStatus(201);

        $this->assertStringContainsString('needs attention', (string) AppNotification::query()->sole()->title);
    }
}
