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
  <link rel="stylesheet" href="{{ asset('css/menu_page.css') }}">
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

    <div class="menu_page_container">

      <div class="top_bar_container flex_bar">
        <div class="top_btn link_btn flex_bar">
          <div class="top_icon"><img src="images/icon/home.svg" alt="#"></div>
          <a href="top_page.html">Top</a>
        </div>

        <ul class="main_category_bar flex_bar">
          <li class="main_category" id="pressed_main_category">
            <button class="main_category_btn two_categories_btn">
              <div class="main_category_txt first_txt">オススメ</div>
              <!-- <img src="images/menu_page/line_bk.png" alt=""> -->
              <div class="main_category_txt second_txt">期間限定</div>
            </button>
          </li>
          <li class="main_category">
            <button class="main_category_btn one_category_btn">
              <div class="main_category_txt">グランド</div>
            </button>
          </li>
          <li class="main_category">
            <button class="main_category_btn one_category_btn">
              <div class="main_category_txt">定食</div>
            </button>
          </li>
          <li class="main_category">
            <button class="main_category_btn one_category_btn">
              <div class="main_category_txt">セット</div>
            </button>
          </li>
          <li class="main_category">
            <button class="main_category_btn two_categories_btn">
              <div class="main_category_txt first_txt">お子さま</div>
              <!-- <img src="images/menu_page/line_bk.png" alt=""> -->
              <div class="main_category_txt second_txt">単品</div>
            </button>
          </li>
          <li class="main_category">
            <button class="main_category_btn one_category_btn">
              <div class="main_category_txt">お持ち帰り</div>
            </button>
          </li>
          <li class="main_category">
            <button class="main_category_btn two_categories_btn">
              <div class="main_category_txt first_txt">ドリンク</div>
              <!-- <img src="images/menu_page/line_bk.png" alt=""> -->
              <div class="main_category_txt second_txt">デザート</div>
            </button>
          </li>
        </ul>
      </div>

      <div class="main_container">
        <ul class="sub_category_bar flex_bar">
          <!-- php、jsで対応した個数出力 -->
          <li class="sub_category" id="pressed_sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
          <li class="sub_category">
            <button class="sub_category_btn">サブカテゴリ</button>
          </li>
        </ul>

        <div class="menu_container">
          <ul class="menu_list">
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名1</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名2</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名3</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名4</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名5</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名6</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名7</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名8</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <!-- <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名9</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li>
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="images/menu_page/demi_hamburg.jpg" alt="">
                <div class="menu_txt">
                  <div class="menu_name">商品名10</div>
                  <div class="price_txt">XXX円 (税込)</div>
                </div>
              </button>
            </li> -->
          </ul>
        </div>
      </div>

      <div class="movement_btn_container">
        <button class="left_btn movement_btn"></button>
        <div class="page_count">
          <div class="numerator">1</div>
          <div class="count_line">/</div>
          <div class="denominator">3</div>
        </div>
        <button class="right_btn movement_btn"></button>
      </div>

    </div>

  </main>

</body>
</html>
