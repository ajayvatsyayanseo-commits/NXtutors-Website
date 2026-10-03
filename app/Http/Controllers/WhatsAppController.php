<?php

namespace App\Http\Controllers;

use App\NxtAi\Models\NxtAiConversation;
use App\NxtAi\Services\ConversationService;
use App\NxtAi\Services\TutorSearchService;
use App\Services\WhatsAppHandoff;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Every WhatsApp button on the site. Records what the parent was looking at
 * as a Ref (App\Services\WhatsAppHandoff) and opens WhatsApp with a message
 * that ends in it, so the Lead Intake agent carries on from there.
 */
class WhatsAppController extends Controller
{
    /** Crawlers follow links too; they get WhatsApp without a Ref row. */
    private const BOTS = '/bot|crawl|spider|slurp|preview|facebookexternalhit|embedly|headless|lighthouse/i';

    public function __construct(
        private readonly WhatsAppHandoff $handoffs,
        private readonly TutorSearchService $search,
    ) {
    }

    /** GET /wa/tutor/{ref}: a tutor's WhatsApp button (profile, card, related). */
    public function tutor(Request $request, string $ref): RedirectResponse
    {
        $userId = $this->search->decodeRef($ref);
        $src = (string) $request->query('src', 'card');
        $profile = in_array($src, ['profile', 'sticky'], true);

        if ($userId === null || $this->isBot($request) || ! $this->handoffs->tutor($userId)) {
            return $this->go($request);
        }

        $h = $this->handoffs->create([
            'kind' => $profile ? 'tutor_profile' : 'tutor_card',
            'intent' => $profile ? 'book_demo' : 'enquire_tutor',
            'source_url' => (string) $request->query('from', ''),
            'primary_tutor_id' => $userId,
            'tutors' => [['id' => $userId, 'role' => 'primary']],
            'known' => $this->knownFromQuery($request),
        ]);

        return $this->away($this->handoffs->waUrl($this->handoffs->textFor($h), $h));
    }

    /** GET /wa: any other WhatsApp button (footer, contact, course, page). */
    public function go(Request $request): RedirectResponse
    {
        $src = (string) $request->query('src', 'page');
        $kind = $src === 'contact' ? 'contact' : 'page';

        if ($this->isBot($request)) {
            return $this->away($this->handoffs->waUrl('Hi NXTutors, I\'d like help finding a tutor.'));
        }

        $h = $this->handoffs->create([
            'kind' => $kind,
            'intent' => 'general',
            'source_url' => (string) $request->query('from', ''),
            'known' => $this->knownFromQuery($request),
        ]);

        return $this->away($this->handoffs->waUrl($this->handoffs->textFor($h), $h));
    }

    /**
     * POST /wa/handoff: buttons whose context lives in the browser: the
     * Compare result, the AI chat, the demo form. Returns the WhatsApp URL.
     */
    public function store(Request $request, ConversationService $conversations): JsonResponse
    {
        $v = $request->validate([
            'kind' => ['required', 'in:compare,chat,demo_form,page'],
            'tutor_ids' => ['nullable', 'array', 'max:4'],
            'tutor_ids.*' => ['string', 'max:64', 'regex:/^[0-9A-Za-z_-]+$/'],
            'pick_id' => ['nullable', 'string', 'max:64', 'regex:/^[0-9A-Za-z_-]+$/'],
            'conversation_id' => ['nullable', 'string', 'max:40', 'regex:/^[0-9A-Za-z]+$/'],
            'known' => ['nullable', 'array'],
            'from' => ['nullable', 'string', 'max:500'],
            'page_title' => ['nullable', 'string', 'max:250'],
            // The demo form writes its own message (the parent's details); the Ref is appended.
            'text' => ['nullable', 'string', 'max:1500'],
        ]);

        $ids = array_values(array_unique(array_filter((array) ($v['tutor_ids'] ?? []), fn ($id) => $this->handoffs->tutor($id) !== null)));
        $pick = isset($v['pick_id']) && in_array($v['pick_id'], $ids, true) ? $v['pick_id'] : null;

        $uid = null;
        if (! empty($v['conversation_id'])) {
            // Only the parent's own chat: a Ref must never carry someone else's conversation.
            [$userId, $guestHash] = $conversations->identity($request);
            $c = NxtAiConversation::where('uid', $v['conversation_id'])->first();
            if ($c && ($userId !== null ? (string) $c->user_id === $userId
                : ($c->user_id === null && hash_equals((string) $c->guest_session_hash, $guestHash)))) {
                $uid = $c->uid;
            }
        }

        $kind = $v['kind'];
        $h = $this->handoffs->create([
            'kind' => $kind,
            'intent' => match ($kind) {
                'compare' => $pick ? 'book_demo' : 'compare',
                'chat' => 'chat_continue',
                'demo_form' => 'book_demo',
                default => 'general',
            },
            'source_url' => $v['from'] ?? null,
            'page_title' => $v['page_title'] ?? null,
            'primary_tutor_id' => $pick,
            'tutors' => array_map(fn ($id) => ['id' => $id, 'role' => $id === $pick ? 'primary' : ($kind === 'compare' ? 'compared' : 'shown')], $ids) ?: null,
            'compare' => $kind === 'compare' && count($ids) >= 2
                ? ['ranked_tutor_ids' => $ids, 'winner_tutor_id' => $ids[0]]
                : null,
            'conversation_uid' => $uid,
            'known' => (array) ($v['known'] ?? []),
        ]);

        $text = $kind === 'demo_form' && ! empty($v['text']) ? (string) $v['text'] : $this->handoffs->textFor($h);

        return response()->json(['ok' => true, 'code' => $h->code, 'url' => $this->handoffs->waUrl($text, $h)]);
    }

    /**
     * `known` from the button's page context (Wa::query), plus the place the
     * visitor saved on the site (vcity / varea, added in the browser on click).
     */
    private function knownFromQuery(Request $request): array
    {
        $saved = fn (string $k) => is_string($v = $request->query($k)) && mb_strlen($v) <= 100 ? $v : null;

        return $this->handoffs->withVisitorPlace($this->handoffs->knownFromPage($request->query()), $saved('vcity'), $saved('varea'));
    }

    private function isBot(Request $request): bool
    {
        return (bool) preg_match(self::BOTS, (string) $request->userAgent());
    }

    private function away(string $url): RedirectResponse
    {
        return redirect()->away($url)->header('X-Robots-Tag', 'noindex, nofollow');
    }
}
