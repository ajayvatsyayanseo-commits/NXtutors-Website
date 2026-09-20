<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Nxt\Dashboard\Support\DashboardIdentity;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Shared shape for every dashboard endpoint.
 *
 * One envelope — {data, meta, errors} — so the client has a single response
 * type to model, and one accessor for the caller, so no controller reaches for
 * the session itself and accidentally skips the authorisation the middleware
 * already did.
 */
abstract class DashboardController extends Controller
{
    protected function identity(Request $request): DashboardIdentity
    {
        $identity = $request->attributes->get('nxt_identity');

        if (! $identity instanceof DashboardIdentity) {
            // Unreachable through the routed middleware; a loud failure here
            // beats a controller silently serving another family's data.
            abort(401);
        }

        return $identity;
    }

    protected function ok(mixed $data, array $meta = [], int $status = 200): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'meta' => $meta,
            'errors' => [],
        ], $status);
    }

    protected function fail(string $code, string $message, int $status = 422, array $extra = []): JsonResponse
    {
        return response()->json([
            'data' => null,
            'meta' => $extra,
            'errors' => [['code' => $code, 'message' => $message]],
        ], $status);
    }

    /**
     * A meter refusing an action is not an error the user caused, so it answers
     * with the plan that unblocks it and enough detail for the client to render
     * the inline upgrade the brief asks for — never a modal, never a banner.
     */
    protected function meterBlocked(array $gate): JsonResponse
    {
        return response()->json([
            'data' => null,
            'meta' => ['gate' => $gate],
            'errors' => [[
                'code' => 'meter_exhausted',
                'message' => $gate['upgrade_plan']
                    ? 'You have used all of your '.strtolower($gate['label']).'. '.$gate['upgrade_plan'].' adds more.'
                    : 'You have used all of your '.strtolower($gate['label']).' for this cycle.',
            ]],
        ], 402);
    }
}
