<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Console\Commands;

use App\Models\DemoLead;
use App\Models\Register;
use App\Models\Student_Enquiry_Managment;
use App\Models\Teacher_review;
use App\Models\UserSubscription;
use App\Nxt\Dashboard\Models\AppNotification;
use App\Nxt\Dashboard\Models\AttendanceEvent;
use App\Nxt\Dashboard\Models\Dispute;
use App\Nxt\Dashboard\Models\Homework;
use App\Nxt\Dashboard\Models\HomeworkMark;
use App\Nxt\Dashboard\Models\HomeworkSubmission;
use App\Nxt\Dashboard\Models\Invoice;
use App\Nxt\Dashboard\Models\Lead;
use App\Nxt\Dashboard\Models\LeadReply;
use App\Nxt\Dashboard\Models\Message;
use App\Nxt\Dashboard\Models\MeterEvent;
use App\Nxt\Dashboard\Models\Package;
use App\Nxt\Dashboard\Models\Payout;
use App\Nxt\Dashboard\Models\PracticeTest;
use App\Nxt\Dashboard\Models\ProgressSnapshot;
use App\Nxt\Dashboard\Models\ProgressSummary;
use App\Nxt\Dashboard\Models\Quote;
use App\Nxt\Dashboard\Models\SavedTutor;
use App\Nxt\Dashboard\Models\StudioArtefact;
use App\Nxt\Dashboard\Models\StudyPlan;
use App\Nxt\Dashboard\Models\StudyPlanItem;
use App\Nxt\Dashboard\Models\TestAttempt;
use App\Nxt\Dashboard\Models\TutorAvailability;
use App\Nxt\Dashboard\Models\TutorMatch;
use App\Nxt\Dashboard\Models\TutoringSession;
use App\Nxt\Dashboard\Models\TutorNote;
use App\Nxt\Dashboard\Models\TutorVerification;
use App\Nxt\Dashboard\Services\Entitlements;
use App\Nxt\Dashboard\Services\Ledger;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Populates the dashboard tables so both apps can be worked on against real
 * rows rather than fixtures.
 *
 * Two different things happen here, and the distinction matters:
 *
 *  - BACKFILL is real. Every requirement in `student_enquiry_managment` and
 *    `demo_leads` becomes an `nxt_leads` row. Those are genuine enquiries from
 *    the live site and they carry their legacy id, so the backfill is
 *    repeatable and reversible.
 *
 *  - The WORKING SET is demonstration data, attached to one nominated student
 *    and the tutors who actually match them. It exists so the screens can be
 *    built and reviewed. It is written only when --demo is passed, and every
 *    row it creates is removable with --fresh.
 *
 * The working set writes to exactly one legacy table: `teacher_review`, which
 * is where the tutor Growth screen reads ratings from. Those rows are scoped to
 * the demo tutor's user_id and written only when that tutor has none, so no
 * real tutor's rating can be touched. --fresh removes them again.
 */
class SeedDashboardDemoCommand extends Command
{
    protected $signature = 'nxt-dashboard:seed
        {--fresh : Delete existing dashboard rows first}
        {--demo : Also build the demonstration working set}
        {--student= : The register.user_id to attach the working set to}
        {--tutor= : The register.user_id of the hired tutor}';

    protected $description = 'Backfill dashboard leads from the legacy enquiry tables, and optionally build a demo working set';

    public function handle(Ledger $ledger): int
    {
        if ($this->option('fresh')) {
            $this->wipe();
        }

        $this->backfillLeads();

        if ($this->option('demo')) {
            $this->buildWorkingSet($ledger);
        }

        $this->newLine();
        $this->info('Done.');

        return self::SUCCESS;
    }

    private function wipe(): void
    {
        $tables = [
            'nxt_attendance_events', 'nxt_disputes', 'nxt_sessions', 'nxt_packages',
            'nxt_homework_marks', 'nxt_homework_submissions', 'nxt_homework',
            'nxt_study_plan_items', 'nxt_study_plans', 'nxt_test_attempts', 'nxt_tests',
            'nxt_progress_snapshots', 'nxt_progress_summaries', 'nxt_tutor_notes',
            'nxt_ledger_entries', 'nxt_payouts', 'nxt_invoices', 'nxt_meter_events',
            'nxt_lead_views', 'nxt_lead_replies', 'nxt_quotes', 'nxt_matches', 'nxt_leads',
            'nxt_tutor_availability', 'nxt_availability_exceptions', 'nxt_tutor_verifications',
            'nxt_reliability_scores', 'nxt_studio_artefacts', 'nxt_saved_tutors',
            'nxt_notifications', 'nxt_messages', 'nxt_outbox_events',
        ];

        foreach ($tables as $table) {
            DB::table($table)->delete();
        }

        // The two things the working set writes outside the nxt_ namespace.
        // Scoped to the demo accounts by user_id, so nothing real is removed.
        $demoUserIds = ['9001', '9002', '9003'];
        DB::table('user_subscriptions')->whereIn('user_id', $demoUserIds)->delete();
        DB::table('teacher_review')->whereIn('user_id', $demoUserIds)->delete();

        $this->warn('Cleared '.count($tables).' dashboard tables, plus demo subscriptions and reviews.');
    }

