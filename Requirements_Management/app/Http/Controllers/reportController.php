<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use App\Models\Requirements;
use PDF;
class reportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requirement = Requirements::find($id);
        $pdf = PDF::loadview('Admin.AdRequiremets.report', compact('requirement'));
        return $pdf->download('Customer Requirements-Report.pdf');
    }
}
