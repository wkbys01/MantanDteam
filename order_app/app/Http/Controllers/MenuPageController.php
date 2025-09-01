<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class MenuPageController extends Controller
{
    //
    public function index($subCategoryId){
        $subCategory = SubCategory::with('menus')
            ->findOrFail($subCategoryId);
        
        $menus = Menu::where('sub_category_id', $subCategoryId)
            ->paginate(8);

        return view('menus.menu', compact('subCategory', 'menus'));
    }
}