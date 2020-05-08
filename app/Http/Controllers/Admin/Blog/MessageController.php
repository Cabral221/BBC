<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ResponseMessage;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        $sms = Message::orderBy('id','desc')->paginate(15);
        return view('admin.messages.index',compact('sms'));
    }


    public function destroy($id)
    {
        $delete_sms = Message::find($id);
        if($delete_sms)
        $delete_sms->delete();
        return redirect()->back();
    }


    public function show(Request $request,$id)
    {

        $affiche = Message::find($id);
        $affiche->read_at = now();
        $affiche->save();
        return view('admin.messages.sms_affiche',compact('affiche'));
    }

    public function response(Request $request)
    {
        $request->validate([
            'respons' => 'required|string|min:15'
        ]);
        
        $this->validate($request,[ 'respons' => 'required|min:6' ]);
        Mail::to($request->hidden)->send(
            new ResponseMessage($request->name, Auth::user()->email,$request->respons)
        );
        Flashy::success('Your email has been sent');
        return redirect()->back();
    }
}