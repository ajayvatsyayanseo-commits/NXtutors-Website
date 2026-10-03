<?php

declare(strict_types=1);

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\NxtParent;
use App\Models\NxtParentChild;
use App\Models\Register;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

/**
 * Families: the team creates parent accounts and links their children
 * (Phase 1 of the parent dashboard, 3 Oct 2026). Parents cannot sign up on
 * their own yet, so this is the only way a parent account comes to exist.
 *
 * A child is either an existing student account (searched by phone, name or
 * user id; register join_as=student) or a name and class with no account.
 * Tutor assignment comes later, here too.
 */
final class FamilyController extends Controller
{
    public function index(Request $request): View
    {
        $q = trim((string) $request->query('q', ''));
        $parents = NxtParent::query()
            ->withCount('children')
            ->when($q !== '', function ($query) use ($q) {
                $digits = preg_replace('/\D/', '', $q);
                $query->where(fn ($w) => $w->where('name', 'like', '%'.$q.'%')
                    ->orWhere('email', 'like', '%'.mb_strtolower($q).'%')
                    ->when(strlen((string) $digits) >= 4, fn ($p) => $p->orWhere('phone', 'like', '%'.substr((string) $digits, -10).'%')));
            })
            ->latest('id')
            ->paginate(50)
            ->withQueryString();

        return view('super.families.index', compact('parents', 'q'));
    }

    public function create(): View
    {
        return view('super.families.form', ['family' => new NxtParent(['status' => 'active'])]);
    }

    public function store(Request $request): RedirectResponse
    {
        $family = NxtParent::create($this->validated($request));

        return redirect()->route('super.families.edit', $family)
            ->with('success', 'Family created. Now link the children below.');
    }

    public function edit(Request $request, NxtParent $family): View
    {
        $sq = trim((string) $request->query('student_q', ''));

        return view('super.families.form', [
            'family' => $family,
            'children' => $family->children()->with('student')->get(),
            'sq' => $sq,
            'students' => $sq === '' ? collect() : $this->searchStudents($sq),
        ]);
    }

    public function update(Request $request, NxtParent $family): RedirectResponse
    {
        $family->fill($this->validated($request, $family))->save();

        return redirect()->route('super.families.edit', $family)->with('success', 'Family saved.');
    }

    /** Link a student account, or add a child by name without one. */
    public function linkChild(Request $request, NxtParent $family): RedirectResponse
    {
        $data = $request->validate([
            'student_user_id' => ['nullable', 'string', 'max:64'],
            'child_name' => ['required_without:student_user_id', 'nullable', 'string', 'max:120'],
            'child_class' => ['nullable', 'string', 'max:40'],
            'board' => ['nullable', 'string', 'max:40'],
            'relationship' => ['required', Rule::in(NxtParentChild::RELATIONSHIPS)],
            'is_primary' => ['nullable', 'boolean'],
        ], [
            'child_name.required_without' => "Enter the child's name, or pick a student account from the search.",
        ]);

        $student = null;
        if (! empty($data['student_user_id'])) {
            $student = Register::where('user_id', $data['student_user_id'])->where('join_as', 'student')->first();
            if (! $student) {
                return back()->withErrors(['student_user_id' => 'No student account with that user id.']);
            }
            if ($family->children()->where('student_user_id', $student->user_id)->exists()) {
                return back()->withErrors(['student_user_id' => 'That student is already linked to this family.']);
            }
        }

        DB::transaction(function () use ($family, $data, $student): void {
            $primary = (bool) ($data['is_primary'] ?? false) || ! $family->children()->exists();
            if ($primary) {
                $family->children()->update(['is_primary' => false]);
            }
            $family->children()->create([
                'student_user_id' => $student?->user_id,
                'child_name' => trim((string) ($data['child_name'] ?? '')) ?: (string) $student?->name,
                'child_class' => ($data['child_class'] ?? null) ?: ($student?->for_class ?: null),
                'board' => $data['board'] ?? null,
                'relationship' => $data['relationship'],
                'is_primary' => $primary,
            ]);
        });

        return redirect()->route('super.families.edit', $family)->with('success', 'Child linked.');
    }

    public function updateChild(Request $request, NxtParent $family, NxtParentChild $child): RedirectResponse
    {
        abort_unless($child->parent_id === $family->id, 404);

        $data = $request->validate([
            'child_name' => ['required', 'string', 'max:120'],
            'child_class' => ['nullable', 'string', 'max:40'],
            'board' => ['nullable', 'string', 'max:40'],
            'relationship' => ['required', Rule::in(NxtParentChild::RELATIONSHIPS)],
            'is_primary' => ['nullable', 'boolean'],
        ]);

        DB::transaction(function () use ($family, $child, $data): void {
            $primary = (bool) ($data['is_primary'] ?? false);
            if ($primary) {
                $family->children()->whereKeyNot($child->id)->update(['is_primary' => false]);
            }
            $child->fill([...$data, 'is_primary' => $primary])->save();
        });

        return redirect()->route('super.families.edit', $family)->with('success', 'Child updated.');
    }

    public function unlinkChild(NxtParent $family, NxtParentChild $child): RedirectResponse
    {
        abort_unless($child->parent_id === $family->id, 404);
        $child->delete();

        return redirect()->route('super.families.edit', $family)->with('success', 'Child unlinked. Their student account, if any, is unchanged.');
    }

    /** @return array<string, mixed> */
    private function validated(Request $request, ?NxtParent $family = null): array
    {
        $phone = NxtParent::normalisePhone((string) $request->input('phone', ''));
        $request->merge([
            'phone' => $phone ?? $request->input('phone'),
            'email' => mb_strtolower(trim((string) $request->input('email', ''))) ?: null,
        ]);

        return $request->validate([
            'name' => ['required', 'string', 'min:2', 'max:120'],
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/', Rule::unique('nxt_parents', 'phone')->ignore($family?->id)],
            'email' => ['nullable', 'email', 'max:191', Rule::unique('nxt_parents', 'email')->ignore($family?->id)],
            'status' => ['required', Rule::in(NxtParent::STATUSES)],
        ], [
            'phone.regex' => 'Enter a 10-digit Indian mobile number (with or without 91).',
            'phone.unique' => 'Another family already uses this phone number.',
            'email.unique' => 'Another family already uses this email.',
        ]);
    }

    /** Student accounts by phone, name or user id; at most 20. */
    private function searchStudents(string $q)
    {
        $digits = preg_replace('/\D/', '', $q) ?? '';

        return Register::query()
            ->where('join_as', 'student')
            ->whereNull('deleted_at')
            ->where(function ($w) use ($q, $digits) {
                $w->where('user_id', $q)->orWhere('name', 'like', '%'.$q.'%');
                if (strlen($digits) >= 4) {
                    $w->orWhere('phone', 'like', '%'.substr($digits, -10).'%');
                }
            })
            ->orderBy('name')
            ->limit(20)
            ->get(['id', 'user_id', 'name', 'phone', 'email', 'for_class', 'city']);
    }
}
