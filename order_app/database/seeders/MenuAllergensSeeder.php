<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuAllergensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('menu_allergens') -> insert([
            // とろけるチーズのデミグラスハンバーグ定食
            ['menu_id' => 1, 'allergen_id' => 1],
            ['menu_id' => 1, 'allergen_id' => 3],
            ['menu_id' => 1, 'allergen_id' => 4],
            
            // 菜の花とホタテのあんかけパスタ
            ['menu_id' => 2, 'allergen_id' => 1],
            
            // 夏のさっぱり冷製パスタ
            ['menu_id' => 3, 'allergen_id' => 1],
            ['menu_id' => 3, 'allergen_id' => 3],
            
            // 季節の野菜パスタ
            ['menu_id' => 4, 'allergen_id' => 1],
            ['menu_id' => 4, 'allergen_id' => 3],
            
            // 桜エビと菜の花の和風パスタ
            ['menu_id' => 5, 'allergen_id' => 1],
            ['menu_id' => 5, 'allergen_id' => 6],
            
            // 冷製トマトとバジルのカッペリーニ
            ['menu_id' => 6, 'allergen_id' => 1],
            ['menu_id' => 6, 'allergen_id' => 3],
            
            // 季節のスペシャルパフェ
            ['menu_id' => 7, 'allergen_id' => 1],
            ['menu_id' => 7, 'allergen_id' => 3],
            ['menu_id' => 7, 'allergen_id' => 4],

            // 季節のフルーツタルト
            ['menu_id' => 8, 'allergen_id' => 1],
            ['menu_id' => 8, 'allergen_id' => 3],
            ['menu_id' => 8, 'allergen_id' => 4],

            // いちごフェア（いちごパフェ）
            ['menu_id' => 9, 'allergen_id' => 1],
            ['menu_id' => 9, 'allergen_id' => 3],
            ['menu_id' => 9, 'allergen_id' => 4],

            // いちごフェア（いちごショートケーキ）
            ['menu_id' => 10, 'allergen_id' => 1],
            ['menu_id' => 10, 'allergen_id' => 3],
            ['menu_id' => 10, 'allergen_id' => 4],

            // いちごフェア（いちごミルク）
            ['menu_id' => 11, 'allergen_id' => 3],

            // 桜アイスと白玉の和風デザート
            ['menu_id' => 12, 'allergen_id' => 3],
            ['menu_id' => 12, 'allergen_id' => 4],

            // 栗のモンブラン
            ['menu_id' => 13, 'allergen_id' => 1],
            ['menu_id' => 13, 'allergen_id' => 3],
            ['menu_id' => 13, 'allergen_id' => 4],

            // かぼちゃプリン
            ['menu_id' => 14, 'allergen_id' => 3],
            ['menu_id' => 14, 'allergen_id' => 4],

            // サツマイモとりんごのパフェ
            ['menu_id' => 15, 'allergen_id' => 1],
            ['menu_id' => 15, 'allergen_id' => 3],
            ['menu_id' => 15, 'allergen_id' => 4],

            // レモンスカッシュ
            // アレルギーなし

            // マンゴースムージー
            ['menu_id' => 17, 'allergen_id' => 3],

            // 夏野菜カレー（ズッキーニ・パプリカ・なす入り）
            ['menu_id' => 18, 'allergen_id' => 1],
            ['menu_id' => 18, 'allergen_id' => 3],

            // かき氷（抹茶）
            // アレルギーなし

            // かき氷（マンゴー）
            // アレルギーなし

            // かき氷（いちごミルク）
            ['menu_id' => 21, 'allergen_id' => 3],
            
        ]);
    }
}
