<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>首页 - {{ __('views.appName') }}</title>
    <script src="/common/js/jq/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/common/common.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/navi.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/5.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/choice.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/mypost.css" />


    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            <img src="/common/pictures/5/mywords2.png" class="ding-tubiao">
            <div style="color: rgb(122,146,203);">我的发帖</div>
            <img src="/common/pictures/5/mywords-highlight.png" class="ding-fenge">
        </a>
        <a id="ding-my-collect" class="ding-choose" href="6.html">
            <img src="/common/pictures/5/collect.png" class="ding-tubiao">
            <div>我的收藏</div>
            <img src="/common/pictures/5/mywords-highlight.png" class="ding-fenge weixuan">
        </a>
        <a id="ding-my-message" class="ding-choose" href="7.html">
            <img src="/common/pictures/5/password.png" class="ding-tubiao">
            <div>信息设置</div>
            <img src="/common/pictures/5/mywords-highlight.png" class="ding-fenge weixuan">
        </a>
    </div>
</div>
<!-- 我的发帖 -->
<div id="my-posts">

    @foreach($post as $k=>$item)
    <div class="my-post">
        <a class="content-in" href="2.html">
            <div class="post-content">
                {!! $item->content !!}
            </div>
        </a>
        <div class="post-date">
            <span class="post-num">{{ $item->created_at->format('Y年m月d日 H:i') }}</span>
            <span id="divider">
          <hr />
        </span>
        </div>
    </div>
    @endforeach


</div>

<!-- 底部导航栏 -->
@include('layout.footer')
</body>

</html>
