<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuAllergens extends Model
{
    //
    protected $fillable = [
        'menu_id',
        'allergen_id',
    ];
}
