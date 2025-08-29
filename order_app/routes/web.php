<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [CategoryController::class, 'index'])->name("test");

// 確認用（後で削除）
Route::get('/layouts', function () {
    return view('layouts.side_bar');
});

Route::get('/top_page', [CategoryController::class, 'top_page'])->name("top_page");

Route::get('/menu_page', function () {
    return view('menus.menu');
});

Route::get('/order_page', function () {
    return view('menus.order');
});

Route::get('/call_page', function () {
    return view('menus.call');
});

Route::get('/checkout_page', function () {
    return view('menus.checkout');
});