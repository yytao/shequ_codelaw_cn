@extends('layout.header')
@section('title', '')
@section('style')
    @parent
    <link rel="stylesheet" href="{{ asset('common/css/index.css') }}">
@endsection

@section('script')
    @parent
@endsection


@section("body")


    <div data-v-97483f64="" class="main-page-wrap navbar-view navbar-transition-slide fixed-padding">
        <div><div data-v-cf2da122="" class="user-center-wrap">
                <div data-v-178e9d9c="" data-v-cf2da122="" class="user-card-nav-wrap">
                    <div data-v-178e9d9c="" class="avatar" style="background-image: url(&quot;/common/image/people_default.jpg&quot;);"></div>

                    <div data-v-178e9d9c="" class="user-info"><div data-v-178e9d9c="" class="user-name"> 墙外楼_BI1FPF
                            <svg data-v-178e9d9c class="bi bi-gender-male user-sex-icon">
                                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                            </svg>
                        </div>
                        <div data-v-178e9d9c="" class="user-sign">{{ __('views.empty_intro') }}</div>
                    </div><!---->
                </div>
                <ul data-v-cf2da122="" class="user-center-ul">
                    <li data-v-cf2da122="">
                        <div data-v-5b06c658="" data-v-cf2da122="" class="nav-title-wrap">
                            <svg data-v-5b06c658="" class="nav-title-type-icon">
                                <use xlink:href="#wo_list_ post_outlined_24"></use>
                            </svg>
                            <span data-v-5b06c658="">{{ __('views.my_post') }}</span>
                            <svg data-v-5b06c658="" class="nav-title-more-icon">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </li>

                    <li data-v-cf2da122="">
                        <div data-v-5b06c658="" data-v-cf2da122="" class="nav-title-wrap">
                            <svg data-v-5b06c658="" class="nav-title-type-icon">
                                <use xlink:href="#wo_list_collect_outlined_24"></use>
                            </svg>
                            <span data-v-5b06c658="">{{ __('views.my_collect') }}</span>
                            <svg data-v-5b06c658="" class="nav-title-more-icon">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </li>
                    <li data-v-cf2da122="">
                        <div data-v-5b06c658="" data-v-cf2da122="" class="nav-title-wrap">
                            <svg data-v-5b06c658="" class="nav-title-type-icon">
                                <use xlink:href="#wo_list_complaint_outlined_24"></use>
                            </svg>
                            <span data-v-5b06c658="">{{ __('views.report') }}</span>
                            <svg data-v-5b06c658="" class="nav-title-more-icon">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>
            <div data-v-502af113="" class="log-out-wrap"> {{ __('views.logout') }} </div>
        </div>
    </div>

@endsection
