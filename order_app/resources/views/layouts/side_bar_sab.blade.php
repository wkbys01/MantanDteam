<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マンタン</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=M+PLUS+Rounded+1c&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Zen+Maru+Gothic:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/side_bar.css') }}">
</head>
<body>

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
                <button class="icon_flex_btn" id="listBtn"></button>
                <button class="icon_flex_btn" id="orderBtn"></button>
                <a href="#" class="icon_flex_btn" id="historyBtn"></a>
                <div class="call_btn popup_btn h_50 round">
                    <button class="icon_flex_btn" id="callBtn">
                        <img src="{{ asset('images/icon/icon_bell01.svg') }}" alt="ベル" class="icon_img">
                        <p>呼び出し</p>
                    </button>
                </div>
                <div class="checkout_btn popup_btn h_65 round">
                    <a href="{{ route('checkout.complete') }}" class="icon_flex_btn" id="checkoutBtn">
                        <img src="{{ asset('images/icon/icon_checkout01.svg') }}" alt="お金" class="icon_img">
                        <p>お会計</p>
                    </a>
                </div>
            </div>
        </div>

    </header>


    @include('layouts.dialog')
    <script src="{{ asset('js/side_bar.js') }}"></script>
</body>
</html>
