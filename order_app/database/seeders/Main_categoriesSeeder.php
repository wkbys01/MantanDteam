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
            ['translations' => json_encode(["ja"=>["オススメ","期間限定"] , "en"=>["Recommended","Limited time menu"]])],
            ['translations' => json_encode(["ja"=>"グランドメニュー" , "en"=>"Grand menu"])],
            ['translations' => json_encode(["ja"=>"定食" , "en"=>"Set meal"])],
            ['translations' => json_encode(["ja"=>"セットメニュー" , "en"=>"Set menu"])],
            ['translations' => json_encode(["ja"=>["お子さまメニュー","単品"] , "en"=>["Child menu","Single item"]])],
            ['translations' => json_encode(["ja"=>["お持ち","帰り"] , "en"=>["Take","out"]])],
            ['translations' => json_encode(["ja"=>["ドリンク","デザート"] , "en"=>["Drink","Dessert"]])],
        ]);
    }
}
