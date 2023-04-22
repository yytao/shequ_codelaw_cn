@extends('layout.titleHeader')
@section('title', '详情')
@section('style')
    @parent
    <link rel="stylesheet" href="/common/css/2.css">
    <link rel="stylesheet" href="/common/css/navi.css">
    <link rel="stylesheet" href="/common/css/post.css">
@endsection

@section('script')
    @parent
<script>
    import Index from "../../public/common/js/jq/jQ-jQUI/jqui/index.html";
    export default {
        components: {Index}
    }
</script>
@endsection

@section("body")

<!-- 帖子主页 -->
<div id="content-bar">
    <div class="post">
        <div class="post-title">
            <img class="photo" src="/common/pictures/1/photo.png">
            <div class="text-title">
                <div class="name-title">{{ $article->user->name }}</div>
                <div class="time-title">{{ $article->created_at->diffForHumans() }}</div>
            </div>
        </div>
        <div class="content-in">
            <div class="post-content">
                {!! $article->content !!}
            </div>
        </div>

        <div class="post-bottom">
            <span class="post-num">点赞: 0&nbsp;</span>
            <span class="post-num">评论: {{ count($article->comment) }}</span>

{{--            <img class="post-tubiao share-tubiao" src="/common/pictures/1/share.png">--}}
        </div>
    </div>

    <!-- <div style="height: 200px; width: 300px; overflow: auto;"></div> -->
    <!-- 评论 -->
    <div class="alert">
        <h2><strong>评论</strong></h2>
        <hr class="line">
    </div>
    @foreach($article->comment as $k=>$item)
    <div class="comment-post">
        <div>
            <img class="photo" src="/common/pictures/1/photo.png">
            <div class="text-title">
                <div class="name-title">{{ $item->user->name }}</div>
                <div class="time-title">{{ $item->created_at->diffForHumans() }}</div>
            </div>
            <div class="content-in">
                <div class="post-content">{!! $item->content !!}</div>
            </div>
        </div>
    </div>
    <hr class="line">
    @endforeach

    <!-- 回复 -->
{{--    <div class="reply-comment">--}}
{{--        <div>--}}
{{--            <img class="photo" src="/common/pictures/1/photo.png">--}}
{{--            <div class="text-title">--}}
{{--                <div class="name-title">原来微信名字可以这么长啊</div>--}}
{{--                <div class="time-title">1分钟前</div>--}}
{{--            </div>--}}
{{--            <div class="content-in">--}}
{{--                <div class="post-content"><span id="post-at">回复Vicki：</span>真的非常感谢，呜呜o(^▽^)o</div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <hr class="line">--}}
</div>

<div id="navi" style="height: 10vw;">
    @if($user)
        <input type="text" class="form-control comment-bottom-input" id="comment-bottom-input" placeholder="评论">
    @else
{{--        <input type="text" class="form-control comment-bottom-input" disabled placeholder="请先登录">--}}
        <input type="text" class="form-control comment-bottom-input" id="comment-bottom-input" placeholder="评论">
    @endif

    @if(in_array($article->id, $userStar))
        <img id="like-btn" class="post-tubiao like-btn" data-status="del" data-id="{{ $article->id }}" src="/common/pictures/1/like2.png" style="left: 10vw;" />
    @else
        <img id="like-btn" class="post-tubiao like-btn" data-status="add" data-id="{{ $article->id }}" src="/common/pictures/1/like.png" style="left: 10vw;" />
    @endif

    @if(in_array($article->id, $userCollect))
        <img id="collect-btn" class="post-tubiao collect-btn" data-status="del" data-id="{{ $article->id }}" src="/common/pictures/1/collect2.png" style="left: 10vw;" />
    @else
        <img id="collect-btn" class="post-tubiao collect-btn" data-status="add" data-id="{{ $article->id }}" src="/common/pictures/1/collect.png" style="left: 10vw;" />
    @endif
</div>

@error('suc')
    <div class="alert alert-success">{{ $message }}</div>
@enderror

<div class="mask" id="mask"></div>
<div class="comment-form" id="comment-form">
    <form method="POST" action="{{ route('postComment') }}" enctype="multipart/form-data">
        @csrf
        <textarea id="comment_textarea" name="comment_textarea" class="form-control comment_textarea" style="white-space: pre-wrap;" required autocomplete="comment_textarea" autofocus></textarea>

        <input type="hidden" name="article_id" value="{{ $article->id }}" />
        <input type="hidden" name="reply_to" value="" />
        <button type="submit" name="comment-btn" class="btn btn-primary comment-btn">
            {{ __('views.publish') }}
        </button>
    </form>
</div>


<script>
    $(function(){
        $('#comment-bottom-input').focus(function (){
            $('#mask').css('display', 'block')
            $('#comment-form').css('display', 'block')
            $('#comment_textarea').focus()
            $('#comment_textarea').attr('placeholder', '评论 {{ $article->user->name }}：')
        })
    })

</script>
@endsection
