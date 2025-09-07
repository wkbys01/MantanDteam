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
</head>
<body>

    @include('layouts.side_bar')

  <main>

    <div class="menu_page_container">

      <div class="top_bar_container flex_bar">
        <div class="top_btn link_btn flex_bar">
          <div class="top_icon"><img src="{{ asset('images/icon/home.svg') }}" alt="#"></div>
          <a href="{{ route('top_test') }}">Top</a>
        </div>

        <ul class="main_category_bar flex_bar">
          @foreach($allMainCategories as $mc)
            <li class="main_category {{ $mainCategory->id === $mc->id ? 'active' : '' }}">
              <a href="{{ route('menu_test', ['mainCategoryId' => $mc->id]) }}">
                <button class="main_category_btn {{ is_array($mc->translations['ja']) ? 'two_categories_btn' : 'one_category_btn' }} {{ $mainCategory->id === $mc->id ? 'active' : '' }}">
                  @if(is_array($mc->translations['ja']))
                    <div class="main_category_txt first_txt">{{ $mc->translations['ja'][0] }}</div>
                    <div class="main_category_txt second_txt">{{ $mc->translations['ja'][1] }}</div>
                  @else
                    <div class="main_category_txt">{{ $mc->translations['ja'] }}</div>
                  @endif
                </button>
              </a>
            </li>
          @endforeach
        </ul>

      </div>

      <div class="main_container">
        <ul class="sub_category_bar flex_bar">
          @foreach($mainCategory->subCategories as $sc)
            <li class="sub_category {{ $subCategory->id === $sc->id ? 'active' : '' }}">
              <a href="{{ route('menu_test.sub', ['mainCategoryId' => $mainCategory->id, 'subCategoryId' => $sc->id]) }}">
                <button class="sub_category_btn">
                  {{ $sc->translations['ja'] ?? '未設定' }}
                </button>
              </a>
            </li>
          @endforeach
        </ul>

        <div class="menu_container">
          <ul class="menu_list">
            @foreach($menus as $menu)
            <li class="menu_content">
              <button class="menu_content_btn">
                <img src="{{ asset('images/menu_page/demi_hamburg.jpg') }}" alt="">
                <div class="menu_txt">
                  <div class="menu_name">{{ $menu->translations['ja'] ?? '商品名' }}</div>
                  <div class="price_txt">{{ $menu->price }}円 (税込)</div>
                </div>
              </button>
            </li>
            @endforeach
            
          </ul>
        </div>
      </div>
      
      <div class="movement_btn_container">
          {{-- ← 前へ --}}
          @if ($menus->onFirstPage())
              <span class="left_btn movement_btn disabled"></span>
          @else
              <a href="{{ $menus->previousPageUrl() }}" class="left_btn movement_btn"></a>
          @endif

          {{-- ページ数 --}}
          <div class="page_count">
              <div class="numerator">{{ $menus->currentPage() }}</div>
              <div class="count_line">/</div>
              <div class="denominator">{{ $menus->lastPage() }}</div>
          </div>

          {{-- → 次へ --}}
          @if ($menus->hasMorePages())
              <a href="{{ $menus->nextPageUrl() }}" class="right_btn movement_btn"></a>
          @else
              <span class="right_btn movement_btn disabled"></span>
          @endif
      </div>
    </div>

  </main>

</body>
</html>