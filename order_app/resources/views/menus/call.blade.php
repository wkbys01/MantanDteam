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

    <div class="call_container wrapper">
        <div class="decision_container">
            <h1 class="notice_txt">呼び出し中・・・</h1>
            <p class="guide_txt">まもなく従業員が参ります。<br>しばらくお待ちください。</p>
            <div class="people_img">
            <img src="images/people/people01.png" alt="お辞儀する人">
            </div>
            <p class="annotation_txt">※この画面はタップ、<br>もしくは自動的に消去されます。</p>
        </div>
    </div>

    <script src="{{ asset('js/side_bar.js') }}"></script>
    <script src="{{ asset('js/decision.js') }}"></script>
</body>
</html>
