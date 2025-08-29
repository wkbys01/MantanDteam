<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_options extends Model
{
    //
    protected $fillable = [
        'menu_id',
        'type',
        'price',
        'translations',
    ];
}
