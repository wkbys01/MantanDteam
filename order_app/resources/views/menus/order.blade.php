@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/decision.css') }}">
@endpush


@section('content')

<main>

    <h1 class="notice_txt">注文確定いたしました。</h1>
    <p class="guide_txt">しばらくお待ちください。</p>
    <div class="people_img">
    <img src="images/people/people01.png" alt="お辞儀する人">
    </div>
    <p class="annotation_txt">※この画面はタップ、<br>もしくは自動的に消去されます。</p>

</main>


@endsection
