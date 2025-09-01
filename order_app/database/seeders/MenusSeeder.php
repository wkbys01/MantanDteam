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

        ['sub_category_id'=>2,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"夏のさっぱり冷製パスタ",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>2,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"季節の野菜パスタ",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>2,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"桜エビと菜の花の和風パスタ",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>2,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"冷製トマトとバジルのカッペリーニ",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>3,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"季節のスペシャルパフェ",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>3,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"季節のフルーツタルト",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>3,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"いちごフェア（いちごパフェ／いちごショートケーキ／いちごミルク）",
         ]),
         'image_path'=>null,
        ],

        ['sub_category_id'=>3,
         'price'=> 0,
         'translations'=>json_encode([
            'ja'=>"桜アイスと白玉の和風デザート",
         ]),
         'image_path'=>null,
        ],
    ]);
    }
}
