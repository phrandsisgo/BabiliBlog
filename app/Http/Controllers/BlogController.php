<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function feed(){
        $posts = Post::all();
        return view('displayPosts', ['posts' => $posts]);
    }

    public function show($id){
       // dd($id); //dd = dump and die (laravel helper function
        $post = Post::with('comments')->findOrFail($id);
        return view('show', ['post' => $post]);
    }

    public function create() {
        return view('posts.create');       
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'user' => $request->user,
            'title' => $request->title,
            'text'  => $request->text
        ]);


        return redirect('/posts');
    }

}
