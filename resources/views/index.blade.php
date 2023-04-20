<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>{{ __('views.appName') }}</title>
    <link rel="stylesheet" type="text/css" href="/common/common.css" />

    <link rel="stylesheet" type="text/css" href="/common/css/top.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/1.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/post.css" />
    <link rel="stylesheet" type="text/css" href="/common/css/navi.css" />
    <script src="/common/js/jq/jquery.js"></script>
    <script src="/common/js/1.js"></script>
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
            <p id="welcom">&nbsp;</p>
        </div>
    </div>
    <div id="choose-bar">
        <a href="/share">
            <span class="tag">{{ trans('views.all') }}</span>
        </a>
        <span class="tag">{{ trans('views.share') }}</span>
        <span class="tag">{{ trans('views.unused') }}</span>
        <span class="tag">{{ trans('views.renting') }}</span>
        <span class="tag">{{ trans('views.social') }}</span>

        <div style="display: inline; float: right;right:3px;">
            <button id="newest" class="top-buttons">最新</button>
            <button id="hotest" class="top-buttons">热门</button>
        </div>
    </div>
</div>

    <div id="content-bar">

        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>
        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>
        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>
        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>
        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>
        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>


        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>

        <div class="post">
            <div class="post-title">
                <img class="photo" src="/common/pictures/1/photo.png" />
                <div class="text-title">
                    <div class="name-title">原来微信名字可以这么长啊</div>
                    <div class="time-title">9:02</div>
                </div>
            </div>
            <a class="content-in" href="2.html">
                <div class="post-content">
                    投票投票！
                    <img class="post-picture" src="/common/pictures/1/erweima.png" />
                </div>
            </a>
            <div class="post-bottom">
                <span class="post-num">点赞：10&nbsp;</span>
                <span class="post-num">评论：8</span>
                <img class="post-tubiao like-tubiao" src="/common/pictures/1/like.png" />
                <img class="post-tubiao collect-tubiao" src="/common/pictures/1/collect.png" />
                <img class="post-tubiao comment-tubiao" src="/common/pictures/1/comment.png" />
                <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png" />
            </div>
        </div>

    </div>
    <img src="/common/pictures/1/launch.png" id="launch" />

    @include('layout.footer')

</body>

</html>
