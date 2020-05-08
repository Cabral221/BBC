<?php

namespace App\Http\Controllers\User;

use App\Admin;
use App\Models\Message;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Mail\messageCreated;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMessageCreated;

class MessageController extends Controller{

    public function store(Request $request)
    {
        // dd($request->all());
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
        
        Flashy::success('your message has been successfully sent');
        return redirect()->route('user.contact');
    }

}