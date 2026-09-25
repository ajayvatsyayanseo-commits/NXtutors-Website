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
            // The page the chat is embedded on (city, area, subject page, guide),
            // so "find me a tutor" defaults to that place and subject. Plain
            // words only: it is passed to the model as a hint.
            'page' => ['nullable', 'array'],
            'page.type' => ['nullable', 'string', 'in:home,city,area,subject,blog,directory,other'],
            'page.city' => ['nullable', 'string', 'max:60', 'regex:/^[\pL\pN .,()&\x27-]*$/u'],
            'page.area' => ['nullable', 'string', 'max:100', 'regex:/^[\pL\pN .,()&\x27\/-]*$/u'],
            'page.board' => ['nullable', 'string', 'max:40', 'regex:/^[\pL\pN .,()&\/-]*$/u'],
            'page.subject' => ['nullable', 'string', 'max:60', 'regex:/^[\pL\pN .,()&\/-]*$/u'],
            'page.class' => ['nullable', 'string', 'max:40', 'regex:/^[\pL\pN .,()&\/-]*$/u'],
            'page.topic' => ['nullable', 'string', 'max:120', 'regex:/^[\pL\pN .,:;()&\x27\/?!–—-]*$/u'],
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

    /**
     * The page the parent is on, trimmed to the fields that are set.
     *
     * @return array{type?:string, city?:string, area?:string, board?:string, subject?:string, class?:string, topic?:string}
     */
    public function pageContext(): array
    {
        $page = $this->validated()['page'] ?? [];
        if (! is_array($page)) {
            return [];
        }

        $out = [];
        foreach (['type', 'city', 'area', 'board', 'subject', 'class', 'topic'] as $k) {
            $v = trim(preg_replace('/\s+/', ' ', (string) ($page[$k] ?? '')));
            if ($v !== '') {
                $out[$k] = $v;
            }
        }

        return $out;
    }

    public function conversationUid(): ?string
    {
        $uid = $this->validated()['conversation_id'] ?? null;

        return ($uid === null || $uid === '') ? null : (string) $uid;
    }
}
