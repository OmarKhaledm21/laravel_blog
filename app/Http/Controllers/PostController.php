<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    // protected function getPosts()
    // {
    //         $posts = Post::latest('published_at');

    //         $posts->when(request('search'), function ($query, $search) {
    //             $query->where('title', 'like', '%' . $search . '%')
    //                 ->orWhere('body', 'like', '%' . $search . '%');
    //         });

    //     return ;
    // }
}
