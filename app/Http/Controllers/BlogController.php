<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class BlogController extends Controller
{
    public function feed(){
        $posts = Post::all();
        return view('displayPosts', ['posts' => $posts]);
    }
    public function feed2(){
        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }


    public function show($id){

        $post = Post::with('comments')->findOrFail($id);
        return view('show', ['post' => $post]);
    }
    public function edit_post($id){
        $post = Post::find($id);
        return view('post_bearbeiten', ['post' => $post]);
    }
    public function edit_comment($id){
        $comment = Comment::find($id);
        return view('kommentar_bearbeiten', ['comment' => $comment]);
    }
    public function post_update(Request $request , $id){
        $request->title;
        $request->content;
        $validated = $request->validate([
            'title' => 'required|max:30|min:3',
            'content' => 'required|max:300|min:3',
        ]);
        Post::where('id', $id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'updated_at' => now()
        ]);
        return redirect('/display_posts');
    }
    public function update_comment(Request $request , $id){
        //dd('first mistake (dd)');
        $request->content;
        $validated = $request->validate([
            'content' => 'required|max:300|min:3',
        ]);
        //dd("somehtdslk");
        Comment::where('id', $id)->update([
            'content' => $request->content,
            'updated_at' => now()
        ]);
        return redirect('/display_posts');
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

