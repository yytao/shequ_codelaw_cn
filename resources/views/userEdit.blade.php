@extends('layout.userHeader')
@section('title', __('views.my_setting'))

@section('script')
    @parent
@endsection


@section('style')
    @parent
    <link rel="stylesheet" href="/common/css/navi.css">
    <link rel="stylesheet" href="/common/css/choice.css">
    <link rel="stylesheet" href="/common/css/5.css">
    <link rel="stylesheet" href="/common/css/mypost.css">
    <link rel="stylesheet" href="/common/css/7.css">
@endsection

@section("body")

    <!-- 修改选项   -->
    <div id="alternative">

        @error('suc')
        <div class="alert alert-success">{{ $message }}</div>
        @enderror

        @error('err')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <a href="javascript:void(0)" onclick="displayWindow1()">
            <div class="edit-line">
                <span>&emsp;{{ __('views.edit_name') }}</span>
            </div>
        </a>
        <hr />
        <a href="javascript:void(0)" onclick="displayWindow2()">
            <div class="edit-line">
                <span>&emsp;{{ __('views.edit_pw') }}</span>
            </div>
        </a>
    </div>


    <!-- 昵称悬浮窗口 -->
    <div id="window-name">
        <div class="clear"></div>
        <span id="title-name">
            <br>{{ __('views.edit_name') }}
        </span>
        <hr />
        <form id="changeNameForm" method="post" action="{{ route('user.edit.name') }}">
            @csrf
            <input type="text" id="new_name" name="new_name" maxlength="15" class="form-control" required placeholder="{{ __('views.new_name') }}" />
            <a href="javascript:void(0)" onclick="hideWindow1()">
                <div id="no-name">
                    <span id="y-name" style="color: white;">{{ __('views.cancel') }}</span>
                </div>
            </a>
            <div style="margin-top: 14vw;">
                <button type="submit" class="btn btn-primary comment-btn">
                    {{ __('views.confirm') }}
                </button>
            </div>
        </form>
    </div>

    <div id="window-password">
        <div class="clear"></div>
        <span id="title-password">
            <br>{{ __('views.edit_pw') }}
        </span>
        <hr />
        <form id="changePwForm" method="post" action="{{ route('user.edit.password') }}">
            @csrf
            <input id="old_password" name="old_password" minlength="8" maxlength="50" placeholder="{{ __('views.original_pw') }}" required type="password" />
            <input id="new_password" name="new_password" minlength="8" maxlength="50" placeholder="{{ __('views.new_pw') }}" required type="password" />
            <input id="confirm_password" name="confirm_password" minlength="8" maxlength="50" placeholder="{{ __('views.confirm_pw') }}" required type="password" />
            <a href="javascript:void(0)" onclick="hideWindow2()">
                <div id="no-password">
                    <span id="y-password" style="color: white;">{{ __('views.cancel') }}</span>
                </div>
            </a>
            <div style="margin-top: 50vw;">
                <button type="submit" class="btn btn-primary comment-btn">
                    {{ __('views.confirm') }}
                </button>
            </div>
        </form>

    </div>

    <div id="shadow" class="shadow_css"></div>
    <script src="/common/js/7.js"></script>

@endsection
