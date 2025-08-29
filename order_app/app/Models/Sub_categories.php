<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_categories extends Model
{
    //
    protected $fillable = [
        'main_category_id',
        'translations',
    ];
}
