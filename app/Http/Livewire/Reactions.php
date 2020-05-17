<?php

namespace App\Http\Livewire;

use App\Thread;
use Livewire\Component;

class Reactions extends Component
{
    public $thread;
    public $count;


    public function mount(Thread $thread)
    {
        $this->thread = $thread;

    }

    public function like()
    {


        if ($this->thread->viaLoveReactant()->isReactedBy(auth()->user(), 'like'))
        {auth()->user()->viaLoveReacter()->unreactTo($this->thread, 'like');
           $this->count--;
        }
        else
        {
            auth()->user()->viaLoveReacter()->reactTo($this->thread, 'like');
            $this->count++;

        }



    }
    public function dislike()
    {
        if ($this->thread->viaLoveReactant()->isReactedBy(auth()->user(), 'dislike'))
        {
            $this->getdislikescount();
            auth()->user()->viaLoveReacter()->unreactTo($this->thread, 'dislike');


        }

        else
        {
            $this->getdislikescount();
            auth()->user()->viaLoveReacter()->reactTo($this->thread, 'dislike');


        }
    }
    public function love()
    {
        if ($this->thread->viaLoveReactant()->isReactedBy(auth()->user(),'love'))
        {
            auth()->user()->viaLoveReacter()->unreactTo($this->thread, 'love');

        }
        else
        {
            auth()->user()->viaLoveReacter()->reactTo($this->thread, 'love');
        }
    }

    public function getlikescount(): int
    {
        return $this->thread
            ->viaLoveReactant()
            ->getReactionCounterOfType('Like')
            ->getCount();
    }

    public function getlovecount(): int
    {
        return $this->thread
            ->viaLoveReactant()
            ->getReactionCounterOfType('love')
            ->getCount();
    }
    public function getdislikescount(): int
    {
        return $this->thread
            ->viaLoveReactant()
            ->getReactionCounterOfType('disLike')
            ->getCount();
    }
    public function render()
    {
        return view('livewire.reactions');
    }
}
//    public function