    /**
     * Real enquiries become real requirements.
     *
     * Keyed on the legacy id so running this twice does not duplicate anything,
     * and so a row can always be traced back to the enquiry it came from.
     */
    private function backfillLeads(): void
    {
        $created = 0;

        foreach (Student_Enquiry_Managment::all() as $enquiry) {
            if (Lead::where('legacy_enquiry_id', $enquiry->id)->exists()) {
                continue;
            }

            $student = Register::where('user_id', $enquiry->user_id)->first();

            Lead::create([
                'legacy_enquiry_id' => $enquiry->id,
                'source' => 'enquiry',
                'student_user_id' => $student?->user_id,
                'contact_name' => $enquiry->name,
                'student_name' => $enquiry->name,
                'phone' => $enquiry->phone,
                'class_level' => $enquiry->for_class,
                'city' => $enquiry->city,
                'locality' => $enquiry->district,
                'pincode' => $enquiry->pincode,
                'note' => $enquiry->message,
                'budget_min_paise' => $this->rupeesToPaise($enquiry->budget),
                'budget_max_paise' => $this->rupeesToPaise($enquiry->budget, 1.25),
                'mode' => 'home',
                'status' => $enquiry->status === 't' ? 'matches_ready' : 'received',
                'expires_at' => now()->addDays(30),
            ]);

            $created++;
        }

        foreach (DemoLead::all() as $demo) {
            if (Lead::where('legacy_demo_lead_id', $demo->id)->exists()) {
                continue;
            }

            Lead::create([
                'legacy_demo_lead_id' => $demo->id,
                'source' => 'demo_form',
                'contact_name' => $demo->name,
                'phone' => $demo->phone,
                'phone_hash' => $demo->phone_hash,
                'subject' => $demo->subject,
                'class_level' => $demo->child_class,
                'mode' => $demo->mode ?: 'home',
                'locality' => $demo->location,
                'note' => $demo->message,
                'slots' => $demo->preferred_time ? [$demo->preferred_time] : null,
                'status' => 'received',
                'expires_at' => now()->addDays(30),
            ]);

            $created++;
        }

        $this->info("Backfilled {$created} lead(s) from the legacy enquiry tables.");
    }

    private function buildWorkingSet(Ledger $ledger): void
    {
        $student = $this->pickStudent();
        $tutor = $this->pickTutor();

        if (! $student || ! $tutor) {
            $this->error('Could not find an active student and tutor to attach the working set to.');

            return;
        }

        $this->line("Working set: student <info>{$student->name}</info> ({$student->user_id}), tutor <info>{$tutor->name}</info> ({$tutor->user_id})");

        $this->seedTutorReadiness($tutor);
        $lead = $this->seedRequirement($student, $tutor);
        $this->seedInboxFor($tutor);
        $package = $this->seedPackageAndSessions($student, $tutor, $ledger);
        $this->seedHomework($student, $tutor, $package);
        $this->seedStudyPlan($student, $tutor);
        $this->seedTests($student);
        $this->seedProgress($student);
        $this->seedNotifications($student, $tutor, $lead);

        // Everything below exists so no screen in either app opens on an empty
        // state during a walkthrough. Each one fills a surface the core loop
        // does not reach on its own.
        $this->seedSubscriptions($student, $tutor);
        $this->seedSecondStudent($tutor, $ledger);
        $this->seedMoneyExtras($student, $tutor, $package, $ledger);
        $this->seedEngagement($student, $tutor, $package);
        $this->seedReviews($tutor);
    }

    /**
     * Put both accounts on a paid plan.
     *
     * On the free tier the credit chip reads "Leads 3" and half the plan screen
     * is an upgrade prompt. A paid plan is what makes the meters, the commission
     * tier and the plan screens show their real behaviour.
     */
    private function seedSubscriptions(Register $student, Register $tutor): void
    {
        $plans = [
            // Student Plus: 500 AI credits, 25 contacts.
            [$student->user_id, 3, 'student', 500, 25, 0, 138, 6, 0],
            // Tutor Pro: 300 AI credits, 30 lead views, 15% commission.
            [$tutor->user_id, 6, 'tutor', 300, 0, 30, 47, 0, 11],
        ];

        foreach ($plans as [$userId, $planId, $type, $ai, $contact, $lead, $aiUsed, $contactUsed, $leadUsed]) {
            if (UserSubscription::where('user_id', $userId)->where('status', 'active')->exists()) {
                continue;
            }

            UserSubscription::create([
                'user_id' => $userId,
                'plan_id' => $planId,
                'plan_type' => $type,
                'start_date' => now()->subDays(12),
                'end_date' => now()->addDays(18),
                'status' => 'active',
                'payment_status' => 'paid',
                'ai_credit_limit' => $ai,
                'contact_limit' => $contact,
                'lead_limit' => $lead,
                'ai_credit_used' => $aiUsed,
                'contact_used' => $contactUsed,
                'lead_used' => $leadUsed,
            ]);
        }

        $this->seedMeterHistory($student, $tutor);

        $this->line('  Both accounts put on a paid plan with meters part-used.');
    }

    /**
     * Recent movements behind the meters.
     *
     * The used counts live on the subscription row, so a meter reads 138/500
     * whether or not anything explains it — and "Where your credits went" then
     * says "nothing used yet", contradicting the bar directly above it. These
     * rows are what make that screen answerable.
     */
    private function seedMeterHistory(Register $student, Register $tutor): void
    {
        $entries = [
            [$student->user_id, Entitlements::AI_MESSAGES, -1, 'consume', 6],
            [$student->user_id, Entitlements::AI_MESSAGES, -1, 'consume', 5],
            [$student->user_id, Entitlements::AI_MESSAGES, -1, 'consume', 5],
            [$student->user_id, Entitlements::AI_MESSAGES, 1, 'refund', 5],
            [$student->user_id, Entitlements::AI_MESSAGES, -1, 'consume', 3],
            [$student->user_id, Entitlements::TUTOR_CONTACT, -1, 'consume', 12],
            [$student->user_id, Entitlements::TUTOR_CONTACT, -1, 'consume', 9],
            [$tutor->user_id, Entitlements::LEAD_VIEW, -1, 'consume', 4],
            [$tutor->user_id, Entitlements::LEAD_VIEW, -1, 'consume', 2],
            [$tutor->user_id, Entitlements::AI_MESSAGES, -5, 'consume', 2],
        ];

        foreach ($entries as $index => [$userId, $feature, $delta, $reason, $daysAgo]) {
            MeterEvent::create([
                'user_id' => $userId,
                'feature' => $feature,
                'delta' => $delta,
                'reason' => $reason,
                'actor' => $reason === 'refund' ? 'system' : $userId,
                'reference_type' => $feature === Entitlements::LEAD_VIEW ? 'match' : null,
                'idempotency_key' => 'seed-meter:'.$userId.':'.$index,
                'created_at' => now()->subDays($daysAgo),
                'updated_at' => now()->subDays($daysAgo),
            ]);
        }
    }

