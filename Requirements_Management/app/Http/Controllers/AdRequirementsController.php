<?php

namespace App\Http\Controllers;
use App\Models\Requirements;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AdRequirementsController extends Controller
{
    public function index()
    {
        $requirements = Requirements::all();
        return view ('Admin.AdRequiremets.Adrequirements')->with('Requirements', $requirements);
    }
}
