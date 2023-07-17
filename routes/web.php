<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::redirect('/', 'posts');
Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::latest('published_at')->get()
    ]);
});

Route::get('posts/{post}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    // ddd($author);
    return view('posts', [
        'posts' => $author->posts
    ]);
});