<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CafeteriaNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cafeteria_news')->insert([[
            
            'cafeteria_id' => '1',
            'news_title' => '今月のメニュー',
            'news_content' => '今月のメニューを更新しました．',
            //'img_path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'cafeteria_id' => '1',
            'news_title' => 'メニューの値上げについて',
            'news_content' => '原材料価格高騰につき，値上げします．',
            //'img_path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'cafeteria_id' => '3',
            'news_title' => 'メニューの値上げについて',
            'news_content' => '原材料価格高騰につき，値上げします．',
            //'img_path' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