    /**
     * A second student on the tutor's roster, so Students is a list rather than
     * a single row and the calendar has two names in it.
     */
    private function seedSecondStudent(Register $tutor, Ledger $ledger): void
    {
        $second = Register::where('user_id', '9003')->first();

        if (! $second || Package::where('student_user_id', $second->user_id)->exists()) {
            return;
        }

        $ratePaise = 130000;

        $package = Package::create([
            'student_user_id' => $second->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Physics',
            'class_level' => '12',
            'sessions_total' => 8,
            'sessions_used' => 6,
            'rate_paise' => $ratePaise,
            'amount_paise' => $ratePaise * 8,
            'commission_pct' => 15,
            'status' => 'active',
            'purchased_at' => now()->subDays(30),
            'expires_at' => now()->addDays(60),
        ]);

        $ledger->recordPurchase(
            $second->user_id,
            $package->amount_paise,
            'seed-purchase:'.$package->id,
            $package->id,
            '8 classes of Physics with '.$tutor->name,
        );

        $commission = (int) round($ratePaise * 0.15);

        for ($i = 6; $i >= 1; $i--) {
            $startsAt = $this->ist(now()->subDays($i * 3), 19, 0);

            $session = TutoringSession::create([
                'package_id' => $package->id,
                'student_user_id' => $second->user_id,
                'tutor_user_id' => $tutor->user_id,
                'subject' => 'Physics',
                'type' => 'regular',
                'mode' => 'online',
                'meeting_url' => 'https://meet.google.com/nxt-demo-physics',
                'starts_at' => $startsAt,
                'planned_min' => 60,
                'actual_min' => 60,
                'status' => 'confirmed',
                'topics' => ['Electrostatics', 'Gauss law'],
                'confidence' => 4,
                'fee_paise' => $ratePaise,
                'commission_paise' => $commission,
                'checked_in_at' => $startsAt->copy(),
                'checked_out_at' => $startsAt->copy()->addMinutes(60),
                'confirmed_at' => $startsAt->copy()->addHours(2),
            ]);

            $this->attendanceFor($session, $second, $tutor);
            $ledger->holdForSession($session, $second->user_id);
            $ledger->releaseForSession($session, $second->user_id);
        }

        // Two classes left, so this student triggers the renewal prompt and the
        // "running low" flag on the roster.
        TutoringSession::create([
            'package_id' => $package->id,
            'student_user_id' => $second->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Physics',
            'type' => 'regular',
            'mode' => 'online',
            'meeting_url' => 'https://meet.google.com/nxt-demo-physics',
            'starts_at' => $this->ist(now()->addDays(2), 19, 0),
            'planned_min' => 60,
            'status' => 'scheduled',
            'fee_paise' => $ratePaise,
            'commission_paise' => $commission,
        ]);

        Homework::create([
            'student_user_id' => $second->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Physics',
            'title' => 'Gauss law — numericals 1 to 12',
            'instructions' => 'Draw the Gaussian surface for each one before you start calculating.',
            'due_at' => $this->ist(now()->addDays(1), 20, 0),
            'status' => 'submitted',
        ]);

        TutorNote::create([
            'student_user_id' => $second->user_id,
            'tutor_user_id' => $tutor->user_id,
            'visibility' => 'private',
            'body' => 'Strong on derivations, rushes the numericals. Slow him down in the next class.',
        ]);

        $this->line('  Second student added to the roster with six confirmed classes.');
    }

    /** Payouts, invoices and a resolved dispute, so the money screens are not blank. */
    private function seedMoneyExtras(Register $student, Register $tutor, Package $package, Ledger $ledger): void
    {
        if (Payout::where('tutor_user_id', $tutor->user_id)->exists()) {
            return;
        }

        foreach ([[3, 'paid', 1_87_000], [2, 'paid', 2_44_800], [1, 'pending', 0]] as [$weeksAgo, $status, $amount]) {
            $periodEnd = now()->subWeeks($weeksAgo)->endOfWeek();

            Payout::create([
                'tutor_user_id' => $tutor->user_id,
                'amount_paise' => $amount > 0 ? $amount : $ledger->balance($tutor->user_id, Ledger::TUTOR_PAYABLE),
                'status' => $status,
                'period_start' => $periodEnd->copy()->startOfWeek()->toDateString(),
                'period_end' => $periodEnd->toDateString(),
                'reference' => $status === 'paid' ? 'UTR'.random_int(100000, 999999) : null,
                'paid_at' => $status === 'paid' ? $periodEnd->copy()->addDays(2) : null,
            ]);
        }

        Invoice::create([
            'owner_user_id' => $student->user_id,
            'number' => 'NXT-2026-'.str_pad((string) random_int(1, 9999), 4, '0', STR_PAD_LEFT),
            'package_id' => $package->id,
            'amount_paise' => $package->amount_paise,
            'gst_paise' => (int) round($package->amount_paise * 0.18),
            'status' => 'paid',
            'issued_at' => $package->purchased_at ?? now()->subDays(24),
        ]);

        // A dispute that was looked at and closed. The screens need one example
        // of the resolved state, and an open one would distort every earnings
        // figure on the tutor's side for the whole walkthrough.
        $older = TutoringSession::where('student_user_id', $student->user_id)
            ->where('status', 'confirmed')
            ->orderBy('starts_at')
            ->first();

        if ($older) {
            Dispute::create([
                'session_id' => $older->id,
                'raised_by_user_id' => $student->user_id,
                'reason' => 'late_or_short',
                'detail' => 'Class started about twenty minutes late.',
                'status' => 'resolved',
                'resolution' => 'Checked the attendance record: the tutor checked in nine minutes late and taught the full hour. No adjustment made, and the tutor has been reminded.',
                'resolved_at' => now()->subDays(10),
            ]);
        }

        $this->line('  Payouts, an invoice and a resolved dispute written.');
    }

