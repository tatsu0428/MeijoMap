<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ShopNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_news')->insert([[
            
            'shop_id' => '1',
            'news_title' => '新商品入荷のお知らせ',
            'news_content' => '冬の新商品を入荷しました！',
            'img_path' => 'storage/sample/default.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'shop_id' => '1',
            'news_title' => '今月のおすすめ商品',
            'news_content' => '今月のおすすめ商品は以下です．',
            'img_path' => 'storage/sample/default.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'shop_id' => '2',
            'news_title' => '新商品入荷のお知らせ',
            'news_content' => '冬の新商品を入荷しました！',
            'img_path' => 'storage/sample/default.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'shop_id' => '2',
            'news_title' => 'バーゲン開催',
            'news_content' => '明日から値引きセールを開催します．',
            'img_path' => 'storage/sample/default.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
