@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/decision.css') }}">
@endpush


@section('content')

<main>

    <h1 class="notice_txt">ご利用ありがとうございました。</h1>
    <p class="guide_txt">レシートを持ってレジまでお越しください。</p>
    <div class="people_img checkout_img">
        <img src="images/people/people02.png" alt="案内する人">
    </div>

</main>


@endsection
