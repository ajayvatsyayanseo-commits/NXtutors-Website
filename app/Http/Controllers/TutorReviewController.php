<?php

namespace App\Http\Controllers;

use App\Mail\ReviewVerificationMail;
use App\Models\Register;
use App\Models\Teacher_review;
use App\Support\ReviewOptions;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

/**
 * The public "review this tutor" page and what it submits.
 *
 * Nothing a visitor sends is published directly. A review is saved
 * unpublished, confirmed by email when that is switched on, and goes live only
 * when an admin approves it (SuperAdmin\ReviewModerationController).
 */
class TutorReviewController extends Controller
{
    public function show(string $id)
    {
        $teacher = $this->tutor($id);
        abort_if(! $teacher, 404);

        return view('tutor-review', [
            'teacher' => $teacher,
            'subjects' => $this->subjectsOf($teacher),
            'publicUrl' => $teacher->profileUrl(),
            'verifyEmail' => (bool) config('reviews.verify_email'),
            'metatitle' => 'Review '.$teacher->name.' | NXTutors',
            'metadesc' => 'Share your experience of learning with '.$teacher->name.' on NXTutors.',
            'metakey' => null,
            // A form, not content: keep it out of search results.
            'metarobots' => 'noindex, follow',
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        // Bots fill every field; people never see this one.
        if (filled($request->input('website'))) {
            return response()->json(['message' => 'Thank you. Your review has been received.']);
        }

        $validated = $request->validate([
            'user_id' => ['required', 'string', 'max:64'],
            'name' => ['required', 'string', 'min:2', 'max:80'],
            'email' => ['required', 'email:rfc', 'max:191'],
            'reviewer_role' => ['required', Rule::in(array_keys(ReviewOptions::ROLES))],
            'rating' => ['required', 'integer', 'between:1,5'],
            'expertise' => ['required', 'integer', 'between:1,5'],
            'patience' => ['required', 'integer', 'between:1,5'],
            'reliability' => ['required', 'integer', 'between:1,5'],
            'communication' => ['required', 'integer', 'between:1,5'],
            'subject' => ['required', 'string', 'max:120'],
            'board' => ['required', Rule::in(array_keys(ReviewOptions::BOARDS))],
            'class_level' => ['required', Rule::in(array_keys(ReviewOptions::CLASSES))],
            'mode' => ['required', Rule::in(array_keys(ReviewOptions::MODES))],
            'duration' => ['required', Rule::in(array_keys(ReviewOptions::DURATIONS))],
            'tags' => ['nullable', 'array', 'max:'.ReviewOptions::MAX_TAGS],
            'tags.*' => ['string', Rule::in(array_keys(ReviewOptions::TAGS))],
            'message' => ['required', 'string', 'min:50', 'max:2000'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:'.config('reviews.photo_max_kb')],
            'consent' => ['accepted'],
        ], [
            'message.min' => 'Please write at least 50 characters about your experience.',
            'consent.accepted' => 'Please confirm this review is about your own experience.',
        ]);

        $teacher = $this->tutor($validated['user_id']);
        if (! $teacher) {
            return response()->json(['message' => 'This tutor could not be found.'], 404);
        }

        $email = Str::lower(trim($validated['email']));

        $alreadyReviewed = Teacher_review::where('user_id', $teacher->user_id)
            ->where('email', $email)
            ->where('moderation', '!=', Teacher_review::MODERATION_REJECTED)
            ->exists();
        if ($alreadyReviewed) {
            return response()->json([
                'message' => 'You have already reviewed '.$teacher->name.' with this email address.',
            ], 422);
        }

        $review = new Teacher_review([
            'user_id' => $teacher->user_id,
            'name' => trim($validated['name']),
            'email' => $email,
            'reviewer_role' => $validated['reviewer_role'],
            'rating' => (string) $validated['rating'],
            'expertise' => (string) $validated['expertise'],
            'patience' => (string) $validated['patience'],
            'reliability' => (string) $validated['reliability'],
            'communication' => (string) $validated['communication'],
            'subject' => trim($validated['subject']),
            'board' => $validated['board'],
            'class_level' => $validated['class_level'],
            'mode' => $validated['mode'],
            'duration' => $validated['duration'],
            'tags' => array_values(array_unique($validated['tags'] ?? [])),
            'message' => trim($validated['message']),
            'date' => now()->format('Y-m-d'),
        ]);

        if ($request->hasFile('photo')) {
            $review->photo = $this->storePhoto($request->file('photo'));
        }

        $verify = (bool) config('reviews.verify_email');
        $token = $verify ? Str::random(48) : null;

        $review->status = 'f';
        $review->moderation = $verify ? Teacher_review::MODERATION_UNVERIFIED : Teacher_review::MODERATION_PENDING;
        $review->verify_token_hash = $token ? hash('sha256', $token) : null;
        $review->verify_expires_at = $token ? now()->addHours((int) config('reviews.verify_link_hours')) : null;
        $review->ip_hash = hash('sha256', $request->ip().'|'.config('app.key'));
        $review->submitted_at = now();
        $review->save();

        if ($token) {
            try {
                Mail::to($email)->send(new ReviewVerificationMail($review, $teacher, $token));
            } catch (\Throwable $e) {
                // The review is saved either way; the admin queue shows it as
                // unverified, so a mail outage loses nothing.
                Log::warning('Review verification email failed', ['review' => $review->id, 'error' => $e->getMessage()]);
            }

            return response()->json([
                'message' => 'Thank you! We have sent a confirmation link to '.$email.'. Your review goes live after you confirm it and our team approves it.',
            ]);
        }

        return response()->json([
            'message' => 'Thank you! Your review has been received and will appear on '.$teacher->name.'\'s profile once our team approves it.',
        ]);
    }

    public function verify(string $token)
    {
        $review = Teacher_review::where('verify_token_hash', hash('sha256', $token))->first();

        $state = match (true) {
            ! $review => 'invalid',
            $review->verify_expires_at && $review->verify_expires_at->isPast() => 'expired',
            default => 'verified',
        };

        if ($state === 'verified') {
            $review->email_verified_at = now();
            $review->verify_token_hash = null;
            $review->verify_expires_at = null;
            if ($review->moderation === Teacher_review::MODERATION_UNVERIFIED) {
                $review->moderation = Teacher_review::MODERATION_PENDING;
            }
            $review->save();
        }

        $teacher = $review ? Register::where('user_id', $review->user_id)->first() : null;

        return view('tutor-review-verified', [
            'state' => $state,
            'teacher' => $teacher,
            'publicUrl' => $teacher?->profileUrl(),
            'metatitle' => 'Review confirmation | NXTutors',
            'metadesc' => null,
            'metakey' => null,
            'metarobots' => 'noindex, nofollow',
        ]);
    }

    private function tutor(string $userId): ?Register
    {
        return Register::where('user_id', $userId)
            ->where('join_as', 'teacher')
            ->where('status', 't')
            ->first();
    }

    /**
     * The tutor's own subjects, for the form's subject picker. Same two course
     * tables and the same reading as HomeController's "subjects offered".
     */
    private function subjectsOf(Register $teacher): array
    {
        $subjects = [];
        foreach ($teacher->effective_courses as $course) {
            if ($course instanceof \App\Models\Teacher_courses) {
                $subjects[] = $course->subject;
                continue;
            }
            foreach (($course->subjects ?? []) as $s) {
                $subjects[] = $s->title ?? null;
            }
            $subjects[] = $course->category?->cat_title;
        }

        return array_values(array_unique(array_filter(array_map(
            fn ($s) => is_string($s) ? trim($s) : null,
            $subjects
        ))));
    }

    private function storePhoto($file): string
    {
        $dir = public_path(config('reviews.photo_dir'));
        if (! is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

        // Never the client's filename: a random name with the detected type.
        $name = Str::lower(Str::random(32)).'.'.$file->guessExtension();
        $file->move($dir, $name);

        return $name;
    }
}
