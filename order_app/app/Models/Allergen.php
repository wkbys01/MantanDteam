<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    //
    protected $fillable = [
        'image_path',
        'translations',
    ];

    protected $casts = [
        'translations' => 'array',
    ];
}
