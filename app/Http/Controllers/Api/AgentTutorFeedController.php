<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Register;
use App\NxtAi\Support\PublicTutorFieldMapper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Read-only tutor feed for the NXTutors Tutor Intelligence Agent.
 *
 * The agent runs on AWS Lambda with no route to this database, so it reads
 * tutors here instead. This controller is GET-only and holds no write path at
 * all — the worst a bug here can do is publish fewer tutors than it should.
 *
 * Privacy is inherited, not re-implemented: the shape is built from
 * {@see PublicTutorFieldMapper}, the one place in this codebase allowed to turn
 * a tutor model into data that leaves the server. Its PRIVATE_COLUMNS list
 * (email, phone, password, otp, dob, KYC documents) is asserted against this
 * response in tests, so a column added to the model can never leak through
 * here.
 *
 * `address` is deliberately **not** published even though the mapper allows it
 * as `area`. The agent matches on locality and pincode granularity only, and a
 * street address it never receives is one it can never leak into a WhatsApp
 * message.
 *
 * Paging is keyset-free (offset/limit) on purpose: the agent's sync job wants a
 * stable full sweep ordered by primary key, and `register` is small (~1.9k
 * rows), so a deep offset costs nothing worth optimising away.
 */
final class AgentTutorFeedController extends Controller
{
    public function __construct(private readonly PublicTutorFieldMapper $mapper)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $max = max(1, (int) config('agent.max_page_size', 200));
        $limit = (int) $request->query('limit', (string) $max);
        $limit = max(1, min($limit, $max));
        $offset = max(0, (int) $request->query('offset', '0'));

        // One extra row answers "is there another page" without a COUNT(*) over
        // the whole table on every single request.
        $rows = $this->baseQuery()
            ->orderBy('id')
            ->offset($offset)
            ->limit($limit + 1)
            ->get();

        $hasMore = $rows->count() > $limit;
        $page = $hasMore ? $rows->slice(0, $limit) : $rows;

        $reviews = $this->reviewAggregates($page->pluck('user_id')->all());

        $tutors = $page
            ->map(fn (Register $tutor) => $this->toFeedRecord($tutor, $reviews))
            ->values()
            ->all();

