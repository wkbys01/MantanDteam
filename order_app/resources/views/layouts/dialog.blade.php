@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dialog.css') }}">
@endpush


@section('content')

<div class="dialog_container" id="dialog">
    <div class="dialog_contents">
        <h2 class="dialog_txt" id="dialogTxt"></h2>
        <p class="notice_txt" id="noticeTxt"></p>
        <div class="dialog_btn_box">
            <button type="submit" id="yesBtn">はい</button>
            <button type="submit" id="cancelBtn">キャンセル</button>
        </div>
    </div>
</div>

@endsection
