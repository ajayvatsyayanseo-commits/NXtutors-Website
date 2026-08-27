<?php

declare(strict_types=1);

namespace App\NxtAi\Support;

use App\NxtAi\Models\NxtAiConversation;

/**
 * Per-request context passed to every tool: who is asking and in which
 * conversation. Tools use this for ownership, booking attribution, and
 * resolving earlier references ("the first tutor") from conversation state.
 */
final class ToolContext
{
    /** @var array<int,array<string,mixed>> tutor cards shown earlier, in order */
    public array $referencedTutors = [];

    public function __construct(
        public readonly NxtAiConversation $conversation,
        public readonly ?string $userId = null,   // Register.user_id (site session), null for guests
        public readonly bool $isGuest = true,
    ) {
    }

    /** Record tutor cards surfaced this turn so follow-ups can reference them. */
    public function rememberTutors(array $cards): void
    {
        foreach ($cards as $card) {
            $this->referencedTutors[] = $card;
        }
    }
}
