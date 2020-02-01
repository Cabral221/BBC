<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::notDraft()->get();
        $post = Post::draft();
        return view('admin.posts.index',compact(['posts','post']));
    }

    public function create()
    {
        return $this->edit($post);
        return view('admin.posts.create', compact('post'));
    }

    public function store()
    {

    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        Flashy::success('Your article has been successfully changed');
        return redirect()->route('admin.blog.posts.index',['id' => $post->id])->with('success','Article modifié');
    }


    public function destroy($id)
    {
        $delete_post = Post::find($id);
        if($delete_post)
        $delete_post->delete();
        Flashy::success('Your article has been successfully deleted');
        return redirect()->back();
    }
}