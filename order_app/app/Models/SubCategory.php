<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $fillable = [
        'main_category_id',
        'translations',
    ];

    protected $casts = [
        'translations' => 'array',
    ];

    public function mainCategory(){
        return $this->hasMany(MainCategory::class);
    }

    public function menus(){
        return $this->hasMany(Menu::class);
    }
}
