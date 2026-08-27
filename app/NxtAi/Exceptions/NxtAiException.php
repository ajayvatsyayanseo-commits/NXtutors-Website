<?php

declare(strict_types=1);

namespace App\NxtAi\Exceptions;

use RuntimeException;

/** Configuration/usage errors for the NXT AI module (never leaks to users raw). */
final class NxtAiException extends RuntimeException
{
    public static function missingApiKey(): self
    {
        return new self('NXT AI: OPENAI_API_KEY is not configured.');
    }

    public static function disabled(): self
    {
        return new self('NXT AI is disabled via configuration.');
    }
}
