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
   
   
    public function edit($id)
    {
        $requirements = Requirements::find($id);
        return view('Requirements.edit-requirements')->with('requirements', $requirements);
    }

   
    public function update(Request $request, $id)
    {
       $requirements = Requirements::find($id);
        $input = $request->all();
        $requirements->update($input);
        return redirect('requirements')->with('flash_message', 'req Updated!');
    }

    public function destroy($id)
    {
       Requirements::destroy($id);
        return redirect('requirements');
    }
}
