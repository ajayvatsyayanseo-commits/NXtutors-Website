<?php

declare(strict_types=1);

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Models\NxtParent;
use App\Services\ParentLogin;
use App\Services\WhatsAppHandoff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\View\View;

/**
 * /parent/login: two ways in on one screen.
 *
 *  (a) WhatsApp: the parent asks for a code on our WhatsApp (Lead Intake
 *      answers it through ParentLoginCodeController) and types it here next
 *      to their number. Works for every parent, password or not.
 *  (b) Email and password, once a parent has set one on /parent/account.
 *
 * Both end in the `parent` guard only. The wording of every error says what
 * happened and what to do next; the one exception is a wrong email or
 * password, which never says which of the two was wrong.
 */
final class ParentAuthController extends Controller
{
    /** What the parent sends us on WhatsApp; Lead Intake listens for it. */
    public const WA_TEXT = 'Send me my NXtutors login code';

    public function show(WhatsAppHandoff $handoffs): View|RedirectResponse
    {
        if (Auth::guard('parent')->check()) {
            return redirect()->route('parent.home');
        }

        return view('parent.login', [
            'waUrl' => 'https://wa.me/'.$handoffs->number().'?text='.rawurlencode(self::WA_TEXT),
            'method' => session('parent_method', old('method', 'whatsapp')),
            'metatitle' => 'Family login | NXTutors',
            'metarobots' => 'noindex, nofollow',
        ]);
    }

    /** (a) The WhatsApp code. */
    public function verifyCode(Request $request, ParentLogin $login): RedirectResponse
    {
        $data = $request->validate([
            'phone' => ['required', 'string', 'max:20'],
            'code' => ['required', 'string', 'max:12'],
        ], [
            'phone.required' => 'Please enter your mobile number.',
            'code.required' => 'Please type the 6-digit code from WhatsApp.',
        ]);

        $result = $login->verify($data['phone'], $data['code'], (string) $request->ip());
        if ($result['parent'] === null) {
            return back()->withInput($request->only('phone', 'method'))
                ->with('parent_method', 'whatsapp')
                ->with('code_sent', true)
                ->withErrors(['code' => $result['error']]);
        }

        return $this->logIn($request, $result['parent']);
    }

    /** (b) Email and password. */
    public function emailLogin(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:191'],
            'password' => ['required', 'string', 'max:200'],
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'That email address looks incomplete. Please check it.',
            'password.required' => 'Please enter your password.',
        ]);

        $email = mb_strtolower(trim($data['email']));
        $limit = 'parent-email:'.sha1($email.'|'.$request->ip());
        $fail = fn (string $message) => back()->withInput($request->only('email', 'method'))
            ->with('parent_method', 'email')
            ->withErrors(['email' => $message]);

        if (RateLimiter::tooManyAttempts($limit, 5)) {
            $minutes = max(1, (int) ceil(RateLimiter::availableIn($limit) / 60));

            return $fail("Too many tries in a short time. Please wait {$minutes} minute".($minutes === 1 ? '' : 's').', or log in with WhatsApp instead.');
        }
        RateLimiter::hit($limit, 600);

        $parent = NxtParent::where('email', $email)->first();
        if (! $parent || ! $parent->password || ! Hash::check($data['password'], $parent->password)) {
            return $fail("That email and password don't match. Please check them, or log in with WhatsApp instead.");
        }
        if (! $parent->isActive()) {
            return $fail('This family account is paused. Message us on WhatsApp and our team will help.');
        }

        RateLimiter::clear($limit);

        return $this->logIn($request, $parent);
    }

    public function logout(Request $request): RedirectResponse
    {
        // The parent guard only: a student or admin session in the same
        // browser is not this button's to end.
        Auth::guard('parent')->logout();
        $request->session()->regenerateToken();

        return redirect()->route('parent.login')->with('status', 'You have logged out. See you soon.');
    }

    private function logIn(Request $request, NxtParent $parent): RedirectResponse
    {
        Auth::guard('parent')->login($parent);
        $request->session()->regenerate();
        $parent->forceFill(['last_login_at' => now()])->save();

        return redirect()->intended(route('parent.home'));
    }
}
