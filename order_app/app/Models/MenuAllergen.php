<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuAllergen extends Model
{
    //
    protected $fillable = [
        'menu_id',
        'allergen_id',
    ];
}
