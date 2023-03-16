@extends('layout.header')
@section('title', '首页')
@section('style')
    @parent
@endsection

@section('script')
    @parent
@endsection


@section("body")

    <div class="navbar">
        <ul class="bFBpNT nav-list">

            @foreach($nav as $k=>$item)
                <li class="eARzYn nav-item @if($k==0) active @endif" data-category-id="{{ $item['id'] }}">{{ $item['category_name'] }}</li>
            @endforeach
        </ul>
    </div>

    <div class="lunbo">
        <div class="swiper-container-initialized swiper-container-horizontal swiper-container-android">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0">
                    <div class="swiper-item">
                        <img class="cover-image" src="/common/image/temp_banner.jpg" alt="图片">
                        <p class="banner-title">这是一个标题1</p>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0">
                    <div class="swiper-item">
                        <img class="cover-image" src="/common/image/temp_banner.jpg" alt="图片">
                        <p class="banner-title">这是一个标题2</p>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0">
                    <div class="swiper-item">
                        <img class="cover-image" src="/common/image/temp_banner.jpg" alt="图片">
                        <p class="banner-title">这是一个标题3</p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination swiper-pagination-bullets">
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
                <span class="swiper-pagination-bullet"></span>
            </div>

            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>

    <div class="article-list">

        <div class="article-item">
            <div class="article-box">
                <div class="title">
                    杨紫琼获奥斯卡影后，跨过中年危机的人生能有多爽？
                </div>

                <div class="afterTitle">
                    <div class="mobile-info">
                        <div class="info-title">
                            <span>跨不过其实也没事……</span>
                        </div>
                        <div class="info-author">
                            <span>
                                果壳
                            </span>
                        </div>
                    </div>

                    <div class="ePAvmx">
                        <div class=" jjAsJJ">
                            <img alt="pic" src="https://1-im-dev.guokr.com/8Tkivj1itOJ0K0cjbKqwFlBKxR0RPQKqbaqotbO2peOXBAAA9AEAAEpQ.jpg?imageView2/1/w/288/h/192">
                            <span class="dJIGNF"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





























    <script>
        var swiper = new Swiper('.swiper-container-initialized', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        $(function (){
            $(".nav-item").click(function (){
                //选中状态
                $('.nav-item').removeClass('active');
                $(this).addClass('active');

                //ajax请求更新
                category_id = ($(this).attr('data-category-id'));

                //如果是点击最新，则直接刷新页面
                if(category_id == 1)
                {
                    window.location = "/";
                }

            })
        })
    </script>

@endsection
