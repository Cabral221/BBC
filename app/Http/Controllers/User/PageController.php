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
    
    public function library()
    {
        $info = $this->recapdata();
        return view('pages.library', $info);
    }
    public function contact()
    {
        $info = $this->recapdata();
        return view('pages.contact',$info);
    }
    public function member()
    {
        $info = $this->recapdata();
        return view('pages.member', $info);
    }

    private function recapdata()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return compact(['info','partners','image']);

    }
}
