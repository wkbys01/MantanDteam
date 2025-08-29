<?php

namespace App\Http\Controllers;

use App\Models\Main_categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $main_categories = Main_categories::all();
        return view('test.index', compact('main_categories'));
    }

    public function top_page(){
        $main_categories = Main_categories::all();
        return view('menus.top', compact('main_categories'));
    }
}
