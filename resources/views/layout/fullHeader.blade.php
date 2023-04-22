<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('title'){{ __('views.appName') }}</title>

    @section('style')
        <link rel="stylesheet" type="text/css" href="/common/common.css" />
    @show

    @section('script')
        <script src="/common/js/jq/jquery.js"></script>
    @show

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

    <body>

        <div id="top-two">
            <div id="top-bar">
                <a href="/">
                    <img id="logo" src="/common/pictures/1/logo.png" />
                </a>

                <div id="search-bar">
                    <div id="search-both">
                        <form action="/search" method="get" id="searchForm">
                            <input id="search-input" placeholder="请输入关键词..." name="sword" value="{{ $sword??'' }}" />

                            <a id="search-result" href="javascript:void(0)" onclick="$('#searchForm').submit()">
                                <img id="search-img" src="/common/pictures/1/search.png" />
                            </a>
                        </form>
                    </div>
                </div>
            </div>
            @section('choose-bar')
            @show

        </div>

        @section('body')
        @show

        @include('layout.footer')

    </body>
</html>
