<?php

namespace App\Http\Controllers\User;

use App\Document;
use App\Models\Book;
use App\Models\Info;
use App\Models\Neew;
use App\Models\Word;
use App\Models\Modal;
use App\Models\Slide;
use App\Models\Attest;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Gallerie;
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
        $info = $this->recapdata();

        $info['current_page'] = 'home';
        $info['attests'] = Attest::where('publish',1)->paginate(4);
        $info['programs'] = Program::all();
        $info['word'] = Word::first();
        $info['docs'] = Document::paginate(10);
        $info['books'] = Book::paginate(3);
        $info['galeries'] = Gallerie::orderBy('created_at','desc')->limit(10)->get();
        $info['news'] = Neew::orderBy('created_at', 'desc')->limit(5)->get();
        $info['modalWelcome'] = Modal::first();
        
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
