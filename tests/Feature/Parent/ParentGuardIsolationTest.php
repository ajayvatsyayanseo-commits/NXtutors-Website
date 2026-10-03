<?php

declare(strict_types=1);

namespace Tests\Feature\Parent;

/**
 * The `parent` guard keeps parent sessions apart from student (`register`,
 * session userid) and admin (`web`) sessions in both directions.
 *
 * The parent logs in through the real WhatsApp-code flow here rather than
 * actingAs(): actingAs($parent, 'parent') also makes `parent` the default
 * guard for the rest of the test, which production never does, and would make
 * Super Admin's plain `auth` check the parent guard instead of `web`.
 */
final class ParentGuardIsolationTest extends ParentTestCase
{
    private function logInAsParent(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));
        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])
            ->assertRedirect(route('parent.home'));
        $this->assertAuthenticated('parent');
    }

    public function test_a_parent_session_cannot_open_the_student_dashboard(): void
    {
        $this->logInAsParent();

        $this->get('/user/dashboard')->assertRedirect(route('login'));
    }

    public function test_a_parent_session_cannot_open_super_admin(): void
    {
        $this->logInAsParent();

        $this->get('/super/dashboard')->assertRedirect();
        $this->get(route('super.families.index'))->assertRedirect();
        $this->assertGuest('web');
    }

    public function test_a_student_session_cannot_open_parent_pages(): void
    {
        $this->makeStudent();

        $this->withSession(['userid' => 'S-501', 'join_as' => 'student'])
            ->get(route('parent.home'))
            ->assertRedirect(route('parent.login'));
    }

    public function test_an_admin_session_cannot_open_parent_pages(): void
    {
        $this->actingAs($this->superAdmin(), 'web')
            ->get(route('parent.home'))
            ->assertRedirect(route('parent.login'));
    }

    public function test_parent_logout_leaves_a_student_session_alone(): void
    {
        $this->logInAsParent();

        $this->withSession(['userid' => 'S-501'])
            ->post(route('parent.logout'))
            ->assertRedirect(route('parent.login'));

        $this->assertGuest('parent');
        $this->assertSame('S-501', session('userid'));
    }
}
