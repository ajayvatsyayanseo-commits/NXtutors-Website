<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Models\Register;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\Message;
use App\Nxt\Dashboard\Models\Package;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * In-app messages between a family and a tutor.
 *
 * The Blade sidebar had a "Message List" entry on both dashboards that pointed
 * at `javascript:void(0)` — the menu promised it, nothing was behind it. It is
 * built here because the model needs it for a real reason: the brief requires
 * the tutor's own number never to reach a parent, which only works if there is
 * somewhere else for them to talk, and requires messages to be retained so a
 * disputed booking can be read back.
 *
 * A thread is keyed by the lead or package it belongs to. There is no separate
 * thread table because that pairing is the only grouping either dashboard needs.
 */
class MessageController extends DashboardController
{
    /** Every thread the caller is part of, newest activity first. */
    public function index(Request $request): JsonResponse
    {
        $identity = $this->identity($request);
        $userId = $identity->userId;

        $messages = Message::where('from_user_id', $userId)
            ->orWhere('to_user_id', $userId)
            ->orderByDesc('created_at')
            ->limit(500)
            ->get();

        $counterpartIds = $messages
            ->map(fn (Message $m): string => $m->from_user_id === $userId ? $m->to_user_id : $m->from_user_id)
            ->unique();

        $people = Register::whereIn('user_id', $counterpartIds)->get()->keyBy('user_id');

        $threads = $messages
            ->groupBy('thread_key')
            ->map(function ($group, $threadKey) use ($userId, $people): array {
                $latest = $group->first();

                $otherId = $latest->from_user_id === $userId ? $latest->to_user_id : $latest->from_user_id;
                $other = $people->get($otherId);

                return [
                    'thread_key' => (string) $threadKey,
                    'lead_id' => $latest->lead_id,
                    'package_id' => $latest->package_id,
                    'subject' => $this->threadSubject((string) $threadKey),
                    'with' => $other ? [
                        'user_id' => $other->user_id,
                        'name' => $other->name,
                        'avatar' => $other->avatar,
                    ] : null,
                    'last_message' => $latest->body,
                    'last_at' => $latest->created_at?->toIso8601String(),
                    'unread' => $group
                        ->where('to_user_id', $userId)
                        ->whereNull('read_at')
                        ->count(),
                    'messages' => $group
                        ->sortBy('created_at')
                        ->map(fn (Message $m): array => [
                            'id' => $m->id,
                            'body' => $m->body,
                            'mine' => $m->from_user_id === $userId,
                            'at' => $m->created_at?->toIso8601String(),
                            'read' => $m->read_at !== null,
                        ])
                        ->values()
                        ->all(),
                ];
            })
            ->values();

        return $this->ok($threads->all(), ['unread_total' => $threads->sum('unread')]);
    }

    /**
     * Send a message into an existing thread.
     *
     * The recipient is derived from the lead or package the thread belongs to,
     * never taken from the request. A caller who is not part of that lead or
     * package has no thread to write into, so there is nothing to authorise
     * separately and no way to message a stranger.
     */
    public function store(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $validated = $request->validate([
            'thread_key' => 'required|string|max:255',
            'body' => 'required|string|max:4000',
        ]);

        $recipient = $this->recipientFor($validated['thread_key'], $identity->userId, $identity->isTutor());

        if (! $recipient) {
            return $this->fail('not_found', 'That conversation is not yours.', 404);
        }

        [$leadId, $packageId] = $this->threadParts($validated['thread_key']);

        $message = Message::create([
            'thread_key' => $validated['thread_key'],
            'lead_id' => $leadId,
            'package_id' => $packageId,
            'from_user_id' => $identity->userId,
            'to_user_id' => $recipient,
            'body' => $validated['body'],
        ]);

        return $this->ok(['id' => $message->id, 'sent_at' => $message->created_at?->toIso8601String()], status: 201);
    }

    /** Mark everything addressed to the caller in one thread as read. */
    public function read(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $validated = $request->validate(['thread_key' => 'required|string|max:255']);

        $count = Message::where('thread_key', $validated['thread_key'])
            ->where('to_user_id', $identity->userId)
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        return $this->ok(['marked_read' => $count]);
    }

    /**
     * Who the other party is, established from the record the thread hangs off
     * rather than from anything the caller sent.
     */
    private function recipientFor(string $threadKey, string $userId, bool $isTutor): ?string
    {
        [$leadId, $packageId] = $this->threadParts($threadKey);

        if ($packageId) {
            $package = Package::find($packageId);

            if (! $package) {
                return null;
            }

            if ($isTutor && $package->tutor_user_id === $userId) {
                return $package->student_user_id;
            }

            if (! $isTutor && $package->student_user_id === $userId) {
                return $package->tutor_user_id;
            }

            return null;
        }

        if ($leadId) {
            $lead = Lead::find($leadId);

            if (! $lead) {
                return null;
            }

            if (! $isTutor && $lead->student_user_id === $userId) {
                // The family replies to whichever tutor is already in the thread.
                return DB::table('nxt_messages')
                    ->where('thread_key', $threadKey)
                    ->where('from_user_id', '!=', $userId)
                    ->value('from_user_id');
            }

            if ($isTutor) {
                $matched = DB::table('nxt_matches')
                    ->where('lead_id', $leadId)
                    ->where('tutor_user_id', $userId)
                    ->exists();

                return $matched ? $lead->student_user_id : null;
            }
        }

        return null;
    }

    /** @return array{0:?string,1:?string} [leadId, packageId] */
    private function threadParts(string $threadKey): array
    {
        [$kind, $id] = array_pad(explode(':', $threadKey, 2), 2, null);

        return match ($kind) {
            'lead' => [$id, null],
            'package' => [null, $id],
            default => [null, null],
        };
    }

    private function threadSubject(string $threadKey): ?string
    {
        [$leadId, $packageId] = $this->threadParts($threadKey);

        if ($packageId) {
            return Package::where('id', $packageId)->value('subject');
        }

        return $leadId ? Lead::where('id', $leadId)->value('subject') : null;
    }
}
