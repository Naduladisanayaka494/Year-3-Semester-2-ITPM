<?php

namespace App\Http\Controllers;
use App\Models\Farmer;


use Illuminate\Http\Request;
use PDF;

class PdfgenerateController extends Controller
{
    public function index()
    {
        
        $data = Farmer::all();
        $pdf = PDF::loadview('farmer.report', compact('data'));
        return $pdf->download('Farmer  Report.pdf');
    }

    
}
