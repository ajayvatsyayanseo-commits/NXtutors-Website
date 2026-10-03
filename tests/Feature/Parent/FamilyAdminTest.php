<?php

declare(strict_types=1);

namespace Tests\Feature\Parent;

use App\Models\NxtParent;
use App\Models\NxtParentChild;
use App\Models\User;
use App\NxtAi\Support\AgentPseudonymiser;
use Illuminate\Support\Facades\Schema;

/** Super Admin → Families: create parents and link their children. */
final class FamilyAdminTest extends ParentTestCase
{
    public function test_the_tables_exist_with_their_columns(): void
    {
        $this->assertTrue(Schema::hasColumns('nxt_parents', ['id', 'name', 'phone', 'phone_hash', 'email', 'password', 'status', 'last_login_at', 'created_at', 'updated_at']));
        $this->assertTrue(Schema::hasColumns('nxt_parent_children', ['id', 'parent_id', 'student_user_id', 'child_name', 'child_class', 'board', 'relationship', 'is_primary']));
        $this->assertTrue(Schema::hasColumns('nxt_parent_login_codes', ['id', 'phone_hash', 'code_hash', 'expires_at', 'attempts', 'used_at', 'created_at']));
    }

    public function test_the_model_normalises_phone_and_email_and_hashes_the_phone(): void
    {
        $parent = $this->makeParent(['phone' => '+91 98765-43210', 'email' => '  Priya@Example.COM ']);

        $this->assertSame('9876543210', $parent->phone);
        $this->assertSame('priya@example.com', $parent->email);
        $this->assertSame(AgentPseudonymiser::fromConfig()->phoneHash('9876543210'), $parent->phone_hash);
        $this->assertSame('98765 43210', $parent->prettyPhone());
        $this->assertNull(NxtParent::normalisePhone('12345'));
        $this->assertNull(NxtParent::normalisePhone('5876543210'));
        $this->assertSame('9876543210', NxtParent::normalisePhone('09876543210'));
    }

    public function test_the_same_student_cannot_be_linked_twice_but_name_only_children_can_repeat(): void
    {
        $parent = $this->makeParent();
        $parent->children()->create(['child_name' => 'A', 'relationship' => 'mother']);
        $parent->children()->create(['child_name' => 'B', 'relationship' => 'mother']);
        $parent->children()->create(['child_name' => 'C', 'student_user_id' => 'S-1', 'relationship' => 'mother']);

        $this->expectException(\Illuminate\Database\QueryException::class);
        $parent->children()->create(['child_name' => 'C again', 'student_user_id' => 'S-1', 'relationship' => 'mother']);
    }

    public function test_a_visitor_cannot_open_families(): void
    {
        $this->get(route('super.families.index'))->assertRedirect();
        $this->post(route('super.families.store'), ['name' => 'X', 'phone' => '9876543210', 'status' => 'active'])->assertRedirect();
        $this->assertSame(0, NxtParent::count());
    }

    public function test_a_logged_in_user_without_super_admin_is_refused(): void
    {
        $this->actingAs(User::factory()->create(), 'web');

        $this->get(route('super.families.index'))->assertForbidden();
        $this->post(route('super.families.store'), ['name' => 'X', 'phone' => '9876543210', 'status' => 'active'])->assertForbidden();
        $this->assertSame(0, NxtParent::count());
    }

    public function test_super_admin_creates_edits_and_lists_a_family(): void
    {
        $this->actingAs($this->superAdmin(), 'web');

        $this->post(route('super.families.store'), [
            'name' => 'Priya Sharma', 'phone' => '+91 98765 43210', 'email' => 'Priya@Example.com', 'status' => 'active',
        ])->assertRedirect();

        $parent = NxtParent::sole();
        $this->assertSame('9876543210', $parent->phone);
        $this->assertSame('priya@example.com', $parent->email);
        $this->assertNull($parent->password);

        $this->put(route('super.families.update', $parent), [
            'name' => 'Priya S', 'phone' => '9876543210', 'email' => '', 'status' => 'inactive',
        ])->assertRedirect(route('super.families.edit', $parent));
        $parent->refresh();
        $this->assertSame('inactive', $parent->status);
        $this->assertNull($parent->email);

        $this->get(route('super.families.index'))->assertOk()->assertSee('Priya S')->assertSee('Never');
        $this->get(route('super.families.edit', $parent))->assertOk()->assertSee('Last login');
        $this->get(route('super.families.create'))->assertOk();
    }

    public function test_phone_and_email_must_be_unique_and_the_phone_valid(): void
    {
        $this->actingAs($this->superAdmin(), 'web');
        $this->makeParent(['email' => 'priya@example.com']);

        $this->post(route('super.families.store'), ['name' => 'Other', 'phone' => '919876543210', 'status' => 'active'])
            ->assertSessionHasErrors(['phone' => 'Another family already uses this phone number.']);
        $this->post(route('super.families.store'), ['name' => 'Other', 'phone' => '9000000003', 'email' => 'PRIYA@example.com', 'status' => 'active'])
            ->assertSessionHasErrors(['email' => 'Another family already uses this email.']);
        $this->post(route('super.families.store'), ['name' => 'Other', 'phone' => '12345', 'status' => 'active'])
            ->assertSessionHasErrors('phone');
        $this->assertSame(1, NxtParent::count());
    }

