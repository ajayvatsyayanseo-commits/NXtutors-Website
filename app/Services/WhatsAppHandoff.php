<?php

namespace App\Services;

use App\Models\NxtHandoff;
use App\Models\Setting;
use App\NxtAi\Services\TutorSearchService;
use App\NxtAi\Support\PublicTutorFieldMapper;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;

/**
 * Carries what a parent did on the website into WhatsApp.
 *
 * Each WhatsApp button creates a hand-off (App\Models\NxtHandoff) and ends
 * its prefilled message with "Ref: NX-7K3Q2M". The Lead Intake agent fetches
 * the Ref (docs/contracts/lead-intake-handoff-v1.md) and so knows the exact
 * tutor, the comparison, the AI chat and the page. It never has to guess a
 * tutor from a name, and never re-asks what the parent already said.
 */
class WhatsAppHandoff
{
    public const KINDS = ['tutor_profile', 'tutor_card', 'compare', 'chat', 'page', 'demo_form', 'contact', 'general'];

    public const INTENTS = ['book_demo', 'enquire_tutor', 'compare', 'chat_continue', 'general'];

    /** Crockford-like: no 0/O or 1/I/L, so a code read aloud or retyped survives. */
    private const ALPHABET = '23456789ABCDEFGHJKMNPQRSTUVWXYZ';

    public const CODE_PATTERN = '/^NX-[2-9A-HJ-NP-Z]{6}$/';

    public const TTL_DAYS = 30;

    /** Keys of `known`, in Lead Intake's LeadFields names. */
    public const KNOWN_KEYS = ['student_class', 'subjects', 'board', 'city', 'locality', 'tuition_mode', 'preferred_time'];

    public function __construct(
        private readonly TutorSearchService $search,
        private readonly PublicTutorFieldMapper $mapper,
    ) {
    }

    /**
     * @param  array{kind:string,intent:string,source_url?:?string,page_title?:?string,
     *               primary_tutor_id?:?string,tutors?:array,compare?:?array,
     *               conversation_uid?:?string,known?:array}  $data
     */
    public function create(array $data): NxtHandoff
    {
        $sourceUrl = $this->cleanUrl($data['source_url'] ?? null);
        $attrs = [
            'kind' => in_array($data['kind'], self::KINDS, true) ? $data['kind'] : 'general',
            'intent' => in_array($data['intent'], self::INTENTS, true) ? $data['intent'] : 'general',
            'source_url' => $sourceUrl,
            'page_type' => $this->pageType($sourceUrl),
            'page_title' => isset($data['page_title']) ? Str::limit(strip_tags((string) $data['page_title']), 250, '') : null,
            'utm' => $this->utm($sourceUrl) ?: null,
            'primary_tutor_id' => $data['primary_tutor_id'] ?? null,
            'tutors' => $data['tutors'] ?? null,
            'compare' => $data['compare'] ?? null,
            'conversation_uid' => $data['conversation_uid'] ?? null,
            'known' => $this->cleanKnown($data['known'] ?? []) ?: null,
            'expires_at' => now()->addDays(self::TTL_DAYS),
        ];

        for ($try = 0; ; $try++) {
            try {
                return NxtHandoff::create(['code' => $this->newCode()] + $attrs);
            } catch (QueryException $e) {
                if ($try >= 4) {
                    throw $e; // five collisions in 887 million is not bad luck
                }
            }
        }
    }

    public function newCode(): string
    {
        $code = 'NX-';
        for ($i = 0; $i < 6; $i++) {
            $code .= self::ALPHABET[random_int(0, strlen(self::ALPHABET) - 1)];
        }

        return $code;
    }

    /** The WhatsApp number every button opens: Lead Intake's. */
    public function number(): string
    {
        return preg_replace('/\D/', '', (string) (config('nxt-ai.whatsapp_number') ?: optional(Setting::first())->phone));
    }

    /** wa.me link with the text and, when there is one, the Ref line. */
    public function waUrl(string $text, ?NxtHandoff $h = null): string
    {
        $text = trim($text).($h ? "\n\nRef: ".$h->code : '');

        return 'https://wa.me/'.$this->number().'?text='.rawurlencode($text);
    }

    /** A tutor as the message names them: "Ajay Vatsyayan (Maths, Physics · Gurugram)". */
    public function tutorLabel(array $t): string
    {
        // Subjects only: a course category such as "Academic (Class I–XII)" is not one.
        $subjects = array_values(array_filter((array) ($t['subjects'] ?? []),
            fn ($s) => is_string($s) && ! preg_match('/academic|class|\(/i', $s)));
        $bits = array_filter([
            implode(', ', array_slice($subjects, 0, 2)),
            ($t['home_city'] ?? null) ?: ($t['city'] ?? null),
        ]);

        return ($t['name'] ?? 'the tutor').($bits ? ' ('.implode(' · ', $bits).')' : '');
    }

