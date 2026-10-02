<?php

namespace App\Support;

/**
 * Turns a tutor's plain-text bio (register.profile_desc) into the parts of the
 * profile's About section: a one-look intro, one card per heading, a numbered
 * path for a step list, student quotes set apart, and the closing call to
 * action. Nothing here invents a fact: every word shown comes from the bio.
 *
 * The bio format is the one the profile form produces: blank lines separate
 * blocks; a block whose lines all start with "•" or "-" is a list; a short
 * single line without end punctuation is a heading; anything else is a
 * paragraph. Output is plain text; the view escapes it.
 */
final class TutorAbout
{
    /** What a parent can say they came for, and the words that show a card is about it. */
    public const INTENTS = [
        'board' => ['Board exams', '/\b(cbse|icse|isc|state board|boards?|class(?:es)?\s*(?:9|10|11|12|ix|x|xi|xii)\b)/i'],
        'intl' => ['IB / IGCSE', '/\b(ib|igcse|cambridge|a\s?levels?|as\/a|myp|dp ?[12])\b/i'],
        'entrance' => ['JEE / NEET', '/\b(jee|neet|bitsat|sat|olympiads?|entrance|cuet)\b/i'],
        'where' => ['Home or online', '/\b(home|online|sectors?|travel)\b/i'],
    ];

    private const TAG_MAX = 64;

    private const LEAD_MAX = 300;

    /**
     * @return array{
     *   intro: array{lead: string, more: list<string>},
     *   headline: ?string,
     *   cards: list<array<string, mixed>>,
     *   quotes: list<string>,
     *   cta: ?string,
     *   intents: array<string, string>,
     *   quotesAfter: int
     * }
     */
    public static function parse(string $text, array $travelAreas = []): array
    {
        $blocks = self::blocks($text);

        // Blocks before the first heading are the intro; each heading opens a section.
        $intro = [];
        $sections = [];
        foreach ($blocks as $b) {
            if ($b['type'] === 'h') {
                $sections[] = ['title' => $b['text'], 'blocks' => []];
            } elseif ($sections) {
                $sections[count($sections) - 1]['blocks'][] = $b;
            } else {
                $intro[] = $b;
            }
        }

        // Student and parent quotes come out of the running text and stand on their own.
        $quotes = [];
        $sections = array_map(function (array $s) use (&$quotes) {
            $s['blocks'] = array_values(array_filter($s['blocks'], function (array $b) use (&$quotes) {
                if ($b['type'] !== 'p' || ! preg_match('/\b(review|wrote|said|says|told)\b/i', $b['text'])) {
                    return true;
                }
                preg_match_all('/["“]([^"”]{20,300})["”]/u', $b['text'], $m);
                if (! $m[1]) {
                    return true;
                }
                array_push($quotes, ...array_map('trim', $m[1]));

                return false;
            }));

            return $s;
        }, $sections);

        // A closing "Book a demo" section becomes the call to action, not a card.
        $cta = null;
        $last = end($sections);
        if ($last && preg_match('/\b(book|demo|get started|contact)\b/i', $last['title'])) {
            array_pop($sections);
            $cta = self::firstSentences(implode(' ', array_column(array_filter($last['blocks'], fn ($b) => $b['type'] === 'p'), 'text')), 2);
        }

        $cards = [];
        $headline = null;
        foreach ($sections as $s) {
            $own = count($cards);
            foreach (self::cardsFor($s, $travelAreas) as $card) {
                $cards[] = $card;
            }
            if ($headline === null && preg_match('/\b(how|approach|method|style)\b/i', $s['title'])) {
                $firstP = collect($s['blocks'])->firstWhere('type', 'p');
                $first = $firstP ? self::firstSentences($firstP['text'], 1) : '';
                if ($first !== '' && mb_strlen($first) <= 90) {
                    $headline = $first;
                    // Said once, at the top: the card goes on from the next sentence.
                    if (str_starts_with($cards[$own]['lead'], $first)) {
                        $cards[$own]['lead'] = trim(mb_substr($cards[$own]['lead'], mb_strlen($first)));
                        if ($cards[$own]['lead'] === '' && ($cards[$own]['more'][0]['type'] ?? '') === 'p') {
                            $cards[$own]['lead'] = array_shift($cards[$own]['more'])['text'];
                        }
                    }
                }
            }
        }
        $cards = self::layout($cards);

        $present = [];
        foreach ($cards as $c) {
            foreach ($c['intents'] as $i) {
                $present[$i] = self::INTENTS[$i][0];
            }
        }
        $intents = count($present) >= 2 ? array_intersect_key(array_map(fn ($v) => $v[0], self::INTENTS), $present) : [];

        $introText = implode(' ', array_column(array_filter($intro, fn ($b) => $b['type'] === 'p'), 'text'));
        $introLead = self::firstSentences($introText, 2);
        $introMore = trim(mb_substr($introText, mb_strlen($introLead)));

        // The quotes sit after the step path when there is one, else after the second card.
        $stepAt = collect($cards)->search(fn ($c) => $c['steps'] !== []);

        return [
            'intro' => ['lead' => $introLead, 'more' => $introMore !== '' ? [$introMore] : []],
            'headline' => $headline,
            'cards' => $cards,
            'quotes' => array_slice(array_values(array_unique($quotes)), 0, 2),
            'cta' => $cta,
            'intents' => $intents,
            'quotesAfter' => $stepAt !== false ? $stepAt : min(1, max(count($cards) - 1, 0)),
        ];
    }

