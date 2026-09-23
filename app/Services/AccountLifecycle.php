<?php

namespace App\Services;

use App\Models\Register;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Hide a profile, and delete an account (DPDP Act 2023: withdrawing consent
 * must be as easy as giving it, and erasure must actually happen).
 *
 * Deletion is two steps so a mistake can be undone: request() hides the
 * account at once and schedules it; purge() erases it once the chosen delay
 * has passed. Signing in and pressing "Cancel deletion" before then restores
 * everything.
 *
 * What purge() erases and what it keeps is listed in ERASE / ANONYMISE below.
 * Payments, invoices, payouts, the ledger and class records are kept (tax and
 * accounting law require it) but point only at an anonymised row.
 */
class AccountLifecycle
{
    public const HIDE_OPTIONS = [
        '24h' => 24,
        '3d' => 72,
        '7d' => 168,
        'indefinite' => null,
    ];

    public const DELETE_OPTIONS = [
        '24h' => 24,
        '3d' => 72,
        '7d' => 168,
    ];

    /** Rows removed outright, by the column that names the person. */
    private const ERASE = [
        'teacher_course_managment' => ['user_id'],
        'teacher_courses' => ['user_id'],
        'student_enquiry_course' => ['user_id'],
        'student_enquiry_managment' => ['user_id'],
        'cart_managment' => ['user_id'],
        'nxt_ai_actions' => ['user_id'],
        'nxt_notifications' => ['user_id'],
        'nxt_saved_tutors' => ['student_user_id', 'tutor_user_id'],
        'nxt_tutor_availability' => ['tutor_user_id'],
        'nxt_availability_exceptions' => ['tutor_user_id'],
        'nxt_tutor_verifications' => ['tutor_user_id'],
        'nxt_tutor_notes' => ['student_user_id', 'tutor_user_id'],
        'nxt_reliability_scores' => ['tutor_user_id'],
        'nxt_progress_snapshots' => ['student_user_id'],
        'nxt_progress_summaries' => ['student_user_id'],
        'nxt_test_attempts' => ['student_user_id'],
        'nxt_studio_artefacts' => ['tutor_user_id'],
    ];

    /** Rows kept (other people or the law rely on them) with personal fields blanked. */
    private const ANONYMISE = [
        'nxt_leads' => ['by' => 'student_user_id', 'set' => ['contact_name' => null, 'student_name' => null, 'phone' => null, 'phone_hash' => null]],
        // The consent record is kept: "we had permission, from this date to
        // that one" is the evidence that this erasure was itself lawful, and
        // deleting it would destroy the proof along with the data. The parent's
        // name is not needed for that and goes. `parent_phone_hash` stays —
        // it is a pseudonym rather than a number, and it is the only thing
        // that makes the record mean anything. Flagged in the D10 write-up as
        // a question for whoever signs off the DPDP position.
        'nxt_parental_consents' => ['by' => 'student_user_id', 'set' => ['parent_name' => null]],
        'nxt_sessions' => ['by' => 'student_user_id', 'set' => ['address' => null, 'address_lat' => null, 'address_lng' => null, 'meeting_url' => null]],
        'order_managment' => ['by' => 'user_id', 'set' => ['fname' => null, 'lname' => null, 'copmany' => null, 'street_address' => null, 'phone' => null, 'email' => null, 'note' => null]],
    ];

    public function hide(Register $user, string $option): void
    {
        $hours = self::HIDE_OPTIONS[$option];
        $user->hidden_until = $hours === null ? Register::HIDDEN_INDEFINITELY : now()->addHours($hours);
        $user->save();
    }

    public function unhide(Register $user): void
    {
        $user->hidden_until = null;
        $user->save();
    }

    /** Hide now, erase after the chosen delay. */
    public function requestDeletion(Register $user, string $option): Carbon
    {
        $user->deletion_requested_at = now();
        $user->delete_after = now()->addHours(self::DELETE_OPTIONS[$option]);
        $user->hidden_until = Register::HIDDEN_INDEFINITELY;
        $user->save();

        Log::info('Account deletion requested', ['user_id' => $user->user_id, 'delete_after' => $user->delete_after]);

        return $user->delete_after;
    }

    /** Back to exactly how it was, visible again. */
    public function cancelDeletion(Register $user): void
    {
        $user->deletion_requested_at = null;
        $user->delete_after = null;
        $user->hidden_until = null;
        $user->save();

        Log::info('Account deletion cancelled', ['user_id' => $user->user_id]);
    }

    /** Every account whose delay has run out. Returns how many were erased. */
    public function purgeDue(): int
    {
        $count = 0;
        Register::whereNotNull('delete_after')
            ->whereNull('deleted_at')
            ->where('delete_after', '<=', now())
            ->each(function (Register $user) use (&$count): void {
                $this->purge($user);
                $count++;
            });

        return $count;
    }

