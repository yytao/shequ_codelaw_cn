<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>{{ __('views.notice_title') }} - {{ __('views.appName') }}</title>

        <link rel="stylesheet" type="text/css" href="/common/css/4.css">
        <link rel="stylesheet" type="text/css" href="/common/css/navi.css">
        <link rel="stylesheet" type="text/css" href="/common/common.css">
        <script src="/common/js/jq/jquery.js"></script>
        <script src="/common/js/4.js"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
        <!-- 消息通知栏 -->
        <div id="notice">
            <div style="width: 100%">
                <div style="" class="notice-title">
                    <label id="notice-text">{{ __('views.notice_title') }}</label>
                </div>

                <div style="" class="notice-button">
                    <button id="notice-button">标为已读</button>
                </div>

            </div>
        </div>

        <!-- 消息通知 -->
        <div class="container">
            <table id="content-bar">
                @foreach($notice as $k=>$item)
                    <tr class="notice-line" data-id="{{ $item->id }}">
                        <th>
                            <img class="message-left" src="/common/pictures/1/message-like.png">
                        </th>
                        <th class="message-text">
                            <p>
                                @if($item->type == 'star')
                                    【点赞】
                                @elseif($item->type == 'comment')
                                    【评论】
                                @endif
                            </p>
                            <p>
                                <span class="message-underline">
                                    {{ $item->fromUser->name }}
                                </span>
                                @if($item->type == 'star')
                                    点赞
                                @elseif($item->type == 'comment')
                                    评论
                                @endif了您的发帖。
                            </p>
                        </th>
                        @if($item->status == '0')
                            <th>
                                <img class="message-right" id="new-notice-{{ $item->id }}" src="/common/pictures/1/message-new.png">
                            </th>
                        @endif
                    </tr>
                @endforeach

            </table>
        </div>

    @include('layout.footer')

    </body>
</html>
