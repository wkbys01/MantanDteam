<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    //
    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity',
        'options',
    ];
}
