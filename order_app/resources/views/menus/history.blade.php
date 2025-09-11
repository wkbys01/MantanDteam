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
                        @foreach($orders as $order)
                            @foreach($order->items as $item)
                                <tr>
                                    <td class="main_td">{{ $item->menu->translations['ja'] ?? '商品名不明' }}</td>
                                    <td>{{ $item->menu->price }}円</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>○</td>
                                </tr>
                                @if($item->menu->options)
                                    @foreach($item->menu->options as $option)
                                        @if(in_array($option->id, $item->options ?? []))
                                            <tr>
                                                <td class="main_td_sab">:{{ $option->translations['ja'] ?? 'オプション名不明' }}</td>
                                                <td>{{ $option->price }}円</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </main>
                <div class="footer_div">
                    <h2>合計金額</h2>
                    <p class="footer_p">:</p>
                    <p>{{ $totalPrice }}円</p>
                </div>
            </div>
            <div>
                @include('layouts.side_bar_sab')
            </div>
        </div>
</body>
</html>
