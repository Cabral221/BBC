<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Models\Network;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['emails' => Network::all()];
        $pdf = PDF::loadView('myPDF', $data);
  
        return $pdf->download('bbcfollowers.pdf');
    }
}
