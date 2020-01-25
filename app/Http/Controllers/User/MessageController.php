<?php

namespace App\Http\Controllers\User;


use App\Models\Message;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller{

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|min:90',
        ]);
        
        Message::create($request->all());
        Flashy::success('your message has been successfully sent');
        return redirect()->route('user.contact');
    }

}