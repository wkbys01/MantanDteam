<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
        'sub_category_id',
        'price',
        'translations',
        'image_path',
    ];

    protected $casts = [
        'translations' => 'array',
    ];

    public function subCategory() {
        return $this->belongsTo(SubCategory::class);
    }
}
