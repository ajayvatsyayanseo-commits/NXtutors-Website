<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Services\AccountLifecycle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

/**
 * Hide profile and delete account, for the signed-in person only.
 *
 * Deleting asks for the password (when the account has one) and the word
 * DELETE — enough to stop an accident or someone holding an unlocked phone,
 * and no more: the DPDP Act requires withdrawing consent to be as easy as
 * giving it, so nothing here adds friction beyond that.
 */
class AccountController extends DashboardController
{
    public function __construct(private readonly AccountLifecycle $lifecycle)
    {
    }

    public function visibility(Request $request): JsonResponse
    {
        $identity = $this->identity($request);
        if (! $identity->isTutor()) {
            return $this->fail('not_a_tutor', 'Only tutor profiles are listed publicly.', 403);
        }

        $validated = $request->validate([
            'hide' => ['required', Rule::in([...array_keys(AccountLifecycle::HIDE_OPTIONS), 'show'])],
        ]);

        $register = $identity->register;
        if ($register->isDeletionPending()) {
            return $this->fail('deletion_pending', 'Your account is scheduled for deletion. Cancel the deletion first.', 409);
        }

        $validated['hide'] === 'show'
            ? $this->lifecycle->unhide($register)
            : $this->lifecycle->hide($register, $validated['hide']);

        return $this->ok($this->state($register->fresh()));
    }

    public function requestDeletion(Request $request): JsonResponse
    {
        $identity = $this->identity($request);
        $register = $identity->register;

        $validated = $request->validate([
            'after' => ['required', Rule::in(array_keys(AccountLifecycle::DELETE_OPTIONS))],
            'confirm' => ['required', 'string'],
            'password' => ['nullable', 'string'],
        ]);

        if (trim($validated['confirm']) !== 'DELETE') {
            return $this->fail('not_confirmed', 'Type DELETE in capital letters to confirm.', 422);
        }

        // Accounts created on WhatsApp may never have set a password.
        $hash = (string) $register->password;
        if ($hash !== '' && ! Hash::check((string) ($validated['password'] ?? ''), $hash)) {
            return $this->fail('wrong_password', 'That is not your password.', 422);
        }

        if ($register->isDeletionPending()) {
            return $this->ok($this->state($register));
        }

        $this->lifecycle->requestDeletion($register, $validated['after']);

        return $this->ok($this->state($register->fresh()));
    }

    public function cancelDeletion(Request $request): JsonResponse
    {
        $register = $this->identity($request)->register;

        if ($register->isDeletionPending()) {
            $this->lifecycle->cancelDeletion($register);
        }

        return $this->ok($this->state($register->fresh()));
    }

    private function state($register): array
    {
        return \App\Nxt\Dashboard\Support\DashboardIdentity::fromRegister($register)->accountState();
    }
}
