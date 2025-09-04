<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Menu;

use Illuminate\Http\Request;

class MenuPageController extends Controller
{
    public function index(){
        // $subCategory = SubCategory::with('menus')
        //     ->findOrFail($subCategoryId);

        $menus = Menu::paginate(8);

        return view('menus.menu', compact('menus'));
    }

    public function menu_test(){
        // $subCategory = SubCategory::with('menus')
        //     ->findOrFail($subCategoryId);

        $menus = Menu::paginate(8);

        return view('test.menu', compact('menus'));
    }
}