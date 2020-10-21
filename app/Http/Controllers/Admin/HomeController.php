<?php

namespace App\Http\Controllers\Admin;

use App\Models\Info;
use App\Models\Team;
use App\Models\Modal;
use App\Models\Slide;
use App\Models\Partner;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
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
        // dd(Auth::guard('admin')->user()->name);
        $info = Info::first();
        $part = Partner::get();
        $slide = Slide::get();
        $team = Team::get();
        $modalWelcome = Modal::first();
        // dd($modalWelcome->is_active);
        return view('admin.welcome',compact(['info','part','slide','team', 'modalWelcome']));
    }

    public function update(Request $request)
    {
        $info = Info::findOrFail($request->info);
        $info->phone = $request->input('phone');
        $info->adress = $request->input('adress');
        $info->bp = $request->input('bp');
        $info->save();
        Flashy::success('Your info has been successfully changed');
        return back();
    }
}
