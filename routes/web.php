<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);
});


// Post::where('slug', $post)->firstOrFail();
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);

});
