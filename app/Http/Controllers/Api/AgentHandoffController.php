<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NxtHandoff;
use App\NxtAi\Services\TutorSearchService;
use App\Services\WhatsAppHandoff;
use App\Support\Geo;
use App\Support\Zones;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * What the Lead Intake agent reads (docs/contracts/lead-intake-handoff-v1.md).
 * Signed GETs only (VerifyAgentSignature); tutor data is shaped by
 * PublicTutorFieldMapper, so nothing private leaves the server.
 */
final class AgentHandoffController extends Controller
{
    public function __construct(
        private readonly WhatsAppHandoff $handoffs,
        private readonly TutorSearchService $search,
    ) {
    }

    /** GET /internal/agent/handoffs/{code} */
    public function show(string $code): JsonResponse
    {
        $code = strtoupper(trim($code));
        $h = preg_match(WhatsAppHandoff::CODE_PATTERN, $code) ? NxtHandoff::live()->where('code', $code)->first() : null;
        if (! $h) {
            return response()->json(['error' => 'not_found'], 404);
        }

        $h->forceFill(['fetched_at' => now(), 'fetch_count' => $h->fetch_count + 1])->save();

        return response()->json($this->handoffs->toAgentArray($h));
    }

    /** GET /internal/agent/tutors/resolve?name=&city=&subject= */
    public function resolve(Request $request): JsonResponse
    {
        $name = trim((string) $request->query('name', ''));
        if (mb_strlen($name) < 2 || mb_strlen($name) > 80) {
            return response()->json(['error' => 'name_required'], 422);
        }
        $city = trim((string) $request->query('city', ''));
        $subject = mb_strtolower(trim((string) $request->query('subject', '')));

        $want = $this->norm($name);
        $scored = [];
        foreach ($this->search->findByName($name) as $t) {
            $full = $this->norm((string) ($t['name'] ?? ''));
            $others = array_map(fn ($n) => $this->norm((string) $n), (array) ($t['other_names'] ?? []));

            [$match, $score] = match (true) {
                $full === $want => ['exact', 100],
                in_array($want, $others, true) => ['other_name', 90],
                $this->allWordsIn($want, $full) => ['partial', 70],
                (bool) array_filter($others, fn ($o) => $this->allWordsIn($want, $o)) => ['partial', 60],
                default => [null, 0],
            };
            if ($match === null) {
                continue;
            }

            $tutorCity = (string) (($t['home_city'] ?? null) ?: ($t['city'] ?? ''));
            if ($city !== '' && (Geo::slugFor($tutorCity) ?: mb_strtolower($tutorCity)) === (Geo::slugFor(Zones::cityOf($city) ?: $city) ?: mb_strtolower($city))) {
                $score += 10;
            }
            if ($subject !== '' && array_filter((array) ($t['subjects'] ?? []), fn ($s) => str_contains(mb_strtolower((string) $s), $subject))) {
                $score += 5;
            }
            if (empty($t['is_sample'])) {
                $score += 1000; // real tutors first, always
            }

            $userId = (string) $this->search->decodeRef((string) ($t['ref'] ?? ''));
            $scored[] = [$score, $this->handoffs->agentTutor($t, $userId, 'candidate') + ['match' => $match]];
        }

        usort($scored, fn ($a, $b) => $b[0] <=> $a[0]);

        return response()->json(['candidates' => array_slice(array_column($scored, 1), 0, 5)]);
    }

    private function norm(string $s): string
    {
        return trim(preg_replace('/\s+/u', ' ', mb_strtolower(preg_replace('/[^\pL\pN ]+/u', ' ', $s) ?? '')) ?? '');
    }

    /** Every word typed appears as a word of the name ("abhinandan" in "abhinandan tiwary"). */
    private function allWordsIn(string $typed, string $name): bool
    {
        $have = explode(' ', $name);
        foreach (explode(' ', $typed) as $w) {
            if ($w !== '' && ! in_array($w, $have, true)) {
                return false;
            }
        }

        return $typed !== '';
    }
}
