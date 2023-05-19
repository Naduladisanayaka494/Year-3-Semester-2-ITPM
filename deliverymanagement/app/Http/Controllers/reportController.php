<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use Illuminate\Http\Request;
use PDF;

 class reportController extends Controller
 {
    /**
     * Display a listing of the resource.
     */

   public function show($id)

    {
        $data = Delivery::find($id);
        $pdf = PDF::loadview('delivery.report', compact('data'));
        return $pdf->download('Delivery Agent-Report.pdf');
    }
    

}
