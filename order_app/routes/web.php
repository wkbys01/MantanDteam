<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopPageController;
use App\Http\Controllers\MenuPageController;

Route::get('/', function () {
    return view('welcome');
});

// アプリケーション用
Route::get('/start_page', function () {
    return view('menus.start');
});
Route::get('/top_page', [TopPageController::class, 'index'])->name("top_page");
Route::get('/menu_page/{mainCategoryId}', [MenuPageController::class, 'index'])->name('menu_page');
Route::get('/menu_page/{mainCategoryId}/sub/{subCategoryId}', [MenuPageController::class, 'showSub'])->name('menu_page.sub');


// 確認用（後で削除）
Route::get('/test', [TopPageController::class, 'test'])->name("test");
Route::get('/top_test', [TopPageController::class, 'top'])->name("top_test");
Route::get('/menu_test/{mainCategoryId}', [MenuPageController::class, 'menu_test'])->name('menu_test');
Route::get('/menu_test/{mainCategoryId}/sub/{subCategoryId}', [MenuPageController::class, 'showSub_test'])->name('menu_test.sub');


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

Route::get('/history_page', function () {
    return view('menus.history');
});

Route::get('/pop_up', function () {
    return view('layouts.dialog');
});

Route::get('/list_details', function () {
    return view('layouts.list_details');
});
