<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        // $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->simplePaginate(6),
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
