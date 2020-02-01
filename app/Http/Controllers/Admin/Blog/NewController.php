<?php

namespace App\Http\Controllers\Admin\Blog;

use Carbon\Carbon;
use App\Models\Neew;
use App\Models\Message;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function index()
    {
        $news = Neew::All();
        return view('admin.news.index',compact('news'));
    }


    public function store(Request $request)
    {
        $new = new Neew();
            $new->title = $request->input('libele');
        $new = new Neew();
            $new->title = $request->input('libele');
            $new->date = $request->input('date');
            $new->content = $request->input('content');
            $new->save();
            Flashy::success('Your activity has been successfully added');
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $edit_new = Neew::findOrFail($request->lib_id);
        $edit_new->title = $request->input('libele');
        $edit_new->date = $request->input('date');
        $edit_new->content = $request->input('content');
        $edit_new->save();
        Flashy::success('Your activity has been successfully changed');
        return redirect()->back();

    }

    public function destroy($id)
    {
        $delet_new = Neew::find($id);
        if($delet_new)
        $delet_new->delete();
        Flashy::success('Your activity has been successfully deleted');
        return redirect()->back();   
    }
}
