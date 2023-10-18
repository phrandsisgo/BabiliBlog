<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;


class BlogController extends Controller
{
    public function feed(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('displayPosts', ['posts' => $posts]);
    }

    public function feed2(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
    }


    public function show($id){

        $post = Post::with('comments')->findOrFail($id);
        //dd('show');
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

    public function create_post() {
        //if authorized then return "create_post" view else return "login" view
        return view('create_post');
    }

    public function store_post(Request $request)
    {
<<<<<<< HEAD

        $post = new Post();
        $post->title = $request->input('title');
        $post->text = $request->input('text');
        $post->save();

        // $post = Post::create_post([
        //     'title' => $request->title,
        //     'text'  => $request->text
        // ]);
=======
        $request->title;
        $request->content;
        $validated = $request->validate([
            'title' => 'required|max:30|min:3',
            'content' => 'required|max:300|min:3',
        
        ]);
        //dd('message');
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->user()->id
        ]);
>>>>>>> 573a6bf28c18af6adeaa49354b93b13bbe256ed3


        return redirect('/');
    }

<<<<<<< HEAD
=======
  

    //Methode zum Erstellen von Kommentaren von Cyrill
           
    public function new_comment(Request $request, $id)
    {
        //dd($id);
        $request->validate([
            'content' => 'required',
            'post_id' => 'required',
        ]);

        Comment::create([
            'user_id' => $request->user_id,
            'content' => $request->content,
            'post_id' => $id,
        ]);

        return redirect()->back()->with('success', 'Comment Edited.');
    }


>>>>>>> 573a6bf28c18af6adeaa49354b93b13bbe256ed3
}

