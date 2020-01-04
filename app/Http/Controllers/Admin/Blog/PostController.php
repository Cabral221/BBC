<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::notDraft()->get();
        // dd($posts);
        return view('admin.posts.index',compact('posts'));
    }

    public function create()
    {
        $post = Post::draft();
        return $this->edit($post);
        // return view('admin.posts.create', compact('post'));
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
        return redirect()->route('admin.posts.index',['id' => $post->id])->with('success','Article modifié');
    }
}