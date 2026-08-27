<?php

declare(strict_types=1);

namespace App\NxtAi\Services;

use App\Models\DemoLead;
use App\NxtAi\Models\NxtAiAction;
use App\NxtAi\Models\NxtAiConversation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Prepares and confirms demo-class bookings. The write to `demo_leads` happens
 * ONLY in confirm(), inside a transaction, gated by a hashed confirmation token,
 * and is idempotent (a second confirm returns the same lead, never a duplicate).
 */
final class DemoBookingService
{
    /**
     * @param array<string,mixed> $data validated booking fields
     * @return array{action:NxtAiAction, token:string}
     */
    public function prepare(NxtAiConversation $conversation, ?string $userId, array $data): array
    {
        $token = Str::random(48);

        $action = new NxtAiAction();
        $action->conversation_id = $conversation->id;
        $action->user_id = $userId;
        $action->action_type = 'demo_booking';
        $action->status = 'prepared';
        $action->payload = $data;
        $action->confirmation_token_hash = hash('sha256', $token);
        $action->confirmation_expires_at = now()->addSeconds((int) config('nxt-ai.confirmation_ttl', 900));
        $action->idempotency_key = hash('sha256', $conversation->id.'|'.json_encode($data));
        $action->save();

        return ['action' => $action, 'token' => $token];
    }

    /**
     * @return array{status:string, reference?:string, message:string}
     */
    public function confirm(NxtAiConversation $conversation, string $token): array
    {
        $hash = hash('sha256', $token);

        $action = NxtAiAction::query()
            ->where('conversation_id', $conversation->id)
            ->where('action_type', 'demo_booking')
            ->where('confirmation_token_hash', $hash)
            ->first();

        if ($action === null) {
            return ['status' => 'invalid', 'message' => 'This booking request could not be found. Please start again.'];
        }

        // Idempotent: already done → return the same reference, never re-insert.
        if ($action->status === 'confirmed' && $action->result_reference) {
            return ['status' => 'confirmed', 'reference' => $action->result_reference, 'message' => 'Your demo request is already submitted.'];
        }

        if (! $action->isConfirmable()) {
            return ['status' => 'expired', 'message' => 'This booking confirmation has expired. Please start the demo request again.'];
        }

        return DB::transaction(function () use ($action) {
            // Lock the row to serialize concurrent confirms.
            $locked = NxtAiAction::query()->whereKey($action->id)->lockForUpdate()->first();
            if ($locked === null || $locked->status === 'confirmed') {
                return [
                    'status' => 'confirmed',
                    'reference' => (string) ($locked->result_reference ?? ''),
                    'message' => 'Your demo request is already submitted.',
                ];
            }

            $p = (array) $locked->payload;
            $lead = DemoLead::create([
                'name' => (string) ($p['student_name'] ?? 'Parent'),
                'phone' => (string) ($p['contact_phone'] ?? ''),
                'service' => 'demo',
                'subject' => $p['subject'] ?? null,
                'child_class' => $p['class_level'] ?? null,
                'preferred_time' => trim((string) (($p['preferred_date'] ?? '').' '.($p['preferred_time'] ?? ''))) ?: null,
                'mode' => $p['teaching_mode'] ?? null,
                'location' => $p['location'] ?? null,
                'message' => $this->composeMessage($p),
                'source_page' => 'nxt-ai',
            ]);

            $locked->status = 'confirmed';
            $locked->executed_at = now();
            $locked->result_reference = (string) $lead->id;
            $locked->save();

            return [
                'status' => 'confirmed',
                'reference' => (string) $lead->id,
                'message' => 'Your demo request has been submitted. Our team will reach out to arrange it.',
            ];
        });
    }

    private function composeMessage(array $p): string
    {
        $parts = ['NXT AI demo request.'];
        if (! empty($p['tutor_name'])) {
            $parts[] = 'Preferred tutor: '.$p['tutor_name'].'.';
        }
        if (! empty($p['notes'])) {
            $parts[] = 'Notes: '.$p['notes'];
        }

        return implode(' ', $parts);
    }
}
