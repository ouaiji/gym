<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        # code...
        $data = User::all();
        return Inertia::render('Dashboard/Index', ['data' => $data]);
    }
}
