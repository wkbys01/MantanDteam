@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/side_bar.css') }}">
@endpush


@section('content')

<header class="side_bar_container">

    <div class="language_container">
        <div class="language_box">
            <button class="japan_box icon_flex_btn" id="jaBtn">
                <img src="{{ asset('images/icon/flag_japan.svg') }}" alt="日本国旗">
                <p class="ja_txt langage_txt" id="jaTxt">日本語</p>
            </button>
            <button class="china_box icon_flex_btn" id="cnBtn">
                <img src="{{ asset('images/icon/flag_china.svg') }}" alt="中国国旗">
                <p class="cn_txt langage_txt" id="cnTxt">中文</p>
            </button>
            <button class="japan_box icon_flex_btn" id="enBtn">
                <img src="{{ asset('images/icon/flag.svg') }}" alt="英語圏国旗">
                <p class="en_txt langage_txt" id="enTxt">English</p>
            </button>
        </div>
    </div>


    <div class="btn_list_container">
        <div class="btn_list">
            <div class="list_btn popup_btn h_50 round">
                <button class="icon_flex_btn" id="listBtn">
                    <img src="{{ asset('images/icon/icon_cart01.svg') }}" alt="ショッピングカート" class="icon_img">
                    <p>注文リスト</p>
                </button>
            </div>
            <div class="order_list_box round">
                <ul class="order_list">
                    <!-- テスト用 -->
                    <div class="order_separator">
                        <li class="order_menu_txt">満腹まんたんセット</li>
                        <li class="order_option_txt">トッピング</li>
                        <li class="order_option_txt">ドリンクバー</li>
                    </div>
                    <div class="order_separator">
                        <li class="order_menu_txt">たっぷりチーズのドリア</li>
                    </div>
                    <div class="order_separator">
                        <li class="order_menu_txt">ふわとろオムライス</li>
                        <li class="order_option_txt">デミグラス</li>
                    </div>
                    <div class="order_separator">
                        <li class="order_menu_txt">まんたんハンバーグ定食</li>
                    </div>
                </ul>
            </div>
            <div class="order_btn popup_btn h_65 round">
                <button class="icon_flex_btn" id="orderBtn">
                    <img src="{{ asset('images/icon/icon_cart01.svg') }}" alt="ショッピングカート" class="icon_img">
                    <p>注文確定</p>
                </button>
            </div>
            <div class="history_btn page_btn h_50 round">
                <a href="/history_page" class="icon_flex_btn" id="historyBtn">
                    <img src="{{ asset('images/icon/icon_history.svg') }}" alt="履歴" class="icon_img">
                    注文履歴
                </a>
            </div>
            <div class="call_btn popup_btn h_50 round">
                <button class="icon_flex_btn" id="callBtn">
                    <img src="{{ asset('images/icon/icon_bell01.svg') }}" alt="ベル" class="icon_img">
                    <p>呼び出し</p>
                </button>
            </div>
            <div class="checkout_btn popup_btn h_65 round">
                <button class="icon_flex_btn" id="checkoutBtn">
                    <img src="{{ asset('images/icon/icon_checkout01.svg') }}" alt="お金" class="icon_img">
                    <p>お会計</p>
                </button>
            </div>
        </div>
    </div>

</header>


@include('layouts.dialog')
@include('layouts.list_details')
<script src="{{ asset('js/side_bar.js') }}"></script>


@endsection
