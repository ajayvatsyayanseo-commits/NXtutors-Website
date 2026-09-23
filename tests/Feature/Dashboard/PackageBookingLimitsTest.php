<?php

declare(strict_types=1);

namespace Tests\Feature\Dashboard;

use App\Nxt\Dashboard\Models\LedgerEntry;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\TutoringSession;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

/**
 * A package is a number of classes and a date. Booking must respect both.
 *
 * `sessions_used` rises only at check-out, so a balance check against it
 * alone counted none of the classes already in the diary. A ten-class package
 * could be booked thirty times ahead, and the expiry date was never read.
 */
class PackageBookingLimitsTest extends DashboardTestCase
{
    public function test_classes_already_booked_count_against_the_package(): void
    {
        $package = $this->makePackage(['sessions_total' => 3]);

        $this->book($package, now()->addDays(1));
        $this->book($package, now()->addDays(2));
        $this->book($package, now()->addDays(3));

        $this->assertRefused(fn () => $this->book($package, now()->addDays(4)));
        $this->assertSame(3, TutoringSession::count());
    }

    public function test_used_and_booked_ahead_are_added_together(): void
    {
        $package = $this->makePackage(['sessions_total' => 3, 'sessions_used' => 2]);

        $this->book($package, now()->addDays(1));

        $this->assertRefused(fn () => $this->book($package, now()->addDays(2)));
    }

    public function test_a_cancelled_class_frees_its_place(): void
    {
        $package = $this->makePackage(['sessions_total' => 1]);
        $first = $this->book($package, now()->addDays(2));
        $this->sessions()->cancel($first, self::TUTOR, 'tutor unwell');

        $replacement = $this->book($package, now()->addDays(3));

        $this->assertSame('scheduled', $replacement->status);
    }

    public function test_nothing_is_booked_on_or_after_the_expiry(): void
    {
        $package = $this->makePackage(['expires_at' => now()->addDays(5)]);

        $this->book($package, now()->addDays(4));
        $this->assertRefused(fn () => $this->book($package, now()->addDays(5)));
        $this->assertRefused(fn () => $this->book($package, now()->addDays(6)));
    }

    public function test_a_package_that_is_not_active_takes_no_bookings(): void
    {
        foreach (['completed', 'cancelled', 'expired'] as $index => $status) {
            $package = $this->makePackage([
                'status' => $status,
                'student_user_id' => 'STU-X'.$index,
                'tutor_user_id' => 'TUT-X'.$index,
            ]);

            $this->assertRefused(fn () => $this->book($package, now()->addDay()), $status);
        }
    }

    public function test_a_refused_booking_holds_no_money(): void
    {
        $package = $this->makePackage(['sessions_total' => 1]);
        $this->book($package, now()->addDay());
        $holdsBefore = LedgerEntry::count();

        $this->assertRefused(fn () => $this->book($package, now()->addDays(2)));

        $this->assertSame($holdsBefore, LedgerEntry::count());
    }

    public function test_the_guard_reads_the_package_as_stored_not_as_passed(): void
    {
        $package = $this->makePackage(['sessions_total' => 1]);
        $stale = Package::find($package->id);
        $this->book($package, now()->addDay());

        $this->assertRefused(fn () => $this->book($stale, now()->addDays(2)));
    }

    private function book(Package $package, Carbon $startsAt): TutoringSession
    {
        $this->fundWallet($package);

        return $this->sessions()->schedule($package, $startsAt->setTime(17, 0), 60, 'home', '12 Rose Lane');
    }

    private function assertRefused(callable $booking, string $why = ''): void
    {
        try {
            $booking();
            $this->fail('The booking should have been refused. '.$why);
        } catch (ValidationException $e) {
            $this->assertArrayHasKey('package', $e->errors(), $why);
        }
    }
}
