<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;



class MenusSeeder extends Seeder
{
   public function run(): void
   {
      Menu::create([
         'sub_category_id' => 1,
         'price' => 0,
         'translations' => ([
            'ja' => "とろけるチーズのデミグラスハンバーグ定食",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "菜の花とホタテのあんかけパスタ",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "夏のさっぱり冷製パスタ",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "季節の野菜パスタ",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "桜エビと菜の花の和風パスタ",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "冷製トマトとバジルのカッペリーニ",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "季節のスペシャルパフェ",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "季節のフルーツタルト",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "いちごフェア（いちごパフェ／いちごショートケーキ／いちごミルク）",
         ]),
         'image_path' => null,
      ]);

      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "桜アイスと白玉の和風デザート",
         ]),
         'image_path' => null,
      ]);
   }
}
