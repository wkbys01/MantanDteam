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
    ];

    protected $casts = [
        'translations' => 'array',
    ];

    public function sabCategory(){
        return $this->belongsTo(SubCategory::class);
    }
}
