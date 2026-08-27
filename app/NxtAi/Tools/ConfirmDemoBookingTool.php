<?php

declare(strict_types=1);

namespace App\NxtAi\Tools;

use App\NxtAi\Contracts\Tool;
use App\NxtAi\DTO\ToolResult;
use App\NxtAi\Services\DemoBookingService;
use App\NxtAi\Support\ToolContext;

/** Create the demo request — ONLY with a valid confirmation token from prepare. */
final class ConfirmDemoBookingTool implements Tool
{
    public function __construct(private readonly DemoBookingService $booking)
    {
    }

    public function name(): string
    {
        return 'confirm_demo_booking';
    }

    public function description(): string
    {
        return 'Submit the prepared demo request AFTER the parent explicitly confirms. '
            .'Requires the confirmation_token returned by prepare_demo_booking.';
    }

    public function parameters(): array
    {
        return [
            'type' => 'object',
            'properties' => [
                'confirmation_token' => ['type' => 'string', 'description' => 'Token from prepare_demo_booking'],
            ],
            'required' => ['confirmation_token'],
            'additionalProperties' => false,
        ];
    }

    public function handle(array $args, ToolContext $context): ToolResult
    {
        $token = trim((string) ($args['confirmation_token'] ?? ''));
        if ($token === '') {
            return ToolResult::fail('missing_confirmation_token');
        }

        $result = $this->booking->confirm($context->conversation, $token);

        if ($result['status'] === 'invalid') {
            return ToolResult::fail('invalid_or_unknown_booking');
        }
        if ($result['status'] === 'expired') {
            return ToolResult::fail('confirmation_expired');
        }

        return ToolResult::ok(
            data: [
                'status' => $result['status'],
                'reference' => $result['reference'] ?? null,
                'message' => $result['message'],
            ],
            blocks: [[
                'type' => 'booking_success',
                'title' => 'Demo request submitted',
                'message' => $result['message'],
                'reference' => $result['reference'] ?? null,
            ]],
            quickReplies: ['Find more tutors', 'What are the fees?'],
        );
    }
}
