<?php

declare(strict_types=1);

namespace App\NxtAi\OpenAI;

use App\NxtAi\Contracts\OpenAiChat;
use App\NxtAi\Exceptions\NxtAiException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Real OpenAI Responses API client. Server-side only; the key never leaves here.
 * Mirrors the app's existing OpenAiPageGenerator pattern (withToken, timeouts,
 * IPv4, bounded retry on transient failures) but is dedicated to the agent.
 */
final class ResponsesClient implements OpenAiChat
{
    private const ENDPOINT = 'https://api.openai.com/v1/responses';

    public function __construct(private readonly OpenAiResponseParser $parser)
    {
    }

    public function respond(string $instructions, array $input, array $tools, int $maxOutputTokens): OpenAiTurn
    {
        $key = (string) config('nxt-ai.api_key');
        if ($key === '') {
            throw NxtAiException::missingApiKey();
        }

        $model = (string) config('nxt-ai.model');

        $payload = [
            'model' => $model,
            'instructions' => $instructions,
            'input' => $input,
            'tools' => $tools,
            'tool_choice' => 'auto',
            'parallel_tool_calls' => false,
            'max_output_tokens' => $maxOutputTokens,
            'store' => false, // do not persist conversation content on OpenAI
        ];

        // Reasoning models (gpt-5*) spend max_output_tokens on hidden reasoning
        // before emitting anything. Left at default they burn the whole budget
        // and return status=incomplete with no text and no tool call.
        if (str_starts_with($model, 'gpt-5') || str_starts_with($model, 'o1') || str_starts_with($model, 'o3')) {
            $payload['reasoning'] = ['effort' => (string) config('nxt-ai.reasoning_effort', 'low')];
        }

        try {
            $response = Http::withToken($key)
                ->connectTimeout((int) config('nxt-ai.connect_timeout', 10))
                ->timeout((int) config('nxt-ai.request_timeout', 60))
                ->withOptions(['curl' => [CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4]])
                ->retry(2, 750, function ($exception, $request) {
                    // Retry only transient failures; never on 4xx (bad input/auth).
                    if ($exception instanceof ConnectionException) {
                        return true;
                    }
                    $status = method_exists($exception, 'response') && $exception->response()
                        ? $exception->response()->status()
                        : null;

                    return $status === 429 || ($status !== null && $status >= 500);
                }, throw: false)
                ->post(self::ENDPOINT, $payload);
        } catch (ConnectionException $e) {
            $this->logError('connection', $e->getMessage());

            return OpenAiTurn::failure('OpenAI connection failed.', null);
        } catch (\Throwable $e) {
            $this->logError('exception', $e->getMessage());

            return OpenAiTurn::failure('OpenAI request failed.', null);
        }

        if ($response->status() === 401) {
            $this->logError('auth', 'invalid api key');

            return OpenAiTurn::failure('OpenAI authentication failed.', 401);
        }
        if ($response->status() === 429) {
            return OpenAiTurn::failure('OpenAI rate limit.', 429);
        }
        if (! $response->successful()) {
            $this->logError('http_'.$response->status(), (string) $response->body());

            return OpenAiTurn::failure('OpenAI returned an error.', $response->status());
        }

        return $this->parser->parse($response->json());
    }

    private function logError(string $type, string $detail): void
    {
        // Redacted: log the failure type, never keys or (unless enabled) content.
        Log::channel(config('logging.default'))->warning('nxt-ai openai '.$type, [
            'detail' => config('nxt-ai.log_content') ? mb_substr($detail, 0, 300) : '[redacted]',
        ]);
    }
}
