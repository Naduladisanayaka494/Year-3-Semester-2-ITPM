<?php

namespace App\Http\Controllers;
use App\Models\Requirements;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        $requirements = Requirements::all();
        return view ('user-dashboard')->with('Requirements', $requirements);
    }
    
     public function adminHome()
    {
        return view('admin-dashboard');
    }
}