    /** Public tutor array for a register.user_id, or null. */
    public function tutor(?string $userId): ?array
    {
        if ($userId === null || $userId === '') {
            return null;
        }

        return $this->search->findByRef($this->mapper->publicToken($userId));
    }

    /** The prefilled first message for a hand-off (the Ref line is added by waUrl). */
    public function textFor(NxtHandoff $h): string
    {
        $known = (array) ($h->known ?? []);
        $subject = implode(', ', (array) ($known['subjects'] ?? []));
        $place = implode(', ', array_filter([$known['locality'] ?? null, $known['city'] ?? null]));
        $need = trim(($subject !== '' ? $subject.' ' : '').'tutor'.($place !== '' ? ' in '.$place : ''));

        switch ($h->kind) {
            case 'tutor_profile':
            case 'tutor_card':
                $t = $this->tutor($h->primary_tutor_id);
                if (! $t) {
                    break;
                }
                if (! empty($t['is_sample'])) {
                    // A sample profile is not a real tutor: ask for a match, never for them.
                    return 'Hi, I\'m looking for a '.$need.'. Please match me with a verified tutor.';
                }

                return $h->kind === 'tutor_profile'
                    ? 'Hi, I\'d like to book a free demo class with '.$this->tutorLabel($t).'.'
                    : 'Hi, I\'d like to know more about '.$this->tutorLabel($t).' and book a demo.';

            case 'compare':
                $names = [];
                foreach ((array) ($h->compare['ranked_tutor_ids'] ?? []) as $id) {
                    if ($t = $this->tutor((string) $id)) {
                        $names[(string) $id] = $t['name'];
                    }
                }
                if (count($names) >= 2) {
                    $list = array_values($names);
                    $last = array_pop($list);
                    $pick = $names[(string) ($h->primary_tutor_id ?? '')] ?? null;

                    return 'Hi, I compared '.implode(', ', $list).' and '.$last.' on NXTutors'
                        .($pick ? ' and would like a free demo with '.$pick.'.' : ' and would like help choosing.');
                }
                break;

            case 'chat':
                return 'Hi, I was chatting with NXT AI'.($subject !== '' || $place !== '' ? ' about a '.$need : '').' and would like to continue here.';

            case 'contact':
                return 'Hi NXTutors, I would like to know more about home tuition.';
        }

        return 'Hi NXTutors, I\'d like help finding a '.$need.'.';
    }

    /** The contract shape Lead Intake reads (section 2). */
    public function toAgentArray(NxtHandoff $h): array
    {
        $tutors = [];
        foreach ((array) ($h->tutors ?? []) as $row) {
            $t = $this->tutor((string) ($row['id'] ?? ''));
            if ($t) {
                $tutors[] = $this->agentTutor($t, (string) ($row['id'] ?? ''), (string) ($row['role'] ?? 'shown'));
            }
        }

        $chat = null;
        if ($h->conversation_uid) {
            $chat = ['conversation_id' => $h->conversation_uid] + $this->chatSummary($h->conversation_uid);
        }

        $known = array_fill_keys(self::KNOWN_KEYS, null);
        $known['subjects'] = [];

        return [
            'version' => 1,
            'code' => $h->code,
            'kind' => $h->kind,
            'intent' => $h->intent,
            'created_at' => optional($h->created_at)->toIso8601String(),
            'expires_at' => optional($h->expires_at)->toIso8601String(),
            'source' => [
                'url' => $h->source_url ? url($h->source_url) : null,
                'page_type' => $h->page_type,
                'page_title' => $h->page_title,
                'utm' => (object) ($h->utm ?? []),
            ],
            'primary_tutor_id' => $h->primary_tutor_id,
            'tutors' => $tutors,
            'compare' => $h->compare ?: null,
            'chat' => $chat,
            'known' => array_merge($known, (array) ($h->known ?? [])),
        ];
    }

    /** One tutor in the contract shape. */
    public function agentTutor(array $t, string $userId, string $role): array
    {
        return [
            'tutor_id' => $userId,
            'public_ref' => $t['ref'] ?? null,
            'name' => $t['name'] ?? null,
            'other_names' => $t['other_names'] ?? [],
            'role' => $role,
            'city' => ($t['home_city'] ?? null) ?: ($t['city'] ?? null),
            'area' => $t['area'] ?? null,
            'travel_areas' => $t['travel_areas'] ?? [],
            'subjects' => $t['subjects'] ?? [],
            'boards' => $t['boards'] ?? [],
            'teaching_modes' => $t['teaching_modes'] ?? [],
            'fee_label' => $t['fee_label'] ?? null,
            'profile_url' => isset($t['profile_url']) ? url($t['profile_url']) : null,
            'is_sample' => (bool) ($t['is_sample'] ?? false),
        ];
    }