        return response()->json([
            'tutors' => $tutors,
            'has_more' => $hasMore,
        ])->header('Cache-Control', 'no-store');
    }

    /**
     * Active tutors only, with both course schemas eager-loaded.
     *
     * The eager loads are what keep this O(1) queries instead of O(n): without
     * them, a page of 200 tutors issues 200 course queries plus three category
     * queries each. `courses` is the id-schema (teacher_course_managment) and
     * `coursess` is the string-schema (teacher_courses); the tutor base is
     * split across both, so loading only one loses roughly two thirds of all
     * capability data.
     */
    private function baseQuery()
    {
        return Register::query()
            ->where('join_as', 'teacher')
            ->where('status', 't')
            ->whereNotNull('user_id')
            ->where('user_id', '<>', '')
            ->with([
                'courses:id,user_id,pid,cid,cat_id,sub_id',
                'courses.category:id,cat_title,status',
                'courses.board:id,cat_title,status',
                'courses.classCategory:id,cat_title,status',
                'coursess',
            ]);
    }

    /**
     * Review aggregates for one page, in a single grouped query.
     *
     * Ratings are stored as varchar, so every average casts and discards
     * unparseable values rather than treating them as zero — a blank rating is
     * missing evidence, not a bad score.
     *
     * @param  array<int,string>  $userIds
     * @return array<string,object>
     */
    private function reviewAggregates(array $userIds): array
    {
        $userIds = array_values(array_filter($userIds));
        if ($userIds === []) {
            return [];
        }

        // `register.user_id` and `teacher_review.user_id` carry different
        // collations in production (utf8mb4_unicode_ci vs utf8mb4_general_ci).
        // Binding the ids rather than joining the tables sidesteps the "illegal
        // mix of collations" error entirely.
        return DB::table('teacher_review')
            ->selectRaw('user_id')
            ->selectRaw('COUNT(*) AS review_count')
            ->selectRaw('AVG(CAST(NULLIF(rating, \'\') AS DECIMAL(4,2))) AS rating_avg')
            ->selectRaw('AVG(CAST(NULLIF(expertise, \'\') AS DECIMAL(4,2))) AS expertise_avg')
            ->selectRaw('AVG(CAST(NULLIF(patience, \'\') AS DECIMAL(4,2))) AS patience_avg')
            ->selectRaw('AVG(CAST(NULLIF(reliability, \'\') AS DECIMAL(4,2))) AS reliability_avg')
            ->selectRaw('AVG(CAST(NULLIF(communication, \'\') AS DECIMAL(4,2))) AS communication_avg')
            ->selectRaw('MAX(`date`) AS latest_review_date')
            ->where('status', 't')
            ->whereIn('user_id', $userIds)
            ->groupBy('user_id')
            ->get()
            ->keyBy('user_id')
            ->all();
    }

    /**
     * One record in the shape the agent's FeedTutor model validates.
     *
     * @param  array<string,object>  $reviews
     * @return array<string,mixed>
     */
    private function toFeedRecord(Register $tutor, array $reviews): array
    {
        $capabilities = $this->mapper->capabilities($tutor);
        $aggregate = $reviews[(string) $tutor->user_id] ?? null;

        return [
            'user_id' => (string) $tutor->user_id,
            'name' => (string) ($tutor->name ?? ''),
            'gender' => $tutor->gender,
            'avatar' => $this->mapper->imageUrl($tutor->avatar),
            'city' => $tutor->city,
            // Locality, never the street address. See the class docblock.
            'locality' => null,
            'district' => $tutor->district,
            'state' => $tutor->state,
            'pincode' => $tutor->pincode,
            'experience' => $tutor->experience,
            'education' => trim(((string) ($tutor->education ?? '')).' '.((string) ($tutor->other_education ?? ''))),
            'profile_summary' => (string) ($tutor->profile_desc ?? $tutor->profile ?? $tutor->pro_desc ?? ''),
            'budget' => $tutor->budget,
            'subjects' => $capabilities['subjects'],
            'boards' => $capabilities['boards'],
            'classes' => $capabilities['classes'],
            'modes' => $capabilities['modes'],
            'reviews' => $this->reviewPayload($aggregate),
            // The schema holds no tutor schedules, so the agent's availability
            // dimension correctly reports MISSING rather than inventing one.
            // When this site starts capturing them, publish them here as
            // {"timezone": "...", "windows": [{"weekday": 0, "start": "18:30",
            // "end": "19:30"}]} and the agent uses them with no change.
            'availability' => null,
            'updated_at' => $this->updatedAt($tutor),
        ];
    }

    /** @return array<string,mixed> */
    private function reviewPayload(?object $aggregate): array
    {
        if ($aggregate === null) {
            return ['count' => 0];
        }

        return [
            'count' => (int) $aggregate->review_count,
            'rating_avg' => $this->rating($aggregate->rating_avg),
            'expertise_avg' => $this->rating($aggregate->expertise_avg),
            'patience_avg' => $this->rating($aggregate->patience_avg),
            'reliability_avg' => $this->rating($aggregate->reliability_avg),
            'communication_avg' => $this->rating($aggregate->communication_avg),
            'latest_review_at' => $this->isoDate($aggregate->latest_review_date ?? null),
        ];
    }

    /**
     * A rating outside 0..5 is malformed source data, not a perfect score, so
     * it becomes null. The agent rejects the whole page on an out-of-range
     * value, and it is right to — better a failed sync than a fabricated 9.9.
     */
    private function rating(mixed $value): ?float
    {
        if ($value === null || $value === '') {
            return null;
        }
        $parsed = (float) $value;

        return ($parsed >= 0.0 && $parsed <= 5.0) ? round($parsed, 2) : null;
    }

    /** `teacher_review.date` is free text; publish ISO 8601 or nothing. */
    private function isoDate(mixed $raw): ?string
    {
        $text = trim((string) $raw);
        if ($text === '') {
            return null;
        }
        foreach (['Y-m-d H:i:s', 'Y-m-d', 'd-m-Y', 'd/m/Y', 'Y/m/d'] as $format) {
            $parsed = \DateTimeImmutable::createFromFormat($format, $text);
            if ($parsed !== false) {
                return $parsed->format(\DATE_ATOM);
            }
        }

        return null;
    }

    /**
     * `register` has no updated_at (`public $timestamps = false`), so the
     * closest honest signal is the free-text `date` column. Returning null when
     * it cannot be parsed is correct: the agent then stamps the sync time
     * rather than inventing a source timestamp.
     */
    private function updatedAt(Register $tutor): ?string
    {
        return $this->isoDate($tutor->date ?? null);
    }
}
