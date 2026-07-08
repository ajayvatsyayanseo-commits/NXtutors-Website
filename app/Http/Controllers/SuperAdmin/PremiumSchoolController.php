<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Imports\PremiumSchoolsImport;
use App\Models\PremiumSchool;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PremiumSchoolController extends Controller
{
    public function indexdd(Request $request)
    {
        $q = PremiumSchool::query();

        if ($request->filled('search')) {
            $s = trim($request->search);
            $q->where(function($qq) use ($s){
                $qq->where('school_name', 'like', "%{$s}%")
                   ->orWhere('city', 'like', "%{$s}%")
                   ->orWhere('area', 'like', "%{$s}%")
                   ->orWhere('board_category', 'like', "%{$s}%");
            });
        }

        if ($request->filled('city')) $q->where('city', $request->city);
        if ($request->filled('board_category')) $q->where('board_category', $request->board_category);
        if ($request->filled('premium_tier')) $q->where('premium_tier', $request->premium_tier);

        $schools = $q->latest()->paginate(25)->withQueryString();

        // filter dropdowns
        $cities = PremiumSchool::query()->select('city')->distinct()->orderBy('city')->pluck('city');
        $boards = PremiumSchool::query()->select('board_category')->distinct()->orderBy('board_category')->pluck('board_category');
        $tiers  = PremiumSchool::query()->select('premium_tier')->distinct()->orderBy('premium_tier')->pluck('premium_tier');

        return view('super.premium-schools.index', compact('schools','cities','boards','tiers'));
    }

    public function index(Request $request)
{
    $q = PremiumSchool::query();

    if ($request->filled('search')) {
        $s = trim($request->search);
        $q->where(function($qq) use ($s){
            $qq->where('school_name', 'like', "%{$s}%")
               ->orWhere('city', 'like', "%{$s}%")
               ->orWhere('area', 'like', "%{$s}%")
               ->orWhere('board_category', 'like', "%{$s}%");
        });
    }

    if ($request->filled('city')) {
        $q->where('city', $request->city);
    }

    if ($request->filled('board_category')) {
        $q->where('board_category', $request->board_category);
    }

    if ($request->filled('premium_tier')) {
        $q->where('premium_tier', $request->premium_tier);
    }

    // paginate ki jagah get()
    $schools = $q->latest()->get();

    // filter dropdowns
    $cities = PremiumSchool::query()->select('city')->distinct()->orderBy('city')->pluck('city');
    $boards = PremiumSchool::query()->select('board_category')->distinct()->orderBy('board_category')->pluck('board_category');
    $tiers  = PremiumSchool::query()->select('premium_tier')->distinct()->orderBy('premium_tier')->pluck('premium_tier');

    return view('super.premium-schools.index', compact('schools', 'cities', 'boards', 'tiers'));
}

    public function create()
    {
        return view('super.premium-schools.create');
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);
        PremiumSchool::create($data);

        return redirect()->route('super.premium-schools.index')
            ->with('success', 'School added successfully');
    }

    public function edit(PremiumSchool $premiumSchool)
    {
        return view('super.premium-schools.edit', ['school' => $premiumSchool]);
    }

    public function update(Request $request, PremiumSchool $premiumSchool)
    {
        $data = $this->validateData($request, $premiumSchool->id);
        $premiumSchool->update($data);

        return redirect()->route('super.premium-schools.index')
            ->with('success', 'School updated successfully');
    }

    public function destroy(PremiumSchool $premiumSchool)
    {
        $premiumSchool->delete();
        return back()->with('success', 'School deleted successfully');
    }

    public function importForm()
    {
        return view('super.premium-schools.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv|max:10240'
        ]);

        Excel::import(new PremiumSchoolsImport, $request->file('file'));

        return redirect()->route('super.premium-schools.index')
            ->with('success', 'Import completed successfully');
    }

    private function validateData(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'city' => 'required|string|max:100',
            'area' => 'nullable|string|max:150',
            'school_name' => 'required|string|max:200',
            'board' => 'nullable|string|max:120',
            'board_category' => 'required|string|max:30', // CBSE/ICSE/IGCSE/IB
            'premium_tier' => 'nullable|string|max:5',    // A/B
            'notes' => 'nullable|string|max:2000',
        ]);
    }
}
