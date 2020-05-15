<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function create()
    {
        return view('topic.create');
    }
    public function store()
    {
       $att= \request()->validate([
            'name'=>'required',
            'body'=>'required'
        ]);

        $topic= Topic::create($att);

        return  back();
    }
    public function index()
    {

        $topics=Topic::all();
        return view('topic.index',compact('topics'));
    }
    //
    public function edit(Topic $topic   )
    {

        return view('topic.edit',compact('topic'));
    }
    public function update(Topic $topic)
    {
        $att= \request()->validate([
            'name'=>'required',
            'body'=>'required'
        ]);
       $topic->update($att);

        return redirect(view('topic.index'));
    }
}
