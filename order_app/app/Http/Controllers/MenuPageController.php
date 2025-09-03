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

    // public function index(MainCategory $mainCategory)
    // {
    //     $mainCategory->load('sub_categories');
    //     return view('menus.menu', [
    //         'mainCategory' => $mainCategory,
    //         'subCategories' => $mainCategory->sub_categories,
    //         'menus' => collect(), // 空にしておく
    //         'selectedSubCategory' => null,
    //     ]);
    // }

    // // サブカテゴリを選んだとき（メニュー表示）
    // public function show(MainCategory $mainCategory, SubCategory $subCategory)
    // {
    //     $subCategory->load('menus');
    //     $menus = $subCategory->menus()->paginate(8);

    //     return view('menus.menu', [
    //         'mainCategory' => $mainCategory,
    //         'subCategories' => $mainCategory->sub_categories,
    //         'menus' => $menus,
    //         'selectedSubCategory' => $subCategory,
    //     ]);
    // }
}