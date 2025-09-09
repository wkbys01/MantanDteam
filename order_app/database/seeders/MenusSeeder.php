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
         'price' => 0,
         'translations' => ([
            'ja' => "とろけるチーズのデミグラスハンバーグ定食",
         ]),
         'image_path' => 'images/menu_page/Limited_time/Cheese_Demi-Glace_Hamburg_Set.jpg',
      ]);

      // パスタ
      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "菜の花とホタテのあんかけパスタ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/Scallop_Nanohana_Ankake.jpg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "夏のさっぱり冷製パスタ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/Summer_Cold_Pasta.jpg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "季節の野菜パスタ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/Seasonal_Veggie_Pasta.jpg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "桜エビと菜の花の和風パスタ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/Sakura_Shrimp_Nanohana.jpg',
      ]);
      Menu::create([
         'sub_category_id' => 2,
         'price' => 0,
         'translations' => ([
            'ja' => "冷製トマトとバジルのカッペリーニ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/Cold_Tomato_Basil_Capellini.jpg',
      ]);

      // デザート
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "季節のスペシャルパフェ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/Seasonal_Parfait.jpg',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "季節のフルーツタルト",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "苺フェア いちごパフェ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "苺フェア いちごショートケーキ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "苺フェア いちごミルク",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "桜アイスと白玉の和風デザート",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "栗のモンブラン",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "かぼちゃプリン",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 3,
         'price' => 0,
         'translations' => ([
            'ja' => "サツマイモとりんごのパフェ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      
      // ドリンク
      Menu::create([
         'sub_category_id' => 4,
         'price' => 0,
         'translations' => ([
            'ja' => "レモンスカッシュ",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 4,
         'price' => 0,
         'translations' => ([
            'ja' => "マンゴースムージー",
         ]),
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
   
      // カレー
      Menu::create([
         'sub_category_id' => 5,
         'price' => 0,
         'translations' => [
            'ja' => "夏野菜カレー（ズッキーニ・パプリカ・なす入り）",
         ],
         'image_path' => 'images/menu_page/Limited_time/',
      ]);

      // かき氷
      Menu::create([
         'sub_category_id' => 6,
         'price' => 0,
         'translations' => [
            'ja' => "かき氷（抹茶）",
         ],
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 0,
         'translations' => [
            'ja' => "かき氷（マンゴー）",
         ],
         'image_path' => 'images/menu_page/Limited_time/',
      ]);
      Menu::create([
         'sub_category_id' => 6,
         'price' => 0,
         'translations' => [
            'ja' => "かき氷（いちごミルク）",
         ],
         'image_path' => 'images/menu_page/Limited_time/',
      ]);

   // --------------------
   // グラウンドメニュー ↓
   // --------------------
      // パスタ
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "昔ながらのナポリタン"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "カルボナーラ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "ミートソーススパゲッティ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "ボロネーゼ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "トマトとモッツァレラのパスタ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "海老とトマトクリームパスタ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "明太子スパゲッティ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "和風きのこパスタ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "きのこのクリームスパゲッティ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "ペペロンチーノ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "アサリのボンゴレビアンコ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "海老とブロッコリーのオイルパスタ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "グラタン風スパゲッティ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 7,
         'price' => 0,
         'translations' => ['ja' => "チーズたっぷり焼きパスタ"],
         'image_path' => 'images/menu_page/',
      ]);

      // ピザ
      Menu::create([
         'sub_category_id' => 8,
         'price' => 0,
         'translations' => ['ja' => "マルゲリータピザ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 8,
         'price' => 0,
         'translations' => ['ja' => "４種のチーズピザ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 8,
         'price' => 0,
         'translations' => ['ja' => "ベーコンピザ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 8,
         'price' => 0,
         'translations' => ['ja' => "マヨコーンピザ"],
         'image_path' => 'images/menu_page/',
      ]);

      // オムライス
      Menu::create([
         'sub_category_id' => 9,
         'price' => 0,
         'translations' => ['ja' => "ふわとろオムライス"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 9,
         'price' => 0,
         'translations' => ['ja' => "オムライス"],
         'image_path' => 'images/menu_page/',
      ]);

      // ハンバーグ・肉料理
      Menu::create([
         'sub_category_id' => 10,
         'price' => 0,
         'translations' => ['ja' => "チーズインハンバーグ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 10,
         'price' => 0,
         'translations' => ['ja' => "チキンドリア"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 10,
         'price' => 0,
         'translations' => ['ja' => "ポークソテー"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 10,
         'price' => 0,
         'translations' => ['ja' => "ミックスグリル"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 10,
         'price' => 0,
         'translations' => ['ja' => "サーモンのグリル"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 10,
         'price' => 0,
         'translations' => ['ja' => "ソーセージ盛り合わせ"],
         'image_path' => 'images/menu_page/',
      ]);

      // その他
      Menu::create([
         'sub_category_id' => 11,
         'price' => 0,
         'translations' => ['ja' => "焼きそば"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 11,
         'price' => 0,
         'translations' => ['ja' => "エビピラフ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 11,
         'price' => 0,
         'translations' => ['ja' => "グリーンサラダ"],
         'image_path' => 'images/menu_page/',
      ]);

   // --------------------
   // 定食 ↓
   // --------------------
      // ハンバーグ
      Menu::create([
         'sub_category_id' => 12,
         'price' => 0,
         'translations' => ['ja' => "まんたんハンバーグ定食"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 12,
         'price' => 0,
         'translations' => ['ja' => "チーズインハンバーグ定食"],
         'image_path' => 'images/menu_page/',
      ]);

      // 鶏料理
      Menu::create([
         'sub_category_id' => 13,
         'price' => 0,
         'translations' => ['ja' => "やみつきチキン南蛮定食"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 13,
         'price' => 0,
         'translations' => ['ja' => "スパイシーチキンステーキ定食"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 13,
         'price' => 0,
         'translations' => ['ja' => "唐揚げ定食"],
         'image_path' => 'images/menu_page/',
      ]);

      // 豚・牛料理
      Menu::create([
         'sub_category_id' => 14,
         'price' => 0,
         'translations' => ['ja' => "豚の生姜焼き定食"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 14,
         'price' => 0,
         'translations' => ['ja' => "トンカツ定食"],
         'image_path' => 'images/menu_page/',
      ]);

      // 魚料理
      Menu::create([
         'sub_category_id' => 15,
         'price' => 0,
         'translations' => ['ja' => "アジフライ定食"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 15,
         'price' => 0,
         'translations' => ['ja' => "サバの塩焼き定食"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 15,
         'price' => 0,
         'translations' => ['ja' => "鮮魚の照り焼き定食"],
         'image_path' => 'images/menu_page/',
      ]);

      // 野菜
      Menu::create([
         'sub_category_id' => 16,
         'price' => 0,
         'translations' => ['ja' => "野菜炒め定食"],
         'image_path' => 'images/menu_page/',
      ]);

   // --------------------
   // セットメニュー ↓
   // --------------------
      // ハンバーグ
      Menu::create([
         'sub_category_id' => 17,
         'price' => 0,
         'translations' => ['ja' => "満腹まんたんセット"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 17,
         'price' => 0,
         'translations' => ['ja' => "よくばりまんたんセット"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 17,
         'price' => 0,
         'translations' => ['ja' => "デミグラスハンバーグセット"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 17,
         'price' => 0,
         'translations' => ['ja' => "和風おろしハンバーグセット"],
         'image_path' => 'images/menu_page/',
      ]);

      // パスタ
      Menu::create([
         'sub_category_id' => 18,
         'price' => 0,
         'translations' => ['ja' => "ナポリタンセット"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 18,
         'price' => 0,
         'translations' => ['ja' => "カルボナーラセット"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 18,
         'price' => 0,
         'translations' => ['ja' => "明太子スパゲッティセット"],
         'image_path' => 'images/menu_page/',
      ]);

      // カレー
      Menu::create([
         'sub_category_id' => 19,
         'price' => 0,
         'translations' => ['ja' => "ビーフカレーセット"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 19,
         'price' => 0,
         'translations' => ['ja' => "チキンカレーセット"],
         'image_path' => 'images/menu_page/',
      ]);

      // グリル
      Menu::create([
         'sub_category_id' => 20,
         'price' => 0,
         'translations' => ['ja' => "サーモンのグリルセット"],
         'image_path' => 'images/menu_page/',
      ]);

      // 白身魚
      Menu::create([
         'sub_category_id' => 21,
         'price' => 0,
         'translations' => ['ja' => "白身魚フライセット"],
         'image_path' => 'images/menu_page/',
      ]);

      // お子さま
      Menu::create([
         'sub_category_id' => 22,
         'price' => 0,
         'translations' => ['ja' => "お子さまセット"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 22,
         'price' => 0,
         'translations' => ['ja' => "ペアセット"],
         'image_path' => 'images/menu_page/',
      ]);

   // --------------------
   // お子さま・単品 ↓
   // --------------------
      // お子さま
      Menu::create([
         'sub_category_id' => 23,
         'price' => 0,
         'translations' => ['ja' => "お子さまカレー"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 0,
         'translations' => ['ja' => "お子さまパンケーキ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 0,
         'translations' => ['ja' => "お子さまうどん"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 0,
         'translations' => ['ja' => "キッズハンバーグプレート"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 0,
         'translations' => ['ja' => "キッズオムライスプレート"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 0,
         'translations' => ['ja' => "キッズチーズピザプレート"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 23,
         'price' => 0,
         'translations' => ['ja' => "キッズミートスパゲッティプレート"],
         'image_path' => 'images/menu_page/',
      ]);

      // ドリンク
      Menu::create([
         'sub_category_id' => 24,
         'price' => 0,
         'translations' => ['ja' => "ポテトフライ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 0,
         'translations' => ['ja' => "コーンスープ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 0,
         'translations' => ['ja' => "唐揚げ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 0,
         'translations' => ['ja' => "軟骨の唐揚げ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 0,
         'translations' => ['ja' => "フライドポテト"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 0,
         'translations' => ['ja' => "オニオンリング"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 24,
         'price' => 0,
         'translations' => ['ja' => "チキンナゲット"],
         'image_path' => 'images/menu_page/',
      ]);

   // --------------------
   // お持ち帰り ↓
   // --------------------
      // ハンバーグ
      Menu::create([
         'sub_category_id' => 25,
         'price' => 0,
         'translations' => ['ja' => "まんたんハンバーグ弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 25,
         'price' => 0,
         'translations' => ['ja' => "和風おろしハンバーグ弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 25,
         'price' => 0,
         'translations' => ['ja' => "チーズインハンバーグ弁当"],
         'image_path' => 'images/menu_page/',
      ]);

      // 鶏料理
      Menu::create([
         'sub_category_id' => 26,
         'price' => 0,
         'translations' => ['ja' => "チキン南蛮弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 26,
         'price' => 0,
         'translations' => ['ja' => "唐揚げ弁当"],
         'image_path' => 'images/menu_page/',
      ]);

      // 豚・魚料理
      Menu::create([
         'sub_category_id' => 27,
         'price' => 0,
         'translations' => ['ja' => "生姜焼き弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 27,
         'price' => 0,
         'translations' => ['ja' => "トンカツ弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 27,
         'price' => 0,
         'translations' => ['ja' => "焼き鮭弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 27,
         'price' => 0,
         'translations' => ['ja' => "白身魚フライ弁当"],
         'image_path' => 'images/menu_page/',
      ]);

      // カレー・オムライス
      Menu::create([
         'sub_category_id' => 28,
         'price' => 0,
         'translations' => ['ja' => "ビーフカレー弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 28,
         'price' => 0,
         'translations' => ['ja' => "チキンカレー弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 28,
         'price' => 0,
         'translations' => ['ja' => "オムライス弁当"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 28,
         'price' => 0,
         'translations' => ['ja' => "ナポリタン弁当"],
         'image_path' => 'images/menu_page/',
      ]);

      // キッズ
      Menu::create([
         'sub_category_id' => 29,
         'price' => 0,
         'translations' => ['ja' => "キッズハンバーグ弁当"],
         'image_path' => 'images/menu_page/',
      ]);

      // オードブル
      Menu::create([
         'sub_category_id' => 30,
         'price' => 0,
         'translations' => ['ja' => "まんたん特製オードブル"],
         'image_path' => 'images/menu_page/',
      ]);

   // --------------------
   // ドリンク・デザート ↓
   // --------------------
      // ドリンク
      Menu::create([
         'sub_category_id' => 31,
         'price' => 0,
         'translations' => ['ja' => "ドリンクバー"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 31,
         'price' => 0,
         'translations' => ['ja' => "レモンスカッシュ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 31,
         'price' => 0,
         'translations' => ['ja' => "マンゴースムージー"],
         'image_path' => 'images/menu_page/',
      ]);

      // デザート
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "濃厚ガトーショコラ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "ミニパフェ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "パンケーキ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "チョコレートパフェ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "いちごパフェ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "プリンアラモード"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "ショートケーキ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "ティラミス"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "ベイクドチーズケーキ"],
         'image_path' => 'images/menu_page/',
      ]);
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "アイスクリーム バニラ"],
         'image_path' => 'images/menu_page/',
      ]);

      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "アイスクリーム チョコ"],
         'image_path' => 'images/menu_page/',
      ]);

      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "アイスクリーム 抹茶"],
         'image_path' => 'images/menu_page/',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "ソフトクリームサンデー チョコ"],
         'image_path' => 'images/menu_page/',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "ソフトクリームサンデー いちご"],
         'image_path' => 'images/menu_page/',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "ソフトクリームサンデー キャラメルソース"],
         'image_path' => 'images/menu_page/',
      ]);
      
      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "和風デザート 白玉あんみつ"],
         'image_path' => 'images/menu_page/',
      ]);

      Menu::create([
         'sub_category_id' => 32,
         'price' => 0,
         'translations' => ['ja' => "和風デザート 抹茶わらびもち"],
         'image_path' => 'images/menu_page/',
      ]);
      
   }
}