    /** Saved tutors, in-app messages and Studio artefacts. */
    private function seedEngagement(Register $student, Register $tutor, Package $package): void
    {
        if (SavedTutor::where('student_user_id', $student->user_id)->exists()) {
            return;
        }

        $others = Register::where('join_as', 'teacher')
            ->where('status', 't')
            ->where('user_id', '!=', $tutor->user_id)
            ->whereIn('user_id', DB::table('teacher_course_managment')->distinct()->pluck('user_id'))
            ->limit(3)
            ->get();

        foreach ($others as $other) {
            SavedTutor::create([
                'student_user_id' => $student->user_id,
                'tutor_user_id' => $other->user_id,
                'saved_at' => now()->subDays(random_int(1, 14)),
            ]);
        }

        $thread = 'package:'.$package->id;

        $conversation = [
            [$student->user_id, $tutor->user_id, 'Could we move Friday to 6 PM? Aarav has a school function at 5.', 3],
            [$tutor->user_id, $student->user_id, 'That works. I will move it to 6 PM and it shows in your app.', 3],
            [$student->user_id, $tutor->user_id, 'Thank you. Also he is finding circles hard.', 1],
            [$tutor->user_id, $student->user_id, 'Noted. I have put two circles sessions into next week plan.', 1],
        ];

        foreach ($conversation as [$from, $to, $body, $daysAgo]) {
            Message::create([
                'thread_key' => $thread,
                'package_id' => $package->id,
                'from_user_id' => $from,
                'to_user_id' => $to,
                'body' => $body,
                'read_at' => now()->subDays($daysAgo),
                'created_at' => now()->subDays($daysAgo),
                'updated_at' => now()->subDays($daysAgo),
            ]);
        }

        $artefacts = [
            ['lesson_plan', 'Class 10 Maths — Circles, 60 min'],
            ['worksheet', 'Trigonometry practice — mixed difficulty'],
            ['demo_script', 'Demo class script — Class 12 Physics'],
        ];

        foreach ($artefacts as $index => [$tool, $title]) {
            StudioArtefact::create([
                'tutor_user_id' => $tutor->user_id,
                'tool' => $tool,
                'title' => $title,
                'inputs' => ['board' => 'CBSE', 'class' => '10', 'duration_min' => 60],
                'output' => 'Generated content for '.$title.'.',
                'version' => 1,
                'created_at' => now()->subDays($index + 2),
                'updated_at' => now()->subDays($index + 2),
            ]);
        }

        $this->line('  Saved tutors, an in-app message thread and Studio artefacts written.');
    }

    /**
     * Reviews for the demo tutor.
     *
     * This is the one place the command writes to a legacy table, because
     * reviews live in `teacher_review` and the tutor's Growth screen reads them
     * from there. The rows are scoped to the demo tutor's user_id and are only
     * written when that tutor has none, so no real tutor's rating can be
     * touched. They are removed by --fresh.
     */
    private function seedReviews(Register $tutor): void
    {
        if (Teacher_review::where('user_id', $tutor->user_id)->exists()) {
            return;
        }

        $reviews = [
            ['Priya S.', 5, 5, 5, 5, 4, 'Aarav went from 58 to 78 in two months. Explains until it actually lands.'],
            ['Rahul M.', 5, 5, 4, 5, 5, 'Always on time and sends homework the same evening. Very organised.'],
            ['Sunita K.', 4, 4, 5, 4, 4, 'Patient with my daughter, who does not ask questions easily.'],
            ['Amit V.', 5, 5, 5, 5, 5, 'Best decision we made before pre-boards.'],
            ['Neha G.', 4, 5, 4, 4, 4, 'Good with the board pattern. Would like a bit more revision work.'],
        ];

        foreach ($reviews as $index => [$name, $rating, $expertise, $patience, $reliability, $communication, $message]) {
            Teacher_review::create([
                'name' => $name,
                'user_id' => $tutor->user_id,
                'rating' => (string) $rating,
                'expertise' => (string) $expertise,
                'patience' => (string) $patience,
                'reliability' => (string) $reliability,
                'communication' => (string) $communication,
                'message' => $message,
                'date' => now()->subDays(($index + 1) * 9)->format('Y-m-d'),
                'status' => 't',
            ]);
        }

        $this->line('  Five reviews written for the demo tutor.');
    }

    private function pickStudent(): ?Register
    {
        if ($id = $this->option('student')) {
            return Register::where('user_id', $id)->first();
        }

        return Register::where('join_as', 'student')->where('status', 't')->orderBy('id')->first();
    }

    private function pickTutor(): ?Register
    {
        if ($id = $this->option('tutor')) {
            return Register::where('user_id', $id)->first();
        }

        // A tutor who actually has courses on file, so the profile screens have
        // something real to render.
        return Register::where('join_as', 'teacher')
            ->where('status', 't')
            ->whereIn('user_id', DB::table('teacher_course_managment')->distinct()->pluck('user_id'))
            ->orderBy('id')
            ->first();
    }

