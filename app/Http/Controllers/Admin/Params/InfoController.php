<?php

namespace App\Http\Controllers\Admin\Params;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

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
        $info = Info::findOrFail($request->info);
        $info->phone = $request->input('phone');
        $info->adress = $request->input('adress');
        $info->bp = $request->input('bp');
        $info->save();
        return back();
    }

    public function store()
    {
        
    }

    public function delete()
    {
        
    }
}
