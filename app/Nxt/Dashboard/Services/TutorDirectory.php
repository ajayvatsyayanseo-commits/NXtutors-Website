<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Models\Register;
use App\Models\Teacher_review;
use App\Nxt\Dashboard\Models\ReliabilityScore;
use App\Nxt\Dashboard\Models\TutorAvailability;
use App\Nxt\Dashboard\Models\TutorVerification;
use App\NxtAi\Support\PublicTutorFieldMapper;
use Illuminate\Support\Collection;

/**
 * Tutor data for the in-app screens.
 *
 * Every tutor field that leaves the server still goes through
 * PublicTutorFieldMapper, which is the repository's single allowlist for that;
 * this class only adds the things the dashboard knows about and the public site
 * does not — live availability, verification state and the reliability score.
 *
 * Contact details are deliberately absent. The brief makes tutor contact a
 * metered credit, and a phone number rendered anywhere in the app would make
 * that meter unenforceable.
 */
class TutorDirectory
{
    public function __construct(private readonly PublicTutorFieldMapper $mapper)
    {
    }

    public function card(Register $tutor): array
    {
        return $this->mapper->toPublicArray($tutor) + [
            'user_id' => $tutor->user_id,
            'verified' => $this->isVerified((string) $tutor->user_id),
            'reliability' => $this->reliability((string) $tutor->user_id),
        ];
    }

    /**
     * The in-app profile (S3b): everything a family needs to decide on a demo.
     */
    public function profile(Register $tutor): array
    {
        $userId = (string) $tutor->user_id;

        return $this->card($tutor) + [
            'availability' => $this->availability($userId),
            'reviews' => $this->reviews($userId),
            'verification' => $this->verificationSummary($userId),
        ];
    }

    /**
     * Ratings come from `teacher_review`, which stores four separate scores per
     * review. The public site averages only the overall one; the dashboard shows
     * the breakdown, because that is what distinguishes tutors once every card
     * says 4.8.
     */
    public function reviews(string $tutorUserId, int $limit = 20): array
    {
        $reviews = Teacher_review::where('user_id', $tutorUserId)
            ->where('status', 't')
            ->orderByDesc('id')
            ->limit($limit)
            ->get();

        return [
            'count' => Teacher_review::where('user_id', $tutorUserId)->where('status', 't')->count(),
            'average' => $this->averageOf($reviews, 'rating'),
            'breakdown' => [
                'expertise' => $this->averageOf($reviews, 'expertise'),
                'patience' => $this->averageOf($reviews, 'patience'),
                'reliability' => $this->averageOf($reviews, 'reliability'),
                'communication' => $this->averageOf($reviews, 'communication'),
            ],
            'items' => $reviews->map(fn (Teacher_review $r): array => [
                'id' => $r->id,
                'name' => $r->name,
                'rating' => (float) $r->rating,
                'expertise' => (float) $r->expertise,
                'patience' => (float) $r->patience,
                'reliability' => (float) $r->reliability,
                'communication' => (float) $r->communication,
                'message' => $r->message,
                'date' => $r->date,
                'photo_url' => $r->photoUrl(),
                'email_verified' => $r->isEmailVerified(),
                'context' => $r->contextLine() ?: null,
                'tags' => $r->tagLabels(),
            ])->all(),
        ];
    }

    /** The weekly pattern, as the booking screen and the matching engine see it. */
    public function availability(string $tutorUserId): array
    {
        return TutorAvailability::where('tutor_user_id', $tutorUserId)
            ->orderBy('weekday')
            ->orderBy('start_time')
            ->get()
            ->map(fn (TutorAvailability $a): array => [
                'id' => $a->id,
                'weekday' => $a->weekday,
                'start_time' => substr((string) $a->start_time, 0, 5),
                'end_time' => substr((string) $a->end_time, 0, 5),
                'mode' => $a->mode,
            ])
            ->all();
    }

    public function reliability(string $tutorUserId): ?array
    {
        $score = ReliabilityScore::where('tutor_user_id', $tutorUserId)
            ->orderByDesc('window_end')
            ->first();

        if (! $score) {
            return null;
        }

        return [
            'score' => $score->score,
            'punctuality' => $score->punctuality,
            'response' => $score->response,
            'completion' => $score->completion,
            'window_start' => $score->window_start?->toDateString(),
            'window_end' => $score->window_end?->toDateString(),
            'top_events' => $score->top_events ?? [],
        ];
    }

