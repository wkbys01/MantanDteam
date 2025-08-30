<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuOptions extends Model
{
    //
    protected $fillable = [
        'menu_id',
        'type',
        'price',
        'translations',
    ];
}
