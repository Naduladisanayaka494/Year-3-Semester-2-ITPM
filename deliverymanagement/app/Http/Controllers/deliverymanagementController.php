<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use Illuminate\Http\Request;
use PDF;

class deliverymanagementController extends Controller
{
  
    public function index(Request $request)
    {

         $search = $request['search'] ?? "";
        if($search !=""){
            $delivery = Delivery::where('nic_number', 'LIKE', "%$search%")->orwhere('name', 'LIKE', "%$search%")->get();

        }else{
            $delivery = Delivery::all();
        }
        return view ('delivery.index')->with('delivery', $delivery);

    
    }

   
  
    public function create()
    {
        return view('delivery.create');
    }

  
    public function store(Request $request)
    {
        $input = $request->all();
        Delivery::create($input);
        return redirect('delivery')->with('flash_message', 'Delivery Addedd!');
    }

  
//  public function show(string $id)
//     {
//        $delivery = Delivery::find($id);
//         return view('delivery.show')->with('delivery', $delivery);
//     }

   
    public function edit(string $id)
    {
        $delivery = Delivery::find($id);
        return view('delivery.edit')->with('delivery', $delivery);
    }

    
    public function update(Request $request, string $id)
    {
        $delivery = Delivery::find($id);
        $input = $request->all();
        $delivery->update($input);
        return redirect('delivery')->with('flash_message', 'Delivery Updated!');  
    }

   
    public function destroy(string $id)
    {
        Delivery::destroy($id);
        return redirect('delivery')->with('flash_message', 'Delivery deleted!');  
    }

  
    
        
}
