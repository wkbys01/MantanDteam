<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'translations',
    ];
    
    protected $casts = [
        'translations' => 'array',
    ];

    public function subCategories(){
        return $this->hasMany(SubCategory::class);
    }
}
