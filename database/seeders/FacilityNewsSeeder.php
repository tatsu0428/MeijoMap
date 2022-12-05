<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FacilityNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facility_news')->insert([[
            
            'facility_id' => '1',
            'news_title' => 'プログラミング講座の開催',
            'news_content' => '来週に開催します！',
            'img_path' => 'storage/sample/default.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'facility_id' => '1',
            'news_title' => '利用可能時間変更のお知らせ',
            'news_content' => '年末年始の利用可能時間は下記の通りとなります．',
            'img_path' => 'storage/sample/default.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'facility_id' => '3',
            'news_title' => '利用可能時間変更のお知らせ',
            'news_content' => '年末年始の利用可能時間は下記の通りとなります．',
            'img_path' => 'storage/sample/default.png',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
