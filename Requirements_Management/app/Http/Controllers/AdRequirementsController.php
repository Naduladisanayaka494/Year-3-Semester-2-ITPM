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
            $requirements = Requirements::where('product_category', 'LIKE', "%$search%")->orwhere('preferred_time', 'LIKE', "%$search%")->get();

        }else{
            $requirements = Requirements::all();
        }
        return view ('Admin.AdRequiremets.Adrequirements')->with('Requirements', $requirements);
    }
}
