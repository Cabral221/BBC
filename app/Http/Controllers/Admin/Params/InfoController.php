<?php

namespace App\Http\Controllers\Admin\Params;
use App\Models\Info;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InfoController extends Controller
{
    public function index()
    {
        $info = Info::first();
        return view('admin.infos.index',compact('info'));
    }

    public function create()
    {

    }

    public function edit()
    {
        
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|min:2|email',
            'phone' => 'required|min:9|max:20',
            'adress' => 'required',
            'bp' => 'required'
        ]);
    
        if ($validator->fails()) {
                flashy::error($validator->messages()->first());
            return redirect()->back();
        }

        $info = Info::findOrFail($request->info);
        $info->email = $request->input('email');
        $info->phone = $request->input('phone');
        $info->address = $request->input('adress');
        $info->bp = $request->input('bp');
        $info->save();
        Flashy::success('Your info has been successfully changed');
        return back();
    }

    public function store()
    {
        
    }

    public function delete()
    {
        
    }
}
