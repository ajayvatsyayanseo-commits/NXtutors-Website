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
            // Tutors the parent currently has in the on-page Compare tray, so
            // "which one is better?" resolves without them naming anyone.
            'compare_ids' => ['nullable', 'array', 'max:3'],
            'compare_ids.*' => ['string', 'max:64', 'regex:/^[0-9A-Za-z_-]+$/'],
            // The tutor whose profile page the chat is embedded on.
            'profile_tutor_id' => ['nullable', 'string', 'max:64', 'regex:/^[0-9A-Za-z_-]+$/'],
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

    /** @return array<int,string> raw register.user_id values from the Compare tray */
    public function compareIds(): array
    {
        $ids = $this->validated()['compare_ids'] ?? [];

        return is_array($ids) ? array_values(array_unique(array_filter($ids))) : [];
    }

    public function profileTutorId(): ?string
    {
        $id = trim((string) ($this->validated()['profile_tutor_id'] ?? ''));

        return $id === '' ? null : $id;
    }

    public function conversationUid(): ?string
    {
        $uid = $this->validated()['conversation_id'] ?? null;

        return ($uid === null || $uid === '') ? null : (string) $uid;
    }
}
