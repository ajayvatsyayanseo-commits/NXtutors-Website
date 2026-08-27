<?php

declare(strict_types=1);

namespace App\Integrations\Chitragupta;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

/**
 * Thin server-side client for the Chitragupta Memory Gateway.
 *
 * Browser clients must never call the gateway; all access goes through this
 * class with service credentials held in config/chitragupta.php.
 */
final class ChitraguptaGatewayClient
{
    public function enabled(): bool
    {
        return (bool) config('chitragupta.enabled')
            && config('chitragupta.base_url') !== ''
            && config('chitragupta.api_key') !== '';
    }

    /**
     * @param array<int, array<string, mixed>> $events
     */
    public function postEventsBatch(array $events): Response
    {
        return Http::withHeaders([
            'X-Agent-Id' => (string) config('chitragupta.agent_id'),
            'X-Api-Key' => (string) config('chitragupta.api_key'),
            'X-Timestamp' => gmdate('c'),
        ])
            ->timeout((int) config('chitragupta.timeout_seconds', 10))
            ->connectTimeout(2)
            ->post(rtrim((string) config('chitragupta.base_url'), '/') . '/v1/memory/events/batch', [
                'events' => $events,
            ]);
    }
}
