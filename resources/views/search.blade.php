@extends('layout.fullHeader')
@section('title', '检索结果')
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
        <p id="result-num">{{ count($result) }} {{ __('views.search_result') }}</p>
        <hr>

        @foreach($result as $k=>$item)
        <a class="results" href="/a/{{ $item->id }}">
            <div class="result-text">
                {!! $item->content !!}
            </div>
            <div class="result-other">
                <span class="result-name">{{ $item->user->name }}</span>
                <span class="result-time">{{ $item->created_at->diffForHumans() }}</span>
            </div>
            <hr class="geduan">
        </a>
        @endforeach


    </div>
@endsection
