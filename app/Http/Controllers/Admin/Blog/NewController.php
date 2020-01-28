<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Neew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function index()
    {
        $news = Neew::All();
        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update(Request $request)
    {
        $edit_new = Neew::findOrFail($request->lib_id);
        $edit_new->title = $request->input('libele');
        $edit_new->content = $request->input('content');
        $edit_new->save();
        return redirect()->back();

    }

    public function store(Request $request)
    {
        $new = new Neew();
            $new->title = $request->input('libele');
            $new->content = $request->input('content');
            $new->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $delet_new = Neew::find($id);
        if($delet_new)
        $delet_new->delete();
        return redirect()->back();   
    }
}
