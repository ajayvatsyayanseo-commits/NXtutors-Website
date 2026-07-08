<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorImport;
use App\Services\TutorExcelImporter;

class TutorImportController extends Controller
{
    public function upload(Request $request, TutorExcelImporter $importer)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        // store in storage/app/public/imports/...
        $path = $request->file('file')->store('imports', 'public');

        $import = TutorImport::create([
            'file_path' => $path, // e.g. imports/file.xlsx
            'status' => 'pending',
        ]);

        $rows = $importer->importRows($import);

        // return response()->json([
        //     'ok' => true,
        //     'import_id' => $import->id,
        //     'rows' => $rows,
        // ]);
        return redirect()
    ->route('super.teacher.index')
    ->with('success', "Excel uploaded successfully. {$rows} rows queued for generation (Import ID: {$import->id}).");
    }
}
