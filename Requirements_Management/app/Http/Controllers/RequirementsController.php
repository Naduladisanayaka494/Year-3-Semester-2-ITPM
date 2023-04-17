<?php

namespace App\Http\Controllers;
use App\Models\Requirements;
use Illuminate\Http\Request;

class RequirementsController extends Controller
{
   
    public function index()
    {
        $requirements = Requirements::all();
        return view ('Requirements.requirements')->with('Requirements', $requirements);
    }
   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
       Requirements::destroy($id);
        return redirect('requirements')->with('flash_message', 'deleted!');
    }
}
