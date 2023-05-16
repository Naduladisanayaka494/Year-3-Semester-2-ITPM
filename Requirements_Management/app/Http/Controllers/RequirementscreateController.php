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
      $request->validate([
             
            'customer_name' => 'required|max:50|string',
             'address' => 'required',
              'email' => 'required|email',
            'phone' => 'required|min:10|max:10',
             'payment_methods' => 'required',
             'product_category' => 'required',
           'product_name' => 'required',
           'Quantity' => 'required',
           'pack_preference' => 'required',
            'preferred_day' => 'required',
            'preferred_time'=> 'required',

        ]);
        $input = $request->all();
        Requirements::create($input);
          session()->flash('statuscode', 'success');
        return redirect()->back()->with('status', 'Requirements Details are added Successful..!!');  
    }
}
