<?php

namespace App\Http\Controllers\User;

use App\Models\Message;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Mail\messageCreated;
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
        // $request;    
        // \join()
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|min:15',
        ]);
        
        $message = new messageCreated($request->get('name'), $request->get('email'),$request->get('message'));
        
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