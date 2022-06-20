<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Auth;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create($post_id)
    {
        $post = Post::find($post_id);
        return view('comments.create',compact('post'));
    }

    public function store(Request $request)
    {
        $post = Post::find($request->post_id);
        $comment =new Comment;
        $comment -> body = $request ->body;
        $comment -> user_id = Auth::id();
        $comment -> post_id = $request -> post_id;

        $comment -> save();

        //return view('post.show',compact('post'));
        return redirect()->route('posts.show',$post->id);
    }
}
