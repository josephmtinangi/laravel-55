<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return Post::latest()->get();
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $post = request()->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        Post::forceCreate($post);

        return redirect('posts');
    }
}
