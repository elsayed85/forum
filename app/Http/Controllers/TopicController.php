<?php

namespace App\Http\Controllers;

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

        return back();
    }
    public function index()
    {

        $topics=Topic::all();
        return view('topic.index',compact('topics'));
    }
}
