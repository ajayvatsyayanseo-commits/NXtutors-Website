<?php

namespace App\Http\Controllers;

use App\Models\DemoLead;
use Illuminate\Http\Request;

class DemoLeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'phone'          => 'required|digits:10',
            'service'        => 'nullable|string|max:255',
            'subject'        => 'nullable|string|max:255',
            'child_class'    => 'nullable|string|max:255',
            'preferred_time' => 'nullable|string|max:255',
            'mode'           => 'nullable|string|max:255',
            'location'       => 'nullable|string|max:255',
            'message'        => 'nullable|string',
            'source_page'    => 'nullable|string|max:500',
        ]);

        $lead = DemoLead::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Lead saved successfully.',
            'lead_id' => $lead->id,
        ]);
    }
}