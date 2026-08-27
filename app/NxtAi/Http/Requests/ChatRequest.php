<?php

declare(strict_types=1);

namespace App\NxtAi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // public endpoint; ownership enforced in ConversationService
    }

    public function rules(): array
    {
        $max = (int) config('nxt-ai.message_max_chars', 1500);

        return [
            'message' => ['required', 'string', 'min:1', 'max:'.$max],
            'conversation_id' => ['nullable', 'string', 'max:64', 'regex:/^[0-9A-Za-z]+$/'],
        ];
    }

    public function messages(): array
    {
        return [
            'message.required' => 'Please type a message.',
            'message.max' => 'That message is too long. Please shorten it.',
        ];
    }

    public function userMessage(): string
    {
        return trim((string) $this->validated()['message']);
    }

    public function conversationUid(): ?string
    {
        $uid = $this->validated()['conversation_id'] ?? null;

        return ($uid === null || $uid === '') ? null : (string) $uid;
    }
}
