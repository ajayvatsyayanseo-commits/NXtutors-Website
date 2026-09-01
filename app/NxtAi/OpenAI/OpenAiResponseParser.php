<?php

declare(strict_types=1);

namespace App\NxtAi\OpenAI;

/**
 * Parses a raw Responses API JSON body into an OpenAiTurn. Tolerant of missing
 * keys and malformed function-call arguments (never throws on bad shapes).
 */
final class OpenAiResponseParser
{
    /** @param array<string,mixed>|null $json */
    public function parse(?array $json): OpenAiTurn
    {
        if (! is_array($json)) {
            return OpenAiTurn::failure('Malformed OpenAI response.');
        }

        $items = is_array($json['output'] ?? null) ? $json['output'] : [];
        $text = '';
        $toolCalls = [];

        foreach ($items as $item) {
            if (! is_array($item)) {
                continue;
            }
            $type = $item['type'] ?? null;

            if ($type === 'message') {
                foreach (($item['content'] ?? []) as $part) {
                    if (is_array($part) && ($part['type'] ?? null) === 'output_text') {
                        $text .= (string) ($part['text'] ?? '');
                    }
                }
            } elseif ($type === 'function_call') {
                $args = $item['arguments'] ?? '{}';
                if (is_string($args)) {
                    $decoded = json_decode($args, true);
                    $args = is_array($decoded) ? $decoded : [];
                } elseif (! is_array($args)) {
                    $args = [];
                }
                $toolCalls[] = [
                    'call_id' => (string) ($item['call_id'] ?? $item['id'] ?? ''),
                    'name' => (string) ($item['name'] ?? ''),
                    'arguments' => $args,
                ];
            }
        }

        // A turn truncated by max_output_tokens yields no text and no tool call.
        // Surfacing it as a failure keeps it out of the silent-fallback path.
        if ($text === '' && $toolCalls === []
            && ($json['status'] ?? null) === 'incomplete') {
            return OpenAiTurn::failure('OpenAI response truncated: '
                .(string) ($json['incomplete_details']['reason'] ?? 'unknown'), 502);
        }

        // Fallback: some responses expose a flattened `output_text`.
        if ($text === '' && is_string($json['output_text'] ?? null)) {
            $text = (string) $json['output_text'];
        }

        return new OpenAiTurn(
            ok: true,
            text: trim($text),
            outputItems: $items,
            toolCalls: $toolCalls,
            responseId: isset($json['id']) ? (string) $json['id'] : null,
            usage: is_array($json['usage'] ?? null) ? $json['usage'] : [],
        );
    }
}
