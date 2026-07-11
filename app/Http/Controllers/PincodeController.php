<?php

namespace App\Http\Controllers;

use App\Services\ProviderCircuitBreaker;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class PincodeController extends Controller
{
    public function lookup(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'pincode' => ['required', 'digits:6'],
        ]);

        $baseUrl = rtrim((string) config('services.pincode.base_url'), '/');
        $cacheKey = 'pincode-lookup:'.$validated['pincode'];

        if ($cached = Cache::get($cacheKey)) {
            return response()->json($cached);
        }

        try {
            $circuit = app(ProviderCircuitBreaker::class);
            $circuit->ensureAvailable('pincode');
            $response = Http::acceptJson()
                ->connectTimeout((int) config('services.pincode.connect_timeout', 5))
                ->timeout((int) config('services.pincode.timeout', 10))
                ->retry(1, 250, function (Throwable $exception): bool {
                    if ($exception instanceof ConnectionException) {
                        return true;
                    }

                    if ($exception instanceof RequestException && $exception->response) {
                        $status = $exception->response->status();

                        return $status === 429 || $status >= 500;
                    }

                    return false;
                }, throw: false)
                ->get($baseUrl.'/'.$validated['pincode']);

            if (! $response->successful()) {
                $circuit->recordFailure('pincode');
                Log::warning('Pincode lookup provider failed.', ['status' => $response->status()]);

                return response()->json([
                    'status' => false,
                    'message' => 'Pincode lookup is temporarily unavailable.',
                ], 502);
            }

            $data = $response->json();

            if (empty($data[0]) || ($data[0]['Status'] ?? '') !== 'Success') {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid pincode or no data found.',
                    'data' => $data,
                ], 404);
            }

            $payload = [
                'status' => true,
                'data' => $data[0]['PostOffice'] ?? [],
            ];
            Cache::put($cacheKey, $payload, max(60, (int) config('services.pincode.cache_seconds', 86400)));
            $circuit->recordSuccess('pincode');

            return response()->json($payload);
        } catch (Throwable $exception) {
            Log::warning('Pincode lookup exception.', [
                'exception' => $exception::class,
                'message' => (string) str($exception->getMessage())->squish()->limit(160),
            ]);

            return response()->json([
                'status' => false,
                'message' => 'Pincode lookup is temporarily unavailable.',
            ], 502);
        }
    }
}
