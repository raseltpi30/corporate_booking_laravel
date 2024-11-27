<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyNowController extends Controller
{
    public function index()
    {
        return view('apply-now');
    }
}
