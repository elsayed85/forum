<x-master>
    @dump($thread)
    @foreach($thread as $thread)
        <div class="tt-single-topic-list">
            <div class="tt-item">
                <div class="tt-single-topic">
                    <div class="tt-item-header">
                        <div class="tt-item-info info-top">
                            <div class="tt-avatar-icon">
                                <i class="tt-icon"><svg><use xlink:href="#icon-ava-d"></use></svg></i>
                            </div>
                            <div class="tt-avatar-title">
                                <a href="#">dylan89</a>
                            </div>
                            <a href="#" class="tt-info-time">
                                <i class="tt-icon"><svg><use xlink:href="#icon-time"></use></svg></i>6 Jan,2019
                            </a>
                        </div>
                        <h3 class="tt-item-title">
                            <a href="#">Web Hosting Packages for ThemeForest WordPress</a>
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
                        <h6 class="tt-title">{{$thread->name}}</h6>
                        <p>

                            {{$thread->body  }}

                        </p>
                    </div>
                    <div class="tt-item-info info-bottom">
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                            <span class="tt-text">671</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-dislike"></use></svg></i>
                            <span class="tt-text">39</span>
                        </a>
                        <a href="#" class="tt-icon-btn">
                            <i class="tt-icon"><svg><use xlink:href="#icon-favorite"></use></svg></i>
                            <span class="tt-text">12</span>
                        </a>
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
                                <span class="tt-text">283</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg><use xlink:href="#icon-view"></use></svg></i>
                                <span class="tt-text">10.5k</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg><use xlink:href="#icon-user"></use></svg></i>
                                <span class="tt-text">168</span>
                            </a>
                        </div>
                        <div class="tt-item">
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon"><svg><use xlink:href="#icon-like"></use></svg></i>
                                <span class="tt-text">2.4k</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-master>
