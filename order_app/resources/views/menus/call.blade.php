@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/decision.css') }}">
@endpush

@section('content')

<main>

    <h1 class="notice_txt">呼び出し中・・・</h1>
    <p class="guide_txt">まもなく従業員が参ります。<br>しばらくお待ちください。</p>
    <div class="people_img">
    <img src="images/people/people01.png" alt="お辞儀する人">
    </div>
    <p class="annotation_txt">※この画面はタップ、<br>もしくは自動的に消去されます。</p>

</main>

@endsection