    /**
     * One definition of "verified", used both for the badge a family sees and
     * for the gate on a tutor receiving leads. Two definitions drifted apart
     * once already: a tutor can be shown a verified badge while the lead queue
     * silently refuses them, which is the worst of both.
     */
    public function isVerified(string $tutorUserId): bool
    {
        return $this->verificationSummary($tutorUserId)['verified'];
    }

    /**
     * Verification as the tutor sees it on Growth: every document, its state and
     * what is still missing. A tutor blocked from leads is owed the reason.
     */
    public function verificationSummary(string $tutorUserId): array
    {
        $docs = TutorVerification::where('tutor_user_id', $tutorUserId)->get()->keyBy('doc_type');

        $types = ['id_proof', 'qualification', 'address_proof', 'police_verification'];
        $items = [];

        foreach ($types as $type) {
            $doc = $docs->get($type);

            $items[] = [
                'doc_type' => $type,
                'label' => match ($type) {
                    'id_proof' => 'Photo ID',
                    'qualification' => 'Qualification certificate',
                    'address_proof' => 'Address proof',
                    default => 'Police verification (optional)',
                },
                'required' => $type !== 'police_verification',
                'status' => $doc?->status ?? 'missing',
                'comment' => $doc?->reviewer_comment,
                'reviewed_at' => $doc?->reviewed_at?->toIso8601String(),
            ];
        }

        $missing = array_values(array_filter(
            $items,
            fn (array $i): bool => $i['required'] && $i['status'] !== 'approved',
        ));

        return [
            'verified' => $missing === [],
            'documents' => $items,
            'missing' => array_column($missing, 'label'),
        ];
    }

    /**
     * Profile completeness, and — more useful than the percentage — the single
     * highest-impact thing to do next. Home shows only that one step.
     */
    public function completeness(Register $tutor): array
    {
        $checks = [
            ['field' => 'avatar', 'done' => filled($tutor->avatar), 'label' => 'Add a profile photo', 'weight' => 15,
                'why' => 'Families skip cards without a face.'],
            ['field' => 'profile_desc', 'done' => filled($tutor->profile_desc) || filled($tutor->profile), 'label' => 'Write your teaching approach', 'weight' => 15,
                'why' => 'This is the first thing a parent reads.'],
            ['field' => 'experience', 'done' => filled($tutor->experience), 'label' => 'Add your years of experience', 'weight' => 10,
                'why' => 'Matching ranks experience for board classes.'],
            ['field' => 'education', 'done' => filled($tutor->education) || filled($tutor->other_education), 'label' => 'Add your qualification', 'weight' => 10,
                'why' => 'Parents filter on qualification.'],
            ['field' => 'budget', 'done' => filled($tutor->budget), 'label' => 'Set your hourly rate', 'weight' => 15,
                'why' => 'Leads are matched on budget band; without a rate you are left out.'],
            ['field' => 'subjects', 'done' => $this->hasSubjects((string) $tutor->user_id), 'label' => 'Add the subjects and classes you teach', 'weight' => 20,
                'why' => 'A tutor with no subjects receives no leads at all.'],
            ['field' => 'availability', 'done' => TutorAvailability::where('tutor_user_id', $tutor->user_id)->exists(), 'label' => 'Set your weekly availability', 'weight' => 15,
                'why' => 'Matching compares your free slots against the ones a family asks for.'],
        ];

        $earned = array_sum(array_column(array_filter($checks, fn (array $c): bool => $c['done']), 'weight'));

        $next = collect($checks)->firstWhere('done', false);

        return [
            'percent' => $earned,
            'checks' => $checks,
            'next_step' => $next ? [
                'label' => $next['label'],
                'why' => $next['why'],
                'field' => $next['field'],
            ] : null,
        ];
    }

    private function hasSubjects(string $tutorUserId): bool
    {
        return \App\Models\Teacher_course::where('user_id', $tutorUserId)->exists()
            || \App\Models\Teacher_courses::where('user_id', $tutorUserId)->exists();
    }

    private function averageOf(Collection $reviews, string $column): float
    {
        $values = $reviews->pluck($column)->filter(fn ($v): bool => is_numeric($v))->map(fn ($v): float => (float) $v);

        return $values->isEmpty() ? 0.0 : round($values->avg(), 1);
    }
}
