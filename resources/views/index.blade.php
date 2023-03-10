@extends('layout.header')
@section('title', '首页')
@section('style')
    @parent
@endsection

@section('script')
    @parent
@endsection


@section("body")
    <div class="">
        <div class="head">
            <div class="more">
                <svg width="20" height="20">
                    <g fill="#CCC" fill-rule="nonzero">
                        <path d="M.5 16h19v2H.5zM.5 9h19v2H.5zM.5 2h19v2H.5z"></path>
                    </g>
                </svg>
            </div>
            <div class="logo">
                <a href="/" title="">
                    <img src="{{ asset('common/image/logo.png') }}" alt="">
                </a>
            </div>
        </div>












    </div>
    <script>

    </script>

@endsection
