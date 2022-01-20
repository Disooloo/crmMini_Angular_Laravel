<?php

namespace App\Services\Lead;


use App\Models\Leads;
use Illuminate\Http\Request;

class LeadService
{

    public function store(Request $request, Leads $lead)
    {
        $lead->fill($request->only($lead->getFillable()));
        $lead->save();

        return $lead;
    }

    public function getItems()
    {
        return Leads::with('category', 'status')->get();
    }
}
