<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    //
    protected $fillable = [
        'translations',
    ];
    
    protected $casts = [
        'translations' => 'array',
    ];

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
