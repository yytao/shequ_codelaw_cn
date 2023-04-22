@extends('layout.fullHeader')
@section('title', '检索结果 - ')
@section('style')
    @parent
    <link rel="stylesheet" href="/common/css/top.css">
    <link rel="stylesheet" href="/common/css/3.css">
    <link rel="stylesheet" href="/common/css/navi.css">
@endsection

@section('script')
    @parent
@endsection

@section("body")

    <div id="search-result-num">
        <p id="result-num">共找到 {{ count($result) }} 条结果</p>
        <hr>

        @foreach($result as $k=>$item)
        <a class="results" href="2.html">
            <div class="result-text">
                {!! $item->content !!}
            </div>
            <div class="result-other">
                <span class="result-name">{{ $item->user->name }}</span>
                <span class="result-time">{{ $item->created_at->format('Y年m月d日') }}</span>
            </div>
            <hr class="geduan">
        </a>
        @endforeach


    </div>
@endsection
