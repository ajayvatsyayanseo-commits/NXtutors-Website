<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Concerns;

use Illuminate\Support\Facades\DB;

/**
 * How a class's attendance was established, read from the events the state
 * machine wrote. Shared by the Student and Session agent routes, so the two
 * agents can never disagree about who missed a class.
 */
trait ReadsAttendanceFacts
{
    /**
     * Per-session attendance facts, in one query rather than one per session.
     *
     * For a no-show the state machine stores the absent party in the event's
     * `method` column (`SessionFlow::recordEvent($session, 'no_show', $actor,
     * $party)`), which is why `method` is not reported for those rows: it holds
     * "student", not "parent_otp", and passing it through would tell the agent
     * that an absence was verified by a method that does not exist.
     *
     * @param  list<string>  $sessionIds
     * @return array<string, array{absent_party: ?string, method: ?string}>
     */
    private function attendanceFacts(array $sessionIds): array
    {
        if ($sessionIds === []) {
            return [];
        }

        $events = DB::table('nxt_attendance_events')
            ->whereIn('session_id', $sessionIds)
            ->whereIn('kind', ['no_show', 'check_in', 'check_out'])
            ->orderBy('server_time')
            ->orderBy('id')
            ->get(['session_id', 'kind', 'method', 'payload']);

        $facts = [];
        foreach ($events as $event) {
            $id = (string) $event->session_id;
            $facts[$id] ??= ['absent_party' => null, 'method' => null];

            if ($event->kind === 'no_show') {
                $payload = json_decode((string) ($event->payload ?? '{}'), true);
                $party = is_array($payload) ? ($payload['party'] ?? null) : null;
                $party ??= $event->method;
                // Anything the state machine did not write is left null. The
                // agent excludes an unattributable miss rather than counting
                // it, which is the whole point of not guessing here.
                $facts[$id]['absent_party'] = in_array($party, ['student', 'tutor', 'both'], true)
                    ? $party
                    : null;

                continue;
            }

            // The earliest check-in is how attendance was established. A later
            // check-out does not re-establish it.
            $facts[$id]['method'] ??= $event->method;
        }

        return $facts;
    }
}
