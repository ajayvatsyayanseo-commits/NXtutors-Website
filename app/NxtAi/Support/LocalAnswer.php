<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

use App\Support\SearchQuery;

/**
 * Answers the common, general questions (fees, how the demo works, timings,
 * home or online, switching tutor, what NXTutors is) straight from the
 * canonical knowledge base in config/nxt-ai.php, without calling OpenAI.
 *
 * Deliberately narrow: a short question, no subject or place in it, and not
 * a request to book or find someone. Anything else goes to the agent, which
 * has the tools to search tutors and book demos.
 */
final class LocalAnswer
{
    private const MAX_WORDS = 10;

    /** intent key => [pattern, knowledge key] (first match wins) */
    private const INTENTS = [
        'fees' => ['/\b(?:fee|fees|charge|charges|cost|costs|price|pricing|rate|rates|how much|kitna|kitne)\b/', 'fees'],
        'payment' => ['/\b(?:payment|pay|advance|refund|cancel|cancellation|upi|card|net banking)\b/', 'fee_payment'],
        'switch' => ['/\b(?:change|switch|replace)\b.*\btutor\b|\btutor\b.*\b(?:change|switch|replace)\b/', 'switch'],
        'demo' => ['/\b(?:demo|trial)\b/', 'demo'],
        'timings' => ['/\b(?:timing|timings|slot|slots|availability|available|weekend|weekends|evening|evenings)\b/', 'timings'],
        'modes' => ['/\b(?:online|offline|home tuition|at home|in person)\b/', 'modes'],
        'about' => ['/\b(?:what is nxtutors|who are you|about nxtutors|about you|what do you do)\b/', 'about'],
    ];

    /** Words that mean "do something for me", which the agent's tools handle. */
    private const ACTIONS = '/\b(?:book|booking|schedule|arrange|want|need|find|looking|search|show|suggest|recommend|near me|call me|contact)\b/';

    /**
     * @return array{key:string, reply:string, blocks:array, quick_replies:list<string>}|null
     */
    public static function match(string $message): ?array
    {
        $m = mb_strtolower(trim(preg_replace('/\s+/', ' ', $message)));
        if ($m === '' || str_word_count($m) > self::MAX_WORDS || preg_match(self::ACTIONS, $m)) {
            return null;
        }

        // "maths tutor fees in Gurugram" is a search: leave it to the agent.
        $q = SearchQuery::parse($m);
        if ($q['known'] || $q['city'] || $q['area'] || $q['pincode'] || $q['board'] || $q['class']) {
            return null;
        }

        foreach (self::INTENTS as $key => [$pattern, $docKey]) {
            if (! preg_match($pattern, $m)) {
                continue;
            }
            $doc = self::doc($docKey);
            if (! $doc) {
                return null;
            }
            $reply = $doc['snippet'];
            if ($key === 'fees' && ($note = config('nxt-ai.pricing.note'))) {
                $reply .= ' ' . $note;
            }

            return [
                'key' => $key,
                'reply' => $reply,
                'blocks' => [[
                    'type' => 'website_information',
                    'title' => $doc['title'],
                    'items' => [$doc],
                ]],
                'quick_replies' => $key === 'demo'
                    ? ['Book a free demo', 'Find a tutor near me']
                    : ['Find a tutor near me', 'Book a free demo'],
            ];
        }

        return null;
    }

    private static function doc(string $key): ?array
    {
        foreach ((array) config('nxt-ai.knowledge', []) as $doc) {
            if (($doc['key'] ?? null) === $key) {
                return $doc;
            }
        }

        return null;
    }
}
