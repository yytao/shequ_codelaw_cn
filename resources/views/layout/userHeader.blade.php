<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>@yield('title') - {{ __('views.appName') }}</title>

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

        <div id="fix">
            <!-- 固定顶部 -->
            <div id="self">
                <!-- 个人信息 -->
                <div id="information">
                    <img id="photo" src="/common/pictures/5/photo.png" />
                    <div style="width: 15vh;height: 10vh;float: left">
                        <div id="name">{{ $user->name }}</div>
                        <div id="IDnum">ID：{{ $user->user_code }}</div>
                        <div id="IPaddress">IP属地：北京</div>
                    </div>
                    <a href="9.html">
                        <img id="out" src="/common/pictures/5/out.png" />
                    </a>
                </div>
            </div>

            <div id="dingbu-choose">
                <a id="ding-my-post" class="ding-choose" href="{{ route('user') }}">
                    @if($route=="user")
                        <img src="/common/pictures/5/mywords2.png" class="ding-tubiao">
                    @else
                        <img src="/common/pictures/5/mywords.png" class="ding-tubiao">
                    @endif
                    <div @if($route=="user")style="color: rgb(122,146,203)"@endif>我的发帖</div>
                    @if($route == 'user')
                        <img src="/common/pictures/5/mywords-highlight.png" class="ding-fenge">
                    @endif
                </a>

                <a id="ding-my-collect" class="ding-choose" href="{{ route('user.collect') }}">
                    @if($route=="user.collect")
                        <img src="/common/pictures/5/collect2.png" class="ding-tubiao">
                    @else
                        <img src="/common/pictures/5/collect.png" class="ding-tubiao">
                    @endif

                    <div @if($route=="user.collect")style="color: rgb(226,172,47);"@endif>我的收藏</div>
                    @if($route == 'user.collect')
                        <img src="/common/pictures/5/collect-highlight.png" class="ding-fenge">
                    @endif
                </a>

                <a id="ding-my-message" class="ding-choose" href="{{ route('user.edit') }}">
                    @if($route=="user.edit")
                        <img src="/common/pictures/5/password2.png" class="ding-tubiao">
                    @else
                        <img src="/common/pictures/5/password.png" class="ding-tubiao">
                    @endif

                    <div @if($route=="user.edit")class="user-nav-active"@endif>信息设置</div>
                    @if($route == 'user.edit')
                        <img src="/common/pictures/5/mywords-highlight.png" class="ding-fenge">
                    @endif
                </a>
            </div>
        </div>

        @section('body')
            @show

        <!-- 底部导航栏 -->
        @include('layout.footer')
    </body>
</html>
