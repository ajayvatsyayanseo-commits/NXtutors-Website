<?php

declare(strict_types=1);

namespace App\NxtAi\Http\Controllers;

use App\NxtAi\Agent\NxtAiAgent;
use App\NxtAi\Http\Requests\ChatRequest;
use App\NxtAi\Services\ConversationService;
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

        [$userId] = $this->conversations->identity($request);
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

        $userMessage = $request->userMessage();
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
