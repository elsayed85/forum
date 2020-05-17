<div>

    <a href="#" wire:click="like"  class="tt-icon-btn p-0 ">
        <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
        <span class="tt-text">{{$this->getlikescount()}}</span>
    </a>

    <a href="#" wire:click="dislike" class="tt-icon-btn">
        <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
        <span class="tt-text"> {{$this->getdislikescount()}}</span>
    </a>

    <a href="#" wire:click="love" class="tt-icon-btn">
        <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
        <span class="tt-text">{{$this->getlovecount()}}</span>
    </a>
</div>

