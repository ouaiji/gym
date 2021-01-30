<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    //
    public function create()
    {
        # code...
        return Inertia::render('Leads/LeadAdd');
    }

    public function store(Request $request)
    {
        # code...
        $postData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'phone' => 'required',
        ]);

        Lead::create([
            'name' => $postData['name'],
            'email' => $postData['email'],
            'dob' => $postData['dob'],
            'phone' => $postData['phone'],
            'branch_id' => 1,
            'age' => 1,
            'added_by' => Auth::user()->id,
        ]);

        return redirect()->route('dashboard');
    }
}
