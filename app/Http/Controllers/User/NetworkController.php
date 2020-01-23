<?php

namespace App\Http\Controllers\User;

use App\Models\Network;
use Illuminate\Support\Facades\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NetworkController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['email' => 'email|unique:networks']);

        Network::create(['email' => $request->email]);

        Flashy::success('Vous etes maintenant abonné');

        return redirect()->back();
    }


}
