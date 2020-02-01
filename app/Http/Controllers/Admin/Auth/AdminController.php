<?php

namespace App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function edite($id)
    {
        $edite = Admin::find($id);
        return view('admin.auth.edite',compact('edite'));
    }

    public function update(Request $request , $id)
    {
        $update = Admin::find($id);
        $update->name = $request->input('name');
        $update->email = $request->input('email');
        $update->password = HASH::make($request->input('password'));
        $update->save();
        return redirect()->route('admin.welcome');
    }
}
