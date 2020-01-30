<?php

namespace App\Http\Controllers\User;

use App\Models\Info;
use App\Models\Slide;
use App\Models\Partner;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    public function index()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return view('pages.admission', compact(['info','partners','image']));
    }
}
