<?php

declare(strict_types=1);

namespace Tests\Unit\NxtAi;

use App\NxtAi\OpenAI\OpenAiResponseParser;
use Tests\TestCase;

class OpenAiResponseParserTest extends TestCase
{
    public function test_parses_text_and_tool_calls(): void
    {
        $json = [
            'id' => 'resp_123',
            'output' => [
                ['type' => 'function_call', 'call_id' => 'call_a', 'name' => 'search_tutors', 'arguments' => '{"city":"Gurgaon"}'],
                ['type' => 'message', 'content' => [['type' => 'output_text', 'text' => 'Here are matches.']]],
            ],
            'usage' => ['total_tokens' => 42],
        ];

        $turn = (new OpenAiResponseParser())->parse($json);

        $this->assertTrue($turn->ok);
        $this->assertSame('resp_123', $turn->responseId);
        $this->assertSame('Here are matches.', $turn->text);
        $this->assertTrue($turn->hasToolCalls());
        $this->assertSame('search_tutors', $turn->toolCalls[0]['name']);
        $this->assertSame('Gurgaon', $turn->toolCalls[0]['arguments']['city']);
        $this->assertSame(42, $turn->usage['total_tokens']);
    }

    public function test_malformed_body_fails_safely(): void
    {
        $turn = (new OpenAiResponseParser())->parse(null);
        $this->assertFalse($turn->ok);
    }

    public function test_bad_tool_arguments_do_not_throw(): void
    {
        $json = ['output' => [['type' => 'function_call', 'call_id' => 'c', 'name' => 'x', 'arguments' => 'not-json']]];
        $turn = (new OpenAiResponseParser())->parse($json);

        $this->assertTrue($turn->ok);
        $this->assertSame([], $turn->toolCalls[0]['arguments']);
    }
}
