<?php

namespace App\Http\Controllers\User;

use App\Models\Info;
use App\Models\Neew;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Neew $new)
    {
        $info = Info::first();
        $partners = Partner::all();

        return view('pages.new', compact('new','partners','info'));
    }

}
