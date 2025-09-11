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
                <h2 class="popup_title" id="modalName">メニュー名</h2>
                <button class="x_btn" id="menuXBtn">×</button>
            </div>

            <div class="center_container">
                <div class="photo_container">
                    {{-- 仮置き --}}
                    <img src="" alt="メニューの写真" class="menu_photo" id="modalImage">
                    <ul class="allergy_contents"><!-- jsで差し替え --></ul>
                    
                </div>

                <div class="option_container">
                    <ul class="option_contens">
                        <li class="option_content" data-option-type="single">
                            <h3 class="menu_option_name">グラム変更</h3>
                            <div class="option_btn_box">
                                <button class="option_btn">小<span class="option_price">+¥¥¥円</span></button>
                                <button class="option_btn">大<span class="option_price">+¥¥¥円</span></button>
                            </div>
                        </li>
                        <li class="option_content" data-option-type="single">
                            <h3 class="menu_option_name">ドリンクバー</h3>
                            <div class="option_btn_box">
                                <button class="option_btn">あり<span class="option_price">+¥¥¥円</span></button>
                            </div>
                        </li>
                        <li class="option_content" data-option-type="single">
                            <h3 class="menu_option_name">サラダ追加</h3>
                            <div class="option_btn_box">
                                <button class="option_btn">ミニ<span class="option_price">+¥¥¥円</span></button>
                                <button class="option_btn">普通<span class="option_price">+¥¥¥円</span></button>
                            </div>
                        </li>
                        <li class="option_content" data-option-type="multiple">
                            <h3 class="menu_option_name">トッピング</h3>
                            <div class="option_btn_box">
                                <button class="option_btn">チーズ<span class="option_price">+¥¥¥円</span></button>
                                <button class="option_btn">ねぎ<span class="option_price">+¥¥¥円</span></button>
                                <button class="option_btn">卵<span class="option_price">+¥¥¥円</span></button>
                                <button class="option_btn">ポテト<span class="option_price">+¥¥¥円</span></button>
                            </div>
                        </li>
                        <li class="option_content" data-option-type="single">
                            <h3 class="menu_option_name">ソース</h3>
                            <div class="option_btn_box">
                                <button class="option_btn">デミグラス<span class="option_price">+¥¥¥円</span></button>
                                <button class="option_btn">トマト<span class="option_price">+¥¥¥円</span></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer_container">
                <div class="total_price_box">
                    <p>合計金額：</p>
                    <p class="total_price" id="modalPrice">？？？？</p>
                </div>
                <div class="btn_container">
                    <div class="quantity_adjust_box menu_adjust_box">
                        <button class="minus_btn" id="minusBtn"></button>
                        <p class="quantity" id="modalQuantity">1</p>
                        <button class="plus_btn" id="plusBtn"></button>
                    </div>
                    <button class="add_btn" id="addBtn">追加</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