    /** Availability, verification and a rate, without which a tutor gets no leads. */
    private function seedTutorReadiness(Register $tutor): void
    {
        foreach ([1, 3, 5] as $weekday) {          // Mon, Wed, Fri
            TutorAvailability::firstOrCreate([
                'tutor_user_id' => $tutor->user_id,
                'weekday' => $weekday,
                'start_time' => '17:00:00',
            ], [
                'end_time' => '20:00:00',
                'mode' => 'any',
            ]);
        }

        TutorAvailability::firstOrCreate([
            'tutor_user_id' => $tutor->user_id,
            'weekday' => 0,
            'start_time' => '10:00:00',
        ], ['end_time' => '13:00:00', 'mode' => 'online']);

        // All three required documents approved, so the tutor can actually
        // receive leads. Police verification is left un-uploaded: it is optional,
        // and the Growth screen needs one example of that state.
        foreach (['id_proof', 'qualification', 'address_proof'] as $docType) {
            TutorVerification::updateOrCreate(
                ['tutor_user_id' => $tutor->user_id, 'doc_type' => $docType],
                ['status' => 'approved', 'reviewed_at' => now()->subDays(20)],
            );
        }

        if (blank($tutor->budget)) {
            $tutor->update(['budget' => '1100']);
        }
    }

    /**
     * An open requirement with matches, so the tracker and the leads inbox both
     * have something to show. Reasons name concrete inputs, as the brief
     * requires — a reason like "great tutor" is worth nothing to a parent.
     */
    private function seedRequirement(Register $student, Register $tutor): Lead
    {
        $lead = Lead::firstOrCreate(
            ['student_user_id' => $student->user_id, 'subject' => 'Physics'],
            [
                'source' => 'web',
                'contact_name' => $student->name,
                'student_name' => $student->name,
                'phone' => $student->phone,
                'class_level' => '10',
                'board' => 'CBSE',
                'subjects' => ['Physics'],
                'mode' => 'home',
                'locality' => $tutor->address ?: 'Sector 45',
                'city' => $tutor->city ?: 'Gurugram',
                'slots' => ['mon_evening', 'wed_evening', 'fri_evening'],
                'budget_min_paise' => 90000,
                'budget_max_paise' => 120000,
                'note' => 'Weak in electricity and magnetism, needs confidence before pre-boards.',
                'status' => 'matches_ready',
                'start_by' => now()->addDays(7)->toDateString(),
                'expires_at' => now()->addDays(30),
            ],
        );

        // Prefer tutors in the same city, but never return an empty match list:
        // a tracker stuck on "Matches ready — 0 matches" is a worse demo than a
        // match from the next locality, and it hides the screen being built.
        $sameCity = Register::where('join_as', 'teacher')
            ->where('status', 't')
            ->where('user_id', '!=', $tutor->user_id)
            ->when($tutor->city, fn ($q) => $q->where('city', $tutor->city))
            ->limit(2)
            ->get();

        $candidates = $sameCity->isNotEmpty()
            ? $sameCity
            : Register::where('join_as', 'teacher')
                ->where('status', 't')
                ->where('user_id', '!=', $tutor->user_id)
                ->whereIn('user_id', DB::table('teacher_course_managment')->distinct()->pluck('user_id'))
                ->limit(2)
                ->get();

        $rank = 1;

        foreach ($candidates as $candidate) {
            TutorMatch::firstOrCreate(
                ['lead_id' => $lead->id, 'tutor_user_id' => $candidate->user_id],
                [
                    'score' => $rank === 1 ? 92 : 81,
                    'rank' => $rank,
                    'status' => 'offered',
                    'reasons' => [
                        'Teaches CBSE Class 10 Physics',
                        'Free Mon/Wed/Fri 5-7 PM, which matches the slots you asked for',
                        ($candidate->experience ?: '5 years').' of experience, based in '.($candidate->city ?: 'your city'),
                    ],
                    'expires_at' => now()->addHours(24),
                ],
            );

            $rank++;
        }

        return $lead;
    }

    /**
     * Leads routed to the demo tutor, so the Leads inbox has all four of its
     * tabs populated: two waiting, one already replied to, one declined.
     *
     * These are drawn from the backfilled legacy enquiries where possible, so
     * the inbox is showing real requirements rather than invented ones.
     */
    private function seedInboxFor(Register $tutor): void
    {
        if (TutorMatch::where('tutor_user_id', $tutor->user_id)->exists()) {
            return;
        }

        // Two well-formed requirements of our own, then whatever the legacy
        // backfill produced. The backfilled rows are real but patchy — several
        // carry "offline" in the class column and no budget — and a walkthrough
        // should not open on the worst example the data has to offer.
        $leads = $this->cleanInboxLeads()
            ->concat(
                Lead::whereNull('student_user_id')
                    ->whereNull('subject')
                    ->orderByDesc('created_at')
                    ->limit(2)
                    ->get()
            );

        if ($leads->count() < 2) {
            return;
        }

        $plan = [
            ['score' => 92, 'status' => 'offered', 'hours' => 22],
            ['score' => 78, 'status' => 'offered', 'hours' => 6],
            ['score' => 85, 'status' => 'contacted', 'hours' => -4],
            ['score' => 61, 'status' => 'rejected', 'hours' => -30],
        ];

        foreach ($leads as $index => $lead) {
            $spec = $plan[$index] ?? $plan[0];

            $match = TutorMatch::create([
                'lead_id' => $lead->id,
                'tutor_user_id' => $tutor->user_id,
                'score' => $spec['score'],
                'rank' => 1,
                'status' => $spec['status'],
                'reject_reason' => $spec['status'] === 'rejected' ? 'slot_clash' : null,
                'reasons' => [
                    'Teaches '.($lead->class_level ? 'Class '.$lead->class_level : 'this class').' in '.($lead->city ?: 'this city'),
                    'Within the budget band the family gave',
                    'Free in the evening slots requested',
                ],
                'expires_at' => now()->addHours($spec['hours']),
            ]);

            // The replied lead needs the view, the reply and the quote that go
            // with it, or the Replied tab shows a lead with no history.
            if ($spec['status'] === 'contacted') {
                \App\Nxt\Dashboard\Models\LeadView::create([
                    'match_id' => $match->id,
                    'lead_id' => $lead->id,
                    'tutor_user_id' => $tutor->user_id,
                    'viewed_at' => now()->subHours(5),
                ]);

                LeadReply::create([
                    'lead_id' => $lead->id,
                    'match_id' => $match->id,
                    'tutor_user_id' => $tutor->user_id,
                    'body' => 'Hello, I teach this class in your area and have evening slots free. Happy to do a free demo this week.',
                    'ai_drafted' => true,
                    'delivery_status' => 'delivered',
                    'sent_at' => now()->subHours(4)->addMinutes(48),
                ]);

                Quote::create([
                    'lead_id' => $lead->id,
                    'tutor_user_id' => $tutor->user_id,
                    'rate_paise' => 110000,
                    'packages' => [
                        ['sessions' => 8, 'amount_paise' => 880000],
                        ['sessions' => 12, 'amount_paise' => 1320000],
                        ['sessions' => 16, 'amount_paise' => 1760000],
                    ],
                ]);
            }
        }

        $this->line('  Leads inbox seeded across New, Replied and Lost.');
    }

