<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class BlogController extends Controller
{

    public function feed(){
        $posts = Post::orderBy('created_at', 'desc')->get();// Orderd the newest post on the top
        return view('displayPosts', ['posts' => $posts]);
    }
    public function feed2(){
        
        $posts = Post::orderBy('created_at', 'desc')->get();// Orderd the newest post on the top
        return view('welcome', ['posts' => $posts]);
    }

    public function feedUserId(){
        // Check if the user is logged in
        if (auth()->check()) {
            // Get the authenticated user's ID
            $userId = auth()->user()->id;
    
            // Get the posts associated with the user ID
            $posts = Post::where('user_id', $userId)->get();
    
            return view('displayPosts', ['posts' => $posts]);
        }
    
        // If user is not logged in, you may want to handle this case accordingly
        // For example, you can redirect them to a login page
        return redirect('/login');
    }
    

    public function myFeeds($userId)
    {
        $posts = Post::where('user_id', $userId)->get();
        return view('myfeeds', ['posts' => $posts]);
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
        return redirect('/');
    }
    public function delete_comment($id){
        Comment::where('id', $id)->delete();
        return back();
    }
    //beim delete_post muss darauf geachtet werden, dass nicht nur der Post sondern auch die Kommentare auch gelöscht werden.
    public function delete_post($id){
        Post::where('id', $id)->delete();
        return redirect('/');
    }

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


}

