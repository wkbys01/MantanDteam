<!DOCTYPE html>
<html lang="ja">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マンタン</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=M+PLUS+Rounded+1c&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Zen+Maru+Gothic:wght@400;500;700&display=swap" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/list_details.css') }}">
</head>
<body>

    <div class="popup_container" id="listDetails">
        <div class="popup_contents">

            <div class="header_container">
                <h2 class="popup_title">注文リスト</h2>
                <button class="x_btn" id="listXBtn">×</button>
            </div>

            <div class="table_container">
                <table>
                    <thead>
                        <tr>
                            <th class="name_header">商品名</th>
                            <th class="price_header">単価</th>
                            <th class="quantity_header">数量</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ここにJSで<tr>を追加 -->
                    </tbody>
                </table>
            </div>

            <div class="footer_container">
                <div class="total_price_box">
                    <p>合計金額：</p>
                    <p class="total_price">0</p>
                </div>
                <button class="confirm_btn" id="confirmBtn">注文確定</button>
            </div>
        </div>
    </div>
</body>
</html>
