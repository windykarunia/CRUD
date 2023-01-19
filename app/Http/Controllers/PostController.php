<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $model = new Post;
        $data=$model->all();
        return view('add-blog-post-form',['data' => $data]);
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    public function tampil(){
        $model = new Post;
        $data=$model->all();
        return view('tampilkan',['data' => $data]);
    }
}
