<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PagegenImport;

class PagegenImportController extends Controller
{
    public function create()
    {
        return view('super.pagegen.import');
    }

   public function store(Request $request)
{
    $request->validate([
        'file' => 'required|file|mimes:xlsx|max:20480', // 20MB
    ]);

    $uploaded = $request->file('file');

    $extension = $uploaded->getClientOriginalExtension();
    $uniquePart = time() . rand(1000, 9999);
    $fileName = 'PAGEGEN_' . $uniquePart . '.' . $extension;

    // ✅ put in imports folder
    $uploadPath = public_path('storage/pagegen/imports');

    // Ensure directory exists
    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0775, true);
    }

    // Move file
    $uploaded->move($uploadPath, $fileName);

    // ✅ Save RELATIVE path in DB (important for cron)
    $path = 'storage/pagegen/imports/' . $fileName;

    // Create import record
    PagegenImport::create([
        'file_path' => $path,
        'status' => 'pending',
        'created_by' => auth()->id(),
    ]);

    return redirect()
        ->route('super.pagegen.index')
        ->with('success', 'Excel uploaded. Pages will be generated automatically.');
}
}