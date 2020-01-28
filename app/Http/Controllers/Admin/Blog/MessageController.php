<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $sms = Message::All();
        return view('admin.messages.index',compact('sms'));
    }


    public function destroy($id)
    {
        $delete_sms = Message::find($id);
        if($delete_sms)
        $delete_sms->delete();
        return redirect()->back();
    }
}