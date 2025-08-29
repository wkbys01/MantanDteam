<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Main_categories extends Model
{
    //
    protected $fillable = [
        'translations',
    ];
    
    protected $casts = [
        'translations' => 'array',
    ];

    public function sub_categories()
    {
        return $this->hasMany(Sub_categories::class, 'main_category_id');
    }
}
