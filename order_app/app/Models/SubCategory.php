<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'main_category_id',
        'translations',
    ];

    protected $casts = [
        'translations' => 'array',
    ];

    public function mainCategory(){
        return $this->belongsTo(MainCategory::class , 'main_category_id');
    }

    public function menus(){
        return $this->hasMany(Menu::class , 'sub_category_id');
    }
}
