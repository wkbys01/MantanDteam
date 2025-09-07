<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class TopPageController extends Controller
{

    public function index(){
        $main_categories = MainCategory::all();
        return view('menus.top', compact('main_categories'));
    }

    //テスト用
    public function test(){
        $main_categories = MainCategory::all();
        return view('test.index', compact('main_categories'));
    }   
    public function top(){
        $main_categories = MainCategory::all();
        return view('test.top', compact('main_categories'));
    }
    // ----------

}
