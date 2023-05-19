<?php

namespace App\Http\Controllers;
use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    
    public function index(Request $request)
    {
         $search = $request['search'] ?? "";
        if($search !=""){
            $farmer = Farmer::where('name', 'LIKE', "%$search%")->orwhere('id', '=', $search)->get();

        }else{
            $farmer = Farmer::all();
        }
        return view ('farmer.index')->with('farmer', $farmer);
    }
    
    public function create()
    {
        return view('farmer.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        Farmer::create($input);
        return redirect('farmer')->with('flash_message', 'Farmer Addedd!'); 
    }

    
    public function show($id)
    {
        $farmer = Farmer::find($id);
        return view('farmer.show')->with('farmer', $farmer);
    }

    
    public function edit(String $id)
    {
        $farmer = Farmer::find($id);
        return view('farmer.edit')->with('farmer', $farmer);
    }

    
    public function update(Request $request, String $id)
    {
        $farmer = Farmer::find($id);
        $input = $request->all();
        $farmer->update($input);
        return redirect('farmer')->with('flash_message', 'Farmer Details Updated!');  
    }

    
    public function destroy($id)
    {
        Farmer::destroy($id);
        return redirect('farmer')->with('flash_message', 'Farmer details deleted!');  
    }


    public function report($id)
    {

        if(Farmer::where('id',$id)->exists())
        {
            $farmer = Farmer::find($id);
            return view('farmer.report', compact('farmer'));
        }
        
        else
        {
            return redirect()->back()->with('status', 'No farmer found');
        }
        
        
    }


}