    public function test_super_admin_links_a_student_account_found_by_search(): void
    {
        $this->actingAs($this->superAdmin(), 'web');
        $this->makeStudent('S-501', 'Aarav Sharma', '9811122233');
        $parent = $this->makeParent();

        $this->get(route('super.families.edit', [$parent, 'student_q' => '98111']))->assertOk()->assertSee('Aarav Sharma')->assertSee('S-501');
        $this->get(route('super.families.edit', [$parent, 'student_q' => 'Aarav']))->assertOk()->assertSee('S-501');

        $this->post(route('super.families.children.store', $parent), ['student_user_id' => 'S-501', 'relationship' => 'mother'])
            ->assertRedirect(route('super.families.edit', $parent));

        $child = NxtParentChild::sole();
        $this->assertSame('S-501', $child->student_user_id);
        $this->assertSame('Aarav Sharma', $child->child_name);
        $this->assertSame('8', $child->child_class);
        $this->assertTrue($child->is_primary, 'The first child is primary.');

        // The same account twice is refused.
        $this->post(route('super.families.children.store', $parent), ['student_user_id' => 'S-501', 'relationship' => 'mother'])
            ->assertSessionHasErrors('student_user_id');
        $this->assertSame(1, NxtParentChild::count());
    }

    public function test_a_teacher_account_cannot_be_linked_as_a_child(): void
    {
        $this->actingAs($this->superAdmin(), 'web');
        \Illuminate\Support\Facades\DB::table('register')->insert(['user_id' => 'T-9', 'name' => 'A Tutor', 'join_as' => 'teacher']);
        $parent = $this->makeParent();

        $this->post(route('super.families.children.store', $parent), ['student_user_id' => 'T-9', 'relationship' => 'mother'])
            ->assertSessionHasErrors('student_user_id');
        $this->get(route('super.families.edit', [$parent, 'student_q' => 'Tutor']))->assertOk()->assertDontSee('T-9');
        $this->assertSame(0, NxtParentChild::count());
    }

    public function test_super_admin_adds_a_child_by_name_sets_primary_and_unlinks(): void
    {
        $this->actingAs($this->superAdmin(), 'web');
        $parent = $this->makeParent();

        $this->post(route('super.families.children.store', $parent), ['child_name' => 'Aarav', 'child_class' => '8', 'board' => 'CBSE', 'relationship' => 'mother']);
        $this->post(route('super.families.children.store', $parent), ['child_name' => 'Myra', 'child_class' => '4', 'board' => 'CBSE', 'relationship' => 'father', 'is_primary' => '1']);

        [$aarav, $myra] = [NxtParentChild::where('child_name', 'Aarav')->sole(), NxtParentChild::where('child_name', 'Myra')->sole()];
        $this->assertNull($aarav->student_user_id);
        $this->assertFalse($aarav->is_primary);
        $this->assertTrue($myra->is_primary);
        $this->assertSame('father', $myra->relationship);

        $this->put(route('super.families.children.update', [$parent, $aarav]), [
            'child_name' => 'Aarav', 'child_class' => '9', 'board' => 'CBSE', 'relationship' => 'guardian', 'is_primary' => '1',
        ])->assertRedirect(route('super.families.edit', $parent));
        $this->assertTrue($aarav->fresh()->is_primary);
        $this->assertFalse($myra->fresh()->is_primary);
        $this->assertSame('9', $aarav->fresh()->child_class);

        $this->get(route('super.families.edit', $parent))->assertOk()->assertSee('Aarav')->assertSee('Myra');

        $this->delete(route('super.families.children.destroy', [$parent, $myra]))->assertRedirect(route('super.families.edit', $parent));
        $this->assertSame(['Aarav'], NxtParentChild::pluck('child_name')->all());
    }

    public function test_a_child_of_another_family_cannot_be_edited_through_this_one(): void
    {
        $this->actingAs($this->superAdmin(), 'web');
        $a = $this->makeParent();
        $b = $this->makeParent(['phone' => '9000000004']);
        $child = $b->children()->create(['child_name' => 'Other', 'relationship' => 'mother']);

        $this->delete(route('super.families.children.destroy', [$a, $child]))->assertNotFound();
        $this->assertSame(1, NxtParentChild::count());
    }

    public function test_the_nav_links_to_families(): void
    {
        $this->actingAs($this->superAdmin(), 'web')
            ->get(route('super.families.index'))
            ->assertSee(route('super.families.index'), false)
            ->assertSee('Families');
    }
}
