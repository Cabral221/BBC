<?php

namespace App\Http\Controllers\Admin\Blog;


use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::All();
        $post = Post::All();
        return view('admin.comments.index',compact(['comments','post']));
    }

    public function create()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function store()
    {
        
    }

    public function destroy($id)
    {
        $delete_com = Comment::find($id);
        if($delete_com)
        $delete_com->delete();
        Flashy::success('Your comment has been successfully deleted');
        return redirect()->back();   
    }
}
