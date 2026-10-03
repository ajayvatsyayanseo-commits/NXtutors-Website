<?php

namespace App\Http\Controllers;

use App\Models\DemoLead;
use App\Services\Enquiries\EnquiryFeed;
use App\Services\Enquiries\EnquiryNormaliser;
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
            'source_page'    => 'nullable|string|max:250',
        ]);

        $lead = DemoLead::create($validated);

        // Super Admin → Enquiries (and the "New enquiry" email). Never throws.
        // The form also sends a board, which demo_leads has no column for.
        $board = $request->input('board');
        app(EnquiryFeed::class)->record('demo_leads', $lead->id, [
            'board' => is_string($board) ? mb_substr($board, 0, 60) : null,
            'device' => EnquiryNormaliser::device($request->userAgent()),
        ]);
        // The WhatsApp Ref this visitor creates next is linked to this enquiry.
        $request->session()->put('enquiries.demo_lead_id', $lead->id);

        return response()->json([
            'status' => true,
            'message' => 'Lead saved successfully.',
            'lead_id' => $lead->id,
        ]);
    }
}