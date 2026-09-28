<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\NxtHandoff;
use App\Services\WhatsAppHandoff;

/**
 * The team's view of a WhatsApp Ref: a parent's message ends in
 * "Ref: NX-7K3Q2M", and /super/ref/NX-7K3Q2M shows what they were doing on
 * the site (the tutor, the comparison, the AI chat, the page).
 */
class HandoffController extends Controller
{
    public function index()
    {
        $refs = NxtHandoff::query()->latest('id')->limit(200)->get();

        return view('super.refs.index', compact('refs'));
    }

    public function show(string $code, WhatsAppHandoff $handoffs)
    {
        $h = NxtHandoff::where('code', strtoupper(trim($code)))->firstOrFail();

        return view('super.refs.show', ['h' => $h, 'ctx' => $handoffs->toAgentArray($h)]);
    }
}