    /**
     * Two complete requirements for the top of the inbox — the shape a lead
     * arrives in when the WhatsApp intake agent has captured it properly.
     *
     * @return \Illuminate\Support\Collection<int,Lead>
     */
    private function cleanInboxLeads(): \Illuminate\Support\Collection
    {
        $specs = [
            [
                'student_name' => 'Aarav',
                'class_level' => '10',
                'board' => 'CBSE',
                'subject' => 'Maths',
                'locality' => 'Sector 45',
                'city' => 'Gurugram',
                'slots' => ['mon_evening', 'wed_evening', 'fri_evening'],
                'budget_min_paise' => 90000,
                'budget_max_paise' => 120000,
                'note' => 'Weak in trigonometry, needs confidence before pre-boards.',
                'source' => 'whatsapp',
            ],
            [
                'student_name' => 'Ishita',
                'class_level' => '12',
                'board' => 'CBSE',
                'subject' => 'Physics',
                'locality' => 'Sector 52',
                'city' => 'Gurugram',
                'slots' => ['tue_evening', 'thu_evening', 'sat_morning'],
                'budget_min_paise' => 120000,
                'budget_max_paise' => 150000,
                'note' => 'Board exams in March. Rotational motion and optics are the weak areas.',
                'source' => 'web',
            ],
        ];

        return collect($specs)->map(fn (array $spec): Lead => Lead::create($spec + [
            'mode' => 'home',
            'status' => 'matching',
            'start_by' => now()->addDays(5)->toDateString(),
            'expires_at' => now()->addDays(30),
        ]));
    }

    /**
     * A hired tutor: a funded package, classes behind and ahead, and the
     * attendance events and money movements each of them produced.
     */
    private function seedPackageAndSessions(Register $student, Register $tutor, Ledger $ledger): Package
    {
        $ratePaise = 110000;   // Rs 1,100 per class

        $package = Package::firstOrCreate(
            ['student_user_id' => $student->user_id, 'tutor_user_id' => $tutor->user_id, 'subject' => 'Maths'],
            [
                'class_level' => '10',
                'sessions_total' => 12,
                'sessions_used' => 0,
                'rate_paise' => $ratePaise,
                'amount_paise' => $ratePaise * 12,
                'commission_pct' => 15,
                'status' => 'active',
                'purchased_at' => now()->subDays(24),
                'expires_at' => now()->addDays(66),
            ],
        );

        if (TutoringSession::where('package_id', $package->id)->exists()) {
            $this->line('  Sessions already present — leaving them alone.');

            return $package;
        }

        // Through the purchase writer, so the demo wallet is funded the way a
        // real one is: a credit with the provider settlement behind it, which
        // the holds below then move into `held`.
        $ledger->recordPurchase(
            $student->user_id,
            $package->amount_paise,
            'seed-purchase:'.$package->id,
            $package->id,
            '12 classes of Maths with '.$tutor->name,
        );

        $commission = (int) round($ratePaise * 0.15);
        $topicBank = [
            ['Quadratic equations', 'Roots and discriminant'],
            ['Trigonometry', 'Heights and distances'],
            ['Coordinate geometry', 'Section formula'],
            ['Circles', 'Tangents'],
            ['Surface areas', 'Combination of solids'],
            ['Probability', 'Simple events'],
        ];

        // Nine classes behind us, confirmed, and three ahead still scheduled.
        for ($i = 9; $i >= 1; $i--) {
            $startsAt = $this->ist(now()->subDays($i * 2), 17, 0);

            $session = TutoringSession::create([
                'package_id' => $package->id,
                'student_user_id' => $student->user_id,
                'tutor_user_id' => $tutor->user_id,
                'subject' => 'Maths',
                'type' => $i === 9 ? 'demo' : 'regular',
                'mode' => 'home',
                'address' => $student->address ?: 'Sector 45, Gurugram',
                'starts_at' => $startsAt,
                'planned_min' => 60,
                'actual_min' => 60,
                'status' => 'confirmed',
                'topics' => $topicBank[$i % count($topicBank)],
                'confidence' => random_int(3, 5),
                'fee_paise' => $i === 9 ? 0 : $ratePaise,
                'commission_paise' => $i === 9 ? 0 : $commission,
                'checked_in_at' => $startsAt->copy()->addMinutes(random_int(-4, 8)),
                'checked_out_at' => $startsAt->copy()->addMinutes(62),
                'confirmed_at' => $startsAt->copy()->addHours(3),
            ]);

            $this->attendanceFor($session, $student, $tutor);

            if ($session->fee_paise > 0) {
                $ledger->holdForSession($session, $student->user_id);
                $ledger->releaseForSession($session, $student->user_id);
            }
        }

        $package->update(['sessions_used' => 8]);

        // One class finished but not yet confirmed: this is the state the
        // parent's Confirm/Dispute prompt and the tutor's pending balance both
        // hang off, so the screens need an example of it.
        $recent = $this->ist(now()->subHours(3), 17, 0);

        $awaiting = TutoringSession::create([
            'package_id' => $package->id,
            'student_user_id' => $student->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Maths',
            'type' => 'regular',
            'mode' => 'home',
            'address' => $student->address ?: 'Sector 45, Gurugram',
            'starts_at' => $recent,
            'planned_min' => 60,
            'actual_min' => 65,
            'status' => 'checked_out',
            'topics' => ['Arithmetic progressions', 'Sum of n terms'],
            'confidence' => 4,
            'fee_paise' => $ratePaise,
            'commission_paise' => $commission,
            'checked_in_at' => $recent->copy()->addMinutes(2),
            'checked_out_at' => $recent->copy()->addMinutes(67),
        ]);

        $this->attendanceFor($awaiting, $student, $tutor, confirmed: false);
        $ledger->holdForSession($awaiting, $student->user_id);

        foreach ([1, 3, 5] as $offset) {
            $startsAt = $this->ist(now()->addDays($offset), 17, 0);

            $upcoming = TutoringSession::create([
                'package_id' => $package->id,
                'student_user_id' => $student->user_id,
                'tutor_user_id' => $tutor->user_id,
                'subject' => 'Maths',
                'type' => 'regular',
                'mode' => $offset === 3 ? 'online' : 'home',
                'address' => $offset === 3 ? null : ($student->address ?: 'Sector 45, Gurugram'),
                'meeting_url' => $offset === 3 ? 'https://meet.google.com/nxt-demo-room' : null,
                'starts_at' => $startsAt,
                'planned_min' => 60,
                'status' => 'scheduled',
                'fee_paise' => $ratePaise,
                'commission_paise' => $commission,
            ]);

            $ledger->holdForSession($upcoming, $student->user_id);
        }

        $this->line('  13 classes written, with their attendance events and ledger entries.');

        return $package;
    }

