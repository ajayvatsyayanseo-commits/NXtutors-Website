<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Services\DemoBookingService;
use App\NxtAi\Services\TutorSearchService;
use App\NxtAi\Support\ToolContext;

/** Prepare (but do NOT create) a demo booking; returns a summary to confirm. */
final class PrepareDemoBookingTool implements Tool
{
    public function __construct(
        private readonly DemoBookingService $booking,
        private readonly TutorSearchService $search,
    ) {
    }

    public function name(): string
    {
        return 'prepare_demo_booking';
    }

    public function description(): string
    {
        return 'Prepare a demo-class request for confirmation. Does NOT book anything yet — '
            .'it returns a summary the parent must explicitly confirm. Collect name and contact number first.';
    }

    public function parameters(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'student_name' => ['type' => 'string', 'description' => 'Parent or student name'],
                'contact_phone' => ['type' => 'string', 'description' => '10-digit contact number'],
                'tutor_ref' => ['type' => 'string', 'description' => 'Ref token of the chosen tutor (optional)'],
                'subject' => ['type' => 'string'],
                'class_level' => ['type' => 'string'],
                'preferred_date' => ['type' => 'string', 'description' => 'e.g. tomorrow, 24 July'],
                'preferred_time' => ['type' => 'string', 'description' => 'e.g. 6 PM'],
                'teaching_mode' => ['type' => 'string', 'enum' => ['online', 'home', 'either']],
                'notes' => ['type' => 'string'],
            ],
            'required' => ['student_name', 'contact_phone'],
            'additionalProperties' => false,
        ];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $name = trim((string) ($args['student_name'] ?? ''));
        $phone = preg_replace('/\D/', '', (string) ($args['contact_phone'] ?? ''));

        if ($name === '') {
            return ToolResult::fail('missing_name');
        }
        if ($phone === null || strlen($phone) < 10) {
            return ToolResult::fail('invalid_phone');
        }
        $phone = substr($phone, -10);

        $tutorName = null;
        $tutorRef = trim((string) ($args['tutor_ref'] ?? '')) ?: null;
        $location = null;
        if ($tutorRef !== null) {
            $tutor = $this->search->findByRef($tutorRef);
            if ($tutor !== null) {
                $tutorName = $tutor['name'] ?? null;
                $location = $tutor['city'] ?? null;
            } else {
                $tutorRef = null; // never trust an unresolved ref
            }
        }

        $payload = [
            'student_name' => $name,
            'contact_phone' => $phone,
            'tutor_ref' => $tutorRef,
            'tutor_name' => $tutorName,
            'subject' => $this->str($args, 'subject'),
            'class_level' => $this->str($args, 'class_level'),
            'preferred_date' => $this->str($args, 'preferred_date'),
            'preferred_time' => $this->str($args, 'preferred_time'),
            'teaching_mode' => $this->str($args, 'teaching_mode'),
            'location' => $location,
            'notes' => $this->str($args, 'notes'),
        ];

        $prepared = $this->booking->prepare($context->conversation, $context->userId, $payload);

        $summary = array_filter([
            'name' => $name,
            'phone' => $this->mask($phone),
            'tutor' => $tutorName,
            'subject' => $payload['subject'],
            'class' => $payload['class_level'],
            'when' => trim((string) (($payload['preferred_date'] ?? '').' '.($payload['preferred_time'] ?? ''))) ?: null,
            'mode' => $payload['teaching_mode'],
        ], static fn ($v) => $v !== null && $v !== '');

        return ToolResult::ok(
            data: [
                'confirmation_token' => $prepared['token'],
                'summary' => $summary,
                'requires_confirmation' => true,
                'instruction' => 'Show this summary and ask the parent to reply "confirm" to submit. Do not claim it is booked yet.',
            ],
            blocks: [[
                'type' => 'booking_confirmation',
                'title' => 'Confirm your demo request',
                'summary' => $summary,
            ]],
            quickReplies: ['Confirm', 'Change details'],
        );
    }

    private function str(array $args, string $key): ?string
    {
        $v = isset($args[$key]) ? trim((string) $args[$key]) : '';

        return $v === '' ? null : $v;
    }

    private function mask(string $phone): string
    {
        return strlen($phone) >= 4 ? str_repeat('*', strlen($phone) - 4).substr($phone, -4) : $phone;
    }
}
