<?php

namespace App\Http\Controllers\User;

use App\Models\Network;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:networks'
        ]);

        if($validator->fails()){
            Flashy::error($validator->messages()->first());
            return redirect()->back();
        }

        Network::create(['email' => $request->email]);
        Flashy::success('You are now subscribed');

        return redirect()->back();
    }


}
