<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('menus')->insert([
        ['sub_category_id'=>1,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"とろけるチーズのデミグラスハンバーグ定食",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>2,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"菜の花とホタテのあんかけパスタ",
         ]),
         'image_path'=>null,
        ],
    ]);
    }
}
