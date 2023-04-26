<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>详情页</title>
    <link rel="stylesheet" type="text/css" href="/common/common.css">
    <link rel="stylesheet" type="text/css" href="/common/css/2.css">
    <link rel="stylesheet" type="text/css" href="/common/css/navi.css">
    <link rel="stylesheet" type="text/css" href="/common/css/post.css">
    <script src="/common/js/jq/jquery.js"></script>
    <script src="/common/common.js"></script>
    <script src="/common/js/2.js"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

<!-- 详情 -->
<div id="details">
    <div style="width: 100%">
        <div style="" class="detail-return">
            <a href="javascript:void(0)" click-action="return">
                <img id="detail-return" src="/common/pictures/1/return.png" style="padding-top: 10px;">
            </a>
        </div>
        <div style="" class="detail-title">
            <label id="detail-text">{{ __('views.post') }}</label>
        </div>
    </div>
</div>

<main class="py-4" style="padding-top: 20vw !important;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @error('suc')
                    <div class="alert alert-success">{{ $message }}</div>
                @enderror
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('postContent') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="articleCategory" class="col-md-4 col-form-label text-md-end">{{ __('views.select_category') }}</label>

                                <div class="col-md-6">
                                    <select id="articleCategory" name="articleCategory" class="form-control @error('articleCategory') is-invalid @enderror" required>
                                        <option value="">{{ __('views.select_category') }}</option>
                                        @foreach($category as $k=>$item)
                                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                        @endforeach

                                    </select>
                                    @error('articleCategory')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="articleContent" class="col-md-4 col-form-label text-md-end">{{ __('views.please_text') }}</label>

                                <div class="col-md-6">
                                    <textarea id="articleContent" name="articleContent" class="form-control @error('articleContent') is-invalid @enderror" style="white-space: pre-wrap;" required autocomplete="articleContent" autofocus></textarea>
                                    @error('articleContent')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="captcha" class="col-md-4 col-form-label text-md-end">{{ __('Captcha') }}</label>

                                <div class="col-md-3">
                                    <input id="captcha"  class="form-control" type="captcha" name="captcha" value="" required>
                                    @if($errors->has('captcha'))
                                        <div class="col-md-12">
                                            <p class="text-danger text-left"><strong>{{$errors->first('captcha')}}</strong></p>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary pull-right">
                                        {{ __('views.publish') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>








<!-- 帖子主页 -->
<div id="content-bar">
    <!-- 底部 -->
    @include('layout.footer')
</div>

</body>

</html>
