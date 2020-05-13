<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forum - Responsive HTML5 Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Forum - Responsive HTML5 Template">
    <meta name="author" content="Forum">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<div class="tt-topic-list tt-offset-top-30">
    <div class="tt-list-search">
        <div class="tt-title">Suggested Topics</div>
        <!-- tt-search -->
        <div class="tt-search">
            <form class="search-wrapper">
                <div class="search-form">
                    <input type="text" class="tt-search__input" placeholder="Search for topics">
                    <button class="tt-search__btn" type="submit">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <button class="tt-search__close">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-cancel"></use>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <!-- /tt-search -->
    </div>
    <div class="tt-list-header tt-border-bottom">
        <div class="tt-col-topic">Topic</div>
        <div class="tt-col-category">Category</div>
        <div class="tt-col-value hide-mobile">Likes</div>
        <div class="tt-col-value hide-mobile">Replies</div>
        <div class="tt-col-value hide-mobile">Views</div>
        <div class="tt-col-value">Activity</div>
    </div>
    <div class="tt-item">
        <div class="tt-col-avatar">
            <svg class="tt-icon">
                <use xlink:href="#icon-ava-n"></use>
            </svg>
        </div>

        @foreach($topics as $topic)
            <div class="tt-col-description">
                <h6 class="tt-title"><a href="#">
                        <svg class="tt-icon">
                            <use xlink:href="#icon-locked"></use>
                        </svg>

                        {{$topic->name}}

                    </a></h6>
                <div class="row align-items-center no-gutters hide-desktope">
                    <div class="col-auto">
                        <ul class="tt-list-badge">
                            <li class="show-mobile"><a href="#"><span class="tt-color06 tt-badge">movies</span></a></li>
                        </ul>
                    </div>
                    <div class="col-auto ml-auto show-mobile">
                        <div class="tt-value">2d</div>
                    </div>
                </div>
            </div>
            <div class="tt-col-category"><span class="tt-color06 tt-badge">movies</span></div>
            <div class="tt-col-value hide-mobile">674</div>
            <div class="tt-col-value tt-color-select  hide-mobile">29</div>
            <div class="tt-col-value hide-mobile">1.3k</div>
            <div class="tt-col-value hide-mobile">2d</div>
    </div>
@endforeach
</div>
