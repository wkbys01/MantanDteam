@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/start_page.css') }}">
@endpush


@section('content')

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


@endsection
