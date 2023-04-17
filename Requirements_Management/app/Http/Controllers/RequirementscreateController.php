<?php

namespace App\Http\Controllers;
use App\Models\Requirements;
use Illuminate\Http\Request;

class RequirementscreateController extends Controller
{
   
    public function index()
    {
       return view('Requirements.add-requirements');
    }
  public function store(Request $request)
    {
        $input = $request->all();
        Requirements::create($input);
        return redirect('requirements')->with('flash_message', 'Requirement Added!!');  
    }
}
