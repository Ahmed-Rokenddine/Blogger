<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return 
            view(
            'post.index', 
                [
                    'heading' => 'latest posts',
                    'posts' => Post::all()
                ]
            );
    }
    public function show(Post $post) {
        return view('post.show', [
            'post' => $post
        ]);
    }
}
