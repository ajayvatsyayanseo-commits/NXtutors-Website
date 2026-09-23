<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Register;
use App\Nxt\Dashboard\Services\ParentalConsentFlow;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * The page a parent opens from the WhatsApp "Confirm" button.
 *
 * Used when the student signed up and the parent was not in the conversation
 * (BLOCKERS D12 in the Student agent). The link is the proof that the person
 * holds the parent's WhatsApp; the form adds who they are and that they are an
 * adult, both of which consent from a child's parent has to establish.
 *
 * No login: a busy parent should not have to create an account to say yes.
 * Every failure — wrong token, expired, already used, burnt — shows the same
 * page, so the link cannot be probed for which of those it was.
 */
class ParentalConsentController extends Controller
{
    public function __construct(private readonly ParentalConsentFlow $flow)
    {
    }

    public function show(string $id, string $token): View
    {
        $consent = $this->flow->pendingForLink($id, $token);

        return $this->page($consent ? 'ask' : 'invalid', $id, $token,
            $consent ? $this->firstName($consent->student_user_id) : null);
    }

    public function confirm(Request $request, string $id, string $token): View
    {
        $validated = $request->validate([
            'role' => 'required|in:'.implode(',', ParentalConsentFlow::GUARDIAN_ROLES),
            'adult' => 'accepted',
        ], [
            'role.required' => 'Please choose whether you are the mother, father or legal guardian.',
            'adult.accepted' => 'Please confirm you are 18 or older and the parent or legal guardian.',
        ]);

        $ok = $this->flow->confirmLink($id, $token, $validated['role'], true, [
            'ip' => $request->ip(),
        ]);

        return $this->page($ok ? 'done' : 'invalid', $id, $token, null);
    }

    private function page(string $state, string $id, string $token, ?string $childName): View
    {
        return view('consent.parent', [
            'state' => $state,
            'id' => $id,
            'token' => $token,
            'childName' => $childName,
            'notice' => (string) config('nxt-dashboard.consent_notice'),
            // The site header's meta fields. A link carrying a secret must
            // never be indexed.
            'metatitle' => 'Parent consent | NXTutors',
            'metadesc' => null,
            'metakey' => null,
            'metarobots' => 'noindex, nofollow',
        ]);
    }

    /** First name only: enough for a parent to recognise the request. */
    private function firstName(string $studentUserId): ?string
    {
        $name = Register::query()->where('user_id', $studentUserId)->value('name');

        return $name ? strtok(trim((string) $name), ' ') ?: null : null;
    }
}
