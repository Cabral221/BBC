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
        $partners = Partner::all();
        $info = Info::first();
        return view('post.index', compact(['info','partners','image']));
    }

    public function show ($id)
    {
        $image = Slide::first();
        $partners = Partner::all();
        $info = Info::first();
        return view('post.show', compact(['info','partners','image']));
    }

}