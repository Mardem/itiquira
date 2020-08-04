<?php

namespace App\Http\Controllers\External\Principal;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate();
        return view('external.principal.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('external.principal.blog.view', compact('post'));
    }
}
