<x-master>

        <div class="tt-single-topic-list">
            <div class="tt-item">
                <div class="tt-single-topic">
                    <div class="tt-item-header">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-d"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                                <a href="#">{{@$thread->topic->user->username}}</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>{{@$thread->posted_at()}}
                            </a>
                        </div>
                        <h3 class="tt-item-title">
                            <a href="#">{{@$thread->topic->name}}</a>
                        </h3>
                        <div class="tt-item-tag">
                            <ul class="tt-list-badge">
                                <li><a href="#"><span class="tt-color03 tt-badge">exchange</span></a></li>
                                <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                <li><a href="#"><span class="tt-badge">elements</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tt-item-description">
                        <h1 class="">{{@$thread->name}}</h1>

                        <p>

                            {{@$thread->body  }}

                        </p>
                    </div>
                    <div class="tt-item-info info-bottom">
                        <livewire:reactions :thread="$thread"/>


                        <div class="col-separator"></div>
                        <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                            <i class="tt-icon"><svg><use xlink:href="#icon-share"></use></svg></i>
                        </a>
                        <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                            <i class="tt-icon"><svg><use xlink:href="#icon-flag"></use></svg></i>
                        </a>
                        <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                            <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tt-item">
                <div class="tt-info-box">
                    <h6 class="tt-title">Thread Status</h6>
                    <div class="tt-row-icon">
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg><use xlink:href="#icon-reply"></use></svg></i>
                                <span class="tt-text">{{@$thread->comments->count()}}</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg><use xlink:href="#icon-view"></use></svg></i>
                                <span class="tt-text">{{@$thread->views->count()}}</span>
                            </a>

                        </div>



                    </div>
                </div>
            </div>
        </div>


    @include('_a-comment')
    @include('_make-comment')


</x-master>
