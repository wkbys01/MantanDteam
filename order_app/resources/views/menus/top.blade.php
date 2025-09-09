@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/top_page.css') }}">
@endpush


@section('content')

@include('layouts.side_bar')

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
                <a href="{{ route('menu_page', $category->id) }}">
                    <div class="btn_txt">
                    <div class="spacer">{{ $texts[0] }}</div>
                    <div>{{ $texts[1] }}</div>
                    </div>
                </a>
            </div>
        @elseif($index === 1)
            <div class="grand_btn link_btn">
            <a href="{{ route('menu_page', $category->id) }}">
                <p class="btn_txt">{{ $texts }}</p>
            </a>
            </div>
        @elseif($index === 2)
            <div class="set_meal_btn link_btn">
            <a href="{{ route('menu_page', $category->id) }}">
                <p class="btn_txt">{{ $texts }}</p>
            </a>
            </div>
        @elseif($index === 3)
            <div class="set_btn link_btn">
            <a href="{{ route('menu_page', $category->id) }}">
                <p class="btn_txt">{{ $texts }}</p>
            </a>
            </div>
        @elseif($index === 4)
            <div class="child_single_btn link_btn">
                <a href="{{ route('menu_page', $category->id) }}">
                    <div class="btn_txt">
                        <div>{{ $texts[0] }}</div>
                        <img src="images/top_page/top_line_stroke.png" alt="#">
                        <div>{{ $texts[1] }}</div>
                    </div>
                </a>
            </div>
        @elseif($index === 5)
            <div class="take_out_btn link_btn">
                <a href="{{ route('menu_page', $category->id) }}">
                <div class="btn_txt">
                    <div class="spacer">{{ mb_substr($texts, 0, app()->getLocale() === 'ja' ? 3 : 4) }}</div>
                    <div>{{ mb_substr($texts, app()->getLocale() === 'ja' ? 3 : 4) }}</div>
                </div>
                </a>
            </div>
        @elseif($index === 6)
            <div class="drink_dessert_btn link_btn">
                <a href="{{ route('menu_page', $category->id) }}">
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


@endsection
