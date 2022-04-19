<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
        ]);
});



// Find a post by its slug and pass it to a view called "post "
Route::get('posts/{post}', function ($id) {
    return view('post', [
        'post' => Post::findOrFail($id)
    ]);

});
