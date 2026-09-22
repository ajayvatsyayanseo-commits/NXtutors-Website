<?php

declare(strict_types=1);

use App\Nxt\Dashboard\Http\Controllers\AccountController;
use App\Nxt\Dashboard\Http\Controllers\MeController;
use App\Nxt\Dashboard\Http\Controllers\MessageController;
use App\Nxt\Dashboard\Http\Controllers\ProfileController;
use App\Nxt\Dashboard\Http\Controllers\StudentController;
use App\Nxt\Dashboard\Http\Controllers\TutorController;
use App\Nxt\Dashboard\Http\Middleware\ResolveDashboardIdentity;
use Illuminate\Support\Facades\Route;

/**
 * The dashboard API.
 *
 * Deliberately a separate file from routes/api.php, which is the signed,
 * GET-only machine feed and has a contract test in the external agent's suite
 * that fails on any write verb. Nothing here belongs in that file.
 *
 * The `web` middleware group is on these routes because the credential is the
 * site's own session cookie. CSRF is exempted for this prefix in the service
 * provider: the caller is the Next.js server holding a bearer token or a
 * forwarded cookie, and it has no blade form from which to read a CSRF token.
 * State-changing requests are protected instead by the identity middleware and
 * by same-site cookie rules.
 */
Route::prefix('api/dashboard/v1')
    ->middleware('web')
    ->group(function (): void {

        // Shared: either role. The role-scoped groups below apply the same
        // middleware with a role argument, so it is not repeated here — two
        // copies would resolve the identity (and hit the database) twice.
        Route::middleware(ResolveDashboardIdentity::class)->group(function (): void {
            Route::get('/me', [MeController::class, 'show']);
            Route::post('/auth/handoff', [MeController::class, 'handoff']);
            Route::get('/notifications', [MeController::class, 'notifications']);
            Route::patch('/notifications/{id}/read', [MeController::class, 'readNotification']);
            Route::get('/meters/history', [MeController::class, 'meterHistory']);

            // Profile, password and plan: the screens the Blade dashboard owned.
            // Every one of these writes the row the session identifies, never an
            // id taken from the request body.
            Route::get('/profile', [ProfileController::class, 'show']);
            Route::patch('/profile', [ProfileController::class, 'update']);
            Route::post('/profile/avatar', [ProfileController::class, 'avatar']);
            Route::post('/profile/password', [ProfileController::class, 'password']);

            // Hide profile (tutors) and delete account (everyone).
            Route::post('/account/visibility', [AccountController::class, 'visibility']);
            Route::post('/account/deletion', [AccountController::class, 'requestDeletion']);
            Route::delete('/account/deletion', [AccountController::class, 'cancelDeletion']);
            Route::get('/plans', [ProfileController::class, 'plans']);

            // Messages: both roles use the same three endpoints, and the
            // recipient is always derived from the lead or package the thread
            // belongs to rather than taken from the request.
            Route::get('/messages', [MessageController::class, 'index']);
            Route::post('/messages', [MessageController::class, 'store']);
            Route::post('/messages/read', [MessageController::class, 'read']);
        });

        // ----------------------------------------------------------- student
        Route::middleware(ResolveDashboardIdentity::class.':student')->group(function (): void {
            Route::get('/home', [StudentController::class, 'home']);

            Route::get('/sessions', [StudentController::class, 'sessions']);
            Route::get('/sessions/{id}', [StudentController::class, 'session']);
            Route::post('/sessions/{id}/confirm', [StudentController::class, 'confirmSession']);
            Route::post('/sessions/{id}/dispute', [StudentController::class, 'disputeSession']);
            Route::get('/sessions/{id}/cancellation-policy', [StudentController::class, 'cancellationPolicy']);
            Route::post('/sessions/{id}/cancel', [StudentController::class, 'cancelSession']);
            Route::post('/sessions/{id}/no-show', [StudentController::class, 'reportNoShow']);

            Route::get('/homework', [StudentController::class, 'homework']);
            Route::get('/homework/{id}', [StudentController::class, 'homeworkDetail']);
            Route::post('/homework/{id}/submit', [StudentController::class, 'submitHomework']);

            Route::get('/study-plan', [StudentController::class, 'studyPlan']);
            Route::post('/study-plan/items/{id}/done', [StudentController::class, 'tickPlanItem']);

            Route::get('/progress', [StudentController::class, 'progress']);

            Route::get('/matches', [StudentController::class, 'matches']);
            Route::get('/tutors/{tutorUserId}', [StudentController::class, 'tutorProfile']);
            Route::post('/matches/{matchId}/contact', [StudentController::class, 'contactMatch']);
            Route::post('/matches/{matchId}/reject', [StudentController::class, 'rejectMatch']);
            Route::post('/tutors/{tutorUserId}/save', [StudentController::class, 'saveTutor']);
            Route::get('/saved-tutors', [StudentController::class, 'savedTutors']);

            Route::get('/requirements', [StudentController::class, 'requirements']);
            Route::post('/requirements', [StudentController::class, 'createRequirement']);

            Route::get('/account/wallet', [StudentController::class, 'wallet']);
            Route::get('/account/plan', [StudentController::class, 'plan']);
        });

        // ------------------------------------------------------------- tutor
        Route::prefix('tutor')
            ->middleware(ResolveDashboardIdentity::class.':tutor')
            ->group(function (): void {
                Route::get('/home', [TutorController::class, 'home']);

                Route::get('/leads', [TutorController::class, 'leads']);
                Route::get('/leads/{matchId}', [TutorController::class, 'lead']);
                Route::post('/leads/{matchId}/reply', [TutorController::class, 'replyToLead']);
                Route::post('/leads/{matchId}/decline', [TutorController::class, 'declineLead']);

                Route::get('/students', [TutorController::class, 'students']);
                Route::get('/students/{studentUserId}', [TutorController::class, 'student']);
                Route::post('/students/{studentUserId}/notes', [TutorController::class, 'addNote']);

                Route::get('/calendar', [TutorController::class, 'calendar']);
                Route::post('/sessions', [TutorController::class, 'scheduleSession']);
                Route::post('/sessions/{id}/check-in', [TutorController::class, 'checkIn']);
                Route::post('/sessions/{id}/check-out', [TutorController::class, 'checkOut']);
                Route::post('/sessions/{id}/no-show', [TutorController::class, 'noShow']);
                Route::post('/sessions/{id}/check-in-code', [TutorController::class, 'requestCheckInCode']);

                Route::get('/availability', [TutorController::class, 'availability']);
                Route::put('/availability', [TutorController::class, 'setAvailability']);

                Route::post('/homework/{id}/mark', [TutorController::class, 'markHomework']);

                Route::get('/earnings', [TutorController::class, 'earnings']);
                Route::get('/growth', [TutorController::class, 'growth']);
                Route::post('/verification', [TutorController::class, 'uploadVerification']);
                Route::get('/artefacts', [TutorController::class, 'artefacts']);
            });
    });