    /**
     * What the parent asked NXT AI, and the tutors it showed. Plain text, long
     * digit runs (phone numbers) removed.
     *
     * @return array{summary:string,user_turns:int}
     */
    public function chatSummary(string $uid): array
    {
        $conv = \App\NxtAi\Models\NxtAiConversation::where('uid', $uid)->first();
        if (! $conv) {
            return ['summary' => '', 'user_turns' => 0];
        }
        $msgs = \App\NxtAi\Models\NxtAiMessage::where('conversation_id', $conv->id)
            ->whereIn('role', ['user', 'assistant'])->orderBy('id')->get(['role', 'content', 'structured_blocks']);

        $asked = [];
        $shown = [];
        foreach ($msgs as $m) {
            if ($m->role === 'user') {
                $asked[] = trim((string) $m->content);
            }
            foreach ((array) ($m->structured_blocks ?? []) as $b) {
                foreach ((array) ($b['items'] ?? []) as $it) {
                    if (is_array($it) && ! empty($it['name'])) {
                        $shown[$it['name']] = true;
                    }
                }
            }
        }

        $text = 'Parent asked: '.implode(' | ', array_filter($asked));
        if ($shown) {
            $text .= '. Tutors shown: '.implode(', ', array_slice(array_keys($shown), 0, 8));
        }
        $text = preg_replace('/\+?\d[\d\s-]{8,}\d/', '[number removed]', $text) ?? $text;

        return ['summary' => Str::limit($text, 1200, '…'), 'user_turns' => count($asked)];
    }

    /** Only a path on this site ("/tutor/…?utm_source=x"), never another host. */
    public function cleanUrl(?string $url): ?string
    {
        $url = trim((string) $url);
        if ($url === '') {
            return null;
        }
        $parts = parse_url($url);
        if ($parts === false) {
            return null;
        }
        if (isset($parts['host']) && ! in_array(preg_replace('/^www\./', '', strtolower($parts['host'])), [preg_replace('/^www\./', '', strtolower((string) parse_url(config('app.url'), PHP_URL_HOST))), 'nxtutors.com'], true)) {
            return null;
        }
        $path = '/'.ltrim((string) ($parts['path'] ?? '/'), '/');
        if (str_starts_with($path, '//') || str_contains($path, '\\')) {
            return null;
        }

        return Str::limit($path.(isset($parts['query']) ? '?'.$parts['query'] : ''), 490, '');
    }

    public function pageType(?string $path): ?string
    {
        if ($path === null) {
            return null;
        }
        $seg = explode('/', trim((string) parse_url($path, PHP_URL_PATH), '/'));

        return match (true) {
            $seg[0] === '' => 'home',
            $seg[0] === 'tutor' => 'tutor_profile',
            $seg[0] === 'tutors' => 'directory',
            $seg[0] === 'city' => count($seg) > 2 ? 'area' : 'city',
            $seg[0] === 'blog' => 'blog',
            in_array($seg[0], ['contact', 'contact-us'], true) => 'contact',
            in_array($seg[0], ['course', 'courses'], true) => 'course',
            default => 'page',
        };
    }

    /** @return array<string,string> */
    private function utm(?string $path): array
    {
        parse_str((string) parse_url((string) $path, PHP_URL_QUERY), $q);
        $out = [];
        foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'gclid', 'fbclid'] as $k) {
            if (isset($q[$k]) && is_string($q[$k]) && $q[$k] !== '') {
                $out[$k] = Str::limit($q[$k], 100, '');
            }
        }

        return $out;
    }

    /** Keep only known keys with plain-word values; `subjects` is a list. */
    public function cleanKnown(array $in): array
    {
        $word = fn ($v) => is_scalar($v) && ($v = trim((string) $v)) !== '' && mb_strlen($v) <= 100
            && preg_match('/^[\pL\pN .,()&\x27\/+:–-]+$/u', $v) ? $v : null;

        $out = [];
        foreach (self::KNOWN_KEYS as $k) {
            if (! array_key_exists($k, $in)) {
                continue;
            }
            if ($k === 'subjects') {
                $list = array_values(array_unique(array_filter(array_map($word, (array) $in[$k]))));
                if ($list) {
                    $out[$k] = array_slice($list, 0, 5);
                }
                continue;
            }
            if ($k === 'tuition_mode') {
                $m = strtolower((string) $in[$k]);
                $m = match (true) {
                    str_contains($m, 'both') || str_contains($m, 'either') => 'either',
                    str_contains($m, 'online') => 'online',
                    str_contains($m, 'home') || str_contains($m, 'offline') => 'home',
                    default => null,
                };
                if ($m) {
                    $out[$k] = $m;
                }
                continue;
            }
            if (($v = $word($in[$k])) !== null) {
                $out[$k] = $v;
            }
        }

        return $out;
    }

    /** `known` from the chat widget's page context (ChatRequest `page`). */
    public function knownFromPage(array $page): array
    {
        return $this->cleanKnown([
            'subjects' => isset($page['subject']) ? [$page['subject']] : [],
            'board' => $page['board'] ?? null,
            'student_class' => $page['class'] ?? null,
            'city' => $page['city'] ?? null,
            'locality' => $page['area'] ?? null,
        ]);
    }
}
