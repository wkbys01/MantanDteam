<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::create(['main_category_id' => 1, 'translations' => (["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])]);
        SubCategory::create(['main_category_id' => 1, 'translations' => (["ja"=>"パスタ" , "en"=>"Pasta"])]);
        SubCategory::create(['main_category_id' => 1, 'translations' => (["ja"=>"デザート" , "en"=>"Dessert"])]);
        SubCategory::create(['main_category_id' => 1, 'translations' => (["ja"=>"ドリンク" , "en"=>"Drink"])]);
        SubCategory::create(['main_category_id' => 1, 'translations' => (["ja"=>"カレー" , "en"=>"Curry"])]);
        SubCategory::create(['main_category_id' => 1, 'translations' => (["ja"=>"かき氷" , "en"=>"Shaved ice"])]);

        SubCategory::create(['main_category_id' => 2, 'translations' => (["ja"=>"パスタ" , "en"=>"Pasta"])]);
        SubCategory::create(['main_category_id' => 2, 'translations' => (["ja"=>"ピザ" , "en"=>"Pizza"])]);
        SubCategory::create(['main_category_id' => 2, 'translations' => (["ja"=>"オムライス" , "en"=>"Omelette Rice"])]);
        SubCategory::create(['main_category_id' => 2, 'translations' => (["ja"=>"ハンバーグ・肉" , "en"=>"Hamburger steak Meat"])]);
        SubCategory::create(['main_category_id' => 2, 'translations' => (["ja"=>"その他" , "en"=>"Other"])]);

        SubCategory::create(['main_category_id' => 3, 'translations' => (["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])]);
        SubCategory::create(['main_category_id' => 3, 'translations' => (["ja"=>"鶏" , "en"=>"Chicken"])]);
        SubCategory::create(['main_category_id' => 3, 'translations' => (["ja"=>"豚・牛" , "en"=>"Pork・Beef"])]);
        SubCategory::create(['main_category_id' => 3, 'translations' => (["ja"=>"魚" , "en"=>"Fish"])]);
        SubCategory::create(['main_category_id' => 3, 'translations' => (["ja"=>"野菜" , "en"=>"Vegetables"])]);

        SubCategory::create(['main_category_id' => 4, 'translations' => (["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])]);
        SubCategory::create(['main_category_id' => 4, 'translations' => (["ja"=>"パスタ" , "en"=>"Pasta"])]);
        SubCategory::create(['main_category_id' => 4, 'translations' => (["ja"=>"カレー" , "en"=>"Curry"])]);
        SubCategory::create(['main_category_id' => 4, 'translations' => (["ja"=>"グリル" , "en"=>"Grill"])]);
        SubCategory::create(['main_category_id' => 4, 'translations' => (["ja"=>"白身魚" , "en"=>"White fish"])]);
        SubCategory::create(['main_category_id' => 4, 'translations' => (["ja"=>"お子さま" , "en"=>"Child"])]);

        SubCategory::create(['main_category_id' => 5, 'translations' => (["ja"=>"お子さまプレート" , "en"=>"Kids Plate"])]);
        SubCategory::create(['main_category_id' => 5, 'translations' => (["ja"=>"サイド" , "en"=>"Side"])]);

        SubCategory::create(['main_category_id' => 6, 'translations' => (["ja"=>"ハンバーグ" , "en"=>"Hamburger steak"])]);
        SubCategory::create(['main_category_id' => 6, 'translations' => (["ja"=>"鶏" , "en"=>"Chicken"])]);
        SubCategory::create(['main_category_id' => 6, 'translations' => (["ja"=>"豚・魚" , "en"=>"Pork・fish"])]);
        SubCategory::create(['main_category_id' => 6, 'translations' => (["ja"=>"カレー・オムライス" , "en"=>"Curry・Omelette Rice"])]);
        SubCategory::create(['main_category_id' => 6, 'translations' => (["ja"=>"キッズ" , "en"=>"Kids"])]);
        SubCategory::create(['main_category_id' => 6, 'translations' => (["ja"=>"オードブル" , "en"=>"Hors d\'oeuvres"])]);

        SubCategory::create(['main_category_id' => 7, 'translations' => (["ja"=>"ドリンク" , "en"=>"Drink"])]);
        SubCategory::create(['main_category_id' => 7, 'translations' => (["ja"=>"デザート" , "en"=>"Dessert"])]);
    }
}
