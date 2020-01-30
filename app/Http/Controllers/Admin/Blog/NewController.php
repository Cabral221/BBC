<?php

namespace App\Http\Controllers\Admin\Blog;

use Carbon\Carbon;
use App\Models\Neew;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function index()
    {
        $news = Neew::All();
        return view('admin.news.index',compact('news'));
    }



    public function update(Request $request)
    {
        // Carbon::format($request->input(''));
        // dd($request->all());
        $edit_new = Neew::findOrFail($request->lib_id);
        $edit_new->title = $request->input('libele');
        $edit_new->date = $request->input('date');
        $edit_new->content = $request->input('content');
        $edit_new->save();
        return redirect()->back();

    }

    public function store(Request $request)
    {
        // dd($request->all());
        $new = new Neew();
            $new->title = $request->input('libele');
            $new->date = $request->input('date');
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
