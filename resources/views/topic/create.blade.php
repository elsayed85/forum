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
<body>
<!-- tt-mobile menu -->
<nav class="panel-menu" id="mobile-menu">
    <ul>

    </ul>
    <div class="mm-navbtn-names">
        <div class="mm-closebtn">
            Close
            <div class="tt-icon">
                <svg>
                  <use xlink:href="#icon-cancel"></use>
                </svg>
            </div>
        </div>
        <div class="mm-backbtn">Back</div>
    </div>
</nav>
<header id="tt-header">
    <div class="container">
        <div class="row tt-row no-gutters">
            <div class="col-auto">
                <!-- toggle mobile menu -->
                <a class="toggle-mobile-menu" href="#">
                    <svg class="tt-icon">
                      <use xlink:href="#icon-menu_icon"></use>
                    </svg>
                </a>
                <!-- /toggle mobile menu -->
                <!-- logo -->
                <div class="tt-logo">
                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                </div>

               @include('_desktop-menu')
                @include('_search')
                <!-- /tt-search -->
            </div>
            <div class="col-auto ml-auto">
                 <div class="tt-user-info d-flex justify-content-center">
                    <a href="#" class="tt-btn-icon">
                         <i class="tt-icon"><svg><use xlink:href="#icon-notification"></use></svg></i>
                    </a>
                    <div class="tt-avatar-icon tt-size-md">
                        <i class="tt-icon"><svg><use xlink:href="#icon-ava-a"></use></svg></i>
                    </div>
                    <div class="custom-select-01">
                        <select>
                            <option value="Default Sorting">azyrusmax</option>
                            <option value="value 01">value 01</option>
                            <option value="value 02">value 02</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main id="tt-pageContent">
    <div class="container">
        <div class="tt-wrapper-inner">
            <h1 class="tt-title-border">
                Create New Topic
            </h1>
            <form method="POST" action="/topic" class="form-default form-create-topic " >
                @csrf
                <div class="form-group">
                    <label for="inputTopicTitle">Topic Title</label>
                    <div class="tt-value-wrapper">
                        <input type="text" name="name" class="form-control" id="inputTopicTitle" placeholder="Subject of your topic">
                        <span class="tt-value-input">99</span>
                    </div>
                    <div class="tt-note">Describe your topic well, while keeping the subject as short as possible.</div>
                </div>

                <div class="pt-editor">
                    <h6 class="pt-title">Topic Body</h6>
                    <div class="pt-row">
                        <div class="col-left">
                            <ul class="pt-edit-btn">
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-quote"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-bold"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-italic"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-share_topic"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-blockquote"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-performatted"></use>
                                    </svg>
                                </button></li>
                                <li class="hr"></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-upload_files"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-bullet_list"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-heading"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-horizontal_line"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-emoticon"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-settings"></use>
                                    </svg>
                                </button></li>
                                <li><button type="button" class="btn-icon">
                                    <svg class="tt-icon">
                                      <use xlink:href="#icon-color_picker"></use>
                                    </svg>
                                </button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="body" class="form-control" rows="5" placeholder="Lets get started"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputTopicTitle">Category</label>
                                <select class="form-control">
                                    <option value="Select">Covid-19</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
{{--                            <div class="form-group">--}}
{{--                                <label for="inputTopicTags">Tags</label>--}}
{{--                                <input type="text" name="name" class="form-control" id="inputTopicTags"--}}
{{--                                       placeholder="Use comma to separate tags">--}}
{{--                            </div>--}}
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-auto ml-md-auto">
                            <button type="submit" class="btn btn-secondary btn-width-lg">Create Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        @error('body')
        <p class="text-red-500 text-sm" >
            {{$message}}
        </p>
        @enderror

        @error('name')
        <p class="text-red-500 text-sm" >
            {{$message}}
        </p>
@enderror
@include('_suggested-topics')






</body>
</html>
