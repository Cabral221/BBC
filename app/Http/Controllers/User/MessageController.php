<?php

namespace App\Http\Controllers\User;


use App\Models\Info;
use App\Models\Message;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller{

    public function store(Request $request)
    {
        // $request;    
        // \join()
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|min:15',
        ]);

        Mail::send('email-contact',[
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'content' => $request->get('message')
            ], function ($message){
                // var_dump($message);die();
                $bbcmail = Info::first();
                // dd($bbcmail);
                $message->to($bbcmail->email)->subject('BBC :: New Message from bbcsn.com');
            });
        
        Message::create($request->all());
        Flashy::success('your message has been successfully sent');
        return redirect()->route('user.contact');
    }

}