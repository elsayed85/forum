<x-master>

    <main id="tt-pageContent" class="tt-offset-small">
        <div class="container">



                @guest
                    <div class="tt-item tt-item-popup">
                        <div class="tt-col-avatar">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-f"></use>
                            </svg>
                        </div>
                        <div class="tt-col-message">
                            Looks like you are new here. Register for free, learn and contribute.
                        </div>
                        <div class="tt-col-btn">
                            <button type="button" class="btn btn-primary">Log in</button>
                            <button type="button" class="btn btn-secondary">Sign up</button>
                            <button type="button" class="btn-icon">
                                <svg class="tt-icon">
                                    <use xlink:href="#icon-cancel"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                @endguest
                    <div class="tt-topic-list">
                @foreach($topics as $topic)

                            <div class="tt-list-header">
                                <div class="tt-col-topic">Topic</div>
                                <div class="tt-col-category">Details :</div>
                                <div class="tt-col-value hide-mobile"> Threads</div>
                                <div class="tt-col-value hide-mobile"> Replies</div>
                                <div class="tt-col-value hide-mobile">Views</div>
                                <div class="tt-col-value">Latest Activity</div>
                            </div>
                <div class="tt-item">
                    <div class="tt-col-avatar">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-ava-s"></use>
                        </svg>
                    </div>
                    <div class="tt-col-description">
                        <h6 class="tt-title"><a href="/topic/{{$topic->id}}/threads">
                                {{$topic->name}}
                            </a></h6>
                        <div class="row align-items-center no-gutters">
                            <div class="col-11">
                                <ul class="tt-list-badge">
                                    <li class="show-mobile"><a href="#"><span
                                                class="tt-color03 tt-badge">exchange</span></a></li>
                                    <li><a href="#"><span class="tt-badge">themeforest</span></a></li>
                                    <li><a href="#"><span class="tt-badge">elements</span></a></li>
                                </ul>
                            </div>
                            <div class="col-1 ml-auto show-mobile">
                                <div class="tt-value">4d</div>
                            </div>
                        </div>
                    </div>


                    <a href="/topic/{{$topic->id}}/threads"> <div class="tt-col-category">
                            <span class="tt-color03 tt-badge">Show threads</span></div></a>
                    <div class="tt-col-value hide-mobile">37</div>
                    <div class="tt-col-value tt-color-select hide-mobile">31</div>
                    <div class="tt-col-value hide-mobile">257</div>
                    <div class="tt-col-value hide-mobile">4d</div>
                </div>
                @endforeach

                <div class="tt-row-btn">
                    <button type="button" class="btn-icon js-topiclist-showmore">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-load_lore_icon"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </main>


</x-master>
