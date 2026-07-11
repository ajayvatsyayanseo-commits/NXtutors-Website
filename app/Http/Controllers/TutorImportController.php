<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorImport;
use App\Services\TutorExcelImporter;
use Illuminate\Support\Facades\Storage;
use Throwable;

class TutorImportController extends Controller
{
    public function upload(Request $request, TutorExcelImporter $importer)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls|max:'.config('cost-safety.imports.max_file_kb', 10240),
        ]);

        // store in storage/app/public/imports/...
        $path = $request->file('file')->store('imports', 'public');

        $import = TutorImport::create([
            'file_path' => $path, // e.g. imports/file.xlsx
            'status' => 'pending',
        ]);

        try {
            $rows = $importer->importRows($import);
            $import->update(['status' => $rows > 0 ? 'processing' : 'failed']);
        } catch (Throwable $exception) {
            $import->update([
                'status' => 'failed',
                'error' => str($exception->getMessage())->squish()->limit(300),
            ]);
            Storage::disk('public')->delete($path);

            return back()->withErrors(['file' => 'The workbook could not be queued: '.str($exception->getMessage())->squish()->limit(180)]);
        }

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
