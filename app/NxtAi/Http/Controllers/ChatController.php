<?php

declare(strict_types=1);

namespace App\NxtAi\Http\Controllers;

use App\Models\Setting;
use App\NxtAi\Agent\NxtAiAgent;
use App\NxtAi\Models\NxtAiConversation;
use App\NxtAi\Models\NxtAiMessage;
use App\NxtAi\Http\Requests\ChatRequest;
use App\NxtAi\Services\ConversationService;
use App\NxtAi\Services\TutorSearchService;
use App\NxtAi\Support\PublicTutorFieldMapper;
use App\NxtAi\Support\TutorCardMapper;
use App\NxtAi\Support\ToolContext;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

/**
 * The one public entry point for NXT AI. Validates, rate-limits, resolves the
 * (owner-scoped) conversation, runs the agent, and returns the block contract.
 * Also serves the backward-compatible /ask-nxt-ai shape ({success, reply}).
 */
class ChatController
{
    public function __construct(
        private readonly NxtAiAgent $agent,
        private readonly ConversationService $conversations,
    ) {
    }

    public function chat(ChatRequest $request): JsonResponse
    {
        if (! config('nxt-ai.enabled', true)) {
            return $this->fail('NXT AI is currently unavailable.', 503);
        }

        // A tool-calling turn can outlast PHP's 30s default (the HTTP client
        // alone allows request_timeout per attempt, over several rounds). Left
        // at the default the process dies fatally and the browser gets a 500
        // instead of the friendly error below.
        @set_time_limit((int) config('nxt-ai.max_execution_time', 120));

        [$userId, $guestHash] = $this->conversations->identity($request);
        if ($over = $this->overLimit($request, $userId)) {
            return $over;
        }

        try {
            $conversation = $this->conversations->resolve($request, $request->conversationUid());
        } catch (AuthorizationException) {
            return $this->fail('You do not have access to this conversation.', 403);
        }

        $context = new ToolContext($conversation, $userId, $userId === null);
        $history = $this->conversations->history($conversation);
        $context->referencedTutors = $history['lastTutors'];

        // Tutors visible on the page right now — the profile being viewed and/or
        // the Compare tray. These are what "he"/"them"/"which one" refer to, so
        // they become the current reference set and the model is told who is on
        // screen (with real refs, so the tutor tools can look them up).
        $onScreen = $this->onScreenContext($request);
        if ($onScreen !== []) {
            $context->referencedTutors = $onScreen;
            $history['items'][] = ['role' => 'assistant', 'content' => $this->onScreenHint($onScreen)];
        }

        $userMessage = $request->userMessage();

        // Lead-intake funnel: after the free turns a human takes over on
        // WhatsApp. Checked before recording/calling OpenAI so the cap also
        // caps spend, and cannot be bypassed from the browser.
        if ($handoff = $this->handoff($conversation, $userId, $guestHash)) {
            return $handoff;
        }

        $this->conversations->recordUser($conversation, $userMessage);

        $requestId = (string) Str::uuid();
        $startedAt = microtime(true);

        $result = $this->agent->run($userMessage, $history['items'], $context);

        $latencyMs = (int) round((microtime(true) - $startedAt) * 1000);

        $this->telemetry($requestId, $conversation->uid, $result, $latencyMs);

        if (! $result->ok) {
            return $this->fail($result->reply, $result->httpStatus ?? 503, $conversation->uid);
        }

        $message = $this->conversations->recordAssistant($conversation, $result->reply, $result->blocks, [
            'request_id' => $requestId,
            'usage' => $result->usage ?: null,
            'latency_ms' => $latencyMs,
        ]);

        return response()->json([
            'success' => true,
            'conversation_id' => $conversation->uid,
            'message_id' => (string) $message->id,
            'reply' => $result->reply,
            'blocks' => $result->blocks,
            'quick_replies' => $result->quickReplies,
            'sources' => $this->sources($result->blocks),
            'meta' => [
                'request_id' => $requestId,
                'has_more' => false,
            ],
        ]);
    }

    /**
     * Resolve the tutors visible on the page (profile + Compare tray, as raw
     * register user ids) into the same public tutor cards the search tools return.
     *
     * @return array<int,array<string,mixed>>
     */
    private function onScreenContext(ChatRequest $request): array
    {
        // On a tutor profile the page is about ONE tutor, so that tutor is the
        // whole context. Merging the Compare tray in here leaked whichever
        // tutors the parent had shortlisted on the home page into every
        // profile-page answer - asking about Neha Bhatia returned Aarav Verma,
        // because his id was still sitting in localStorage from another page.
        $profileId = $request->profileTutorId();

        $ids = $profileId !== null
            ? [$profileId]
            : array_values(array_unique(array_filter($request->compareIds())));

        if ($ids === []) {
            return [];
        }

        $mapper = app(PublicTutorFieldMapper::class);
        $search = app(TutorSearchService::class);
        $cards = app(TutorCardMapper::class)->toCards(
            $search->findManyByRefs(array_map(
                static fn (string $id): string => $mapper->publicToken($id),
                $ids
            ))
        );

        return $cards;
    }

