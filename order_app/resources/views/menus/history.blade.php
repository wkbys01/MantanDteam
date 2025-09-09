<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文履歴</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/history_page.css') }}">
</head>
<body>
        <div class="wapper">
            <div class="main-content">
                <div class="header_div">
                    <h1>注文履歴</h1>
                    <a href="{{ url()->previous() }}" class="header_button">メニューに戻る</a>
                </div>
                <main>
                    <table>
                        <thead>
                            <tr>
                                <th>商品名</th>
                                <th>単価</th>
                                <th>数量</th>
                                <th>ご提供</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="main_td">お子様うどん</td>
                                <td>600円</td>
                                <td>2</td>
                                <td>○</td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:冷たい</td>
                                <td>0円</td>
                                <td>2</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:ドリンクバー</td>
                                <td>100円</td>
                                <td>1</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td">きつねうどん</td>
                                <td>700円</td>
                                <td>1</td>
                                <td>×</td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:温かい</td>
                                <td>0円</td>
                                <td>1</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td">お子様うどん</td>
                                <td>600円</td>
                                <td>2</td>
                                <td>○</td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:冷たい</td>
                                <td>0円</td>
                                <td>2</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:ドリンクバー</td>
                                <td>100円</td>
                                <td>1</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td">きつねうどん</td>
                                <td>700円</td>
                                <td>1</td>
                                <td>×</td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:温かい</td>
                                <td>0円</td>
                                <td>1</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td">お子様うどん</td>
                                <td>600円</td>
                                <td>2</td>
                                <td>○</td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:冷たい</td>
                                <td>0円</td>
                                <td>2</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:ドリンクバー</td>
                                <td>100円</td>
                                <td>1</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="main_td">きつねうどん</td>
                                <td>700円</td>
                                <td>1</td>
                                <td>×</td>
                            </tr>
                            <tr>
                                <td class="main_td_sab">:温かい</td>
                                <td>0円</td>
                                <td>1</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </main>
                <div class="footer_div">
                    <h2>合計金額</h2>
                    <p class="footer_p">:</p>
                    <p>6000円</p>
                </div>
            </div>
            <div>
                @include('layouts.side_bar_sab')
            </div>
        </div>
</body>
</html>
