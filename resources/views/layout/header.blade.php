<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - 留学生社区</title>

        @section('style')
            <link rel="stylesheet" href="{{ asset('common/bootstrap-4.6.2/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/swiper.min.css') }}">
            @show

        @section('script')
            <script src="{{ asset('common/js/jquery-3.6.4.min.js') }}"></script>
            <script src="{{ asset('common/bootstrap-4.6.2/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('common/js/swiper.min.js') }}"></script>
            @show
    </head>

    <body class="antialiased">
        <div class="head">
            <div class="more">
                <svg width="20" height="20">
                    <g fill="#CCC" fill-rule="nonzero">
                        <path d="M.5 16h19v2H.5zM.5 9h19v2H.5zM.5 2h19v2H.5z"></path>
                    </g>
                </svg>
            </div>
            <div class="logo">
                <a href="/" title="">
                    <img src="{{ asset('common/image/logo.png') }}" alt="">
                </a>
            </div>
        </div>
        @section('body')
            @show
    </body>
</html>
