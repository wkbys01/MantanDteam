<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マンタン</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=M+PLUS+Rounded+1c&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Zen+Maru+Gothic:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/start_page.css') }}">
</head>
<body>
    @include('layouts.lang_bar')
    <main>
        <div class="bg_color ">
            <a href="{{ asset('top_page') }}" class="top_page_link_area"></a>

            <div class="log_box">
                <img src="{{ asset('images/logo/logo07.png') }}" alt="ロゴ">
            </div>
            
            <div class="text_area">
                <p>ご来店ありがとうございます。</p>
                <div class="start_text">
                    <p>-タップしてスタート-</p>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/start_page.js') }}"></script>
</body>
</html>