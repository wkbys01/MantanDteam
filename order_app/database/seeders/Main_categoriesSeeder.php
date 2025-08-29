<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Main_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('main_categories')->insert([
            ['translations' => json_encode(["ja"=>"オススメ期間限定メニュー" , "en"=>"Recommended Limited time menu"])],
            ['translations' => json_encode(["ja"=>"グランドメニュー" , "en"=>"Grand menu"])],
            ['translations' => json_encode(["ja"=>"定食" , "en"=>"Set meal"])],
            ['translations' => json_encode(["ja"=>"セットメニュー" , "en"=>"Set menu"])],
            ['translations' => json_encode(["ja"=>"お子さまメニュー単品" , "en"=>"Child menu Single item"])],
            ['translations' => json_encode(["ja"=>"お持ち帰り" , "en"=>"Takeout"])],
            ['translations' => json_encode(["ja"=>"ドリンクデザート" , "en"=>"Drink Dessert"])],
        ]);
    }
}
