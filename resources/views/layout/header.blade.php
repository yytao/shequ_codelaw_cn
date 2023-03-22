<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 100px;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')留学生社区</title>

        @section('style')
            <link rel="stylesheet" href="{{ asset('common/css/bootstrap-4.6.2/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/base.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/collect.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/frs.css') }}">

            @show

        @section('script')
            <script src="{{ asset('common/js/jquery-3.6.4.min.js') }}"></script>
            @show
    </head>

    <body>
        <div data-v-cfb99e7e="" class="tb-mobile-viewport" style="padding-bottom: 0.72rem;">
            <div class="tb-page">
                <div data-v-23e4f95a="" data-v-cfb99e7e="" class="nav-bar-v2-fixed">
                    <div data-v-23e4f95a="" class="nav-bar-v2 nav-bar-v2-bg-image" style="background-color: rgb(255, 255, 255);">
                        <div data-v-23e4f95a="" class="nav-bar-top">
                            <div data-v-23e4f95a="" class="text"> 留学生社区 </div>
                        </div>
                    </div>
                </div>

                <div class="tb-page__header">
                    <h1 class="tb-page__title">留学生社区</h1>
                </div>

                @section('body')
                @show

            </div>
        </div>
    </body>
</html>
