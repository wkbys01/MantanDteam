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

            // 夏野菜カレー（ズッキーニ・パプリカ・なす入り）
            ['menu_id' => 16, 'allergen_id' => 1],
            ['menu_id' => 16, 'allergen_id' => 3],

            // かき氷（抹茶）
            // アレルギーなし

            // かき氷（マンゴー）
            // アレルギーなし

            // かき氷（いちごミルク）
            ['menu_id' => 19, 'allergen_id' => 3],
            
            // 昔ながらのナポリタン
            ['menu_id' => 20, 'allergen_id' => 1],
            ['menu_id' => 20, 'allergen_id' => 3],

            // カルボナーラ
            ['menu_id' => 21, 'allergen_id' => 1],
            ['menu_id' => 21, 'allergen_id' => 3],
            ['menu_id' => 21, 'allergen_id' => 4],

            // ミートソーススパゲッティ
            ['menu_id' => 22, 'allergen_id' => 1],
            ['menu_id' => 22, 'allergen_id' => 3],

            // ボロネーゼ
            ['menu_id' => 23, 'allergen_id' => 1],
            ['menu_id' => 23, 'allergen_id' => 3],

            // トマトとモッツァレラのパスタ
            ['menu_id' => 24, 'allergen_id' => 1],
            ['menu_id' => 24, 'allergen_id' => 3],

            // 海老とトマトクリームパスタ
            ['menu_id' => 25, 'allergen_id' => 1],
            ['menu_id' => 25, 'allergen_id' => 3],
            ['menu_id' => 25, 'allergen_id' => 6],

            // 明太子スパゲッティ
            ['menu_id' => 26, 'allergen_id' => 1],
            ['menu_id' => 26, 'allergen_id' => 3],
            ['menu_id' => 26, 'allergen_id' => 4],

            // 和風きのこパスタ
            ['menu_id' => 27, 'allergen_id' => 1],
            ['menu_id' => 27, 'allergen_id' => 3],

            // きのこのクリームスパゲッティ
            ['menu_id' => 28, 'allergen_id' => 1],
            ['menu_id' => 28, 'allergen_id' => 3],

            // ペペロンチーノ
            ['menu_id' => 29, 'allergen_id' => 1],

            // アサリのボンゴレビアンコ
            ['menu_id' => 30, 'allergen_id' => 1],

            // 海老とブロッコリーのオイルパスタ
            ['menu_id' => 31, 'allergen_id' => 1],
            ['menu_id' => 31, 'allergen_id' => 6],

            // グラタン風スパゲッティ
            ['menu_id' => 32, 'allergen_id' => 1],
            ['menu_id' => 32, 'allergen_id' => 3],

            // チーズたっぷり焼きパスタ
            ['menu_id' => 33, 'allergen_id' => 1],
            ['menu_id' => 33, 'allergen_id' => 3],

            // マルゲリータピザ
            ['menu_id' => 34, 'allergen_id' => 1],
            ['menu_id' => 34, 'allergen_id' => 3],

            // ４種のチーズピザ
            ['menu_id' => 35, 'allergen_id' => 1],
            ['menu_id' => 35, 'allergen_id' => 3],

            // ベーコンピザ
            ['menu_id' => 36, 'allergen_id' => 1],
            ['menu_id' => 36, 'allergen_id' => 3],

            // マヨコーンピザ
            ['menu_id' => 37, 'allergen_id' => 1],
            ['menu_id' => 37, 'allergen_id' => 3],
            ['menu_id' => 37, 'allergen_id' => 4],

            // ふわとろオムライス
            ['menu_id' => 38, 'allergen_id' => 1],
            ['menu_id' => 38, 'allergen_id' => 3],
            ['menu_id' => 38, 'allergen_id' => 4],

            // オムライス
            ['menu_id' => 39, 'allergen_id' => 1],
            ['menu_id' => 39, 'allergen_id' => 3],
            ['menu_id' => 39, 'allergen_id' => 4],

            // チーズインハンバーグ
            ['menu_id' => 40, 'allergen_id' => 1],
            ['menu_id' => 40, 'allergen_id' => 3],
            ['menu_id' => 40, 'allergen_id' => 4],

            // チキンドリア
            ['menu_id' => 41, 'allergen_id' => 1],
            ['menu_id' => 41, 'allergen_id' => 3],

            // ポークソテー
            ['menu_id' => 42, 'allergen_id' => 1],

            // ミックスグリル
            ['menu_id' => 43, 'allergen_id' => 1],
            ['menu_id' => 43, 'allergen_id' => 3],
            ['menu_id' => 43, 'allergen_id' => 4],

            // サーモンのグリル
            ['menu_id' => 44, 'allergen_id' => 1],
            ['menu_id' => 44, 'allergen_id' => 3],

            // ソーセージ盛り合わせ
            ['menu_id' => 45, 'allergen_id' => 1],
            ['menu_id' => 45, 'allergen_id' => 3],

            // 焼きそば
            ['menu_id' => 46, 'allergen_id' => 1],

            // エビピラフ
            ['menu_id' => 47, 'allergen_id' => 1],
            ['menu_id' => 47, 'allergen_id' => 3],
            ['menu_id' => 47, 'allergen_id' => 6],

            // グリーンサラダ
            // アレルギーなし

            // まんたんハンバーグ定食
            ['menu_id' => 49, 'allergen_id' => 1],
            ['menu_id' => 49, 'allergen_id' => 3],
            ['menu_id' => 49, 'allergen_id' => 4],

            // チーズインハンバーグ定食
            ['menu_id' => 50, 'allergen_id' => 1],
            ['menu_id' => 50, 'allergen_id' => 3],
            ['menu_id' => 50, 'allergen_id' => 4],

            // やみつきチキン南蛮定食
            ['menu_id' => 51, 'allergen_id' => 1],
            ['menu_id' => 51, 'allergen_id' => 3],
            ['menu_id' => 51, 'allergen_id' => 4],

            // スパイシーチキンステーキ定食
            ['menu_id' => 52, 'allergen_id' => 1],

            // 唐揚げ定食
            ['menu_id' => 53, 'allergen_id' => 1],
            ['menu_id' => 53, 'allergen_id' => 4],

            // 豚の生姜焼き定食
            ['menu_id' => 54, 'allergen_id' => 1],

            // トンカツ定食
            ['menu_id' => 55, 'allergen_id' => 1],
            ['menu_id' => 55, 'allergen_id' => 4],

            // アジフライ定食
            ['menu_id' => 56, 'allergen_id' => 1],
            ['menu_id' => 56, 'allergen_id' => 4],

            // サバの塩焼き定食
            ['menu_id' => 57, 'allergen_id' => 1],

            // 鮮魚の照り焼き定食
            ['menu_id' => 58, 'allergen_id' => 1],

            // 野菜炒め定食
            ['menu_id' => 59, 'allergen_id' => 1],

            // 満腹まんたんセット
            ['menu_id' => 60, 'allergen_id' => 1],
            ['menu_id' => 60, 'allergen_id' => 3],
            ['menu_id' => 60, 'allergen_id' => 4],

            // よくばりまんたんセット
            ['menu_id' => 61, 'allergen_id' => 1],
            ['menu_id' => 61, 'allergen_id' => 3],
            ['menu_id' => 61, 'allergen_id' => 4],

            // デミグラスハンバーグセット
            ['menu_id' => 62, 'allergen_id' => 1],
            ['menu_id' => 62, 'allergen_id' => 3],
            ['menu_id' => 62, 'allergen_id' => 4],

            // 和風おろしハンバーグセット
            ['menu_id' => 63, 'allergen_id' => 1],
            ['menu_id' => 63, 'allergen_id' => 4],

            // ナポリタンセット
            ['menu_id' => 64, 'allergen_id' => 1],
            ['menu_id' => 64, 'allergen_id' => 3],

            // カルボナーラセット
            ['menu_id' => 65, 'allergen_id' => 1],
            ['menu_id' => 65, 'allergen_id' => 3],
            ['menu_id' => 65, 'allergen_id' => 4],

            // 明太子スパゲッティセット
            ['menu_id' => 66, 'allergen_id' => 1],
            ['menu_id' => 66, 'allergen_id' => 3],
            ['menu_id' => 66, 'allergen_id' => 4],

            // ビーフカレーセット
            ['menu_id' => 67, 'allergen_id' => 1],
            ['menu_id' => 67, 'allergen_id' => 3],

            // チキンカレーセット
            ['menu_id' => 68, 'allergen_id' => 1],
            ['menu_id' => 68, 'allergen_id' => 3],

            // サーモンのグリルセット
            ['menu_id' => 69, 'allergen_id' => 1],
            ['menu_id' => 69, 'allergen_id' => 3],

            // 白身魚フライセット
            ['menu_id' => 70, 'allergen_id' => 1],
            ['menu_id' => 70, 'allergen_id' => 3],
            ['menu_id' => 70, 'allergen_id' => 4],

            // お子さまセット
            ['menu_id' => 71, 'allergen_id' => 1],
            ['menu_id' => 71, 'allergen_id' => 3],
            ['menu_id' => 71, 'allergen_id' => 4],
            ['menu_id' => 71, 'allergen_id' => 6],

            // ペアセット
            ['menu_id' => 72, 'allergen_id' => 1],
            ['menu_id' => 72, 'allergen_id' => 3],
            ['menu_id' => 72, 'allergen_id' => 4],

            // キッズカレープレート
            ['menu_id' => 73, 'allergen_id' => 1],
            ['menu_id' => 73, 'allergen_id' => 3],

            // キッズパンケーキプレート
            ['menu_id' => 74, 'allergen_id' => 1],
            ['menu_id' => 74, 'allergen_id' => 3],
            ['menu_id' => 74, 'allergen_id' => 4],

            // お子さまうどん
            ['menu_id' => 75, 'allergen_id' => 1],

            // キッズハンバーグプレート
            ['menu_id' => 76, 'allergen_id' => 1],
            ['menu_id' => 76, 'allergen_id' => 3],
            ['menu_id' => 76, 'allergen_id' => 4],

            // キッズオムライスプレート
            ['menu_id' => 77, 'allergen_id' => 1],
            ['menu_id' => 77, 'allergen_id' => 4],

            // キッズチーズピザプレート
            ['menu_id' => 78, 'allergen_id' => 1],
            ['menu_id' => 78, 'allergen_id' => 3],

            // キッズミートスパゲッティプレート
            ['menu_id' => 79, 'allergen_id' => 1],
            ['menu_id' => 79, 'allergen_id' => 3],

            // ポテトフライ
            // アレルギーなし

            // コーンスープ
            ['menu_id' => 81, 'allergen_id' => 1],
            ['menu_id' => 81, 'allergen_id' => 3],

            // 唐揚げ
            ['menu_id' => 82, 'allergen_id' => 1],
            ['menu_id' => 82, 'allergen_id' => 4],

            // 軟骨の唐揚げ
            ['menu_id' => 83, 'allergen_id' => 1],
            ['menu_id' => 83, 'allergen_id' => 4],

            // フライドポテト
            // アレルギーなし

            // オニオンリング
            ['menu_id' => 85, 'allergen_id' => 1],
            ['menu_id' => 85, 'allergen_id' => 4],

            // チキンナゲット
            ['menu_id' => 86, 'allergen_id' => 1],
            ['menu_id' => 86, 'allergen_id' => 3],
            ['menu_id' => 86, 'allergen_id' => 4],

            // まんたんハンバーグ弁当
            ['menu_id' => 87, 'allergen_id' => 1],
            ['menu_id' => 87, 'allergen_id' => 3],
            ['menu_id' => 87, 'allergen_id' => 4],

            // 和風おろしハンバーグ弁当
            ['menu_id' => 88, 'allergen_id' => 1],
            ['menu_id' => 88, 'allergen_id' => 4],

            // チーズインハンバーグ弁当
            ['menu_id' => 89, 'allergen_id' => 1],
            ['menu_id' => 89, 'allergen_id' => 3],
            ['menu_id' => 89, 'allergen_id' => 4],

            // チキン南蛮弁当
            ['menu_id' => 90, 'allergen_id' => 1],
            ['menu_id' => 90, 'allergen_id' => 3],
            ['menu_id' => 90, 'allergen_id' => 4],

            // 唐揚げ弁当
            ['menu_id' => 91, 'allergen_id' => 1],
            ['menu_id' => 91, 'allergen_id' => 4],

            // 生姜焼き弁当
            ['menu_id' => 92, 'allergen_id' => 1],

            // トンカツ弁当
            ['menu_id' => 93, 'allergen_id' => 1],
            ['menu_id' => 93, 'allergen_id' => 4],

            // 焼き鮭弁当
            ['menu_id' => 94, 'allergen_id' => 1],
            
            // 白身魚フライ弁当
            ['menu_id' => 95, 'allergen_id' => 1],
            ['menu_id' => 95, 'allergen_id' => 3],
            ['menu_id' => 95, 'allergen_id' => 4],

            // ビーフカレー弁当
            ['menu_id' => 96, 'allergen_id' => 1],
            ['menu_id' => 96, 'allergen_id' => 3],

            // チキンカレー弁当
            ['menu_id' => 97, 'allergen_id' => 1],
            ['menu_id' => 97, 'allergen_id' => 3],

            // オムライス弁当
            ['menu_id' => 98, 'allergen_id' => 1],
            ['menu_id' => 98, 'allergen_id' => 4],

            // ナポリタン弁当
            ['menu_id' => 99, 'allergen_id' => 1],
            ['menu_id' => 99, 'allergen_id' => 3],

            // キッズハンバーグ弁当
            ['menu_id' => 100, 'allergen_id' => 1],
            ['menu_id' => 100, 'allergen_id' => 3],
            ['menu_id' => 100, 'allergen_id' => 4],

            // まんたん特製オードブル
            ['menu_id' => 101, 'allergen_id' => 1],
            ['menu_id' => 101, 'allergen_id' => 3],
            ['menu_id' => 101, 'allergen_id' => 4],
            ['menu_id' => 101, 'allergen_id' => 6],

            // ドリンクバー
            // アレルギーなし

            // レモンスカッシュ
            // アレルギーなし

            // マンゴースムージー
            ['menu_id' => 104, 'allergen_id' => 1],

            // 濃厚ガトーショコラ
            ['menu_id' => 105, 'allergen_id' => 1],
            ['menu_id' => 105, 'allergen_id' => 3],
            ['menu_id' => 105, 'allergen_id' => 4],

            // ミニパフェ
            ['menu_id' => 106, 'allergen_id' => 1],
            ['menu_id' => 106, 'allergen_id' => 3],
            ['menu_id' => 106, 'allergen_id' => 4],

            // パンケーキ
            ['menu_id' => 107, 'allergen_id' => 1],
            ['menu_id' => 107, 'allergen_id' => 3],
            ['menu_id' => 107, 'allergen_id' => 4],

            // チョコレートパフェ
            ['menu_id' => 108, 'allergen_id' => 1],
            ['menu_id' => 108, 'allergen_id' => 3],
            ['menu_id' => 108, 'allergen_id' => 4],

            // いちごパフェ
            ['menu_id' => 109, 'allergen_id' => 1],
            ['menu_id' => 109, 'allergen_id' => 3],
            ['menu_id' => 109, 'allergen_id' => 4],

            // プリンアラモード
            ['menu_id' => 110, 'allergen_id' => 1],
            ['menu_id' => 110, 'allergen_id' => 3],
            ['menu_id' => 110, 'allergen_id' => 4],

            // ショートケーキ
            ['menu_id' => 111, 'allergen_id' => 1],
            ['menu_id' => 111, 'allergen_id' => 3],
            ['menu_id' => 111, 'allergen_id' => 4],

            // ティラミス
            ['menu_id' => 112, 'allergen_id' => 1],
            ['menu_id' => 112, 'allergen_id' => 3],
            ['menu_id' => 112, 'allergen_id' => 4],

            // ベイクドチーズケーキ
            ['menu_id' => 113, 'allergen_id' => 1],
            ['menu_id' => 113, 'allergen_id' => 3],
            ['menu_id' => 113, 'allergen_id' => 4],

            // アイスクリーム（バニラ）
            ['menu_id' => 114, 'allergen_id' => 3],
            ['menu_id' => 114, 'allergen_id' => 4],

            // アイスクリーム（チョコ）
            ['menu_id' => 115, 'allergen_id' => 3],
            ['menu_id' => 115, 'allergen_id' => 4],

            // アイスクリーム（抹茶）
            ['menu_id' => 116, 'allergen_id' => 3],
            ['menu_id' => 116, 'allergen_id' => 4],

            // ソフトクリームサンデー（チョコ）
            ['menu_id' => 117, 'allergen_id' => 3],
            ['menu_id' => 117, 'allergen_id' => 4],

            // ソフトクリームサンデー（いちご）
            ['menu_id' => 118, 'allergen_id' => 3],
            ['menu_id' => 118, 'allergen_id' => 4],

            // ソフトクリームサンデー（キャラメルソース）
            ['menu_id' => 119, 'allergen_id' => 3],
            ['menu_id' => 119, 'allergen_id' => 4],

            // 和風デザート（白玉あんみつ）
            ['menu_id' => 120, 'allergen_id' => 1],
            
            // 和風デザート（抹茶わらびもち）
            // アレルギーなし
        ]);
    }
}
