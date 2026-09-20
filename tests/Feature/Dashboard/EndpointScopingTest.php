<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\LeadView;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\StudyPlan;
use App\Nxt\Dashboard\Models\StudyPlanItem;
use App\Nxt\Dashboard\Models\TutorMatch;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/**
 * The IDOR suite the brief makes mandatory per endpoint (§12.2), and §16.4
 * lists among the things never to drop.
 *
 * The money suites prove that one family's ledger is unreachable from another
 * family's user id — but every test in them calls a service directly, so
 * nothing exercised the layer where the user id actually comes from a request.
 * The per-owner clause in each controller was the only thing standing between a
 * guessed session id and a stranger's class being confirmed, which releases
 * that stranger's hold and pays their tutor.
 *
 * Three rules, from §12.2:
 *
 *  1. a resource owned by somebody else is **404**, never 403 — a 403 confirms
 *     the row exists, which is itself the leak on a marketplace where the id
 *     identifies a competitor's booking;
 *  2. a resource owned by the caller is never 403 — the positive control, so a
 *     suite that refuses everything cannot pass;
 *  3. an endpoint belonging to the other role is **403**, because the role is
 *     not a secret.
 *
 * The last test in the file enumerates every registered dashboard route that
 * takes an id and fails if one of them has no case here, so a new endpoint
 * cannot be added without deciding what it does with somebody else's id.
 */
class EndpointScopingTest extends DashboardTestCase
{
    private const OURS = 'STU-OURS';

    private const THEIRS = 'STU-THEIRS';

    private const OUR_TUTOR = 'TUT-OURS';

    private const THEIR_TUTOR = 'TUT-THEIRS';

    /** Their rows: the ids we try to reach from our session. */
    private array $theirs = [];

    /** Our own rows, for the positive control. */
    private array $ours = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->createRegisterTable();

        foreach ([self::OURS => 'student', self::THEIRS => 'student', self::OUR_TUTOR => 'teacher', self::THEIR_TUTOR => 'teacher'] as $userId => $joinAs) {
            $this->registerUser($userId, $joinAs);
        }

