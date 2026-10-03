<?php

declare(strict_types=1);

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Models\NxtParent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

/**
 * The logged-in parent's pages: "Your family" and account settings.
 *
 * Phase 1 shows only who is linked; classes, attendance and progress come in
 * Phase 2. Everything here reads the parent from the `parent` guard, never
 * from a request parameter, so one family can never open another's page.
 */
final class ParentHomeController extends Controller
{
    public function home(): View
    {
        $parent = $this->parent();

        return view('parent.family', [
            'parent' => $parent,
            'children' => $parent->children()->get(),
            'metatitle' => 'Your family | NXTutors',
            'metarobots' => 'noindex, nofollow',
        ]);
    }

    public function account(): View
    {
        return view('parent.account', [
            'parent' => $this->parent(),
            'metatitle' => 'Your account | NXTutors',
            'metarobots' => 'noindex, nofollow',
        ]);
    }

    public function updateDetails(Request $request): RedirectResponse
    {
        $parent = $this->parent();
        $request->merge(['email' => mb_strtolower(trim((string) $request->input('email', '')))]);

        $data = $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:120'],
            'email' => ['nullable', 'email', 'max:191', Rule::unique('nxt_parents', 'email')->ignore($parent->id)],
        ], [
            'name.required' => 'Please enter your name.',
            'email.email' => 'That email address looks incomplete. Please check it.',
            'email.unique' => 'That email is already used by another family account. Please use a different one.',
        ]);

        $parent->fill(['name' => trim($data['name']), 'email' => $data['email'] ?? null])->save();

        return redirect()->route('parent.account')->with('status', 'Your details are saved.');
    }

    /**
     * Set or change the password. No "current password" step: a parent who
     * forgot it logs in with WhatsApp and sets a new one here, which is the
     * whole point of having two ways in.
     */
    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'max:200', 'confirmed'],
        ], [
            'password.required' => 'Please choose a password.',
            'password.min' => 'Please use at least 8 characters.',
            'password.confirmed' => "The two passwords don't match. Please type the same one twice.",
        ]);

        $parent = $this->parent();
        $parent->password = $request->input('password');
        $parent->save();

        return redirect()->route('parent.account')->with('status', $parent->email
            ? 'Password saved. You can now log in with your email and this password.'
            : 'Password saved. Add your email above to log in with it.');
    }

    private function parent(): NxtParent
    {
        /** @var NxtParent */
        return Auth::guard('parent')->user();
    }
}
