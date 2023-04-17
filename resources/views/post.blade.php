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

    <div>
        <form>
            <div>
                <label> {{ trans('views.please_text') }} </label>
                <textarea></textarea>
            </div>

        </form>

    </div>


    <div data-v-23e4f95a="" data-v-cfb99e7e="" class="nav-bar-v2-fixed" open-app-top-wx-param="[object Object]">
        <div data-v-23e4f95a="" class="nav-bar-v2 nav-bar-v2-bg-image" style="background-color: rgb(255, 255, 255);">
            <a href="#">
                <div data-v-23e4f95a="" class="nav-bar-bottom" data-track="{&quot;key&quot;:&quot;f_w_bottomGuide&quot;}">
                    {{ trans('views.publish') }}
                </div>
            </a>
        </div>
    </div>

@endsection
