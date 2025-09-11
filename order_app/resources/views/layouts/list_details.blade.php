@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/list_details.css') }}">
@endpush


@section('content')

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
                    <tr class="main_item">
                        <td>とろけるチーズのデミグラスハンバーグ定食</td>
                        <td class="price">900</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="option_item">
                        <td class="option_name">ライス大</td>
                        <td class="price">50</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="option_item">
                        <td class="option_name">ドリンクバー</td>
                        <td class="price">100</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="main_item">
                        <td>菜の花とホタテのあんかけパスタ</td>
                        <td class="price">900</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="option_item">
                        <td class="option_name">ドリンクバー</td>
                        <td class="price">100</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="main_item">
                        <td>夏野菜カレー（ズッキーニ・パプリカ・なす入り）</td>
                        <td class="price">800</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="option_item">
                        <td class="option_name">ライス大</td>
                        <td class="price">50</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="option_item">
                        <td class="option_name">ドリンクバー</td>
                        <td class="price">100</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="main_item">
                        <td>季節のスペシャルパフェ</td>
                        <td class="price">500</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="main_item">
                        <td>レモンスカッシュ</td>
                        <td class="price">300</td>
                        <td>
                            <div class="quantity_adjust_box">
                                <button class="minus_btn"></button>
                                <p class="quantity">1</p>
                                <button class="plus_btn"></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="footer_container">
            <div class="total_price_box">
                <p>合計金額：</p>
                <p class="total_price">？？？？</p>
            </div>
            <button class="confirm_btn" id="confirmBtn">注文確定</button>
        </div>
    </div>
</div>
@endsection
