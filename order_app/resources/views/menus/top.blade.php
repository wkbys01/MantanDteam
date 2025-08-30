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
  <link rel="stylesheet" href="{{ asset('css/top_page.css') }}">
  <link rel="stylesheet" href="{{ asset('css/side_bar.css') }}">
</head>
<body>

  <header>

    <div class="side_bar_container">
      <!-- jsで選択時のスタイルを実装予定 -->
      <div class="language_box">
        <button type="button" class="japan_box icon_flex_btn">
          <img src="images/icon/flag_japan.svg" alt="日本国旗">
          <p class="ja_txt langage_txt">日本語</p>
        </button>
        <button type="button" class="china_box icon_flex_btn">
          <img src="images/icon/flag_china.svg" alt="中国国旗">
          <p class="cn_txt langage_txt">中文</p>
        </button>
        <button type="button" class="japan_box icon_flex_btn">
          <img src="images/icon/flag_japan.svg" alt="英語圏国旗">
          <p class="en_txt langage_txt">English</p>
        </button>
      </div>

      <div class="list_btn popup_btn h_50 round">
        <button type="button" class="icon_flex_btn">
          <img src="images/icon/icon_cart01.svg" alt="ショッピングカート" class="icon_img">
          <p>注文リスト</p>
        </button>
      </div>

      <div class="order_list_box round">
        <ul class="order_list">

          <!-- テスト用 jsで置き換える予定 -->
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
        <button type="button" class="icon_flex_btn">
          <img src="images/icon/icon_cart01.svg" alt="ショッピングカート" class="icon_img">
          <p>注文確定</p>
        </button>
      </div>

      <div class="history_btn page_btn h_50 round">
        <a href="#" class="icon_flex_btn">
          <img src="images/icon/icon_history.svg" alt="履歴" class="icon_img">
          注文履歴
        </a>
      </div>

      <div class="call_btn popup_btn h_50 round">
        <button type="button" class="icon_flex_btn">
          <img src="images/icon/icon_bell01.svg" alt="ベル" class="icon_img">
          <p>呼び出し</p>
        </button>
      </div>

      <div class="checkout_btn popup_btn h_65 round">
        <button type="button" class="icon_flex_btn">
          <img src="images/icon/icon_checkout01.svg" alt="お金" class="icon_img">
          <p>お会計</p>
        </button>
      </div>
    </div>

  </header>

  <main>
    <!-- 区切り線は擬似要素に変更する予定 -->

    <div class="top_page_container">
      <div class="recommend_btn link_btn">
        <a href="menu_page.html">
          <div class="btn_txt">
            <div class="spacer">オススメ</div>
            <div>期間限定メニュー</div>
          </div>
        </a>
      </div>
      <div class="grand_btn link_btn">
        <a href="menu_page.html">
          <p class="btn_txt">グランドメニュー</p>
        </a>
      </div>


      <div class="set_meal_btn link_btn">
        <a href="menu_page.html">
          <p class="btn_txt">定食</p>
        </a>
      </div>
      <div class="set_btn link_btn">
        <a href="menu_page.html">
          <p class="btn_txt">セットメニュー</p>
        </a>
      </div>


      <div class="child_single_btn link_btn">
        <a href="menu_page.html">
          <div class="btn_txt">
            <div>お子さまメニュー</div>
            <!-- <img src="images/top_page/top_line.png" alt="#"> -->
            <img src="images/top_page/top_line_stroke.png" alt="#">
            <div>単品</div>
          </div>
        </a>
      </div>
      <div class="take_out_btn link_btn">
        <a href="menu_page.html">
          <div class="btn_txt">お持ち<span class="spacer"></span>帰り</div>
        </a>
      </div>
      <div class="drink_dessert_btn link_btn">
        <a href="menu_page.html">
          <div class="btn_txt">
            <div>ドリンク</div>
            <!-- <img src="images/top_page/top_line.png" alt="#"> -->
            <img src="images/top_page/top_line_stroke.png" alt="#">
            <div>デザート</div>
          </div>
        </a>
      </div>
    </div>
  </main>
</body>
</html>
