<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 100px;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')留学生社区</title>

        @section('style')
            <link rel="stylesheet" href="{{ asset('common/bootstrap-4.6.2/css/bootstrap.min.css') }}">
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
                            <div data-v-23e4f95a="" class="text"> {{ trans('lan.appname') }} </div>
                        </div>

                        <div>
                            <select onchange="changeLocale(this.value)">
                                <option @if($locale == 'zh_CN') selected @endif value="zh_CN" >中文</option>
                                <option @if($locale == 'en') selected @endif value="en">English</option>
                                <option @if($locale == 'ko') selected @endif value="en">한국어</option>
                            </select>
                        </div>

                    </div>
                </div>



                <div class="tb-page__header" style="background: #f7f7fa;">

                </div>

                @section('body')
                @show


                <div data-v-23e4f95a="" data-v-cfb99e7e="" class="nav-bar-v2-fixed" style="bottom: 0px;">
                    <div data-v-23e4f95a="" class="nav-bar-v2 nav-bar-v2-bg-image" style="background-color: rgb(255, 255, 255);">
                        <div data-v-23e4f95a="" class="nav-bar-top">

                            <a href="/" style="width: 50%; text-align: center;font-size: 1.3em;color: black;">
                                <div data-v-23e4f95a="" class="" style="text-align: center;font-size: 1em;">
                                    {{ trans('lan.home') }}
                                </div>
                            </a>

                            <a href="/user" style="width: 50%; text-align: center;font-size: 1.3em;color: black;">
                                <div data-v-23e4f95a="" class="" style="text-align: center;font-size: 1em;">
                                    {{ trans('lan.my') }}
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function changeLocale(val)
    {
        window.location = '/changeLocale/'+val
    }
</script>
