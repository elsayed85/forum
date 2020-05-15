<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Thread $thread)
    {
       $data= \request()->validate(['body'=>'required|max:255']);


       $comment=$thread->comments()->create([
           'body'=>$data['body'],
           'thread_id'=>$thread->id,
       ]);

       return back();
    }
//    public function show(Thread $thread ,Comment $comment)
//    {
//        $thread= Thread::all();
//       $thread->$comment=Comment::all();
//
//        return view('topic.threads.show',compact('comment','thread'));
//    }
}
