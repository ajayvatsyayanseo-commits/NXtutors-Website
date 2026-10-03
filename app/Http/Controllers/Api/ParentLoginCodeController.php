<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ParentLogin;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * POST /internal/agent/parent-login/code — Lead Intake asks for a parent's
 * WhatsApp login code.
 *
 * A parent sends "Send me my NXtutors login code" to our WhatsApp. Lead
 * Intake has the sender's number from WhatsApp itself, posts it here, and
 * sends `message` back as its reply. The code travels inside that message and
 * nowhere else: it is not logged here, and only its hash is stored.
 *
 * Every outcome is a 200 with a reply Lead Intake can send as it is, because
 * "no account" and "too many codes" are things to tell the parent, not errors.
 *
 * Signed (VerifyAgentSignature), and only Lead Intake may call it: it is the
 * one door to families on WhatsApp, and a code minted for any other caller
 * would be a login handed to something that cannot deliver it.
 */
final class ParentLoginCodeController extends Controller
{
    public const AGENT = 'lead_intake_agent';

    public function __invoke(Request $request, ParentLogin $login): JsonResponse
    {
        $identity = (string) ($request->header('X-Nxt-Agent') ?: $request->header('X-Nxt-Source', ''));
        if ($identity !== self::AGENT) {
            return response()->json(['error' => 'unknown_agent'], 403);
        }

        $phone = $request->json('phone');
        if (! is_string($phone) && ! is_int($phone)) {
            return response()->json(['error' => 'phone_required'], 422);
        }

        return response()->json($login->issue((string) $phone));
    }
}
