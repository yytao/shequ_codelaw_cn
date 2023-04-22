<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ __('views.appName') }}</title>
    <link rel="stylesheet" type="text/css" href="/common/common.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/top.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/1.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/post.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/navi.css" />
    <script src="/common/js/jq/jquery.js"></script>
    <script src="/common/js/1.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <img id="logo" src="/common/pictures/1/logo.png" />
        <div id="search-bar">
            <div id="search-both">
                <form action="/search" method="get" id="searchForm">
                    <input id="search-input" placeholder="请输入关键词..." name="sword" />

                    <a id="search-result" href="javascript:void(0)" onclick="$('#searchForm').submit()">
                        <img id="search-img" src="/common/pictures/1/search.png" />
                    </a>
                </form>
            </div>
        </div>
    </div>
    <div id="choose-bar">
        <a href="/">
            <span class="tag @if($route=='CategoryAll') tag_active @endif">{{ trans('views.all') }}</span>
        </a>
        <a href="/share">
            <span class="tag @if($route=='CategoryShare') tag_active @endif">{{ trans('views.share') }}</span>
        </a>
        <a href="/unused">
            <span class="tag @if($route=='CategoryUnused') tag_active @endif">{{ trans('views.unused') }}</span>
        </a>
        <a href="/renting">
            <span class="tag @if($route=='CategoryRenting') tag_active @endif">{{ trans('views.renting') }}</span>
        </a>
        <a href="/social">
            <span class="tag @if($route=='CategorySocial') tag_active @endif">{{ trans('views.social') }}</span>
        </a>

        <div style="display: inline; float: right;right:3px;">
            <button id="newest" class="top-buttons">最新</button>
            <button id="hotest" class="top-buttons">热门</button>
        </div>
    </div>
</div>

    <div id="content-bar">

        @foreach($articleList as $k=>$item)
        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">{{ $item->user->name }}</div>
                    <div class="time-title">{{ $item->created_at->format('Y年m月d日') }}</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    {!! $item->content !!}
                </div>
            </a>

            <div class="post-bottom">
                <span class="post-num">#{{ $item->category->category_name }}&nbsp;</span>
                <span class="post-num" >点赞：{{$item->star}}&nbsp;</span>
                <span class="post-num" >评论：8</span>
                @if(in_array($item->id, $userStar))
                    <img id="like-btn" class="post-tubiao like-btn" data-status="del" data-id="{{ $item->id }}" src="/common/pictures/1/like2.png" />
                @else
                    <img id="like-btn" class="post-tubiao like-btn" data-status="add" data-id="{{ $item->id }}" src="/common/pictures/1/like.png" />
                @endif


                @if(in_array($item->id, $userCollect))
                    <img id="collect-btn" class="post-tubiao collect-btn" data-status="del" data-id="{{ $item->id }}" src="/common/pictures/1/collect2.png" />
                @else
                    <img id="collect-btn" class="post-tubiao collect-btn" data-status="add" data-id="{{ $item->id }}" src="/common/pictures/1/collect.png" />
                @endif

                <img class="post-tubiao comment-btn" src="/common/pictures/1/comment.png" />

                {{-- <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" /> --}}
            </div>
        </div>
        @endforeach
        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id??0 }}">
    </div>
    <img src="/common/pictures/1/launch.png" id="launch" />

    @include('layout.footer')

</body>
</html>
