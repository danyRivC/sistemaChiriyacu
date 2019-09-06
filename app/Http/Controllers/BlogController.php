<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::paginate(8);
        return view('blog.index', ['posts'=>$posts]);
    }
    public function show($slug)
    {
        $post=Post::where('slug', $slug)->first();
        return view('blog.detailPost', ['post'=>$post]);
    }

}