        $this->ours = $this->fixturesFor(self::OURS, self::OUR_TUTOR);
        $this->theirs = $this->fixturesFor(self::THEIRS, self::THEIR_TUTOR);
    }

    // ------------------------------------------------------- family endpoints

    /**
     * Every student endpoint that takes an id, called with another family's id
     * from our own session. The writes are the expensive half: confirming a
     * stranger's class releases their hold and pays their tutor.
     */
    public function test_a_family_cannot_reach_another_familys_records(): void
    {
        foreach ($this->studentCases($this->theirs) as $name => [$method, $uri, $payload]) {
            $this->assertHidden($method, $uri, self::OURS, $payload, $name);
        }
    }

    /** The positive control: the same endpoints, against our own ids. */
    public function test_a_family_can_reach_their_own_records(): void
    {
        foreach ($this->studentCases($this->ours) as $name => [$method, $uri, $payload]) {
            $this->assertNotRefusedAsSomebodyElses($method, $uri, self::OURS, $payload, $name);
        }
    }

    // -------------------------------------------------------- tutor endpoints

    public function test_a_tutor_cannot_reach_another_tutors_records(): void
    {
        foreach ($this->tutorCases($this->theirs) as $name => [$method, $uri, $payload]) {
            $this->assertHidden($method, $uri, self::OUR_TUTOR, $payload, $name);
        }
    }

    public function test_a_tutor_can_reach_their_own_records(): void
    {
        foreach ($this->tutorCases($this->ours) as $name => [$method, $uri, $payload]) {
            $this->assertNotRefusedAsSomebodyElses($method, $uri, self::OUR_TUTOR, $payload, $name);
        }
    }

    // ----------------------------------------------------------------- roles

    /**
     * A role mismatch is a 403 and says so. The role is not a secret — the
     * account knows which one it is — and telling the app plainly is what lets
     * it send the person to their own dashboard instead of a dead end.
     */
    public function test_each_role_is_refused_the_other_roles_endpoints(): void
    {
        foreach ($this->tutorCases($this->ours) as $name => [$method, $uri, $payload]) {
            $this->assertRoleRefused($method, $uri, self::OURS, $payload, $name);
        }

        foreach ($this->studentCases($this->ours) + $this->sharedStudentCases($this->ours) as $name => [$method, $uri, $payload]) {
            $this->assertRoleRefused($method, $uri, self::OUR_TUTOR, $payload, $name);
        }
    }

    /** No session, no dashboard: every one of these is 401 before anything else. */
    public function test_an_anonymous_request_is_refused_everywhere(): void
    {
        $cases = $this->studentCases($this->ours) + $this->sharedStudentCases($this->ours) + $this->tutorCases($this->ours);

        foreach ($cases as $name => [$method, $uri, $payload]) {
            $this->json($method, $uri, $payload)
                ->assertStatus(401)
                ->assertJsonPath('errors.0.code', 'unauthenticated');
        }
    }

    /**
     * Notifications belong to a user rather than to a role, so they are the one
     * id-bearing endpoint both roles share — and the one where "mark as read"
     * would otherwise be writable against anybody's row.
     */
    public function test_a_notification_belonging_to_somebody_else_cannot_be_marked_read(): void
    {
        $theirs = AppNotification::create([
            'user_id' => self::THEIRS,
            'role' => 'student',
            'event' => 'session.reminder',
            'title' => 'Your class is tomorrow',
        ]);

        $this->asUser(self::OURS)
            ->patchJson('/api/dashboard/v1/notifications/'.$theirs->id.'/read')
            ->assertStatus(404);

        $this->assertNull($theirs->fresh()->read_at, 'Somebody else marked their notification read.');
    }

    /**
     * §12.2 grows by itself: one case per endpoint, enforced. Any dashboard
     * route with an id in its path has to appear above, or this fails and the
     * person adding the endpoint has to say what it does with a stranger's id.
     */
    public function test_every_dashboard_route_that_takes_an_id_has_a_case_in_this_file(): void
    {
        $covered = collect(
            $this->studentCases($this->ours)
            + $this->sharedStudentCases($this->ours)
            + $this->tutorCases($this->ours)
        )
            ->map(fn (array $case): string => $case[0].' '.$this->toPattern($case[1]))
            ->merge(['PATCH api/dashboard/v1/notifications/{id}/read'])
            ->unique()
            ->all();

        $withIds = collect(Route::getRoutes()->getRoutes())
            ->filter(fn ($route): bool => str_starts_with($route->uri(), 'api/dashboard/v1'))
            ->filter(fn ($route): bool => str_contains($route->uri(), '{'))
            ->map(fn ($route): string => $route->methods()[0].' '.$route->uri())
            ->values()
            ->all();

        $uncovered = array_values(array_diff($withIds, $covered));

        $this->assertSame([], $uncovered, 'These endpoints take an id and have no scoping case: '.implode(', ', $uncovered));
    }

    // --------------------------------------------------------------- the cases

    /**
     * @return array<string,array{0:string,1:string,2:array}>
     */
    private function studentCases(array $f): array
    {
        $base = '/api/dashboard/v1';

        return [
            'read a class' => ['GET', $base.'/sessions/'.$f['session'], []],
            'read the cancellation policy' => ['GET', $base.'/sessions/'.$f['confirmable'].'/cancellation-policy', []],
            'confirm a class' => ['POST', $base.'/sessions/'.$f['confirmable'].'/confirm', []],
            'dispute a class' => ['POST', $base.'/sessions/'.$f['confirmable'].'/dispute', ['reason' => 'tutor_late']],
            'cancel a class' => ['POST', $base.'/sessions/'.$f['session'].'/cancel', ['reason' => 'Changed our mind']],
            'report a tutor no-show' => ['POST', $base.'/sessions/'.$f['session'].'/no-show', []],
            'read homework' => ['GET', $base.'/homework/'.$f['homework'], []],
            'submit homework' => ['POST', $base.'/homework/'.$f['homework'].'/submit', ['note' => 'Done']],
            'tick a study plan item' => ['POST', $base.'/study-plan/items/'.$f['planItem'].'/done', []],
            'contact a match' => ['POST', $base.'/matches/'.$f['match'].'/contact', []],
            'reject a match' => ['POST', $base.'/matches/'.$f['match'].'/reject', ['reason' => 'too_far']],
        ];
    }

    /**
     * Endpoints that take an id belonging to nobody in particular.
     *
     * A tutor's public profile is the marketplace: every signed-in family may
     * read one and save one, and refusing a tutor id because another family
     * found it first would break the product. They are listed separately rather
     * than left out, so the coverage check below still sees them and the
     * decision that they are shared is written down instead of implied.
     *
     * @return array<string,array{0:string,1:string,2:array}>
     */
    private function sharedStudentCases(array $f): array
    {
        $base = '/api/dashboard/v1';

        return [
            'read a tutor profile' => ['GET', $base.'/tutors/'.$f['tutor'], []],
            'save a tutor' => ['POST', $base.'/tutors/'.$f['tutor'].'/save', []],
        ];
    }

    /**
     * @return array<string,array{0:string,1:string,2:array}>
     */
    private function tutorCases(array $f): array
    {
        $base = '/api/dashboard/v1/tutor';

        return [
            'open a lead' => ['GET', $base.'/leads/'.$f['match'], []],
            'reply to a lead' => ['POST', $base.'/leads/'.$f['match'].'/reply', ['body' => 'I can teach this.']],
            'decline a lead' => ['POST', $base.'/leads/'.$f['match'].'/decline', ['reason' => 'slot_clash']],
            'read a student' => ['GET', $base.'/students/'.$f['student'], []],
            'note a student' => ['POST', $base.'/students/'.$f['student'].'/notes', ['body' => 'Struggles with algebra.', 'visibility' => 'private']],
            'check in' => ['POST', $base.'/sessions/'.$f['session'].'/check-in', ['method' => 'manual']],
            'check out' => ['POST', $base.'/sessions/'.$f['checkedIn'].'/check-out', ['topics' => ['Quadratics']]],
            'record a family no-show' => ['POST', $base.'/sessions/'.$f['session'].'/no-show', []],
            'send the check-in code' => ['POST', $base.'/sessions/'.$f['session'].'/check-in-code', []],
            'mark homework' => ['POST', $base.'/homework/'.$f['homework'].'/mark', ['score' => 8]],
        ];
    }

    // ------------------------------------------------------------ assertions

    /** Somebody else's row is missing, not forbidden, and nothing was written. */
    private function assertHidden(string $method, string $uri, string $asUser, array $payload, string $name): void
    {
        $response = $this->asUser($asUser)->json($method, $uri, $payload);

        $this->assertSame(
            404,
            $response->status(),
            sprintf('%s: another owner\'s id returned %d. It has to be 404 — a 403 confirms the row exists.', $name, $response->status()),
        );
    }

    /** Our own row is reachable: anything but 403 and 404. */
    private function assertNotRefusedAsSomebodyElses(string $method, string $uri, string $asUser, array $payload, string $name): void
    {
        $status = $this->asUser($asUser)->json($method, $uri, $payload)->status();

        $this->assertNotContains(
            $status,
            [403, 404],
            sprintf('%s: the owner was refused their own record with a %d.', $name, $status),
        );
    }

    private function assertRoleRefused(string $method, string $uri, string $asUser, array $payload, string $name): void
    {
        $this->asUser($asUser)->json($method, $uri, $payload)
            ->assertStatus(403)
            ->assertJsonPath('errors.0.code', 'wrong_role', $name.': the wrong role must be told so.');
    }

    /** The legacy login is a session key, not a guard, so this is the whole of it. */
    private function asUser(string $userId): self
    {
        $this->withSession(['userid' => $userId]);

        return $this;
    }

    // -------------------------------------------------------------- fixtures

    /**
     * One family and one tutor, with a row on every id-bearing endpoint.
     *
     * @return array<string,string>
     */
    private function fixturesFor(string $studentUserId, string $tutorUserId): array
    {
        $package = Package::create([
            'student_user_id' => $studentUserId,
            'tutor_user_id' => $tutorUserId,
            'subject' => 'Mathematics',
            'class_level' => 'Class 10',
            'sessions_total' => 12,
            'sessions_used' => 0,
            'rate_paise' => self::RATE_PAISE,
            'amount_paise' => self::RATE_PAISE * 12,
            'commission_pct' => self::COMMISSION_PCT,
            'status' => 'active',
            'purchased_at' => now(),
        ]);

        $this->fundWallet($package);

        $session = $this->sessions()->schedule($package, now()->addDay()->setTime(16, 0), 60, 'home', '12 Rose Lane');

        $checkedIn = $this->sessions()->checkIn(
            $this->sessions()->schedule($package, now()->addDay()->setTime(18, 0), 60, 'home', '12 Rose Lane'),
            $tutorUserId,
            'manual',
        );

        // A third class, taken to checked_out, so confirm/dispute have a class
        // in the one state they accept.
        $confirmable = $this->sessions()->checkOut(
            $this->sessions()->checkIn(
                $this->sessions()->schedule($package, now()->addDay()->setTime(20, 0), 60, 'home', '12 Rose Lane'),
                $tutorUserId,
                'manual',
            ),
            $tutorUserId,
            ['Quadratic equations'],
        );

        $homework = Homework::create([
            'session_id' => $session->id,
            'student_user_id' => $studentUserId,
            'tutor_user_id' => $tutorUserId,
            'subject' => 'Mathematics',
            'title' => 'Exercise 4.2',
            'due_at' => now()->addDays(2),
            'status' => 'open',
        ]);

        $plan = StudyPlan::create([
            'student_user_id' => $studentUserId,
            'tutor_user_id' => $tutorUserId,
            'subject' => 'Mathematics',
            'week_start' => now()->startOfWeek(),
        ]);

        $planItem = StudyPlanItem::create([
            'plan_id' => $plan->id,
            'subject' => 'Mathematics',
            'title' => 'Revise quadratics',
            'due_at' => now()->addDays(3),
        ]);

        $lead = Lead::create([
            'student_user_id' => $studentUserId,
            'source' => 'web',
            'contact_name' => 'A parent',
            'student_name' => 'A child',
            'class_level' => 'Class 10',
            'subject' => 'Mathematics',
            'mode' => 'home',
            'city' => 'Gurugram',
            'status' => 'matching',
            'expires_at' => now()->addDays(30),
        ]);

        $match = TutorMatch::create([
            'lead_id' => $lead->id,
            'tutor_user_id' => $tutorUserId,
            'score' => 88,
            'reasons' => ['Teaches Class 10 maths'],
            'rank' => 1,
            'status' => 'offered',
            'expires_at' => now()->addDays(3),
        ]);

        // The lead has been opened already, so replying to it is not refused
        // for a reason that has nothing to do with who owns it.
        LeadView::create([
            'match_id' => $match->id,
            'lead_id' => $lead->id,
            'tutor_user_id' => $tutorUserId,
            'viewed_at' => now(),
        ]);

        return [
            'student' => $studentUserId,
            'tutor' => $tutorUserId,
            'package' => $package->id,
            'session' => $session->id,
            'checkedIn' => $checkedIn->id,
            'confirmable' => $confirmable->id,
            'homework' => $homework->id,
            'planItem' => $planItem->id,
            'lead' => $lead->id,
            'match' => $match->id,
        ];
    }

    /**
     * The one legacy table the HTTP layer needs. `register` has no migration —
     * it lives only in the production dump — so the columns the identity
     * middleware reads are recreated here and nowhere else.
     */
    private function createRegisterTable(): void
    {
        if (Schema::hasTable('register')) {
            return;
        }

        Schema::create('register', function ($t): void {
            $t->increments('id');
            $t->string('user_id')->nullable();
            $t->string('name')->nullable();
            $t->string('email')->nullable();
            $t->string('phone')->nullable();
            $t->string('status')->nullable();
            $t->string('join_as')->nullable();
            $t->string('avatar')->nullable();
            $t->text('address')->nullable();
            $t->string('city')->nullable();
            $t->string('district')->nullable();
            $t->string('state')->nullable();
            $t->string('pincode')->nullable();
            $t->string('gender')->nullable();
            $t->string('dob')->nullable();
            $t->string('user_type')->nullable();
            $t->string('for_class')->nullable();
            $t->string('class_type')->nullable();
            $t->string('budget')->nullable();
            $t->string('experience')->nullable();
            $t->string('education')->nullable();
            $t->text('other_education')->nullable();
            $t->string('degree')->nullable();
            $t->text('profile')->nullable();
            $t->text('profile_desc')->nullable();
            $t->text('pro_desc')->nullable();
            $t->string('document_type')->nullable();
            $t->string('document_number')->nullable();
            $t->string('date')->nullable();
        });
    }

    private function registerUser(string $userId, string $joinAs): void
    {
        DB::table('register')->insert([
            'user_id' => $userId,
            'name' => $userId,
            'email' => strtolower($userId).'@example.test',
            'phone' => '9000000000',
            'status' => 't',
            'join_as' => $joinAs,
        ]);
    }

    /** Turn a concrete uri back into the route pattern it was built from. */
    private function toPattern(string $uri): string
    {
        $path = ltrim($uri, '/');

        return (string) preg_replace(
            [
                '#/sessions/[^/]+#',
                '#/homework/[^/]+#',
                '#/study-plan/items/[^/]+#',
                '#/matches/[^/]+#',
                '#/tutors/[^/]+#',
                '#/leads/[^/]+#',
                '#/students/[^/]+#',
            ],
            [
                '/sessions/{id}',
                '/homework/{id}',
                '/study-plan/items/{id}',
                '/matches/{matchId}',
                '/tutors/{tutorUserId}',
                '/leads/{matchId}',
                '/students/{studentUserId}',
            ],
            $path,
        );
    }
}
