<?php

namespace App\Http\Controllers\User;

use App\Models\Info;
use App\Models\Word;
use App\Models\Slide;
use App\Models\Attest;
use App\Models\Partner;
use App\Models\Program;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        // $info = Info::first();
        // $partners = Partner::all();
        // $slides = Slide::limit(3)->get();
        $info = $this->recapdata();

        $info['current_page'] = 'home';
        $info['attests'] = Attest::where('publish',1)->limit(4)->get();
        $info['programs'] = Program::all();
        $info['word'] = Word::first();
        
        return view('welcome',$info);
    }

    private function recapdata()
    {
        $info = Info::first();
        $partners = Partner::all();
        $slides = Slide::limit(3)->get();
        return compact(['info','partners','slides']);

    }
}
