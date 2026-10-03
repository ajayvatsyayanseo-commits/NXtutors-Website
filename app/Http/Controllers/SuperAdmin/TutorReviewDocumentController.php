<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Register;
use App\Services\TutorDocuments;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

/**
 * The admin's ID review for a tutor (super/teacher/edit): see the ID photos
 * the tutor sent, then approve. Approving sets status 't' and id_verified_at
 * through the model, which makes the tutor public and Verified and fills
 * their phone_hash. unverify() takes the badge off and leaves them live.
 */
class TutorReviewDocumentController extends Controller
{
    private const SIDES = ['front' => 'frount_image', 'back' => 'back_image'];

    public function show(int $id, string $side, TutorDocuments $documents): Response
    {
        $tutor = Register::where('join_as', 'teacher')->findOrFail($id);
        $found = $documents->fetch($tutor->{self::SIDES[$side]} ?? null);
        abort_if($found === null, 404);
        [$bytes, $type] = $found;

        return response($bytes, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline',
            // An ID card: never cached by a browser or a proxy.
            'Cache-Control' => 'no-store, private',
            'X-Content-Type-Options' => 'nosniff',
        ]);
    }

    public function approve(int $id): RedirectResponse
    {
        $tutor = Register::where('join_as', 'teacher')->findOrFail($id);
        $tutor->status = Register::STATUS_LIVE;
        // The only place the Verified badge is switched on (App\Support\TutorBadge).
        if (Register::hasIdVerifiedColumn()) {
            $tutor->forceFill([
                'id_verified_at' => now(),
                'id_verified_by' => mb_substr((string) (auth()->id() ?? 'admin'), 0, 64),
            ]);
        }
        $tutor->save();

        Log::info('Tutor approved after ID review', ['user_id' => $tutor->user_id, 'by' => auth()->id()]);

        return redirect()->route('super.teacher.edit', $tutor->id)
            ->with('success', $tutor->name.' approved: Verified badge on.');
    }

    /** Take the Verified badge off again (the profile stays live). */
    public function unverify(int $id): RedirectResponse
    {
        $tutor = Register::where('join_as', 'teacher')->findOrFail($id);
        if (Register::hasIdVerifiedColumn()) {
            $tutor->forceFill(['id_verified_at' => null, 'id_verified_by' => null])->save();
        }

        Log::info('Tutor Verified badge removed', ['user_id' => $tutor->user_id, 'by' => auth()->id()]);

        return redirect()->route('super.teacher.edit', $tutor->id)
            ->with('success', $tutor->name.': Verified badge removed.');
    }
}
