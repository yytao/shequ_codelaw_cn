<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 100px;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - 留学生社区</title>

        @section('style')
            <link rel="stylesheet" href="{{ asset('common/css/bootstrap-4.6.2/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/base.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/collect.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/index.css') }}">
            @show

        @section('script')
            <script src="{{ asset('common/js/jquery-3.6.4.min.js') }}"></script>
            @show
    </head>

    <body>
        <div class="main-page-wrap">

            <div class="app-view transition-fade index-page-wrap">

                <div data-v-23e4f95a="" class="nav-bar-v2-fixed">
                    <div data-v-23e4f95a="" class="nav-bar-v2 nav-bar-v2-bg-image" style="background-color: rgb(247, 247, 250);">
                        <div data-v-23e4f95a="" class="nav-bar-top">
                            <div data-v-23e4f95a="" class="logo-wrapper">
{{--                                <img data-v-23e4f95a="" class="nav-bar-icon-top" src="/common/image/logo.png"/>--}}
                            </div>
                            <div data-v-23e4f95a="" class="text"> 留学生社区 </div>

                        </div>
                    </div>
                </div>

                <div data-v-97483f64 class="tb-index-navbar">
                    <ul data-v-97483f64="" class="navbar-box">
                        <li data-v-97483f64="" class="navbar-item">
                            <a data-v-97483f64="" href="/" aria-current="page" class="item-router @if($route=='CategoryRoot')router-link-exact-active router-link-active @endif">
                                <div data-v-97483f64="" class="item-container">
                                    <div data-v-97483f64="" class="item-content @if($route=='CategoryRoot') item-content-active @endif">
                                        <span data-v-97483f64=""> 最新 </span>
                                    </div>
                                    <span data-v-97483f64="" class="item-bottom-line @if($route=='CategoryRoot')item-bottom-line-active @endif"></span>
                                </div>
                            </a>
                        </li>

                        <li data-v-97483f64="" class="navbar-item">
                            <a data-v-97483f64="" href="/share" aria-current="page" class="item-router @if($route=='CategoryShare')router-link-exact-active router-link-active @endif">
                                <div data-v-97483f64="" class="item-container">
                                    <div data-v-97483f64="" class="item-content @if($route=='CategoryShare') item-content-active @endif">
                                        <span data-v-97483f64=""> 分享 </span>
                                    </div>
                                    <span data-v-97483f64="" class="item-bottom-line @if($route=='CategoryShare')item-bottom-line-active @endif"></span>
                                </div>
                            </a>
                        </li>
                        <li data-v-97483f64="" class="navbar-item">
                            <a data-v-97483f64="" href="/unused" aria-current="page" class="item-router @if($route=='CategoryUnused')router-link-exact-active router-link-active @endif">
                                <div data-v-97483f64="" class="item-container">
                                    <div data-v-97483f64="" class="item-content @if($route=='CategoryUnused') item-content-active @endif">
                                        <span data-v-97483f64=""> 闲置 </span>
                                    </div>
                                    <span data-v-97483f64="" class="item-bottom-line @if($route=='CategoryUnused')item-bottom-line-active @endif"></span>
                                </div>
                            </a>
                        </li>
                        <li data-v-97483f64="" class="navbar-item">
                            <a data-v-97483f64="" href="/renting" aria-current="page" class="item-router @if($route=='CategoryRenting')router-link-exact-active router-link-active @endif">
                                <div data-v-97483f64="" class="item-container">
                                    <div data-v-97483f64="" class="item-content @if($route=='CategoryRenting') item-content-active @endif">
                                        <span data-v-97483f64=""> 租房 </span>
                                    </div>
                                    <span data-v-97483f64="" class="item-bottom-line @if($route=='CategoryRenting')item-bottom-line-active @endif"></span>
                                </div>
                            </a>
                        </li>
                        <li data-v-97483f64="" class="navbar-item">
                            <a data-v-97483f64="" href="/social" aria-current="page" class="item-router @if($route=='CategorySocial')router-link-exact-active router-link-active @endif">
                                <div data-v-97483f64="" class="item-container">
                                    <div data-v-97483f64="" class="item-content @if($route=='CategorySocial') item-content-active @endif">
                                        <span data-v-97483f64=""> 交友 </span>
                                    </div>
                                    <span data-v-97483f64="" class="item-bottom-line @if($route=='CategorySocial')item-bottom-line-active @endif"></span>
                                </div>
                            </a>
                        </li>

                    </ul>

                    @section('body')
                    @show
                </div>

            </div>

        </div>

    </body>
</html>
