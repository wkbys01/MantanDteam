<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_allergens extends Model
{
    //
    protected $fillable = [
        'menu_id',
        'allergen_id',
    ];
}
