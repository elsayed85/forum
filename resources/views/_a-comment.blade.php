@foreach($thread->comments as $comment)
<div class="tt-item">
    <div class="tt-single-topic">
        <div class="tt-item-header pt-noborder">
            <div class="tt-item-info info-top">
                <div class="tt-avatar-icon">
                    <i class="tt-icon"><svg><use xlink:href="#icon-ava-v"></use></svg></i>
                </div>
                <div class="tt-avatar-title">
                    <a href="#">{{@$comment->thread->topic->user->username}}</a>
                </div>
                <a href="#" class="tt-info-time">
                    <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>{{@$comment->commented_at()}}
                </a>
            </div>
        </div>
        <div class="tt-item-description">

                {{@$comment->body}}


        </div>

        <livewire:commentreactions :comment="$comment"/>
</div>
@endforeach
