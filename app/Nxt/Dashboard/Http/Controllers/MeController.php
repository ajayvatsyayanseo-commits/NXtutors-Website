<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Services\Entitlements;
use App\Nxt\Dashboard\Support\DashboardToken;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Identity, the credit chip, notifications and the token hand-off.
 */
class MeController extends DashboardController
{
    public function __construct(private readonly Entitlements $entitlements)
    {
    }

    /** Everything the app shell needs before it renders anything. */
    public function show(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        return $this->ok([
            'user' => $identity->toArray(),
            'role' => $identity->role,
            'entitlements' => $this->entitlements->snapshot($identity),
            'unread_notifications' => AppNotification::where('user_id', $identity->userId)
                ->whereNull('read_at')
                ->count(),
            'home_path' => $identity->isTutor() ? '/teacher/dashboard' : '/user/dashboard',
        ]);
    }

    /**
     * Exchange the PHP session for a bearer token.
     *
     * Only needed when the dashboard runs on a different origin from the site,
     * where the session cookie will not be sent. On the same host this endpoint
     * is never called: the cookie is the credential and there is nothing to
     * hand over.
     */
    public function handoff(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        return $this->ok([
            'token' => DashboardToken::issue($identity->userId, $identity->role),
            'expires_in' => DashboardToken::SESSION_TTL,
            'role' => $identity->role,
        ]);
    }

    public function notifications(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $rows = AppNotification::where('user_id', $identity->userId)
            ->orderByDesc('created_at')
            ->limit(50)
            ->get()
            ->map(fn (AppNotification $n): array => [
                'id' => $n->id,
                'event' => $n->event,
                'title' => $n->title,
                'body' => $n->body,
                'deep_link' => $n->deep_link,
                'channel' => $n->channel,
                'read' => $n->read_at !== null,
                'created_at' => $n->created_at?->toIso8601String(),
            ]);

        return $this->ok($rows, ['unread' => $rows->where('read', false)->count()]);
    }

    public function readNotification(Request $request, string $id): JsonResponse
    {
        $identity = $this->identity($request);

        $notification = AppNotification::where('id', $id)
            ->where('user_id', $identity->userId)
            ->first();

        if (! $notification) {
            return $this->fail('not_found', 'That notification does not exist.', 404);
        }

        $notification->update(['read_at' => now()]);

        return $this->ok(['id' => $notification->id, 'read' => true]);
    }

    /** Where credits went, so a meter is answerable rather than just a number. */
    public function meterHistory(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        return $this->ok($this->entitlements->history($identity->userId));
    }
}
