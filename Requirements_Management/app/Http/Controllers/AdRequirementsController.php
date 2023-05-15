<?php

namespace App\Http\Controllers;
use App\Models\Requirements;
use Illuminate\Http\Request;

class AdRequirementsController extends Controller
{
    public function index(Request $request)
    {
         $search = $request['search'] ?? "";
        if($search !=""){
            $requirements = Requirements::where('customer_name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();

        }else{
            $requirements = Requirements::all();
        }
        return view ('Admin.AdRequiremets.Adrequirements')->with('Requirements', $requirements);
    }
}
