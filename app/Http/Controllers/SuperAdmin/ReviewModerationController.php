<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Teacher_review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * The review queue. A review reaches the public site only through approve().
 *
 * Tabs follow `teacher_review.moderation`; `status` ('t' published, 'f' not)
 * is what every public reader filters on, so it is set here and nowhere else.
 */
class ReviewModerationController extends Controller
{
    private const TABS = [
        Teacher_review::MODERATION_PENDING => 'Pending',
        Teacher_review::MODERATION_UNVERIFIED => 'Awaiting email',
        Teacher_review::MODERATION_APPROVED => 'Approved',
        Teacher_review::MODERATION_REJECTED => 'Rejected',
        Teacher_review::MODERATION_LEGACY => 'Legacy (hidden)',
    ];

    public function index(Request $request)
    {
        $tab = array_key_exists($request->query('tab'), self::TABS) ? $request->query('tab') : Teacher_review::MODERATION_PENDING;

        $counts = Teacher_review::query()
            ->selectRaw('moderation, COUNT(*) as c')
            ->groupBy('moderation')
            ->pluck('c', 'moderation');

        $reviews = Teacher_review::with('user:id,user_id,name,city')
            ->where('moderation', $tab)
            ->when($request->filled('q'), function ($q) use ($request) {
                $term = '%'.trim((string) $request->query('q')).'%';
                $q->where(fn ($w) => $w->where('name', 'like', $term)
                    ->orWhere('email', 'like', $term)
                    ->orWhere('message', 'like', $term)
                    ->orWhere('user_id', 'like', $term));
            })
            ->orderByDesc('id')
            ->paginate(25)
            ->withQueryString();

        return view('super.user.reviewindex', [
            'reviews' => $reviews,
            'tabs' => self::TABS,
            'tab' => $tab,
            'counts' => $counts,
        ]);
    }

    public function approve(Request $request, int $id): RedirectResponse
    {
        $review = Teacher_review::findOrFail($id);
        $review->status = 't';
        $review->moderation = Teacher_review::MODERATION_APPROVED;
        $review->reject_reason = null;
        $this->stamp($review, $request)->save();

        return back()->with('success', 'Review by '.$review->name.' approved and published.');
    }

    public function reject(Request $request, int $id): RedirectResponse
    {
        $data = $request->validate(['reason' => ['nullable', 'string', 'max:255']]);

        $review = Teacher_review::findOrFail($id);
        $review->status = 'f';
        $review->moderation = Teacher_review::MODERATION_REJECTED;
        $review->reject_reason = $data['reason'] ?? null;
        $this->stamp($review, $request)->save();

        return back()->with('success', 'Review by '.$review->name.' rejected. It is not shown anywhere.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $review = Teacher_review::findOrFail($id);

        if ($review->photo) {
            $path = public_path(config('reviews.photo_dir').'/'.basename($review->photo));
            if (is_file($path)) {
                @unlink($path);
            }
        }
        $review->delete();

        return back()->with('success', 'Review deleted permanently.');
    }

    private function stamp(Teacher_review $review, Request $request): Teacher_review
    {
        $review->moderated_at = now();
        $review->moderated_by = (string) ($request->user()?->email ?? $request->user()?->id ?? 'admin');

        return $review;
    }
}
