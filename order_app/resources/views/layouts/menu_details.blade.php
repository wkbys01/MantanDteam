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
    <link rel="stylesheet" href="{{ asset('css/menu_details.css') }}">
</head>
<body>

    <div class="popup_container" id="menuDetails">
        <div class="popup_contents">

            <div class="header_container">
                <h2 class="popup_title">メニュー名</h2>
                <button class="x_btn" id="xBtn">×</button>
            </div>

            <div class="main_container">
                <div class="photo_container">
                    {{-- 仮置き --}}
                    <img src="images/top_page/top_recommend_limited.jpg" alt="メニューの写真">
                    <ul class="allergy_contents">
                        <li>
                            <img src="{{ asset('images/icon/allergy_crab')}}" alt="かに">
                        </li>
                        <li>
                            <img src="images/icon/allergy_egg" alt="卵">
                        </li>
                        <li>
                            <img src="images/icon/allergy_milk" alt="乳">
                        </li>
                        <li>
                            <img src="images/icon/allergy_shrimp" alt="えび">
                        </li>
                        <li>
                            <img src="images/icon/allergy_soba" alt="そば">
                        </li>
                        <li>
                            <img src="images/icon/allergy_wheat" alt="小麦">
                        </li>
                    </ul>
                </div>

                <div class="option_container">
                    <ul class="option_contens">
                        <li class="option_content">
                            <h3 class="option_name">グラム変更</h3>
                            <div class="option_btn_box">
                                <button>小<span class="option_price">+xxx円</span></button>
                                <button>小<span class="option_price">+xxx円</span></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer_container">
                <div class="total_price_box">
                    <p>合計金額：</p>
                    <p class="total_price">？？？？</p>
                </div>
                <div class="btn_container">
                    <div class="quantity_adjust_box">
                        <button class="minus_btn"></button>
                        <p class="quantity">1</p>
                        <button class="plus_btn"></button>
                    </div>
                    <button class="add_btn" id="addBtn">追加</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
