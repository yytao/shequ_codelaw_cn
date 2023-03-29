@extends('layout.header')
@section('title', '')
@section('style')
    @parent
@endsection

@section('script')
    @parent
@endsection


@section("body")
    <style>
        .tb-tag-group__li--active{border: 0.01rem solid rgba(33, 24, 22, 0.5);color: #211816;}
    </style>

    <div class="tb-page__main">
        <div data-v-0af163f2="" data-v-cfb99e7e="" id="dddfff" class="pull-refresh" style="height: 100%;">


            <div data-v-0af163f2="" class="pull-con" style="transform: translateY(0px); transition: all 0.2s ease 0s;">

                <div data-v-5b680340="" data-v-cfb99e7e="" class="tb-forum" data-v-0af163f2="">

                </div>

                <div data-v-cfb99e7e="" class="tb-tag-group" data-v-0af163f2="">
                    <div class="tb-tag-group__wrapper"><div class="tb-tag-group__scroller">
                            <ul class="tb-tag-group__ul" style="width: 340px;">
                                <a href="/">
                                    <li class="tb-tag-group__li @if($route=='CategoryRoot') tb-tag-group__li--active @endif">
                                        <span class="tb-tag-group__item">{{ trans('lan.newest') }}</span>
                                    </li>
                                </a>
                                <a href="/share">
                                    <li class="tb-tag-group__li @if($route=='CategoryShare') tb-tag-group__li--active @endif">
                                        <span class="tb-tag-group__item">{{ trans('lan.share') }}</span>
                                    </li>
                                </a>
                                <a href="/unused">
                                    <li class="tb-tag-group__li @if($route=='CategoryUnused') tb-tag-group__li--active @endif">
                                        <span class="tb-tag-group__item">{{ trans('lan.unused') }}</span>
                                    </li>
                                </a>
                                <a href="/renting">
                                    <li class="tb-tag-group__li @if($route=='CategoryRenting') tb-tag-group__li--active @endif">
                                        <span class="tb-tag-group__item">{{ trans('lan.renting') }}</span>
                                    </li>
                                </a>
                                <a href="/social">
                                    <li class="tb-tag-group__li @if($route=='CategorySocial') tb-tag-group__li--active @endif">
                                        <span class="tb-tag-group__item">{{ trans('lan.social') }}</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>

                <div data-v-cfb99e7e="" data-v-0af163f2="">
                    <div data-v-cfb99e7e="" class="tb-threadlist tb-mt--12" relate-forums="" sid="108093_2" data-v-0af163f2="">
                        <div class="tb-threadlist__wrapper">

                            @foreach($articleList as $k=>$item)
                                <a href="/a/{{ $item->id }}">
                                    <div data-v-59cc39e2="" class="tb-threadlist__item">
                                        <div data-v-59cc39e2="" class="tb-panel">
                                            <div class="tb-panel__body">
                                                <div data-v-59cc39e2="">
                                                    <div data-v-59cc39e2="" class="tb-media tb-media--xs">
                                                        <div class="tb-media__left">
                                                            <img class="tb-media__object tb-img--circle" src="{{ $item->head_img }}" onerror="this.src='/common/image/people_default.jpg'">
                                                        </div>
                                                        <div class="tb-media__body">
                                                            <h4 class="tb-media__title">{{ $item->user->name }}</h4>
                                                            <p class="tb-media__subtitle">{{ $item->created_at }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div data-v-59cc39e2="" class="tb-mt--8">
                                                    <div data-v-59cc39e2="" class="tb-richtext">
                                                        <span class="tb-richtext__badge-wrapper"></span>
                                                        <span class="tb-richtext__text">
                                                            {!! $item->content !!}
                                                        </span>
                                                    </div>
                                                </div>


                                                <div data-v-e96e0c68="" data-v-59cc39e2="" class="interaction-bar tb-row" justify="space-between" align="center">
                                                    <div data-v-e96e0c68="" class="tb-col-4">
                                                        <div data-v-e96e0c68="" class="interaction-item">
                                                            <svg data-v-e96e0c68 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star icon" viewBox="0 0 16 16">
                                                                <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
                                                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                                            </svg>
                                                            <span data-v-e96e0c68="" class="text">{{ trans('lan.collect') }}</span>
                                                        </div>
                                                    </div>
                                                    <div data-v-e96e0c68="" class="tb-col-4">
                                                        <div data-v-e96e0c68="" class="interaction-item">
                                                            <svg data-v-e96e0c68 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-dots icon" viewBox="0 0 16 16">
                                                                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                            </svg>
                                                            <span data-v-e96e0c68="" class="text">&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    <div data-v-e96e0c68="" class="tb-col-4">
                                                        <div data-v-e96e0c68="" class="interaction-item">
                                                            <svg data-v-e96e0c68 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up icon" viewBox="0 0 16 16">
                                                                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                                            </svg>

                                                            <span data-v-e96e0c68="" class="text">&nbsp;</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> {{-- item end --}}
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-v-23e4f95a="" data-v-cfb99e7e="" class="nav-bar-v2-fixed" open-app-top-wx-param="[object Object]">
        <div data-v-23e4f95a="" class="nav-bar-v2 nav-bar-v2-bg-image" style="background-color: rgb(255, 255, 255);">
            <a href="/post">
                <div data-v-23e4f95a="" class="nav-bar-bottom" data-track="{&quot;key&quot;:&quot;f_w_bottomGuide&quot;}">
                    {{ trans('lan.publish') }}
                </div>
            </a>
        </div>
    </div>

@endsection
