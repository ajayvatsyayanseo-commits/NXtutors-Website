<?php

declare(strict_types=1);

namespace App\NxtAi\Services;

use App\NxtAi\Models\NxtAiConversation;
use App\NxtAi\Models\NxtAiMessage;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

/**
 * Owns conversation identity, ownership (no IDOR), and the compact history sent
 * to the model. Works for logged-in site users (session 'userid') and guests
 * (a hash of the session id) — a conversation is only ever visible to its owner.
 */
final class ConversationService
{
    /** @return array{0:?string,1:string} [userId, guestHash] */
    public function identity(Request $request): array
    {
        $userId = $request->session()->get('userid');
        $userId = ($userId !== null && $userId !== '') ? (string) $userId : null;
        $guestHash = hash('sha256', $request->session()->getId() ?: ('ip:'.$request->ip()));

        return [$userId, $guestHash];
    }

    public function resolve(Request $request, ?string $uid): NxtAiConversation
    {
        [$userId, $guestHash] = $this->identity($request);

        if ($uid !== null && $uid !== '') {
            $conversation = NxtAiConversation::query()->where('uid', $uid)->first();
            if ($conversation === null) {
                return $this->create($userId, $guestHash);
            }
            $this->assertOwner($conversation, $userId, $guestHash);

            return $conversation;
        }

        return $this->create($userId, $guestHash);
    }

    private function assertOwner(NxtAiConversation $c, ?string $userId, string $guestHash): void
    {
        // Logged-in user owns by user_id; guest owns by matching session hash.
        if ($userId !== null) {
            if ((string) $c->user_id === $userId) {
                return;
            }
        } elseif ($c->user_id === null && hash_equals((string) $c->guest_session_hash, $guestHash)) {
            return;
        }

        throw new AuthorizationException('You cannot access this conversation.');
    }

    public function create(?string $userId, string $guestHash): NxtAiConversation
    {
        return NxtAiConversation::create([
            'user_id' => $userId,
            'guest_session_hash' => $userId === null ? $guestHash : null,
            'status' => 'active',
            'last_activity_at' => now(),
        ]);
    }

    /**
     * Compact recent history as Responses API input items, plus a hint listing
     * the last-shown tutors (index + ref) so "compare the first and third" works.
     *
     * @return array{items:array<int,array<string,mixed>>, lastTutors:array<int,array<string,mixed>>}
     */
    public function history(NxtAiConversation $conversation): array
    {
        $limit = (int) config('nxt-ai.history_messages', 12);

        $messages = $conversation->messages()
            ->whereIn('role', ['user', 'assistant'])
            ->orderByDesc('id')
            ->limit($limit)
            ->get()
            ->reverse()
            ->values();

        $items = [];
        $lastTutors = [];

        foreach ($messages as $m) {
            $content = (string) ($m->content ?? '');
            if ($content !== '') {
                $items[] = ['role' => $m->role, 'content' => $content];
            }
            $tutors = $this->extractTutors($m);
            if ($tutors !== []) {
                $lastTutors = $tutors;
            }
        }

        if ($lastTutors !== []) {
            $items[] = ['role' => 'assistant', 'content' => $this->tutorHint($lastTutors)];
        }

        return ['items' => $items, 'lastTutors' => $lastTutors];
    }

    private function extractTutors(NxtAiMessage $m): array
    {
        $out = [];
        foreach ((array) ($m->structured_blocks ?? []) as $block) {
            if (in_array($block['type'] ?? null, ['tutor_cards', 'tutor_comparison'], true)) {
                foreach (($block['items'] ?? []) as $item) {
                    if (! empty($item['ref'])) {
                        $out[] = ['ref' => $item['ref'], 'name' => $item['name'] ?? 'Tutor'];
                    }
                }
            }
        }

        return $out;
    }

    private function tutorHint(array $tutors): string
    {
        $parts = [];
        foreach (array_values($tutors) as $i => $t) {
            $parts[] = ($i + 1).') '.$t['name'].' ref='.$t['ref'];
        }

        return '(Tutors currently shown — use these refs for follow-ups: '.implode('; ', $parts).')';
    }

    public function recordUser(NxtAiConversation $conversation, string $content): NxtAiMessage
    {
        return $this->record($conversation, 'user', $content, null);
    }

    public function recordAssistant(NxtAiConversation $conversation, string $content, array $blocks, array $meta = []): NxtAiMessage
    {
        return $this->record($conversation, 'assistant', $content, $blocks ?: null, $meta);
    }

    private function record(NxtAiConversation $conversation, string $role, ?string $content, ?array $blocks, array $meta = []): NxtAiMessage
    {
        $message = $conversation->messages()->create([
            'role' => $role,
            // Conversation content is stored in the app's own owner-scoped DB
            // (needed for memory + the UI). The log_content flag governs the LOG
            // channel only, not this store.
            'content' => $content,
            'structured_blocks' => $blocks,
            'request_id' => $meta['request_id'] ?? null,
            'token_usage' => $meta['usage'] ?? null,
            'latency_ms' => $meta['latency_ms'] ?? null,
        ]);

        $conversation->forceFill(['last_activity_at' => now()])->save();

        return $message;
    }
}
