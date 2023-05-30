<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $highlight = Post::orderBy('likes', 'desc')->first();
        $latests = Post::orderBy('time', 'desc')->paginate(4);
        $posts = Post::all();

        return view('home',[
            'highlight' => $highlight,
            'latests' => $latests,
            'posts' => $posts
        ]);
    }

    public function show($id){
        $post = Post::find($id);
        return view('detail', [
            'post' => $post
        ]);
    }
}
