<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->get(),
        'categories' => \App\Models\Category::all()
    ]);
})->name('home');


// Post::where('slug', $post)->firstOrFail();
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (\App\Models\Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => \App\Models\Category::all()
    ]);
})->name('category');

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => \App\Models\Category::all()
    ]);
});
