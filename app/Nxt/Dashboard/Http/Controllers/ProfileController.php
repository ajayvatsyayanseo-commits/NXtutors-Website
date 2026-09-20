<?php

declare(strict_types=1);

namespace App\Nxt\Dashboard\Http\Controllers;

use App\Models\SubscriptionPlan;
use App\Models\Teacher_course;
use App\Models\Teacher_courses;
use App\Nxt\Dashboard\Support\DashboardIdentity;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

/**
 * Profile, password and plan — the screens the Blade dashboard owned.
 *
 * One rule separates this from the Blade version it replaces: the row being
 * written is the one the session identifies, always. The old
 * `teacherprofileupdate` took `$request->id` and called `findOrFail` on it with
 * no ownership check at all, so a posted id decided whose name, email, phone
 * and identity documents got overwritten. Nothing here accepts an id from the
 * request, which is why that class of bug cannot be reintroduced by editing a
 * form field.
 *
 * Updates are sectioned the same way the Blade form was — personal, address,
 * qualification, documents — so a partial save never blanks the fields the
 * user was not editing.
 */
class ProfileController extends DashboardController
{
    /** Everything the profile screen renders, including what is editable. */
    public function show(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        return $this->ok([
            'profile' => $identity->toArray(),
            'sections' => $this->sectionsFor($identity),
            'courses' => $this->courses($identity->userId),
            'avatar_url' => $identity->register->avatar
                ? url('/uploads/'.$identity->register->avatar)
                : null,
        ]);
    }

    /**
     * Update one section of the caller's own profile.
     */
    public function update(Request $request): JsonResponse
    {
        $identity = $this->identity($request);
        $register = $identity->register;

        $section = (string) $request->input('section');

        $rules = match ($section) {
            'personal' => [
                'name' => 'required|string|max:255',
                'email' => ['required', 'email', 'max:255', Rule::unique('register', 'email')->ignore($register->id)],
                'dob' => 'nullable|string|max:32',
                'gender' => 'nullable|in:male,female,other',
            ],
            'address' => [
                'address' => 'nullable|string|max:1000',
                'city' => 'nullable|string|max:100',
                'district' => 'nullable|string|max:100',
                'state' => 'nullable|string|max:100',
                'pincode' => 'nullable|string|max:12',
            ],
            'learning' => [
                'for_class' => 'nullable|string|max:60',
                'class_type' => 'nullable|string|max:60',
                'budget' => 'nullable|string|max:60',
            ],
            'qualification' => [
                'education' => 'nullable|string|max:255',
                'other_education' => 'nullable|string|max:2000',
                'experience' => 'nullable|string|max:120',
            ],
            'about' => [
                'profile' => 'nullable|string|max:5000',
                'profile_desc' => 'nullable|string|max:5000',
                'pro_desc' => 'nullable|string|max:5000',
            ],
            'documents' => [
                'document_type' => 'required|string|max:64',
                'document_number' => ['required', 'string', 'max:64', Rule::unique('register', 'document_number')->ignore($register->id)],
            ],
            default => null,
        };

        if ($rules === null) {
            return $this->fail('unknown_section', 'That is not a section of your profile.', 422);
        }

        // A tutor-only section posted by a student, or the reverse, is refused
        // rather than quietly ignored.
        if (in_array($section, ['qualification', 'about', 'documents'], true) && ! $identity->isTutor()) {
            return $this->fail('wrong_role', 'That section belongs to a tutor profile.', 403);
        }

        if ($section === 'learning' && ! $identity->isStudent()) {
            return $this->fail('wrong_role', 'That section belongs to a student profile.', 403);
        }

        $register->update($request->validate($rules));

        return $this->ok([
            'section' => $section,
            'profile' => DashboardIdentity::fromRegister($register->fresh())->toArray(),
        ]);
    }

    /**
     * Replace the profile photo.
     *
     * Written to the same public path the Blade form used, so the picture the
     * public site and the agent feed already read keeps working.
     */
    public function avatar(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $file = $request->file('avatar');
        $name = time().'-'.preg_replace('/[^A-Za-z0-9._-]/', '', (string) $file->getClientOriginalName());

        $file->move(public_path('uploads'), $name);

        $identity->register->update(['avatar' => $name]);

        return $this->ok(['avatar' => $name, 'avatar_url' => url('/uploads/'.$name)]);
    }

    /**
     * Change the password of the account that is signed in.
     *
     * The current password is required. Without it, anyone who reached an
     * unlocked phone could lock the owner out of their own account.
     */
    public function password(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $validated = $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (! Hash::check($validated['current_password'], (string) $identity->register->password)) {
            return $this->fail('wrong_password', 'That is not your current password.', 422);
        }

        $identity->register->update([
            'password' => Hash::make($validated['password']),
            'c_password' => '',
        ]);

        return $this->ok(['changed' => true]);
    }

    /**
     * The plans this account can move to, which is what the Blade "My Plan"
     * screen existed for. Purchase still happens in the existing payment flow;
     * this only supplies the comparison.
     */
    public function plans(Request $request): JsonResponse
    {
        $identity = $this->identity($request);

        $plans = SubscriptionPlan::active()
            ->where('plan_type', $identity->isTutor() ? 'tutor' : 'student')
            ->orderBy('sort_order')
            ->orderBy('price')
            ->get()
            ->map(fn (SubscriptionPlan $plan): array => [
                'id' => $plan->id,
                'name' => $plan->plan_name,
                'price' => (float) $plan->price,
                'duration_days' => $plan->duration_days,
                'ai_credits' => $plan->ai_credits,
                'contact_limit' => $plan->contact_limit,
                'lead_limit' => $plan->lead_limit,
                'features' => $plan->features ?? [],
                'checkout_url' => url('/subscription/checkout/'.$plan->id),
            ]);

        return $this->ok($plans->all());
    }

    /**
     * The subjects, boards and classes a tutor teaches.
     *
     * Two course schemas coexist in this database and read code has to handle
     * both, so both are returned with the shape they actually have rather than
     * flattened into a guess.
     */
    private function courses(string $userId): array
    {
        $structured = Teacher_courses::where('user_id', $userId)->get()->map(fn ($row): array => [
            'id' => $row->id,
            'subject' => $row->subject,
            'board' => $row->board,
            'class' => $row->for_class,
            'class_type' => $row->class_type,
            'mode' => $row->mode,
            'source' => 'teacher_courses',
        ]);

        $mapped = Teacher_course::where('user_id', $userId)->get()->map(fn ($row): array => [
            'id' => $row->id,
            'category_id' => $row->cat_id,
            'parent_id' => $row->pid,
            'child_id' => $row->cid,
            'subject_id' => $row->sub_id,
            'source' => 'teacher_course_managment',
        ]);

        return [
            'structured' => $structured->all(),
            'mapped' => $mapped->all(),
            'count' => $structured->count() + $mapped->count(),
        ];
    }

    /** The editable sections, so the client renders only what applies. */
    private function sectionsFor(DashboardIdentity $identity): array
    {
        $common = ['personal', 'address'];

        return $identity->isTutor()
            ? array_merge($common, ['qualification', 'about', 'documents'])
            : array_merge($common, ['learning']);
    }
}
