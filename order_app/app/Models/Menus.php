<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    //
    protected $fillable = [
        'sub_category_id',
        'price',
        'translations',
    ];
}
