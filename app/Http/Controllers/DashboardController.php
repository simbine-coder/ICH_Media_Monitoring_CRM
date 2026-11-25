<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $reports = Report::where('is_active', true)->latest()->get();

        return view('dashboard', compact('reports'));
    }
}
