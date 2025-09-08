<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Allergen;

class AllergensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Allergen::create([
            'translations' => [
                'ja' => "小麦",
                'en' => "Wheat",
                'zh' => "小麥",
            ],
            'image_path' => null,
        ]);

        Allergen::create([
            'translations' => [
                'ja' => "蕎麦",
                'en' => "Buckwheat",
                'zh' => "蕎麥",
            ],
            'image_path' => null,
        ]);

        Allergen::create([
            'translations' => [
                'ja' => "乳",
                'en' => "Milk",
                'zh' => "牛奶",
            ],
            'image_path' => null,
        ]);
        
        Allergen::create([
            'translations' => [
                'ja' => "卵",
                'en' => "Egg",
                'zh' => "鸡蛋",
            ],
            'image_path' => null,
        ]);
        
        Allergen::create([
            'translations' => [
                'ja' => "カニ",
                'en' => "Crab",
                'zh' => "螃蟹",
            ],
            'image_path' => null,
        ]);
        
        Allergen::create([
            'translations' => [
                'ja' => "エビ",
                'en' => "Shrimp",
                'zh' => "蝦",
            ],
            'image_path' => null,
        ]);
        
        Allergen::create([
            'translations' => [
                'ja' => "クルミ",
                'en' => "Walnut",
                'zh' => "核桃",
            ],
            'image_path' => null,
        ]);

        Allergen::create([
            'translations' => [
                'ja' => "落花生",
                'en' => "Peanuts",
                'zh' => "落花生",
            ],
            'image_path' => null,
        ]);
    }
}
