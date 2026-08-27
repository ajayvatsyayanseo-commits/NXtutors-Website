<?php

declare(strict_types=1);

namespace App\NxtAi\Services;

use App\Models\Register;
use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Ranking\TutorRanker;
use App\NxtAi\Support\CityNormalizer;
use App\NxtAi\Support\PublicTutorFieldMapper;
use App\NxtAi\Support\TutorCardMapper;
use Illuminate\Support\Facades\DB;

/**
 * Executes and ranks tutor searches against the real `register` schema.
 *
 * Safety model: only `join_as='teacher' AND status='t'` rows; parameter-bound
 * queries only (no string interpolation); a bounded candidate pool; public
 * fields via PublicTutorFieldMapper; order decided by TutorRanker, never the LLM.
 */
final class TutorSearchService
{
    private const CANDIDATE_POOL = 80;

    public function __construct(
        private readonly PublicTutorFieldMapper $mapper,
        private readonly TutorCardMapper $cardMapper,
        private readonly TutorRanker $ranker,
    ) {
    }

    /**
     * @return array{cards:array<int,array<string,mixed>>, matched:int, pool:int}
     */
    public function search(TutorSearchCriteria $c): array
    {
        $pool = $this->candidateQuery($c)->limit(self::CANDIDATE_POOL)->get();

        // Map to public arrays (private columns never included).
        $public = [];
        foreach ($pool as $tutor) {
            $public[] = $this->mapper->toPublicArray($tutor);
        }

        $filtered = $this->applyContentFilters($public, $c);
        $ranked = $this->ranker->rank($filtered, $c);
        $top = array_slice($ranked, 0, $c->limit);

        return [
            'cards' => $this->cardMapper->toCards($top),
            'matched' => count($filtered),
            'pool' => $pool->count(),
        ];
    }

    /** Resolve a single active tutor by its public base64 token. */
    public function findByRef(string $ref): ?array
    {
        $userId = $this->decodeRef($ref);
        if ($userId === null) {
            return null;
        }

        $tutor = $this->baseQuery()
            ->where('register.user_id', $userId)
            ->first();

        return $tutor ? $this->mapper->toPublicArray($tutor) : null;
    }

    /** @param array<int,string> $refs */
    public function findManyByRefs(array $refs): array
    {
        $out = [];
        foreach ($refs as $ref) {
            $t = $this->findByRef($ref);
            if ($t !== null) {
                $out[] = $t;
            }
        }

        return $out;
    }

    private function candidateQuery(TutorSearchCriteria $c)
    {
        $q = $this->baseQuery();

        // Location (hard, tolerant): pincode and/or city aliases.
        $cityAliases = $c->city !== null ? CityNormalizer::aliasesFor($c->city) : [];
        if ($c->pincode !== null || $cityAliases !== []) {
            $q->where(function ($w) use ($c, $cityAliases): void {
                $has = false;
                if ($c->pincode !== null) {
                    $w->where('register.pincode', $c->pincode);
                    $has = true;
                }
                if ($cityAliases !== []) {
                    $method = $has ? 'orWhereIn' : 'whereIn';
                    $w->{$method}(DB::raw('LOWER(register.city)'), $cityAliases);
                }
            });
        }

        // Gender (hard).
        if ($c->gender !== null) {
            $q->whereRaw('LOWER(register.gender) = ?', [$c->gender]);
        }

        return $q->orderByDesc('reviews_count')
            ->orderByDesc('rating_avg')
            ->orderBy('register.id');
    }

    /** Base active-tutor query with the collation-safe rating aggregate joined. */
    private function baseQuery()
    {
        $ratings = DB::table('teacher_review')
            ->select('user_id')
            ->selectRaw('COUNT(*) as reviews_count')
            ->selectRaw('AVG(CAST(rating AS DECIMAL(4,2))) as rating_avg')
            ->where('status', 't')
            ->groupBy('user_id');

        // register + teacher_review use different default collations on MySQL,
        // so the join needs an explicit COLLATE. Other drivers (sqlite in tests)
        // don't support/need it — join plainly there.
        $isMysql = DB::connection()->getDriverName() === 'mysql';
        $collate = $isMysql ? ' COLLATE utf8mb4_unicode_ci' : '';

        return Register::query()
            ->from('register')
            ->where('register.join_as', 'teacher')
            ->where('register.status', 't')
            ->leftJoinSub($ratings, 'r', function ($join) use ($collate): void {
                $join->on(
                    DB::raw('register.user_id'.$collate),
                    '=',
                    DB::raw('r.user_id'.$collate)
                );
            })
            ->with(['coursess', 'courses.board', 'courses.classCategory', 'courses.category'])
            ->select('register.*')
            ->selectRaw('COALESCE(r.reviews_count, 0) as reviews_count')
            ->selectRaw('COALESCE(r.rating_avg, 0) as rating_avg');
    }

    /**
     * Content filters applied in PHP on public arrays (subject/board/class/mode
     * live across two course schemas — far simpler + safer than dynamic SQL).
     *
     * @param array<int,array<string,mixed>> $tutors
     * @return array<int,array<string,mixed>>
     */
    private function applyContentFilters(array $tutors, TutorSearchCriteria $c): array
    {
        return array_values(array_filter($tutors, function (array $t) use ($c): bool {
            // Subject is a hard filter: a Hindi tutor must not answer a Maths query.
            if ($c->subject !== null && ! $this->listMatch($t['subjects'] ?? [], $c->subject)) {
                return false;
            }
            // Budget: exclude only tutors whose known minimum fee exceeds the cap.
            if ($c->maxFee !== null && ($t['fee_min'] ?? null) !== null && $t['fee_min'] > $c->maxFee) {
                return false;
            }
            if ($c->minExperience !== null && ($t['experience_years'] ?? null) !== null && $t['experience_years'] < $c->minExperience) {
                return false;
            }
            if ($c->minRating !== null && (float) ($t['rating'] ?? 0) < $c->minRating) {
                return false;
            }

            return true;
        }));
    }

    private function listMatch(array $haystack, string $needle): bool
    {
        $n = trim(strtolower($needle));
        foreach ($haystack as $h) {
            $h = trim(strtolower((string) $h));
            if ($h !== '' && (str_contains($h, $n) || str_contains($n, $h))) {
                return true;
            }
        }

        return false;
    }

    /** Reverse of PublicTutorFieldMapper::publicToken(). */
    public function decodeRef(string $ref): ?string
    {
        $ref = trim($ref);
        if ($ref === '' || ! preg_match('/^[A-Za-z0-9\-_]+$/', $ref)) {
            return null;
        }
        $decoded = base64_decode(strtr($ref, '-_', '+/'), true);
        if ($decoded === false || ! str_ends_with($decoded, '-nxt')) {
            return null;
        }
        $userId = substr($decoded, 0, -4);

        return $userId !== '' ? $userId : null;
    }
}
