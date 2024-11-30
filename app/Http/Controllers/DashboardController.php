<?php

namespace App\Http\Controllers;

use App\Models\ApplyNow;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalApplications = ApplyNow::count();
        
        return view('dashboard',[
            'totalApplications' => $totalApplications
        ]);
    }
}
