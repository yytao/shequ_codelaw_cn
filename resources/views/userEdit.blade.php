@extends('layout.userHeader')
@section('title', '我的发帖')

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
                <span>&emsp;修改昵称</span>
            </div>
        </a>
        <hr />
        <a href="javascript:void(0)" onclick="displayWindow2()">
            <div class="edit-line">
                <span>&emsp;修改密码</span>
            </div>
        </a>
    </div>


    <!-- 昵称悬浮窗口 -->
    <div id="window-name">
        <div class="clear"></div>
        <span id="title-name">
            <br>修改昵称
        </span>
        <hr />
        <form id="changeNameForm" method="post" action="{{ route('user.edit.name') }}">
            @csrf
            <input type="text" id="new_name" name="new_name" maxlength="15" class="form-control" required placeholder="新的昵称" />
            <a href="javascript:void(0)" onclick="hideWindow1()">
                <div id="no-name">
                    <span id="y-name" style="color: white;">取消</span>
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
            <br>修改密码
        </span>
        <hr />
        <form id="changePwForm" method="post" action="{{ route('user.edit.password') }}">
            @csrf
            <input id="old_password" name="old_password" minlength="8" maxlength="50" placeholder="原始密码" required type="password" />
            <input id="new_password" name="new_password" minlength="8" maxlength="50" placeholder="修改密码" required type="password" />
            <input id="confirm_password" name="confirm_password" minlength="8" maxlength="50" placeholder="确认密码" required type="password" />
            <a href="javascript:void(0)" onclick="hideWindow2()">
                <div id="no-password">
                    <span id="y-password" style="color: white;">取消</span>
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
