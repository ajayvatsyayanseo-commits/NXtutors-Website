<?php

declare(strict_types=1);

namespace Tests\Unit\Chitragupta;

use App\Integrations\Chitragupta\OutboxEventMapper;
use PHPUnit\Framework\TestCase;

final class OutboxEventMapperTest extends TestCase
{
    private function outboxRow(): object
    {
        return (object) [
            'id' => 7,
            'event_id' => 'e6c1b2a3-0000-4000-8000-000000000001',
            'event_type' => 'demo.projection.updated',
            'schema_version' => '1.0',
            'idempotency_key' => 'demo-42-v3',
            'correlation_id' => 'c0ffee00-0000-4000-8000-000000000002',
            'payload' => json_encode([
                'demo_ref' => 'demo-42',
                'register_user_id' => '1001',
                'lifecycle_state' => 'scheduled',
            ]),
            'occurred_at' => '2026-07-27 10:00:00+00',
        ];
    }

    public function testMapsOutboxRowToMemoryEvent(): void
    {
        $event = (new OutboxEventMapper())->toMemoryEvent($this->outboxRow());

        self::assertSame('DEMO_PROJECTION_UPDATED', $event['deed_type']);
        self::assertSame('e6c1b2a3-0000-4000-8000-000000000001', $event['event_id']);
        self::assertSame('website:demo-42-v3', $event['idempotency_key']);
        self::assertSame('c0ffee00-0000-4000-8000-000000000002', $event['trace_id']);
        self::assertSame('website', $event['source_service']);
        self::assertSame(
            [
                ['entity_type' => 'demo', 'entity_id' => 'demo-42'],
                ['entity_type' => 'account', 'entity_id' => '1001'],
            ],
            $event['entity_scope'],
        );
        self::assertSame('state=scheduled', $event['output_summary']);
        // Payload details must NOT be forwarded wholesale.
        self::assertArrayNotHasKey('payload', $event);
    }

    public function testDeedTypeNormalization(): void
    {
        $mapper = new OutboxEventMapper();

        self::assertSame('SUBSCRIPTION_ACTIVATION_RECORDED', $mapper->deedType('subscription.activation.recorded'));
        self::assertSame('WEBSITE_EVENT', $mapper->deedType('123!!'));
        self::assertSame('WEBSITE_EVENT', $mapper->deedType(''));
    }
}
