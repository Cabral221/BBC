<?php

namespace App\Http\Controllers\User;

use App\Models\Info;
use App\Models\Slide;
use App\Models\Partner;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $image = Slide::first();
        $parteners = Partner::all();
        $info = Info::first();
        return view('post.index', compact(['info','parteners','image']));
    }

    public function show ()
    {
        $image = Slide::first();
        $parteners = Partner::all();
        $info = Info::first();
        return view('post.show', compact(['info','parteners','image']));
    }

}