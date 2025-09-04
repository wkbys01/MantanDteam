<?php

namespace Database\Seeders;
use App\Models\MainCategory;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create型に変更
        // DB::table('main_categories')->insert([
        //     ['translations' => json_encode(["ja"=>["オススメ","期間限定"] , "en"=>["Recommended","Limited time menu"]])],
        //     ['translations' => json_encode(["ja"=>"グランドメニュー" , "en"=>"Grand menu"])],
        //     ['translations' => json_encode(["ja"=>"定食" , "en"=>"Set meal"])],
        //     ['translations' => json_encode(["ja"=>"セットメニュー" , "en"=>"Set menu"])],
        //     ['translations' => json_encode(["ja"=>["お子さまメニュー","単品"] , "en"=>["Child menu","Single item"]])],
        //     ['translations' => json_encode(["ja"=>["お持ち","帰り"] , "en"=>["Take","out"]])],
        //     ['translations' => json_encode(["ja"=>["ドリンク","デザート"] , "en"=>["Drink","Dessert"]])],
        // ]);

        MainCategory::create([
            'translations' => [
                'ja' => ["オススメ" , "期間限定メニュー"],   // 2行
                'en' => ["Recommended" , "Limited time menu"],
                'zh' => ["推薦" , "期間限定菜單"],
            ],
        ]);

        MainCategory::create([
            'translations' => [
                'ja' => "グランドメニュー",   // 1行（文字列）
                'en' => "Grand menu",
                'zh' => "主菜單",
            ],
        ]);

        MainCategory::create([
            'translations' => [
                'ja' => "定食",
                'en' => "Set meal",
                'zh' => "定食",
            ],
        ]);

        MainCategory::create([
            'translations' => [
                'ja' => "セットメニュー",
                'en' => "Set menu",
                'zh' => "套餐",
            ],
        ]);

        MainCategory::create([
            'translations' => [
                'ja' => ["お子さまメニュー" , "単品"],   // 2行
                'en' => ["Child menu" , "Single item"],
                'zh' => ["兒童菜單" , "單品"],
            ],
        ]);

        MainCategory::create([
            'translations' => [
                'ja' => ["お持ち", "帰り"],   // 2行
                'en' => ["Take", "out"],
                'zh' => ["外帶" , ""],
            ],
        ]);

        MainCategory::create([
            'translations' => [
                'ja' => ["ドリンク", "デザート"],   // 2行
                'en' => ["Drink", "Dessert"],
                'zh' => ["飲品" , "甜點"],
            ],
        ]);
    }
}
