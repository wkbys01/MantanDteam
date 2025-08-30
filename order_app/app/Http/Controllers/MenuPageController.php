<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class MenuPageController extends Controller
{
    //
    public function index(MainCategory $main_category){
        $main_category->load('sub_categories.menus');

        return view('menus.menu', compact('main_category'));
    }
}
