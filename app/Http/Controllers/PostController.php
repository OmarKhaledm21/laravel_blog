<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
//            'categories' => Category::all(),
//            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
            'categories' => Category::all()
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
