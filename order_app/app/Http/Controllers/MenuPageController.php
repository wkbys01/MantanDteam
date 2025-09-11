<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Menu;

use Illuminate\Http\Request;

class MenuPageController extends Controller
{
    public function index($mainCategoryId) {
        $allMainCategories = MainCategory::all();
        $mainCategory = MainCategory::with('subCategories.menus')->findOrFail($mainCategoryId);
        $subCategory = $mainCategory->subCategories->first();
        $menus = $subCategory ? $subCategory->menus()->paginate(8) : collect();

        return view('menus.menu', compact('allMainCategories', 'mainCategory', 'subCategory', 'menus'));
    }

    public function showSub($mainCategoryId, $subCategoryId) {
        $allMainCategories = MainCategory::all();
        $mainCategory = MainCategory::with('subCategories')->findOrFail($mainCategoryId);
        $subCategory = SubCategory::findOrFail($subCategoryId);
        $menus = $subCategory->menus()->paginate(8); 

        return view('menus.menu', compact('allMainCategories', 'mainCategory', 'subCategory', 'menus'));
    }

    // テスト用
    public function menu_test($mainCategoryId) {
        $allMainCategories = MainCategory::all();
        $mainCategory = MainCategory::with('subCategories.menus')->findOrFail($mainCategoryId);
        $subCategory = $mainCategory->subCategories->first();
        $menus = $subCategory ? $subCategory->menus()->paginate(8) : collect();

        return view('test.menu', compact('allMainCategories', 'mainCategory', 'subCategory', 'menus'));
    }

    public function showSub_test($mainCategoryId, $subCategoryId) {
        $allMainCategories = MainCategory::all();
        $mainCategory = MainCategory::with('subCategories')->findOrFail($mainCategoryId);
        $subCategory = SubCategory::findOrFail($subCategoryId);
        $menus = $subCategory->menus()->paginate(8);

        return view('test.menu', compact('allMainCategories', 'mainCategory', 'subCategory', 'menus'));
    }

}