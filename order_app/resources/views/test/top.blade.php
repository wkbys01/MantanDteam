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
</head>
<body>
    @include('layouts.side_bar')
    {{-- @include('layouts.dialog') --}}

  <main>
    <!-- 区切り線は擬似要素に変更する予定 -->
    <div class="top_page_container">
      @foreach($main_categories as $index => $category)
          @php
            $locale = app()->getLocale(); // 現在の言語
            $texts = $category->translations[$locale] ?? $category->translations['ja']; 
          @endphp

            @if($index === 0)
                <div class="recommend_btn link_btn">
                    <a href="{{ route('menu_test', $category->id) }}">
                        <div class="btn_txt">
                          <div class="spacer">{{ $texts[0] }}</div>
                          <div>{{ $texts[1] }}</div>
                        </div>
                    </a>
                </div>
            @elseif($index === 1)
                <div class="grand_btn link_btn">
                  <a href="{{ route('menu_test', $category->id) }}">
                    <p class="btn_txt">{{ $texts }}</p>
                  </a>
                </div>
            @elseif($index === 2)
                <div class="set_meal_btn link_btn">
                  <a href="{{ route('menu_test', $category->id) }}">
                    <p class="btn_txt">{{ $texts }}</p>
                  </a>
                </div>
            @elseif($index === 3)
                <div class="set_btn link_btn">
                  <a href="{{ route('menu_test', $category->id) }}">
                    <p class="btn_txt">{{ $texts }}</p>
                  </a>
                </div>
            @elseif($index === 4)
                <div class="child_single_btn link_btn">
                    <a href="{{ route('menu_test', $category->id) }}">
                        <div class="btn_txt">
                            <div>{{ $texts[0] }}</div>
                            <img src="images/top_page/top_line_stroke.png" alt="#">
                            <div>{{ $texts[1] }}</div>
                        </div>
                    </a>
                </div>
            @elseif($index === 5)
                <div class="take_out_btn link_btn">
                    <a href="{{ route('menu_test', $category->id) }}">
                        <div class="btn_txt">
                            <div class="spacer">{{ $texts[0] }}</div>
                            <div>{{ $texts[1] }}</div>
                        </div>
                    </a>
                </div>
            @elseif($index === 6)
                <div class="drink_dessert_btn link_btn">
                    <a href="{{ route('menu_test', $category->id) }}">
                        <div class="btn_txt">
                            <div>{{ $texts[0] }}</div>
                            <img src="images/top_page/top_line_stroke.png" alt="#">
                            <div>{{ $texts[1] }}</div>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
  </main>
</body>
</html>