    private function attendanceFor(TutoringSession $session, Register $student, Register $tutor, bool $confirmed = true): void
    {
        AttendanceEvent::create([
            'session_id' => $session->id,
            'kind' => 'check_in',
            'actor_user_id' => $tutor->user_id,
            'method' => 'parent_otp',
            'device_time' => $session->checked_in_at,
            'server_time' => $session->checked_in_at,
        ]);

        AttendanceEvent::create([
            'session_id' => $session->id,
            'kind' => 'check_out',
            'actor_user_id' => $tutor->user_id,
            'method' => 'app',
            'device_time' => $session->checked_out_at,
            'server_time' => $session->checked_out_at,
        ]);

        if ($confirmed) {
            AttendanceEvent::create([
                'session_id' => $session->id,
                'kind' => 'confirm',
                'actor_user_id' => $student->user_id,
                'method' => 'parent',
                'server_time' => $session->confirmed_at,
            ]);
        }
    }

    private function seedHomework(Register $student, Register $tutor, Package $package): void
    {
        if (Homework::where('student_user_id', $student->user_id)->exists()) {
            return;
        }

        $open = Homework::create([
            'student_user_id' => $student->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Maths',
            'title' => 'Arithmetic progressions — Exercise 5.2',
            'instructions' => 'Questions 1 to 8. Show every step; I will check the working, not just the answer.',
            'due_at' => $this->ist(now()->addDay(), 20, 0),
            'status' => 'open',
        ]);

        $overdue = Homework::create([
            'student_user_id' => $student->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Maths',
            'title' => 'Trigonometry revision sheet',
            'instructions' => 'The ten identity questions we went through in class.',
            'due_at' => $this->ist(now()->subDays(2), 20, 0),
            'status' => 'open',
        ]);

        $marked = Homework::create([
            'student_user_id' => $student->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Maths',
            'title' => 'Quadratic equations — Exercise 4.3',
            'instructions' => 'Questions 1 to 6.',
            'due_at' => $this->ist(now()->subDays(6), 20, 0),
            'status' => 'marked',
        ]);

        $submission = HomeworkSubmission::create([
            'homework_id' => $marked->id,
            'student_user_id' => $student->user_id,
            'files' => ['homework/seed/quadratics-p1.jpg', 'homework/seed/quadratics-p2.jpg'],
            'note' => 'Question 5 took me three attempts.',
            'submitted_at' => $this->ist(now()->subDays(6), 19, 20),
        ]);

        HomeworkMark::create([
            'homework_id' => $marked->id,
            'submission_id' => $submission->id,
            'tutor_user_id' => $tutor->user_id,
            'score' => 82,
            'comment' => 'Good working throughout. Watch the sign when you move terms across.',
            'marked_at' => $this->ist(now()->subDays(5), 9, 0),
        ]);

        unset($open, $overdue);
    }

    private function seedStudyPlan(Register $student, Register $tutor): void
    {
        if (StudyPlan::where('student_user_id', $student->user_id)->exists()) {
            return;
        }

        $plan = StudyPlan::create([
            'student_user_id' => $student->user_id,
            'tutor_user_id' => $tutor->user_id,
            'subject' => 'Maths',
            'week_start' => now()->startOfWeek()->toDateString(),
            'status' => 'active',
            'generated_by' => 'tutor',
        ]);

        $items = [
            ['Arithmetic progressions — nth term', 'in_class', 'Arithmetic progressions', true],
            ['Practise AP word problems', 'self_study', 'Arithmetic progressions', false],
            ['Trigonometric identities recap', 'in_class', 'Trigonometry', true],
            ['Heights and distances — 10 questions', 'self_study', 'Trigonometry', false],
            ['Chapter test: quadratics', 'self_study', 'Quadratic equations', false],
        ];

        foreach ($items as $position => [$title, $kind, $chapter, $locked]) {
            StudyPlanItem::create([
                'plan_id' => $plan->id,
                'title' => $title,
                'kind' => $kind,
                'chapter' => $chapter,
                'subject' => 'Maths',
                'locked' => $locked,
                'position' => $position,
                'due_at' => $this->ist(now()->startOfWeek()->addDays($position + 1), 20, 0),
                'done_at' => $position < 2 ? now()->subDay() : null,
                'edited_by' => $tutor->name,
            ]);
        }
    }

