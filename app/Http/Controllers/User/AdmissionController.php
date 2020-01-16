<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('pages.admission');
    }
}
