<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Services;

use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Models\CheckInCode;
use App\Nxt\Dashboard\Models\TutoringSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Proving a check-in rather than declaring one.
 *
 * Brief 6.4 gives four methods and the module recorded all four without
 * checking any: `method` was whatever the tutor's device sent, so a home class
 * could be marked attended from anywhere, and the family's evidence trail —
 * which the parent reads verbatim and the reliability score is computed from —
 * said "parent_otp" over nothing at all.
 *
 * Two of the four can be proved here:
 *
 *  - **parent OTP**, the brief's primary method and the one §16.4 says is never
 *    dropped: a four-digit code issued against the class, delivered to the
 *    family in the reminder, verified server-side and usable once;
 *  - **geo-fence**: the posted position against the class's own address, inside
 *    the configured radius and with an accuracy good enough to mean anything.
 *
 * The other two are not claims this service can check. An online join is proved
 * by the meeting itself, and `manual` is explicitly the unproved method: it is
 * allowed — a tutor in a doorway with no signal still has to start the class —
 * and it is flagged so the parent is asked to confirm it.
 */
class CheckInProof
{
    /** Wrong codes allowed before the code is burned. */
    private const MAX_ATTEMPTS = 5;

    /**
     * Issue the class's code and return it in the clear, once, for delivery.
     *
     * Re-issuing replaces the live code rather than adding a second one, so
     * yesterday's code can never open today's class.
     */
    public function issue(TutoringSession $session, ?\DateTimeInterface $expiresAt = null): string
    {
        $code = str_pad((string) random_int(0, 9999), 4, '0', STR_PAD_LEFT);

        DB::transaction(function () use ($session, $code, $expiresAt): void {
            CheckInCode::where('session_id', $session->id)->delete();

            CheckInCode::create([
                'session_id' => $session->id,
                'code_hash' => Hash::make($code),
                'issued_at' => now(),
                'expires_at' => $expiresAt ?? $session->starts_at?->copy()->addHours(2) ?? now()->addHours(3),
            ]);
        });

        return $code;
    }

    /**
     * Issue the code and tell the family what it is.
     *
     * In-app today; the same call is where the WhatsApp reminder template hangs
     * off once Meta has approved it (§13), so there is one place that decides
     * what the family is told and when.
     */
    public function issueAndNotify(TutoringSession $session): string
    {
        $code = $this->issue($session);

        AppNotification::create([
            'user_id' => $session->student_user_id,
            'role' => 'student',
            'event' => 'session.check_in_code',
            'title' => 'Your class code is '.$code,
            'body' => sprintf(
                'Give this code to your tutor when they arrive for the %s class at %s. It proves they were there.',
                $session->subject ?? 'tuition',
                $session->starts_at?->format('g:ia') ?? 'the scheduled time',
            ),
            'deep_link' => '/user/learn?session='.$session->id,
        ]);

        return $code;
    }

    /**
     * Check a code against the class it was issued for.
     *
     * Wrong attempts are counted on the row rather than in a cache, because the
     * thing being protected is one class and the count has to survive a
     * restart. Five wrong codes burn it: the tutor falls back to `manual`,
     * which the parent is asked to confirm.
     */
    public function verifyCode(TutoringSession $session, ?string $code): bool
    {
        if (! filled($code)) {
            return false;
        }

        return (bool) DB::transaction(function () use ($session, $code): bool {
            $row = CheckInCode::where('session_id', $session->id)->lockForUpdate()->first();

            if (! $row || $row->used_at !== null || $row->expires_at->isPast() || $row->attempts >= self::MAX_ATTEMPTS) {
                return false;
            }

            if (! Hash::check($code, $row->code_hash)) {
                $row->increment('attempts');

                return false;
            }

            $row->forceFill(['used_at' => now()])->save();

            return true;
        });
    }

    /**
     * Is the posted position close enough to the class to prove attendance?
     *
     * A reading with no coordinates, no address to compare against, or an
     * accuracy wider than the fence itself proves nothing — an urban GPS fix
     * can be a hundred metres out indoors, which is why §16.4 lists the fence
     * as the first thing to drop and the OTP as the thing never dropped.
     */
    public function withinGeofence(TutoringSession $session, ?float $lat, ?float $lng, ?int $accuracyM): bool
    {
        if ($lat === null || $lng === null || $session->address_lat === null || $session->address_lng === null) {
            return false;
        }

        $radius = (int) config('nxt-dashboard.geofence_radius_m', 150);

        if ($accuracyM !== null && $accuracyM > $radius) {
            return false;
        }

        return $this->metresBetween($lat, $lng, (float) $session->address_lat, (float) $session->address_lng) <= $radius;
    }

    /** Great-circle distance in metres. */
    private function metresBetween(float $lat1, float $lng1, float $lat2, float $lng2): float
    {
        $earthRadius = 6371000.0;

        $dLat = deg2rad($lat2 - $lat1);
        $dLng = deg2rad($lng2 - $lng1);

        $a = sin($dLat / 2) ** 2
            + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLng / 2) ** 2;

        return $earthRadius * 2 * atan2(sqrt($a), sqrt(1 - $a));
    }
}
