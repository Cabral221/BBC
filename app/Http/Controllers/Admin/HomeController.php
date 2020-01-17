<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Partner;
use App\Models\Slide;
use App\Models\Team;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('welcome');
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
        $part = Partner::get();
        $slide = Slide::get();
        $team = Team::get();
        return view('admin.welcome',compact(['info','part','slide','team']));
    }

    public function update(Request $request)
    {
        $info = Info::findOrFail($request->info);
        $info->phone = $request->input('phone');
        $info->adress = $request->input('adress');
        $info->bp = $request->input('bp');
        $info->save();
        return back();
    }
}
