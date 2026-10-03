<?php

declare(strict_types=1);

namespace Tests\Feature\Parent;

use App\Models\NxtParentLoginCode;
use Illuminate\Support\Facades\RateLimiter;

/**
 * /parent/login: the WhatsApp code and email + password, and every way each
 * one can go wrong.
 */
final class ParentLoginTest extends ParentTestCase
{
    public function test_the_login_page_offers_both_methods_and_our_whatsapp_number(): void
    {
        $this->get(route('parent.login'))
            ->assertOk()
            ->assertSee('Log in with WhatsApp')
            ->assertSee('Log in with email')
            ->assertSee('Get my code on WhatsApp')
            ->assertSee('Forgot password? Log in with WhatsApp instead')
            ->assertSee('https://wa.me/917836034313?text=Send%20me%20my%20NXtutors%20login%20code', false)
            ->assertSee('name="_token"', false)
            ->assertSee('noindex', false);
    }

    public function test_the_right_code_logs_the_parent_in(): void
    {
        $parent = $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));

        $this->post(route('parent.login.code'), ['phone' => '98765 43210', 'code' => $code])
            ->assertRedirect(route('parent.home'));

        $this->assertAuthenticatedAs($parent, 'parent');
        $this->assertNotNull(NxtParentLoginCode::sole()->used_at);
        $this->assertNotNull($parent->fresh()->last_login_at);
    }

    public function test_a_wrong_code_is_refused_and_counted(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));
        $wrong = $code === '111111' ? '222222' : '111111';

        $this->from(route('parent.login'))
            ->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $wrong])
            ->assertRedirect(route('parent.login'))
            ->assertSessionHasErrors(['code' => "That code doesn't match. Please check the 6 digits and try again (4 tries left)."]);

        $this->assertGuest('parent');
        $this->assertSame(1, NxtParentLoginCode::sole()->attempts);
    }

    public function test_an_expired_code_is_refused(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));
        $this->travel(11)->minutes();

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])
            ->assertSessionHasErrors(['code' => 'That code has expired (codes last 10 minutes). Please ask for a new one on WhatsApp.']);
        $this->assertGuest('parent');
    }

    public function test_a_used_code_cannot_log_in_twice(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])->assertRedirect(route('parent.home'));
        $this->post(route('parent.logout'))->assertRedirect(route('parent.login'));
        $this->assertGuest('parent');

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])
            ->assertSessionHasErrors(['code' => 'That code has already been used. Please ask for a new one on WhatsApp.']);
        $this->assertGuest('parent');
    }

    public function test_five_wrong_tries_burn_the_code_even_for_the_right_one(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));
        $wrong = $code === '111111' ? '222222' : '111111';

        for ($i = 0; $i < 5; $i++) {
            $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $wrong]);
        }

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])
            ->assertSessionHasErrors(['code' => 'Too many wrong tries for this code. Please ask for a new one on WhatsApp.']);
        $this->assertGuest('parent');
    }

    public function test_only_the_newest_code_counts(): void
    {
        $this->makeParent();
        $old = $this->codeFrom($this->requestCode('9876543210'));
        $new = $this->codeFrom($this->requestCode('9876543210'));
        if ($old === $new) {
            $this->markTestSkipped('Two random codes collided.');
        }

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $old])->assertSessionHasErrors('code');
        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $new])->assertRedirect(route('parent.home'));
    }

    public function test_a_number_with_no_code_is_told_how_to_get_one(): void
    {
        $this->makeParent();

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => '123456'])
            ->assertSessionHasErrors(['code' => "We haven't sent a code to this number yet. Tap \"Get my code on WhatsApp\", send the message, and the code will arrive in the chat."]);
    }

    public function test_an_invalid_phone_is_explained(): void
    {
        $this->post(route('parent.login.code'), ['phone' => '12345', 'code' => '123456'])
            ->assertSessionHasErrors(['code' => 'Please enter your 10-digit mobile number, like 98765 43210.']);
    }

    public function test_an_inactive_parent_cannot_log_in_with_a_code(): void
    {
        $parent = $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));
        $parent->forceFill(['status' => 'inactive'])->save();

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])
            ->assertSessionHasErrors(['code' => 'This family account is paused. Message us on WhatsApp and our team will help.']);
        $this->assertGuest('parent');
    }

    public function test_code_checks_are_throttled_per_number(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));
        for ($i = 0; $i < 10; $i++) {
            RateLimiter::hit('parent-code-phone:'.\App\Services\ParentLogin::phoneKey('9876543210'), 900);
        }

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])
            ->assertSessionHasErrors('code');
        $this->assertGuest('parent');
        $this->assertStringContainsString('Too many tries', session('errors')->first('code'));
    }

    public function test_code_checks_are_throttled_per_ip(): void
    {
        $this->makeParent();
        $code = $this->codeFrom($this->requestCode('9876543210'));
        for ($i = 0; $i < 10; $i++) {
            RateLimiter::hit('parent-code-ip:127.0.0.1', 900);
        }

        $this->post(route('parent.login.code'), ['phone' => '9876543210', 'code' => $code])
            ->assertSessionHasErrors('code');
        $this->assertGuest('parent');
    }

    public function test_email_and_password_log_the_parent_in(): void
    {
        $parent = $this->makeParent(['email' => 'Priya@Example.com', 'password' => 'secret-pass-1']);
        $this->assertSame('priya@example.com', $parent->email);

        $this->post(route('parent.login.email'), ['email' => 'PRIYA@example.com', 'password' => 'secret-pass-1'])
            ->assertRedirect(route('parent.home'));
        $this->assertAuthenticatedAs($parent, 'parent');
    }

    public function test_a_wrong_password_is_refused_without_saying_which_half_was_wrong(): void
    {
        $this->makeParent(['email' => 'priya@example.com', 'password' => 'secret-pass-1']);
        $message = "That email and password don't match. Please check them, or log in with WhatsApp instead.";

        $this->post(route('parent.login.email'), ['email' => 'priya@example.com', 'password' => 'nope-nope'])
            ->assertSessionHasErrors(['email' => $message]);
        $this->post(route('parent.login.email'), ['email' => 'nobody@example.com', 'password' => 'secret-pass-1'])
            ->assertSessionHasErrors(['email' => $message]);
        $this->assertGuest('parent');
    }

    public function test_a_parent_without_a_password_cannot_log_in_by_email(): void
    {
        $this->makeParent(['email' => 'priya@example.com']);

        $this->post(route('parent.login.email'), ['email' => 'priya@example.com', 'password' => ''])
            ->assertSessionHasErrors('password');
        $this->post(route('parent.login.email'), ['email' => 'priya@example.com', 'password' => 'anything1'])
            ->assertSessionHasErrors('email');
        $this->assertGuest('parent');
    }

    public function test_an_inactive_parent_cannot_log_in_by_email(): void
    {
        $this->makeParent(['email' => 'priya@example.com', 'password' => 'secret-pass-1', 'status' => 'inactive']);

        $this->post(route('parent.login.email'), ['email' => 'priya@example.com', 'password' => 'secret-pass-1'])
            ->assertSessionHasErrors(['email' => 'This family account is paused. Message us on WhatsApp and our team will help.']);
        $this->assertGuest('parent');
    }

    public function test_a_parent_set_inactive_is_logged_out_on_the_next_page(): void
    {
        $parent = $this->makeParent();
        $this->actingAs($parent, 'parent')->get(route('parent.home'))->assertOk();

        $parent->forceFill(['status' => 'inactive'])->save();

        $this->get(route('parent.home'))->assertRedirect(route('parent.login'));
        $this->assertGuest('parent');
    }

    public function test_the_family_page_lists_the_children(): void
    {
        $parent = $this->makeParent();
        $parent->children()->create(['child_name' => 'Aarav', 'child_class' => '8', 'board' => 'CBSE', 'relationship' => 'mother', 'is_primary' => true]);
        $parent->children()->create(['child_name' => 'Myra', 'child_class' => '4', 'board' => 'CBSE', 'relationship' => 'mother']);

        $this->actingAs($parent, 'parent')->get(route('parent.home'))
            ->assertOk()
            ->assertSee('Hello, Priya')
            ->assertSeeInOrder(['Aarav', 'Class 8 · CBSE', 'Myra', 'Class 4 · CBSE'])
            ->assertSee('Dashboard with classes, attendance and progress is coming soon');
    }

    public function test_a_logged_out_visitor_is_sent_to_the_parent_login(): void
    {
        $this->get(route('parent.home'))->assertRedirect(route('parent.login'));
        $this->get(route('parent.account'))->assertRedirect(route('parent.login'));
    }

    public function test_the_parent_can_update_details_and_set_a_password(): void
    {
        $parent = $this->makeParent();
        $this->actingAs($parent, 'parent');

        $this->post(route('parent.account.update'), ['name' => 'Priya S', 'email' => 'PRIYA@example.com'])
            ->assertRedirect(route('parent.account'));
        $this->assertSame('priya@example.com', $parent->fresh()->email);
        $this->assertSame('Priya S', $parent->fresh()->name);

        $this->post(route('parent.account.password'), ['password' => 'short', 'password_confirmation' => 'short'])
            ->assertSessionHasErrors(['password' => 'Please use at least 8 characters.']);
        $this->post(route('parent.account.password'), ['password' => 'long-enough-1', 'password_confirmation' => 'different-1'])
            ->assertSessionHasErrors('password');
        $this->post(route('parent.account.password'), ['password' => 'long-enough-1', 'password_confirmation' => 'long-enough-1'])
            ->assertRedirect(route('parent.account'));

        $this->assertTrue(\Illuminate\Support\Facades\Hash::check('long-enough-1', $parent->fresh()->password));
    }

    public function test_an_email_already_used_by_another_family_is_refused(): void
    {
        $this->makeParent(['phone' => '9000000002', 'email' => 'taken@example.com']);
        $parent = $this->makeParent();

        $this->actingAs($parent, 'parent')
            ->post(route('parent.account.update'), ['name' => 'Priya', 'email' => 'taken@example.com'])
            ->assertSessionHasErrors('email');
    }

    public function test_the_account_page_renders(): void
    {
        $this->actingAs($this->makeParent(), 'parent')
            ->get(route('parent.account'))
            ->assertOk()
            ->assertSee('Your account')
            ->assertSee('+91 98765 43210');
    }
}
