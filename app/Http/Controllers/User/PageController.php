<?php

namespace App\Http\Controllers\User;

use App\Models\Info;
use App\Models\Slide;
use App\Models\Partner;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function programs()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return view('pages.programs', compact(['info','partners','image']));
    }
    public function library()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return view('pages.library', compact(['info','partners','image']));
    }
    public function contact()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return view('pages.contact', compact(['info','partners','image']));
    }
    public function member()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return view('pages.member', compact(['info','partners','image']));
    }
}
