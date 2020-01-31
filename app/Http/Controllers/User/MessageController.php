<?php

namespace App\Http\Controllers\User;


use App\Admin;
use App\Models\Info;
use App\Models\Message;
use App\Mail\messageCreated;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMessageCreated;

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

        $msg = Message::create($request->all());
        
        $message = new messageCreated($msg->id,$request->get('name'), $request->get('email'),$request->get('message'));
        Mail::to(Admin::first()->email) ->send($message);
        
        $message = new NotificationMessageCreated($request->get('name'), $request->get('email'),$request->get('message'));
        Mail::to($request->get('email'))->send($message);
        // Mail::send('email-contact',[
        //         'name' => $request->get('name'),
        //         'email' => $request->get('email'),
        //         'content' => $request->get('message')
        //     ], function ($message){
        //         // var_dump($message);die();
        //         $bbcmail = Info::first();
        //         // dd($bbcmail);
        //         $message->to($bbcmail->email)->subject('BBC :: New Message from bbcsn.com');
        //     });
        
        Flashy::success('your message has been successfully sent');
        return redirect()->route('user.contact');
    }

}