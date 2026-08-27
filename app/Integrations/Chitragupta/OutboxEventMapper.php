<?php

declare(strict_types=1);

namespace App\Integrations\Chitragupta;

/**
 * Maps demo_integration_outbox rows to v1 MemoryEvents.
 *
 * Only identifiers and event metadata are forwarded — the payload itself
 * stays in the website database (operational source of truth). The outbox
 * event_id doubles as the memory event_id so re-sends dedupe at the gateway.
 */
final class OutboxEventMapper
{
    public function __construct(
        private readonly string $agentId = 'web-gateway',
        private readonly string $environment = 'production',
    ) {
    }

    /** @param object $row a demo_integration_outbox row (stdClass from the query builder) */
    public function toMemoryEvent(object $row): array
    {
        $payload = json_decode((string) $row->payload, true) ?: [];

        $entityScope = [];
        if (isset($payload['demo_ref'])) {
            $entityScope[] = ['entity_type' => 'demo', 'entity_id' => (string) $payload['demo_ref']];
        }
        if (isset($payload['register_user_id'])) {
            $entityScope[] = ['entity_type' => 'account', 'entity_id' => (string) $payload['register_user_id']];
        }

        $summaryParts = array_filter([
            isset($payload['lifecycle_state']) ? 'state=' . $payload['lifecycle_state'] : null,
            isset($payload['onboarding_status']) ? 'onboarding=' . $payload['onboarding_status'] : null,
            isset($payload['plan_code']) ? 'plan=' . $payload['plan_code'] : null,
        ]);

        return [
            'event_id' => (string) $row->event_id,
            'idempotency_key' => 'website:' . $row->idempotency_key,
            'schema_version' => '1.0',
            'trace_id' => (string) $row->correlation_id,
            'correlation_id' => (string) $row->correlation_id,
            'tenant_id' => 'nxtutors',
            'environment' => $this->environment,
            'source_service' => 'website',
            'source_repository' => 'NXtutors-Website',
            'agent_id' => $this->agentId,
            'agent_name' => 'Website Integration Gateway',
            'channel' => 'website',
            'entity_scope' => $entityScope,
            'deed_type' => $this->deedType((string) $row->event_type),
            'lifecycle_status' => 'completed',
            'purpose' => 'website_domain_event',
            'output_summary' => implode(' | ', $summaryParts) ?: null,
            'pii_classification' => 'INTERNAL',
            'created_at' => (string) $row->occurred_at,
        ];
    }

    /** demo.projection.updated -> DEMO_PROJECTION_UPDATED */
    public function deedType(string $eventType): string
    {
        $deed = strtoupper((string) preg_replace('/[^A-Za-z0-9]+/', '_', $eventType));
        $deed = trim($deed, '_');

        return $deed !== '' && preg_match('/^[A-Z]/', $deed) === 1 ? $deed : 'WEBSITE_EVENT';
    }
}
