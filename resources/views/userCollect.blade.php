@extends('layout.userHeader')
@section('title', '我的收藏')
@section('style')
    @parent
    <link rel="stylesheet" href="/common/css/navi.css">
    <link rel="stylesheet" href="/common/css/choice.css">
    <link rel="stylesheet" href="/common/css/5.css">
    <link rel="stylesheet" href="/common/css/mypost.css">
@endsection

@section('script')
    @parent
@endsection

@section("body")


    <div id="my-posts">
        @foreach($collect as $k=>$item)
            @if(isset($item->article))
                <div class="my-post">
                    <a class="content-in" href="/a/{{ $item->article->id }}">
                        <div class="post-content">
                            {!! $item->article->content !!}
                        </div>
                    </a>
                    <div class="post-date">
                        <span class="post-num">{{ $item->created_at->format('Y年m月d日 H:i') }}</span>
                        <span id="divider">
                            <hr />
                        </span>
                    </div>
                </div>
            @endif
        @endforeach


    </div>

@endsection
