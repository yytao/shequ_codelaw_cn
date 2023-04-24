<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>@yield('title') - {{ __('views.appName') }}</title>

    @section('style')
        <link rel="stylesheet" type="text/css" href="/common/common.css">
    @show

    @section('script')
        <script src="/common/js/jq/jquery.js"></script>
        <script src="/common/common.js"></script>
    @show

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>

        <div id="details">
            <div style="width: 100%">
                <div style="" class="detail-return">
                    <a href="javascript:void(0)" click-action="return">
                        <img id="detail-return" src="/common/pictures/1/return.png">
                    </a>
                </div>
                <div style="" class="detail-title">
                    <label id="detail-text">@yield('title')</label>
                </div>
            </div>
        </div>


        @section('body')
        @show

    </body>
</html>