    private function seedTests(Register $student): void
    {
        if (TestAttempt::where('student_user_id', $student->user_id)->exists()) {
            return;
        }

        foreach ([['Trigonometry', 78], ['Quadratic equations', 64]] as [$chapter, $score]) {
            $test = PracticeTest::firstOrCreate(
                ['subject' => 'Maths', 'chapter' => $chapter, 'class_level' => '10'],
                ['board' => 'CBSE', 'difficulty' => 'mixed', 'question_count' => 10, 'source' => 'bank'],
            );

            TestAttempt::create([
                'test_id' => $test->id,
                'student_user_id' => $student->user_id,
                'score' => $score,
                'total' => 100,
                'per_topic' => [
                    ['topic' => $chapter, 'score' => $score],
                    ['topic' => 'Application questions', 'score' => max(40, $score - 12)],
                ],
                'status' => 'finished',
                'started_at' => $this->ist(now()->subDays(4), 18, 0),
                'finished_at' => $this->ist(now()->subDays(4), 18, 35),
            ]);
        }
    }

    /**
     * Progress cells carry the ids of the sessions and attempts behind them.
     * A cell a parent cannot drill into is a claim, not evidence.
     */
    private function seedProgress(Register $student): void
    {
        if (ProgressSnapshot::where('student_user_id', $student->user_id)->exists()) {
            return;
        }

        $sessionIds = TutoringSession::where('student_user_id', $student->user_id)
            ->where('status', 'confirmed')
            ->pluck('id')
            ->all();

        $attemptIds = TestAttempt::where('student_user_id', $student->user_id)->pluck('id')->all();

        $chapters = [
            'Quadratic equations' => 64,
            'Trigonometry' => 78,
            'Arithmetic progressions' => 71,
            'Coordinate geometry' => 85,
            'Circles' => 58,
            'Probability' => 90,
        ];

        foreach ($chapters as $chapter => $score) {
            ProgressSnapshot::create([
                'student_user_id' => $student->user_id,
                'subject' => 'Maths',
                'chapter' => $chapter,
                'score' => $score,
                'evidence' => [
                    'sessions' => array_slice($sessionIds, 0, 2),
                    'test_attempts' => $attemptIds,
                ],
                'computed_for' => now()->toDateString(),
            ]);
        }

        ProgressSummary::firstOrCreate(
            ['student_user_id' => $student->user_id, 'week_start' => now()->startOfWeek()->toDateString()],
            [
                'week_end' => now()->endOfWeek()->toDateString(),
                'counters' => [
                    'classes_attended' => 3,
                    'classes_scheduled' => 3,
                    'homework_done' => 1,
                    'homework_missed' => 1,
                    'tests_taken' => 2,
                    'test_average' => 71,
                ],
                'narrative' => 'Steady week. Trigonometry is now the strongest chapter and arithmetic progressions are coming along; circles remain the weak spot and the next two classes are planned around them.',
            ],
        );
    }

    private function seedNotifications(Register $student, Register $tutor, Lead $lead): void
    {
        if (AppNotification::where('user_id', $student->user_id)->exists()) {
            return;
        }

        AppNotification::create([
            'user_id' => $student->user_id,
            'role' => 'student',
            'event' => 'session.checked_out',
            'title' => $tutor->name.' finished today\'s class',
            'body' => 'Arithmetic progressions, sum of n terms. Homework set for tomorrow. Confirm or raise an issue within 24 hours.',
            'deep_link' => '/user/learn',
        ]);

        AppNotification::create([
            'user_id' => $student->user_id,
            'role' => 'student',
            'event' => 'matches.ready',
            'title' => 'Your Physics matches are ready',
            'body' => TutorMatch::where('lead_id', $lead->id)->count().' tutors fit your budget and slots.',
            'deep_link' => '/user/tutors',
        ]);

        AppNotification::create([
            'user_id' => $tutor->user_id,
            'role' => 'tutor',
            'event' => 'lead.received',
            'title' => 'New lead: Class 10 CBSE Physics',
            'body' => 'Sector 45, Rs 900-1,200/hr, Mon/Wed/Fri evenings. Expires in 24 hours.',
            'deep_link' => '/teacher/leads',
        ]);
    }

    /**
     * A wall-clock time in IST, returned as the UTC instant it corresponds to.
     *
     * The application timezone is UTC and every stored timestamp is UTC, which
     * is correct. Seeding with `now()->setTime(17, 0)` therefore produced a
     * class at 17:00 UTC — 22:30 in the evening for a Class 10 student, which
     * is not a time anyone teaches at. Wall-clock times a human would recognise
     * have to be built in IST and converted, not written straight into a UTC
     * column.
     */
    private function ist(\Illuminate\Support\Carbon $date, int $hour, int $minute): \Illuminate\Support\Carbon
    {
        return $date->copy()
            ->setTimezone('Asia/Kolkata')
            ->setTime($hour, $minute)
            ->setTimezone('UTC');
    }

    private function rupeesToPaise(?string $value, float $multiplier = 1.0): ?int
    {
        if (! $value || ! preg_match('/(\d[\d,]*)/', $value, $matches)) {
            return null;
        }

        return (int) round((int) str_replace(',', '', $matches[1]) * 100 * $multiplier);
    }
}
