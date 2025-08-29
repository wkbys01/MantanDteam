<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sub_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sub_categories')->insert([
            ['main_category_id' => 1, 'translations' => json_encode(["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])],
            ['main_category_id' => 1, 'translations' => json_encode(["ja"=>"パスタ" , "en"=>"Pasta"])],
            ['main_category_id' => 1, 'translations' => json_encode(["ja"=>"デザート" , "en"=>"Dessert"])],
            ['main_category_id' => 1, 'translations' => json_encode(["ja"=>"ドリンク" , "en"=>"Drink"])],
            ['main_category_id' => 1, 'translations' => json_encode(["ja"=>"カレー" , "en"=>"Curry"])],
            ['main_category_id' => 1, 'translations' => json_encode(["ja"=>"かき氷" , "en"=>"Shaved ice"])],
            
            ['main_category_id' => 2, 'translations' => json_encode(["ja"=>"パスタ" , "en"=>"Pasta"])],
            ['main_category_id' => 2, 'translations' => json_encode(["ja"=>"ピザ" , "en"=>"Pizza"])],
            ['main_category_id' => 2, 'translations' => json_encode(["ja"=>"オムライス" , "en"=>"Omelette Rice"])],
            ['main_category_id' => 2, 'translations' => json_encode(["ja"=>"ハンバーグ・肉" , "en"=>"Hamburger steak Meat"])],
            ['main_category_id' => 2, 'translations' => json_encode(["ja"=>"その他" , "en"=>"Other"])],
            
            ['main_category_id' => 3, 'translations' => json_encode(["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])],
            ['main_category_id' => 3, 'translations' => json_encode(["ja"=>"鶏" , "en"=>"Chicken"])],
            ['main_category_id' => 3, 'translations' => json_encode(["ja"=>"豚・牛" , "en"=>"Pork・Beef"])],
            ['main_category_id' => 3, 'translations' => json_encode(["ja"=>"魚" , "en"=>"Fish"])],
            ['main_category_id' => 3, 'translations' => json_encode(["ja"=>"野菜" , "en"=>"Vegetables"])],
            
            ['main_category_id' => 4, 'translations' => json_encode(["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])],
            ['main_category_id' => 4, 'translations' => json_encode(["ja"=>"パスタ" , "en"=>"Pasta"])],
            ['main_category_id' => 4, 'translations' => json_encode(["ja"=>"カレー" , "en"=>"Curry"])],
            ['main_category_id' => 4, 'translations' => json_encode(["ja"=>"グリル" , "en"=>"Grill"])],
            ['main_category_id' => 4, 'translations' => json_encode(["ja"=>"白身魚" , "en"=>"White fish"])],
            ['main_category_id' => 4, 'translations' => json_encode(["ja"=>"お子さま" , "en"=>"Child"])],

            ['main_category_id' => 5, 'translations' => json_encode(["ja"=>"お子さまプレート" , "en"=>"Kids' Plate"])],
            ['main_category_id' => 5, 'translations' => json_encode(["ja"=>"サイド" , "en"=>"Side"])],

            ['main_category_id' => 6, 'translations' => json_encode(["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])],
            ['main_category_id' => 6, 'translations' => json_encode(["ja"=>"鶏" , "en"=>"Chicken"])],
            ['main_category_id' => 6, 'translations' => json_encode(["ja"=>"豚・魚" , "en"=>"Pork・fish"])],
            ['main_category_id' => 6, 'translations' => json_encode(["ja"=>"カレー・オムライス" , "en"=>"Curry・Omelette Rice"])],
            ['main_category_id' => 6, 'translations' => json_encode(["ja"=>"キッズ" , "en"=>"Kids"])],
            ['main_category_id' => 6, 'translations' => json_encode(["ja"=>"オードブル" , "en"=>"Hors d'oeuvres"])],
            
            ['main_category_id' => 7, 'translations' => json_encode(["ja"=>"ドリンク" , "en"=>"Drink"])],
            ['main_category_id' => 7, 'translations' => json_encode(["ja"=>"デザート" , "en"=>"Dessert"])],
            
        ]);
    }
}