    /** @param array<int,array<string,mixed>> $cards */
    private function onScreenHint(array $cards): string
    {
        $parts = [];
        foreach (array_values($cards) as $i => $c) {
            $parts[] = ($i + 1).') '.($c['name'] ?? 'Tutor').' ref='.($c['ref'] ?? '');
        }

        if (count($cards) === 1) {
            return '(The parent is on '.($cards[0]['name'] ?? 'this tutor').' profile page. '
                .'EVERY question is about this one tutor unless the parent names someone else: '
                .implode('; ', $parts).'. Use get_tutor_details with that ref. '
                .'Do NOT call search_tutors and do NOT mention, list or suggest any other tutor '
                .'here - the parent is already looking at the one they chose. Never print a ref.)';
        }

        return '(The parent has these tutors on screen - "them"/"these"/"which one" '
            .'refers to these, in this order: '.implode('; ', $parts)
            .'. Use these refs with get_tutor_details / compare_tutors. Never print a ref.)';
    }

    /**
     * Once the parent has used their free turns, stop answering and hand the
     * conversation to WhatsApp. Returns null while turns remain.
     */
    private function handoff(NxtAiConversation $conversation, ?string $userId, string $guestHash): ?JsonResponse
    {
        $free = (int) config('nxt-ai.free_turns', 4);
        if ($free <= 0) {
            return null;
        }

        // Counted across every conversation this visitor owns, not just the
        // current one — reloading the page starts a fresh conversation id and
        // would otherwise hand out another full allowance.
        $used = NxtAiMessage::query()
            ->where('role', 'user')
            ->whereIn('conversation_id', NxtAiConversation::query()
                ->when(
                    $userId !== null,
                    static fn ($q) => $q->where('user_id', $userId),
                    static fn ($q) => $q->whereNull('user_id')->where('guest_session_hash', $guestHash)
                )
                ->select('id'))
            ->count();

        if ($used < $free) {
            return null;
        }

        $number = preg_replace('/\D/', '', (string) (config('nxt-ai.whatsapp_number')
            ?: optional(Setting::first())->phone));

        $text = 'Hi NXTutors, I was chatting with NXT AI and would like to continue on WhatsApp.';
        $url = $number !== '' ? 'https://wa.me/'.$number.'?text='.rawurlencode($text) : null;

        $conversation->forceFill(['status' => 'handed_off'])->save();

        return response()->json([
            'success' => true,
            'conversation_id' => $conversation->uid,
            'message_id' => null,
            'reply' => 'Thanks for chatting with NXT AI! To keep going, our team will help you directly on WhatsApp - they can share tutor details, timings and book your demo class.',
            'blocks' => array_values(array_filter([
                $url ? [
                    'type' => 'whatsapp_handoff',
                    'title' => 'Continue on WhatsApp',
                    'message' => 'You have used your free questions. Our team will take it from here - tutor details, timings and demo booking.',
                    'url' => $url,
                    'cta' => 'Open WhatsApp',
                ] : null,
            ])),
            'quick_replies' => [],
            'sources' => [],
            'meta' => ['request_id' => null, 'has_more' => false, 'handoff' => true],
        ]);
    }

    /** Layered rate limit: per-minute burst + per-day cap, keyed by user or guest. */
    private function overLimit(ChatRequest $request, ?string $userId): ?JsonResponse
    {
        $key = $userId !== null ? 'u:'.$userId : 'g:'.sha1($request->session()->getId() ?: $request->ip());

        $perMin = (int) config('nxt-ai.rate.per_minute', 12);
        if (RateLimiter::tooManyAttempts('nxtai:min:'.$key, $perMin)) {
            return $this->fail('You are sending messages too quickly. Please wait a moment.', 429);
        }
        RateLimiter::hit('nxtai:min:'.$key, 60);

        $perDay = $userId !== null
            ? (int) config('nxt-ai.rate.user_per_day', 300)
            : (int) config('nxt-ai.rate.guest_per_day', 60);
        if (RateLimiter::tooManyAttempts('nxtai:day:'.$key, $perDay)) {
            return $this->fail('You have reached today\'s limit for NXT AI. Please try again tomorrow.', 429);
        }
        RateLimiter::hit('nxtai:day:'.$key, 86400);

        return null;
    }

    private function sources(array $blocks): array
    {
        $sources = [];
        foreach ($blocks as $b) {
            if (($b['type'] ?? null) === 'website_information') {
                foreach (($b['items'] ?? []) as $item) {
                    if (! empty($item['url'])) {
                        $sources[] = ['title' => $item['title'] ?? '', 'url' => $item['url']];
                    }
                }
            }
        }

        return $sources;
    }

    private function telemetry(string $requestId, string $conversationUid, $result, int $latencyMs): void
    {
        Log::channel(config('logging.default'))->info('nxt-ai chat', [
            'request_id' => $requestId,
            'conversation' => $conversationUid,
            'ok' => $result->ok,
            'error_type' => $result->errorType,
            'blocks' => count($result->blocks),
            'latency_ms' => $latencyMs,
            'tokens' => $result->usage['total_tokens'] ?? null,
        ]);
    }

    private function fail(string $reply, int $status, ?string $conversationUid = null): JsonResponse
    {
        return response()->json([
            'success' => false,
            'conversation_id' => $conversationUid,
            'reply' => $reply,
            'blocks' => [],
            'quick_replies' => [],
            'meta' => ['request_id' => null],
        ], $status);
    }
}
