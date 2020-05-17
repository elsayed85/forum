<?php

namespace App\Http\Livewire;

use App\Comment;
use Livewire\Component;

class Commentreactions extends Component
{
    public $comment;



    public function mount(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function like()
    {
        if ($this->comment->viaLoveReactant()->isReactedBy(auth()->user(), 'like'))
        {auth()->user()->viaLoveReacter()->unreactTo($this->comment, 'like');


        }
        else
        {
            auth()->user()->viaLoveReacter()->reactTo($this->comment, 'like');


        }



    }
    public function dislike()
    {
        if ($this->comment->viaLoveReactant()->isReactedBy(auth()->user(), 'dislike'))
        {
            $this->getdislikescount();
            auth()->user()->viaLoveReacter()->unreactTo($this->comment, 'dislike');


        }

        else
        {
            $this->getdislikescount();
            auth()->user()->viaLoveReacter()->reactTo($this->comment, 'dislike');


        }
    }
    public function love()
    {
        if ($this->comment->viaLoveReactant()->isReactedBy(auth()->user(),'love'))
        {
            auth()->user()->viaLoveReacter()->unreactTo($this->comment, 'love');

        }
        else
        {
            auth()->user()->viaLoveReacter()->reactTo($this->comment, 'love');
        }
    }

    public function getlikescount(): int
    {
        return $this->comment
            ->viaLoveReactant()
            ->getReactionCounterOfType('Like')
            ->getCount();
    }

    public function getlovecount(): int
    {
        return $this->comment
            ->viaLoveReactant()
            ->getReactionCounterOfType('love')
            ->getCount();
    }
    public function getdislikescount(): int
    {
        return $this->comment
            ->viaLoveReactant()
            ->getReactionCounterOfType('disLike')
            ->getCount();
    }
    public function render()
    {
        return view('livewire.commentreactions');
    }
}
//    public function