    /** @return list<array{type: string, text?: string, items?: list<string>}> */
    public static function blocks(string $text): array
    {
        $out = [];
        $text = trim(str_replace("\r", '', $text));
        if ($text === '') {
            return $out;
        }
        foreach (preg_split('/\n\s*\n/', $text) as $block) {
            $lines = array_values(array_filter(array_map('trim', explode("\n", $block)), 'strlen'));
            if (! $lines) {
                continue;
            }
            $isList = count(array_filter($lines, fn ($l) => preg_match('/^[•\-]\s*/u', $l))) === count($lines);
            if ($isList) {
                $out[] = ['type' => 'list', 'items' => array_map(fn ($l) => preg_replace('/^[•\-]\s*/u', '', $l), $lines)];
            } elseif (count($lines) === 1 && mb_strlen($lines[0]) <= 80 && ! preg_match('/[.!?]$/u', $lines[0])) {
                $out[] = ['type' => 'h', 'text' => rtrim($lines[0], ':')];
            } else {
                $out[] = ['type' => 'p', 'text' => preg_replace('/\s+/u', ' ', implode(' ', $lines))];
            }
        }

        return $out;
    }

    /** @return list<array<string, mixed>> */
    private static function cardsFor(array $section, array $travelAreas): array
    {
        $blocks = $section['blocks'];
        $cards = [];

        // A paragraph ending in ":" followed by 4-8 short items is a sequence:
        // it gets its own card, drawn as a numbered path.
        foreach ($blocks as $i => $b) {
            $next = $blocks[$i + 1] ?? null;
            if ($b['type'] === 'p' && str_ends_with($b['text'], ':') && $next && $next['type'] === 'list'
                && count($next['items']) >= 4 && count($next['items']) <= 8
                && max(array_map('mb_strlen', $next['items'])) <= 120) {
                $sentences = self::sentences(rtrim($b['text'], ':'));
                $title = (string) array_pop($sentences);
                $cards[] = self::card(
                    preg_replace('/\s+(looks like this|is as follows|goes like this|is)$/i', '', $title) ?: $title,
                    implode(' ', $sentences), [], $next['items'], []
                );
                unset($blocks[$i], $blocks[$i + 1]);
            }
        }
        $blocks = array_values($blocks);

        $lead = '';
        $tags = [];
        $visibleList = [];
        $more = [];
        foreach ($blocks as $b) {
            if ($b['type'] === 'p' && $lead === '' && $tags === []) {
                $lead = self::firstSentences($b['text'], 2, self::LEAD_MAX);
                $rest = trim(mb_substr($b['text'], mb_strlen($lead)));
                if ($rest !== '') {
                    $more[] = ['type' => 'p', 'text' => $rest];
                }
            } elseif ($b['type'] === 'list' && $tags === [] && count($b['items']) >= 3
                && max(array_map('mb_strlen', $b['items'])) <= self::TAG_MAX) {
                $tags = $b['items'];
            } elseif ($b['type'] === 'list' && $lead === '' && $tags === [] && $visibleList === []) {
                // A list of reasons with no paragraph before it: the first three show.
                $visibleList = array_slice($b['items'], 0, 3);
                $more[] = ['type' => 'list', 'items' => array_slice($b['items'], 3)];
            } else {
                $more[] = $b;
            }
        }
        $more = array_values(array_filter($more, fn ($b) => ($b['text'] ?? '') !== '' || ($b['items'] ?? []) !== []));

        // The "where" card shows the tutor's own travel areas.
        $isWhere = (bool) preg_match('/\b(home|online|areas?|where|location)\b/i', $section['title']);
        if ($isWhere && $tags === [] && $travelAreas) {
            $tags = array_slice($travelAreas, 0, 12);
        }

        $card = self::card($section['title'], $lead, $tags, [], $more, $visibleList);

        // The section's own card first, then any step path taken out of it.
        return [$card, ...$cards];
    }