    public function purge(Register $user): void
    {
        $userId = (string) $user->user_id;
        $email = $user->email ? Str::lower(trim($user->email)) : null;
        $phoneHash = $user->phone_hash;
        $files = array_filter([$user->avatar, $user->frount_image, $user->back_image, $user->degree]);

        DB::transaction(function () use ($user, $userId, $email, $phoneHash): void {
            foreach (self::ERASE as $table => $columns) {
                if (! Schema::hasTable($table)) {
                    continue;
                }
                $columns = array_values(array_filter($columns, fn ($c) => Schema::hasColumn($table, $c)));
                if ($columns) {
                    DB::table($table)->where(function ($q) use ($columns, $userId): void {
                        foreach ($columns as $column) {
                            $q->orWhere($column, $userId);
                        }
                    })->delete();
                }
            }

            $this->eraseAiConversations($userId);
            $this->eraseReviews($userId, $email);

            // Consent has to stop being live at the same moment the data goes,
            // not when some later job notices. It is a status change rather
            // than a delete, so it is done by the service that owns those
            // transitions — behind a table guard, because this runs against a
            // production schema that may not have the migration yet.
            if (Schema::hasTable('nxt_parental_consents')) {
                app(\App\Nxt\Dashboard\Services\ParentalConsentFlow::class)->withdrawAll($userId);
            }

            if ($phoneHash && Schema::hasTable('demo_leads')) {
                DB::table('demo_leads')->where('phone_hash', $phoneHash)->delete();
            }

            foreach (self::ANONYMISE as $table => $rule) {
                if (! Schema::hasTable($table) || ! Schema::hasColumn($table, $rule['by'])) {
                    continue;
                }
                $set = array_filter($rule['set'], fn ($v, $c) => Schema::hasColumn($table, $c), ARRAY_FILTER_USE_BOTH);
                if ($set) {
                    DB::table($table)->where($rule['by'], $userId)->update($set);
                }
            }

            // The row itself stays so kept records still resolve, but nothing
            // in it identifies the person any more, and it can never sign in.
            DB::table('register')->where('id', $user->id)->update(array_filter([
                'name' => 'Deleted user',
                'email' => null,
                'phone' => null,
                'phone_hash' => null,
                'password' => Hash::make(Str::random(64)),
                'c_password' => null,
                'otp' => null,
                'dob' => null,
                'gender' => null,
                'avatar' => null,
                'address' => null,
                'city' => null,
                'district' => null,
                'state' => null,
                'pincode' => null,
                'frount_image' => null,
                'back_image' => null,
                'degree' => null,
                'education' => null,
                'other_education' => null,
                'experience' => null,
                'document_type' => null,
                'document_number' => null,
                'profile' => null,
                'profile_desc' => null,
                'pro_desc' => null,
                'budget' => null,
                'status' => 'f',
                'deleted_at' => now(),
                'hidden_until' => Register::HIDDEN_INDEFINITELY,
            ], fn ($v, $c) => Schema::hasColumn('register', $c), ARRAY_FILTER_USE_BOTH));
        });

        // Files last: the database is the record of truth, and a failed file
        // delete must not leave the account half-erased.
        foreach ($files as $file) {
            foreach (['uploads', 'storage/user'] as $dir) {
                $path = public_path($dir.'/'.basename((string) $file));
                if (is_file($path)) {
                    @unlink($path);
                }
            }
        }
        Storage::disk('local')->deleteDirectory('tutor-verification/'.$userId);

        Log::info('Account erased', ['user_id' => $userId]);
    }

    private function eraseAiConversations(string $userId): void
    {
        if (! Schema::hasTable('nxt_ai_conversations')) {
            return;
        }
        $ids = DB::table('nxt_ai_conversations')->where('user_id', $userId)->pluck('id');
        if ($ids->isEmpty()) {
            return;
        }
        if (Schema::hasTable('nxt_ai_messages') && Schema::hasColumn('nxt_ai_messages', 'conversation_id')) {
            DB::table('nxt_ai_messages')->whereIn('conversation_id', $ids)->delete();
        }
        DB::table('nxt_ai_conversations')->whereIn('id', $ids)->delete();
    }

    /** Reviews about this tutor, and reviews this person wrote, with their photos. */
    private function eraseReviews(string $userId, ?string $email): void
    {
        if (! Schema::hasTable('teacher_review')) {
            return;
        }
        $query = DB::table('teacher_review')->where(function ($q) use ($userId, $email): void {
            $q->where('user_id', $userId);
            if ($email && Schema::hasColumn('teacher_review', 'email')) {
                $q->orWhere('email', $email);
            }
        });

        if (Schema::hasColumn('teacher_review', 'photo')) {
            foreach ((clone $query)->whereNotNull('photo')->pluck('photo') as $photo) {
                $path = public_path(config('reviews.photo_dir', 'storage/reviews').'/'.basename((string) $photo));
                if (is_file($path)) {
                    @unlink($path);
                }
            }
        }
        $query->delete();
    }
}
