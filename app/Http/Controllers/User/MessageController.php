<?php

namespace App\Http\Controllers\User;


use App\Models\Message;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller{

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|min:90',
        ]);

        Mail::send('email-contact',['username' => 'test'], function ($message){
            dd($message);
            $message->to('info@bbcsn.com')->subject('New Message from bbcsn.com');
        });
        
        Message::create($request->all());
        Flashy::success('your message has been successfully sent');
        return redirect()->route('user.contact');
    }

}