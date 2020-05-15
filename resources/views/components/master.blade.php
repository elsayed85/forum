<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title' , 'home')</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="author" content="Forum">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/css/style.css">
    @yield('css')
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



    {{$slot}}
        @include('_popup-shit')


    <script src="/assets/js/bundle.js"></script>
    @yield('js')
    @include('_svg-shit')
</body>

</html>

