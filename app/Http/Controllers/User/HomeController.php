<?php

namespace App\Http\Controllers\User;

use App\Models\Info;
use App\Models\Partner;
use App\Models\Slide;
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
        $info = Info::first();
        $partners = Partner::all();
        $slides = Slide::limit(3)->get();
        return view('welcome',compact(['slides','info','partners']));
    }
}
