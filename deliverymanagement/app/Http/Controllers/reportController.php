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
    public function index($id)

    {
        $delivery = Delivery::find($id);
        $pdf = PDF::loadview('delivery.report', compact('delivery'));
        return $pdf->download('Delivery Agent Details-Report.pdf');
    }
    

}
