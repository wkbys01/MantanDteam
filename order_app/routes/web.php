<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopPageController;
use App\Http\Controllers\MenuPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top_page', [TopPageController::class, 'index'])->name("top_page");
Route::get('/menu_page', [MenuPageController::class, 'index'])->name("menu_page");

// 確認用（後で削除）
Route::get('/test', [TopPageController::class, 'test'])->name("test");
Route::get('/top_test', [TopPageController::class, 'top'])->name("top_test");
Route::get('/menu_test', [TopPageController::class, 'menu'])->name("menu_test");

Route::get('/layouts', function () {
    return view('layouts.side_bar');
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

Route::get('/pop_up', function () {
    return view('layouts.dialog');
});
