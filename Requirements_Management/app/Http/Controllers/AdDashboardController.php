<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdDashboardController extends Controller
{
 
    public function index()
    {
        return view('Admin.AdRequiremets.Addashboard');
    }
}
