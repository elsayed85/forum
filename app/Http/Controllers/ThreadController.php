<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Thread;
use App\Topic;
use Illuminate\Http\Request;

class ThreadController extends Controller
{

    public function create(Topic $topic)
    {
        return view('topic.threads.create',compact('topic'));
    }
    public function store(Topic $topic)
    {
        $att= \request()->validate([
            'name'=>'required',
            'body'=>'required'
        ]);

        $thread= $topic->threads()->create($att);

        return view('topic.threads.index');
    }
    public function show(Thread $thread)
    {

           views($thread)->record();

        return view('topic.threads.show',compact('thread'));
    }
    //all the threads from different topics
    public function index()
    {
        $threads=Thread::all();
        return view('topic.threads.index',compact('threads'));
    }

}
