@extends('layout.header')
@section('title', '')
@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('common/css/pb.css') }}">
@endsection

@section('script')
    @parent
@endsection


@section("body")
    <style>
        .tb-tag-group__li--active{border: 0.01rem solid rgba(33, 24, 22, 0.5);color: #211816;}
    </style>
<div data-v-29acac67 class="app-view transition-fade pb-page-wrapper mask-hidden">
    <div data-v-29acac67="" class="main-thread-content-margin main-thread-content" style="margin-top: 0px;">
        <div data-v-74ef3e7e="" data-v-29acac67="" class="user-line-wrapper thread-user-line">
            <div data-v-74ef3e7e="" class="user-line">
                <div data-v-74ef3e7e="" class="tbfe-1px-border avatar" style="background-image: url(&quot;{{ $article->head_img??'/common/image/people_default.jpg' }}&quot;);"></div>
                <div data-v-74ef3e7e="" class="user-info">
                    <div data-v-74ef3e7e="" class="username"> {{ $article->user->name }} <!----></div>
                    <p data-v-74ef3e7e="" class="desc-info"><!----><!---->
                        <span data-v-74ef3e7e="" class="time"></span>
                        {{ $article->created_at }}
                    </p>
                </div>
            </div>
        </div>
        <p data-v-63bcc174="" data-v-29acac67="" class="thread-text thread-text" tid="5352891040">
            <span data-v-63bcc174="" class="text-content">
                {!! $article->content !!}
            </span>
        </p>

        <div data-v-43e19e44="" data-v-664f2f36="" data-v-29acac67="" class="interaction-bar w-row w-row-align-center w-row-justify-between" style="padding: 0px 0.09rem;"><div data-v-0a397a7b="" data-v-664f2f36="" class="w-col" data-v-43e19e44="" style="box-sizing: border-box; padding-left: 0.04rem; padding-right: 0.04rem; -webkit-box-flex: 0; flex-grow: 0; flex-basis: 33.3333%; max-width: 33.3333%;">
                <div data-v-664f2f36="" data-v-0a397a7b="" class="interaction-item collect">

                    <svg data-v-664f2f36 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star icon icoon-collect" viewBox="0 0 16 16" data-v-0a397a7b>
                        <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                    </svg>
                    <p data-v-664f2f36="" data-v-0a397a7b="" class="text">{{ trans('views.collect') }}</p>
                </div>
            </div>
            <div data-v-0a397a7b="" data-v-664f2f36="" class="w-col" data-v-43e19e44="" style="box-sizing: border-box; padding-left: 0.04rem; padding-right: 0.04rem; -webkit-box-flex: 0; flex-grow: 0; flex-basis: 33.3333%; max-width: 33.3333%;">
                <div data-v-664f2f36="" data-v-0a397a7b="" class="interaction-item comment">

                    <svg data-v-664f2f36 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots icon icoon-comment" viewBox="0 0 16 16" data-v-0a397a7b>
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    <p data-v-664f2f36="" data-v-0a397a7b="" class="text">&nbsp;</p>
                </div>
            </div>
            <div data-v-0a397a7b="" data-v-664f2f36="" class="w-col" data-v-43e19e44="" style="box-sizing: border-box; padding-left: 0.04rem; padding-right: 0.04rem; -webkit-box-flex: 0; flex-grow: 0; flex-basis: 33.3333%; max-width: 33.3333%;">
                <div data-v-664f2f36="" data-v-0a397a7b="" class="interaction-item good">
                    <svg data-v-664f2f36 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up icon icoon-good" viewBox="0 0 16 16" data-v-0a397a7b>
                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                    </svg>

                    <p data-v-664f2f36="" data-v-0a397a7b="" class="text">&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
