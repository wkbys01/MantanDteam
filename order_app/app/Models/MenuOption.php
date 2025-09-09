<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuOption extends Model
{
    //
    protected $fillable = [
        'menu_id',
        'type',
        'price',
        'translations',
    ];
}
