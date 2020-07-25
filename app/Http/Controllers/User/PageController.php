<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use App\Models\Info;
use App\Models\Slide;
use App\Models\Attest;
use App\Models\Partner;
use App\Models\Gallerie;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    
    public function library()
    {
        $info = $this->recapdata();

        $info['current_page'] = 'library';
        $info['books'] = Book::all();
        $info['galeries'] = Gallerie::orderBy('created_at', 'desc')->paginate(12);
        // dd(Date('Y',strtotime($info['books'][0]->dateOut)));
        return view('pages.library', $info);
    }
    public function contact()
    {
        $info = $this->recapdata();

        $info['current_page'] = 'contact';
        return view('pages.contact',$info);
    }
    public function member()
    {
        $info = $this->recapdata();

        $info['galeries'] = Gallerie::all();
        $info['current_page'] = 'member';
        return view('pages.member', $info);
    }


    public function attests()
    {
        $info = $this->recapdata();
        $info['attests'] = Attest::where('publish',1)->paginate(20);
        return view('pages.attest',$info);
    }

    private function recapdata()
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return compact(['info','partners','image']);

    }
}
