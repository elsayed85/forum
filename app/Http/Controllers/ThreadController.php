<?php

namespace App\Http\Controllers;

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

        return view('topic.threads.show',compact('thread'));
    }
    public function index(Topic $topic,Thread $thread)
    {
        return view('topic.threads.index',compact('thread'));
    }
}
