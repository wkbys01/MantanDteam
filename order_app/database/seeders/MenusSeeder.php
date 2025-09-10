<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;



class MenusSeeder extends Seeder
{
   public function run(): void
   {
   // --------------------
   // オススメ期間限定メニュー ↓
   // --------------------
      // ハンバーグ
      Menu::create([
         'sub_category_id' => 1,
         'price' => 1080,
         'translations' => [
            'ja' => "とろけるチーズのデミグラスハンバーグ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Cheese_Demi-Glace_Hamburg_Set.svg',
      ]);

      // パスタ
      Menu::create([
         'sub_category_id' => 2,
         'price' => 980,
         'translations' => [
            'ja' => "菜の花とホタテのあんかけパスタ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Scallop_Nanohana_Ankake.svg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 880,
         'translations' => [
            'ja' => "夏のさっぱり冷製パスタ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Summer_Cold_Pasta.svg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 880,
         'translations' => [
            'ja' => "季節の野菜パスタ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Seasonal_Veggie_Pasta.svg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 980,
         'translations' => [
            'ja' => "桜エビと菜の花の和風パスタ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Sakura_Shrimp_Nanohana.svg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 980,
         'translations' => [
            'ja' => "冷製トマトとバジルのカッペリーニ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Cold_Tomato_Basil_Capellini.svg',
      ]);

      // デザート
      Menu::create([
         'sub_category_id' => 3,
         'price' => 680,
         'translations' => [
            'ja' => "季節のスペシャルパフェ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Seasonal_Parfait.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 580,
         'translations' => [
            'ja' => "季節のフルーツタルト",
         ],
         'image_path' => 'images/menu_page/Limited_time/Seasonal_Fruit_Tart.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 580,
         'translations' => [
            'ja' => "苺フェア いちごパフェ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Strawberry_Fair_Parfait.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 580,
         'translations' => [
            'ja' => "苺フェア いちごショートケーキ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Strawberry_Fair_Shortcake.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 580,
         'translations' => [
            'ja' => "苺フェア いちごミルク",
         ],
         'image_path' => 'images/menu_page/Limited_time/Strawberry_Fair_Milk.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 480,
         'translations' => [
            'ja' => "桜アイスと白玉の和風デザート",
         ],
         'image_path' => 'images/menu_page/Limited_time/Sakura_Ice_Cream_with_Shiratama.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 580,
         'translations' => [
            'ja' => "栗のモンブラン",
         ],
         'image_path' => 'images/menu_page/Limited_time/Mont_Blanc.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 480,
         'translations' => [
            'ja' => "かぼちゃプリン",
         ],
         'image_path' => 'images/menu_page/Limited_time/Pumpkin_Pudding.svg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 580,
         'translations' => [
            'ja' => "サツマイモとりんごのパフェ",
         ],
         'image_path' => 'images/menu_page/Limited_time/Sweet_Potato_Apple_Parfait.svg',
      ]);
   
      // カレー
      Menu::create([
         'sub_category_id' => 4,
         'price' => 880,
         'translations' => [
            'ja' => "夏野菜カレー（ズッキーニ・パプリカ・なす入り）",
         ],
         'image_path' => 'images/menu_page/Limited_time/Summer_Veggie_Curry.svg',
      ]);

      // かき氷
      Menu::create([
         'sub_category_id' => 5,
         'price' => 480,
         'translations' => [
            'ja' => "かき氷（抹茶）",
         ],
         'image_path' => 'images/menu_page/Limited_time/Shaved_Ice_Matcha.svg',
      ]);
      Menu::create([
         'sub_category_id' => 5,
         'price' => 480,
         'translations' => [
            'ja' => "かき氷（マンゴー）",
         ],
         'image_path' => 'images/menu_page/Limited_time/Shaved_Ice_Mango.svg',
      ]);
      Menu::create([
         'sub_category_id' => 5,
         'price' => 480,
         'translations' => [
            'ja' => "かき氷（いちごミルク）",
         ],
         'image_path' => 'images/menu_page/Limited_time/Shaved_Ice_Strawberry_Milk.svg',
      ]);

   // --------------------
   // グラウンドメニュー ↓
   // --------------------
      // パスタ
      Menu::create([
         'sub_category_id' => 6,
         'price' => 780,
         'translations' => [
            'ja' => "昔ながらのナポリタン"
         ],
         'image_path' => 'images/menu_page/Ground/Classic_Napolitan.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 880,
         'translations' => [
            'ja' => "カルボナーラ"
         ],
         'image_path' => 'images/menu_page/Ground/Carbonara.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 880,
         'translations' => [
            'ja' => "ミートソーススパゲッティ"
         ],
         'image_path' => 'images/menu_page/Ground/Meat_Sauce.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 980,
         'translations' => [
            'ja' => "ボロネーゼ"
         ],
         'image_path' => 'images/menu_page/Ground/Bolognese.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 980,
         'translations' => [
            'ja' => "トマトとモッツァレラのパスタ"
         ],
         'image_path' => 'images/menu_page/Ground/Tomato_Mozzarella.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 1080,
         'translations' => [
            'ja' => "海老とトマトクリームパスタ"
         ],
         'image_path' => 'images/menu_page/Ground/Shrimp_Tomato_Cream.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 880,
         'translations' => ['ja' => "明太子スパゲッティ"],
         'image_path' => 'images/menu_page/Ground/Mentaiko.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 880,
         'translations' => ['ja' => "和風きのこパスタ"],
         'image_path' => 'images/menu_page/Ground/Japanese-Style_Mushroom.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 980,
         'translations' => ['ja' => "きのこのクリームスパゲッティ"],
         'image_path' => 'images/menu_page/Ground/Creamy_Mushroom.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 780,
         'translations' => ['ja' => "ペペロンチーノ"],
         'image_path' => 'images/menu_page/Ground/Peperoncino.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 980,
         'translations' => ['ja' => "アサリのボンゴレビアンコ"],
         'image_path' => 'images/menu_page/Ground/Vongole_Bianco.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 980,
         'translations' => ['ja' => "海老とブロッコリーのオイルパスタ"],
         'image_path' => 'images/menu_page/Ground/Shrimp_Broccoli_Oil.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 1080,
         'translations' => ['ja' => "グラタン風スパゲッティ"],
         'image_path' => 'images/menu_page/Ground/Gratin-Style.svg',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 1080,
         'translations' => ['ja' => "チーズたっぷり焼きパスタ"],
         'image_path' => 'images/menu_page/Ground/Cheesy_Baked.svg',
      ]);

      // ピザ
      Menu::create([
         'sub_category_id' => 7,
         'price' => 880,
         'translations' => ['ja' => "マルゲリータピザ"],
         'image_path' => 'images/menu_page/Ground/Margherita.svg',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 980,
         'translations' => ['ja' => "４種のチーズピザ"],
         'image_path' => 'images/menu_page/Ground/Four_Cheese.svg',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 880,
         'translations' => ['ja' => "ベーコンピザ"],
         'image_path' => 'images/menu_page/Ground/Bacon.svg',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 780,
         'translations' => ['ja' => "マヨコーンピザ"],
         'image_path' => 'images/menu_page/Ground/Mayo_Corn.svg',
      ]);

      // オムライス
      Menu::create([
         'sub_category_id' => 8,
         'price' => 980,
         'translations' => ['ja' => "ふわとろオムライス"],
         'image_path' => 'images/menu_page/Ground/Fluffy_Omelette.svg',
      ]);
      Menu::create([
         'sub_category_id' => 8,
         'price' => 880,
         'translations' => ['ja' => "オムライス"],
         'image_path' => 'images/menu_page/Ground/Omelette.svg',
      ]);

      // ハンバーグ・肉料理
      Menu::create([
         'sub_category_id' => 9,
         'price' => 1080,
         'translations' => ['ja' => "チーズインハンバーグ"],
         'image_path' => 'images/menu_page/Ground/Cheese-In_Hamburg.svg',
      ]);
      Menu::create([
         'sub_category_id' => 9,
         'price' => 880,
         'translations' => ['ja' => "チキンドリア"],
         'image_path' => 'images/menu_page/Ground/Chicken_Doria.svg',
      ]);
      Menu::create([
         'sub_category_id' => 9,
         'price' => 980,
         'translations' => ['ja' => "ポークソテー"],
         'image_path' => 'images/menu_page/Ground/Pork_Sauté.svg',
      ]);
      Menu::create([
         'sub_category_id' => 9,
         'price' => 1280,
         'translations' => ['ja' => "ミックスグリル"],
         'image_path' => 'images/menu_page/Ground/Mixed_Grill.svg',
      ]);
      Menu::create([
         'sub_category_id' => 9,
         'price' => 1080,
         'translations' => ['ja' => "サーモンのグリル"],
         'image_path' => 'images/menu_page/Ground/Grilled_Salmon.svg',
      ]);
      Menu::create([
         'sub_category_id' => 9,
         'price' => 880,
         'translations' => ['ja' => "ソーセージ盛り合わせ"],
         'image_path' => 'images/menu_page/Ground/Sausage_Platter.svg',
      ]);

      // その他
      Menu::create([
         'sub_category_id' => 10,
         'price' => 780,
         'translations' => ['ja' => "焼きそば"],
         'image_path' => 'images/menu_page/Ground/Yakisoba.svg',
      ]);
      Menu::create([
         'sub_category_id' => 10,
         'price' => 880,
         'translations' => ['ja' => "エビピラフ"],
         'image_path' => 'images/menu_page/Ground/Shrimp_Pilaf.svg',
      ]);
      Menu::create([
         'sub_category_id' => 10,
         'price' => 480,
         'translations' => ['ja' => "グリーンサラダ"],
         'image_path' => 'images/menu_page/Ground/Green_Salad.svg',
      ]);

   // --------------------
   // 定食 ↓
   // --------------------
      // ハンバーグ
      Menu::create([
         'sub_category_id' => 11,
         'price' => 980,
         'translations' => ['ja' => "まんたんハンバーグ定食"],
         'image_path' => 'images/menu_page/Set_meal/Mantan_Hamburg_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 11,
         'price' => 1080,
         'translations' => ['ja' => "チーズインハンバーグ定食"],
         'image_path' => 'images/menu_page/Set_meal/Cheese-In_Hamburg_Set.svg',
      ]);

      // 鶏料理
      Menu::create([
         'sub_category_id' => 12,
         'price' => 980,
         'translations' => ['ja' => "やみつきチキン南蛮定食"],
         'image_path' => 'images/menu_page/Set_meal/Addictive_Chicken_Nanban_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 12,
         'price' => 980,
         'translations' => ['ja' => "スパイシーチキンステーキ定食"],
         'image_path' => 'images/menu_page/Set_meal/Spicy_Chicken_Steak_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 12,
         'price' => 880,
         'translations' => ['ja' => "唐揚げ定食"],
         'image_path' => 'images/menu_page/Set_meal/Karaage_Set.svg',
      ]);

      // 豚・牛料理
      Menu::create([
         'sub_category_id' => 13,
         'price' => 980,
         'translations' => ['ja' => "豚の生姜焼き定食"],
         'image_path' => 'images/menu_page/Set_meal/Ginger_Pork_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 13,
         'price' => 1080,
         'translations' => ['ja' => "トンカツ定食"],
         'image_path' => 'images/menu_page/Set_meal/Tonkatsu_Set.svg',
      ]);

      // 魚料理
      Menu::create([
         'sub_category_id' => 14,
         'price' => 880,
         'translations' => ['ja' => "アジフライ定食"],
         'image_path' => 'images/menu_page/Set_meal/Fried_Horse_Mackerel_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 14,
         'price' => 880,
         'translations' => ['ja' => "サバの塩焼き定食"],
         'image_path' => 'images/menu_page/Set_meal/Grilled_Mackerel_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 14,
         'price' => 980,
         'translations' => ['ja' => "鮮魚の照り焼き定食"],
         'image_path' => 'images/menu_page/Set_meal/Teriyaki_Fish_Set.svg',
      ]);

      // 野菜
      Menu::create([
         'sub_category_id' => 15,
         'price' => 880,
         'translations' => ['ja' => "野菜炒め定食"],
         'image_path' => 'images/menu_page/Set_meal/Stir-Fried_Vegetables_Set.svg',
      ]);

   // --------------------
   // セットメニュー ↓
   // --------------------
      // ハンバーグ
      Menu::create([
         'sub_category_id' => 16,
         'price' => 1280,
         'translations' => ['ja' => "満腹まんたんセット"],
         'image_path' => 'images/menu_page/set_menu/Greedy-Mantan_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 16,
         'price' => 1280,
         'translations' => ['ja' => "よくばりまんたんセット"],
         'image_path' => 'images/menu_page/set_menu/Full-Stomach_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 16,
         'price' => 1080,
         'translations' => ['ja' => "デミグラスハンバーグセット"],
         'image_path' => 'images/menu_page/set_menu/Demi-glace-hamburger-set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 16,
         'price' => 1080,
         'translations' => ['ja' => "和風おろしハンバーグセット"],
         'image_path' => 'images/menu_page/set_menu/Japanese-style-hamburger-steak_set.svg',
      ]);

      // パスタ
      Menu::create([
         'sub_category_id' => 17,
         'price' => 980,
         'translations' => ['ja' => "ナポリタンセット"],
         'image_path' => 'images/menu_page/set_menu/Neapolitan_set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 17,
         'price' => 1080,
         'translations' => ['ja' => "カルボナーラセット"],
         'image_path' => 'images/menu_page/set_menu/Carbonara_Set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 17,
         'price' => 980,
         'translations' => ['ja' => "明太子スパゲッティセット"],
         'image_path' => 'images/menu_page/set_menu/Mentaiko-Spaghetti_Set.svg',
      ]);

      // カレー
      Menu::create([
         'sub_category_id' => 18,
         'price' => 980,
         'translations' => ['ja' => "ビーフカレーセット"],
         'image_path' => 'images/menu_page/set_menu/Beef-curry_set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 18,
         'price' => 880,
         'translations' => ['ja' => "チキンカレーセット"],
         'image_path' => 'images/menu_page/set_menu/chicken-curry_set.svg',
      ]);

      // グリル
      Menu::create([
         'sub_category_id' => 19,
         'price' => 1080,
         'translations' => ['ja' => "サーモンのグリルセット"],
         'image_path' => 'images/menu_page/set_menu/Grilled-salmon_set.svg',
      ]);

      // 白身魚
      Menu::create([
         'sub_category_id' => 20,
         'price' => 880,
         'translations' => ['ja' => "白身魚フライセット"],
         'image_path' => 'images/menu_page/set_menu/White-fish-fry_set.svg',
      ]);

      // お子さま
      Menu::create([
         'sub_category_id' => 21,
         'price' => 580,
         'translations' => ['ja' => "お子さまセット"],
         'image_path' => 'images/menu_page/set_menu/children_s_set.svg',
      ]);
      Menu::create([
         'sub_category_id' => 21,
         'price' => 1580,
         'translations' => ['ja' => "ペアセット"],
         'image_path' => 'images/menu_page/set_menu/pair_set.svg',
      ]);

   // --------------------
   // お子さま・単品 ↓
   // --------------------
      // お子さまメニュー
      Menu::create([
         'sub_category_id' => 22,
         'price' => 580,
         'translations' => ['ja' => "カレープレート"],
         'image_path' => 'images/menu_page/Child_Single/Kids’Curry.svg',
      ]);
      Menu::create([
         'sub_category_id' => 22,
         'price' => 480,
         'translations' => ['ja' => "パンケーキプレート"],
         'image_path' => 'images/menu_page/Child_Single/Kids’Pancakes.svg',
      ]);
      Menu::create([
         'sub_category_id' => 22,
         'price' => 480,
         'translations' => ['ja' => "お子さまうどん"],
         'image_path' => 'images/menu_page/Child_Single/Kids’Udon.svg',
      ]);
      Menu::create([
         'sub_category_id' => 22,
         'price' => 580,
         'translations' => ['ja' => "ハンバーグプレート"],
         'image_path' => 'images/menu_page/Child_Single/Kids’Hamburg.svg',
      ]);
      Menu::create([
         'sub_category_id' => 22,
         'price' => 580,
         'translations' => ['ja' => "オムライスプレート"],
         'image_path' => 'images/menu_page/Child_Single/Kids’Omurice.svg',
      ]);
      Menu::create([
         'sub_category_id' => 22,
         'price' => 580,
         'translations' => ['ja' => "チーズピザプレート"],
         'image_path' => 'images/menu_page/Child_Single/Kids’Cheese_Pizza.svg',
      ]);
      Menu::create([
         'sub_category_id' => 22,
         'price' => 580,
         'translations' => ['ja' => "ミートスパゲッティプレート"],
         'image_path' => 'images/menu_page/Child_Single/Kids’Meat_Spaghetti.svg',
      ]);

      // 単品
      Menu::create([
         'sub_category_id' => 23,
         'price' => 380,
         'translations' => ['ja' => "ポテトフライ"],
         'image_path' => 'images/menu_page/Child_Single/French_Fries.svg',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 280,
         'translations' => ['ja' => "コーンスープ"],
         'image_path' => 'images/menu_page/Child_Single/Corn_Soup.svg',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 380,
         'translations' => ['ja' => "唐揚げ"],
         'image_path' => 'images/menu_page/Child_Single/Karaage.svg',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 380,
         'translations' => ['ja' => "軟骨の唐揚げ"],
         'image_path' => 'images/menu_page/Child_Single/Fried_Cartilage.svg',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 380,
         'translations' => ['ja' => "フライドポテト"],
         'image_path' => 'images/menu_page/Child_Single/Fried_Potatoes.svg',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 380,
         'translations' => ['ja' => "オニオンリング"],
         'image_path' => 'images/menu_page/Child_Single/Onion_Rings.svg',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 380,
         'translations' => ['ja' => "チキンナゲット"],
         'image_path' => 'images/menu_page/Child_Single/Nuggets.svg',
      ]);

   // --------------------
   // お持ち帰り ↓
   // --------------------
      // ハンバーグ
      Menu::create([
         'sub_category_id' => 24,
         'price' => 880,
         'translations' => ['ja' => "まんたんハンバーグ弁当"],
         'image_path' => 'images/menu_page/Takeout/Mantan_Hamburg.svg',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 880,
         'translations' => ['ja' => "和風おろしハンバーグ弁当"],
         'image_path' => 'images/menu_page/Takeout/Wafu_Oroshi_Hamburg.svg',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 980,
         'translations' => ['ja' => "チーズインハンバーグ弁当"],
         'image_path' => 'images/menu_page/Takeout/Cheese-In_Hamburg.svg',
      ]);

      // 鶏料理
      Menu::create([
         'sub_category_id' => 25,
         'price' => 880,
         'translations' => ['ja' => "チキン南蛮弁当"],
         'image_path' => 'images/menu_page/Takeout/Chicken_Nanban.svg',
      ]);
      Menu::create([
         'sub_category_id' => 25,
         'price' => 780,
         'translations' => ['ja' => "唐揚げ弁当"],
         'image_path' => 'images/menu_page/Takeout/Karaage.svg',
      ]);

      // 豚・魚料理
      Menu::create([
         'sub_category_id' => 26,
         'price' => 880,
         'translations' => ['ja' => "生姜焼き弁当"],
         'image_path' => 'images/menu_page/Takeout/Ginger_Pork.svg',
      ]);
      Menu::create([
         'sub_category_id' => 26,
         'price' => 980,
         'translations' => ['ja' => "トンカツ弁当"],
         'image_path' => 'images/menu_page/Takeout/Tonkatsu.svg',
      ]);
      Menu::create([
         'sub_category_id' => 26,
         'price' => 780,
         'translations' => ['ja' => "焼き鮭弁当"],
         'image_path' => 'images/menu_page/Takeout/Grilled_Salmon.svg',
      ]);
      Menu::create([
         'sub_category_id' => 26,
         'price' => 780,
         'translations' => ['ja' => "白身魚フライ弁当"],
         'image_path' => 'images/menu_page/Takeout/Fried_White_Fish.svg',
      ]);

      //　ライス
      Menu::create([
         'sub_category_id' => 27,
         'price' => 880,
         'translations' => ['ja' => "ビーフカレー弁当"],
         'image_path' => 'images/menu_page/Takeout/Beef_Curry.svg',
      ]);
      Menu::create([
         'sub_category_id' => 27,
         'price' => 780,
         'translations' => ['ja' => "チキンカレー弁当"],
         'image_path' => 'images/menu_page/Takeout/Chicken_Curry.svg',
      ]);
      Menu::create([
         'sub_category_id' => 27,
         'price' => 880,
         'translations' => ['ja' => "オムライス弁当"],
         'image_path' => 'images/menu_page/Takeout/Omurice.svg',
      ]);

      // パスタ
      Menu::create([
         'sub_category_id' => 28,
         'price' => 780,
         'translations' => ['ja' => "ナポリタン弁当"],
         'image_path' => 'images/menu_page/Takeout/Napolitan.svg',
      ]);

      // キッズ
      Menu::create([
         'sub_category_id' => 29,
         'price' => 580,
         'translations' => ['ja' => "キッズハンバーグ弁当"],
         'image_path' => 'images/menu_page/Takeout/Kids’Hamburg.svg',
      ]);

      // オードブル
      Menu::create([
         'sub_category_id' => 30,
         'price' => 1980,
         'translations' => ['ja' => "まんたん特製オードブル"],
         'image_path' => 'images/menu_page/Takeout/Mantan_Special_Platter.svg',
      ]);

   // --------------------
   // ドリンク・デザート ↓
   // --------------------
      // ドリンク
      Menu::create([
         'sub_category_id' => 31,
         'price' => 480,
         'translations' => ['ja' => "ドリンクバー"],
         'image_path' => 'images/menu_page/Drink_desert/Drink_Bar.svg',
      ]);
      Menu::create([
         'sub_category_id' => 31,
         'price' => 280,
         'translations' => ['ja' => "レモンスカッシュ"],
         'image_path' => 'images/menu_page/Drink_desert/Lemon_Squash.svg',
      ]);
      Menu::create([
         'sub_category_id' => 31,
         'price' => 380,
         'translations' => ['ja' => "マンゴースムージー"],
         'image_path' => 'images/menu_page/Drink_desert/Mango_Smoothie.svg',
      ]);

      // デザート
      Menu::create([
         'sub_category_id' => 32,
         'price' => 580,
         'translations' => ['ja' => "濃厚ガトーショコラ"],
         'image_path' => 'images/menu_page/Drink_desert/Gateau_Chocolat.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 380,
         'translations' => ['ja' => "ミニパフェ"],
         'image_path' => 'images/menu_page/Drink_desert/Mini_Parfait.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 480,
         'translations' => ['ja' => "パンケーキ"],
         'image_path' => 'images/menu_page/Drink_desert/Pancakes.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 580,
         'translations' => ['ja' => "チョコレートパフェ"],
         'image_path' => 'images/menu_page/Drink_desert/Chocolate_Parfait.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 580,
         'translations' => ['ja' => "いちごパフェ"],
         'image_path' => 'images/menu_page/Drink_desert/Strawberry_Parfait.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 580,
         'translations' => ['ja' => "プリンアラモード"],
         'image_path' => 'images/menu_page/Drink_desert/Pudding_à_la_Mode.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 480,
         'translations' => ['ja' => "ショートケーキ"],
         'image_path' => 'images/menu_page/Drink_desert/Shortcake.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 480,
         'translations' => ['ja' => "ティラミス"],
         'image_path' => 'images/menu_page/Drink_desert/Tiramisu.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 580,
         'translations' => ['ja' => "ベイクドチーズケーキ"],
         'image_path' => 'images/menu_page/Drink_desert/Baked_Cheesecake.svg',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 280,
         'translations' => ['ja' => "アイスクリーム バニラ"],
         'image_path' => 'images/menu_page/Drink_desert/IceCream_Vanilla.svg',
      ]);

      Menu::create([
         'sub_category_id' => 32,
         'price' => 280,
         'translations' => ['ja' => "アイスクリーム チョコ"],
         'image_path' => 'images/menu_page/Drink_desert/IceCream_Chocolate.svg',
      ]);

      Menu::create([
         'sub_category_id' => 32,
         'price' => 280,
         'translations' => ['ja' => "アイスクリーム 抹茶"],
         'image_path' => 'images/menu_page/Drink_desert/IceCream_Matcha.svg',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 380,
         'translations' => ['ja' => "ソフトクリームサンデー チョコ"],
         'image_path' => 'images/menu_page/Drink_desert/Soft-cream_Choco.svg',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 380,
         'translations' => ['ja' => "ソフトクリームサンデー いちご"],
         'image_path' => 'images/menu_page/Drink_desert/Soft-cream_Strawberry.svg',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 380,
         'translations' => ['ja' => "ソフトクリームサンデー キャラメルソース"],
         'image_path' => 'images/menu_page/Drink_desert/Soft-cream_Caramel.svg',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 480,
         'translations' => ['ja' => "和風デザート 白玉あんみつ"],
         'image_path' => 'images/menu_page/Drink_desert/Shiratama_Anmitsu.svg',
      ]);

      Menu::create([
         'sub_category_id' => 32,
         'price' => 480,
         'translations' => ['ja' => "和風デザート 抹茶わらびもち"],
         'image_path' => 'images/menu_page/Drink_desert/Matcha_WarabiMochi.svg',
      ]);
      
   }
}
