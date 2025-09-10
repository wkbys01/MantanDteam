<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    //
    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity',
        'options',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function menu(){
        return $this->belongsTo(\App\Models\Menu::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
