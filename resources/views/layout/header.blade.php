<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="font-size: 100px;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title'){{ trans('views.appName') }}</title>

        @section('style')

            @show

        @section('script')
            <script src="{{ asset('common/js/jquery-3.6.4.min.js') }}"></script>
            @show
    </head>

    <body>
    <div>
        <select onchange="changeLocale(this.value)">
            <option @if($locale == 'zh_CN') selected @endif value="zh_CN" >中文</option>
            <option @if($locale == 'en') selected @endif value="en">English</option>
            <option @if($locale == 'ko') selected @endif value="ko">한국어</option>
        </select>
    </div>


    @section('body')
    @show


    </body>
</html>

<script>
    function changeLocale(val)
    {
        window.location = '/changeLocale/'+val
    }
</script>
