<?php

declare(strict_types=1);

namespace App\NxtAi\Services;

use App\Models\Register;
use App\NxtAi\DTO\TutorSearchCriteria;
use App\NxtAi\Ranking\TutorRanker;
use App\NxtAi\Support\CityNormalizer;
use App\NxtAi\Support\PublicTutorFieldMapper;
use App\NxtAi\Support\SubjectNormalizer;
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
    // Content filters (subject/class/board/mode) are applied in PHP AFTER this
    // cut, so the pool must be wide enough that a subject search is not
    // starved by whichever 80 tutors happen to have the most reviews.
    private const CANDIDATE_POOL = 240;

    // Below this many real (non-sample) tutors in the city, widen the search.
    private const MIN_REAL = 3;

    public function __construct(
        private readonly PublicTutorFieldMapper $mapper,
        private readonly TutorCardMapper $cardMapper,
        private readonly TutorRanker $ranker,
    ) {
    }

    /**
     * @return array{cards:array<int,array<string,mixed>>, matched:int, pool:int, relaxed:?string}
     */
    public function search(TutorSearchCriteria $c): array
    {
        // Same question, same answer for ten minutes: the cascade can run
        // several pooled queries, and tutor data changes slowly.
        try {
            return \Illuminate\Support\Facades\Cache::remember(
                'tsearch.v4.'.md5(serialize($c)), 600, fn () => $this->searchNow($c)
            );
        } catch (\Throwable $e) {
            return $this->searchNow($c);
        }
    }

    private function searchNow(TutorSearchCriteria $c): array
    {
        $pool = $this->pool($c);

        // Map to public arrays (private columns never included).
        $public = [];
        foreach ($pool as $tutor) {
            $public[] = $this->mapper->toPublicArray($tutor);
        }

        $filtered = $this->applyContentFilters($public, $c);
        $relaxed = null;
        $widened = null;
        // Real tutors actually in the city, before any widening.
        $realLocal = $this->realCount($filtered);

        // Location cascade: area and zone are ranked inside the city; if the
        // city has fewer than MIN_REAL real tutors who fit, widen to the
        // state, then to online-capable tutors anywhere in India. The ranker
        // labels each card with how far it had to go.
        if ($c->city !== null && $c->teachingMode !== 'online' && $this->realCount($filtered) < self::MIN_REAL) {
            foreach (['state', 'country'] as $level) {
                $wider = [];
                foreach ($this->widerPool($c, $level) as $tutor) {
                    $wider[] = $this->mapper->toPublicArray($tutor);
                }
                $wider = $this->applyContentFilters($wider, $c);
                if ($level === 'country') {
                    $wider = array_values(array_filter($wider, fn ($t) => $this->canTeachOnline($t)));
                }
                $before = count($filtered);
                $filtered = $this->mergeByRef($filtered, $wider);
                if (count($filtered) > $before) {
                    $widened = $level;
                }
                if ($this->realCount($filtered) >= self::MIN_REAL) {
                    break;
                }
            }
        }

        // A subject nobody in this city is tagged with would otherwise dead-end
        // the chat. Show the location matches instead and report the relaxation
        // so the caller can say so honestly.
        if ($filtered === [] && $c->subject !== null) {
            $public = [];
            foreach ($this->candidateQuery($c->withoutSubject())->limit(self::CANDIDATE_POOL)->get() as $tutor) {
                $public[] = $this->mapper->toPublicArray($tutor);
            }
            $filtered = $this->applyContentFilters($public, $c->withoutSubject());
            $relaxed = $filtered !== [] ? 'subject' : null;
        }

        $ranked = $this->ranker->rank($filtered, $c);
        $top = array_slice($ranked, 0, $c->limit);

        return [
            'cards' => $this->cardMapper->toCards($top),
            'matched' => count($filtered),
            'pool' => $pool->count(),
            'relaxed' => $relaxed,
            'widened' => $widened,
            'real' => $this->realCount($filtered),
            'real_local' => $relaxed ? 0 : ($c->city !== null && $c->teachingMode !== 'online' ? $realLocal : $this->realCount($filtered)),
        ];
    }

    /**
     * Tutors whose name, or a name they are also known by, contains the
     * first word typed ("Abhinandan", "Ajay Sir"). Used by the Lead Intake
     * agent to find the tutor a parent names on WhatsApp; the caller ranks.
     *
     * @return array<int,array<string,mixed>> public tutor arrays
     */
    public function findByName(string $name, int $limit = 30): array
    {
        $words = array_values(array_filter(
            preg_split('/\s+/u', mb_strtolower(trim(preg_replace('/[^\pL\pN ]+/u', ' ', $name) ?? ''))) ?: [],
            fn ($w) => mb_strlen($w) >= 2
        ));
        if ($words === []) {
            return [];
        }
        $like = '%'.str_replace(['%', '_'], ['\%', '\_'], $words[0]).'%';
        $hasOther = \Illuminate\Support\Facades\Schema::hasColumn('register', 'other_names');

        $out = [];
        foreach ($this->baseQuery()->where(function ($w) use ($like, $hasOther): void {
            $w->where('register.name', 'like', $like);
            if ($hasOther) {
                $w->orWhere('register.other_names', 'like', $like);
            }
        })->limit($limit)->get() as $tutor) {
            $out[] = $this->mapper->toPublicArray($tutor);
        }

        return $out;
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

    /**
     * The candidate pool: the top CANDIDATE_POOL by reviews, plus, with a
     * subject, tutors whose own bio mentions it (those were often outside the
     * first 240). Own columns only: no cross-table join, whose collations
     * differ on MySQL. The PHP filters decide exactly who matches.
     */
    private function pool(TutorSearchCriteria $c, ?array $cityAliases = null)
    {
        $pool = $this->candidateQuery($c, $cityAliases)->limit(self::CANDIDATE_POOL)->get();
        if ($c->subject !== null && ($terms = SubjectNormalizer::searchTerms($c->subject)) !== []) {
            $byBio = $this->candidateQuery($c, $cityAliases)->where(function ($w) use ($terms): void {
                foreach ($terms as $term) {
                    $like = '%'.str_replace(['%', '_'], ['\%', '\_'], $term).'%';
                    $w->orWhere('register.profile', 'like', $like)
                        ->orWhere('register.profile_desc', 'like', $like)
                        ->orWhere('register.pro_desc', 'like', $like);
                }
            })->limit(self::CANDIDATE_POOL)->get();
            $pool = $pool->concat($byBio)->unique('user_id')->values();
        }

        return $pool;
    }

    /** Tutors in the rest of the city's state, or anywhere (country). */
    private function widerPool(TutorSearchCriteria $c, string $level)
    {
        if ($level === 'country') {
            return $this->pool(new TutorSearchCriteria(
                subject: $c->subject, classLevel: $c->classLevel, board: $c->board,
                teachingMode: 'online', gender: $c->gender, limit: $c->limit,
            ));
        }

        $slug = \App\Support\Geo::slugFor((string) $c->city);
        $state = $slug !== '' ? \App\Support\Geo::stateOf($slug) : '';
        if ($state === '') {
            return collect();
        }
        $aliases = [];
        foreach (\App\Support\Geo::CITIES as $citySlug => $info) {
            if ($citySlug !== $slug && ($info['state'] ?? null) === $state) {
                $aliases = array_merge($aliases, [$citySlug], $info['aliases'] ?? [], \App\Support\Zones::rawCityNames($citySlug));
            }
        }

        return $aliases === [] ? collect() : $this->pool($c, array_values(array_unique(array_map('strtolower', $aliases))));
    }

    private function realCount(array $tutors): int
    {
        return count(array_filter($tutors, fn ($t) => empty($t['is_sample'])));
    }

    private function canTeachOnline(array $t): bool
    {
        $modes = array_map('strtolower', (array) ($t['teaching_modes'] ?? []));

        return $modes === [] || in_array('online', $modes, true);
    }

    private function mergeByRef(array $a, array $b): array
    {
        $seen = array_flip(array_column($a, 'ref'));
        foreach ($b as $t) {
            if (! isset($seen[$t['ref']])) {
                $a[] = $t;
                $seen[$t['ref']] = true;
            }
        }

        return $a;
    }

    private function candidateQuery(TutorSearchCriteria $c, ?array $cityAliasesOverride = null)
    {
        $q = $this->baseQuery();

        // Online: where the tutor lives does not matter, so no location
        // filter (the ranker still gives same-city a small edge).
        // Home or unspecified: location is hard and tolerant: pincode and/or
        // the city's aliases plus every locality-style "city" value that
        // belongs to it ("Wazirabad", "Sector 37D" are Gurugram).
        $cityAliases = $cityAliasesOverride ?? ($c->city !== null && $c->teachingMode !== 'online'
            ? array_values(array_unique(array_merge(CityNormalizer::aliasesFor($c->city), \App\Support\Zones::rawCityNames($c->city))))
            : []);
        $pincode = $c->teachingMode === 'online' || $cityAliasesOverride !== null ? null : $c->pincode;
        if ($pincode !== null || $cityAliases !== []) {
            $q->where(function ($w) use ($pincode, $cityAliases): void {
                $has = false;
                if ($pincode !== null) {
                    $w->where('register.pincode', $pincode);
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

        // Real tutors enter the capped pool before sample profiles.
        return $q->realFirst('register')
            ->orderByDesc('reviews_count')
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
            ->listable('register')
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
            if ($c->subject !== null && ! $this->subjectMatch($t['subjects'] ?? [], $c->subject)) {
                return false;
            }
            // Mode is hard only when the tutor's modes are known: a home-only
            // tutor is not an online match, and the reverse. Unknown = either.
            $modes = array_map('strtolower', (array) ($t['teaching_modes'] ?? []));
            if (in_array($c->teachingMode, ['online', 'home'], true) && $modes !== [] && ! in_array($c->teachingMode, $modes, true)) {
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

    /**
     * Match a subject against its whole alias set. The DB stores "Maths" while
     * the normalizer canonicalises to "Mathematics"; comparing only the
     * canonical form matched nothing.
     */
    private function subjectMatch(array $haystack, string $subject): bool
    {
        foreach (SubjectNormalizer::searchTerms($subject) as $term) {
            if ($this->listMatch($haystack, $term)) {
                return true;
            }
        }

        return false;
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
