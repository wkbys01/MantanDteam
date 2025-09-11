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
    <link rel="stylesheet" href="{{ asset('css/decision.css') }}">
</head>
<body>

    <div class="checkout_container wrapper">
        <div class="decision_container">
            <h1 class="notice_txt">ご利用ありがとうございました。</h1>
            <p class="guide_txt">レシートを持ってレジまでお越しください。</p>
            <div class="people_img checkout_img">
            <img src="images/people/people02.png" alt="案内する人">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/side_bar.js') }}"></script>
    <script src="{{ asset('js/decision.js') }}"></script>
</body>
</html>
