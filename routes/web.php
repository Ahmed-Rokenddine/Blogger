<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 
    view(
        'posts', 
        [
            'heading' => 'latest posts',
            'posts' => Post::all()
        ]
    );
});

Route::get('/post/{post}', function(post $post) {
    return view('post', [
        'post' => $post
    ]);
});


