@extends('layout.userHeader')
@section('title', __('views.my_post'))
@section('style')
    @parent
    <link rel="stylesheet" href="/common/css/navi.css">
    <link rel="stylesheet" href="/common/css/5.css">
    <link rel="stylesheet" href="/common/css/choice.css">
    <link rel="stylesheet" href="/common/css/mypost.css">
@endsection

@section('script')
    @parent
@endsection

@section("body")

    <!-- 我的发帖 -->
    <div id="my-posts">
        @foreach($post as $k=>$item)
            <div class="my-post">
                <a class="content-in" href="/a/{{ $item->id }}">
                    <div class="post-content">
                        {!! $item->content !!}
                    </div>
                </a>
                <div class="post-date">
                    <span class="post-num">{{ $item->created_at->format('Y-m-d H:i') }}</span>
                    <span id="divider">
                        <hr />
                    </span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
