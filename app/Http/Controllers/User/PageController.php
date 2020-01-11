<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function programs()
    {
        return view('pages.programs');
    }
    public function library()
    {
        return view('pages.library');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function member()
    {
        return view('pages.member');

    }
}