    private static function card(string $title, string $lead, array $tags, array $steps, array $more, array $list = []): array
    {
        $visible = implode(' ', [$title, $lead, ...$tags, ...$steps, ...$list]);
        $intents = [];
        foreach (self::INTENTS as $key => [, $re]) {
            if (preg_match($re, $visible)) {
                $intents[] = $key;
            }
        }

        return [
            'title' => $title,
            'icon' => self::icon($title, $steps !== []),
            'lead' => $lead,
            'tags' => $tags,
            'steps' => $steps,
            'list' => $list,
            'more' => $more,
            'intents' => $intents,
            'span' => 6,
        ];
    }

    private static function icon(string $title, bool $isSteps): string
    {
        return match (true) {
            $isSteps => 'path',
            (bool) preg_match('/\b(ib|igcse|cambridge|international)\b/i', $title) => 'globe',
            (bool) preg_match('/\b(jee|neet|entrance|olympiad)\b/i', $title) => 'star',
            (bool) preg_match('/\b(board|cbse|icse|isc)\b/i', $title) => 'paper',
            (bool) preg_match('/\b(home|online|area|where|location)\b/i', $title) => 'pin',
            (bool) preg_match('/\b(why|choose|trust)\b/i', $title) => 'shield',
            (bool) preg_match('/\b(how|approach|method|style)\b/i', $title) => 'clock',
            (bool) preg_match('/\b(teach|subjects?|what)\b/i', $title) => 'book',
            default => 'dot',
        };
    }

    /**
     * Rows of cards: a step path or a long tag list takes a whole row; the
     * cards between them share a row in twos, or threes when three are left.
     */
    private static function layout(array $cards): array
    {
        $isWide = fn ($c) => $c['steps'] !== [] || count($c['tags']) > 6;
        $run = [];
        $flush = function () use (&$run, &$cards) {
            $n = count($run);
            foreach ($run as $k => $idx) {
                $cards[$idx]['span'] = match (true) {
                    $n === 1 => 12,
                    $n % 2 === 0 => 6,
                    $n % 3 === 0 => 4,
                    default => $k < 3 ? 4 : 6,
                };
            }
            $run = [];
        };
        foreach ($cards as $i => $c) {
            if ($isWide($c)) {
                $flush();
                $cards[$i]['span'] = 12;
            } else {
                $run[] = $i;
            }
        }
        $flush();

        return $cards;
    }

    /** @return list<string> */
    private static function sentences(string $text): array
    {
        return array_values(array_filter(array_map('trim', preg_split('/(?<=[.!?])\s+(?=[A-Z0-9"“(])/u', trim($text)))));
    }

    private static function firstSentences(string $text, int $n, int $max = PHP_INT_MAX): string
    {
        $out = '';
        foreach (array_slice(self::sentences($text), 0, $n) as $s) {
            $next = $out === '' ? $s : $out.' '.$s;
            if ($out !== '' && mb_strlen($next) > $max) {
                break;
            }
            $out = $next;
        }

        return $out;
    }
}
