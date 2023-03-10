<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - 留学生社区</title>

        @section('style')
            <link rel="stylesheet" href="{{ asset('common/bootstrap-4.6.2/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('common/css/style.css') }}">
            @show

        @section('script')
            <script src="{{ asset('common/js/jquery-3.6.4.min.js') }}"></script>
            <script src="{{ asset('common/bootstrap-4.6.2/js/bootstrap.min.js') }}"></script>
            @show
    </head>

    <body class="antialiased">
        @section('body')
            @show
    </body>
</html>
