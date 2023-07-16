<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::redirect('/', 'posts');
Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::all()
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







    // if (!file_exists($$path = __DIR__ . "/../resources/posts/{$slug}.html")) {
    //     // ddd('file doesnot exist');
    //     // abort(404,'File not found');
    //     return redirect('/');
    // }

    // $post  = cache()->remember("posts.{$slug}", now()->addSeconds(5), function () use ($path) {
    //     var_dump('file get contents');
    //     return  file_get_contents($path);
    // });

    // return view('post', [
    //     'post' => $post
    // ]);