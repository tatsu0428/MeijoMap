<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CafeteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cafeterias')->insert([[
            
            'cafeteria_name' => 'そらいろラウンジ',
            'floor' => '15F',
            //'img_path' => '',
            'introduction' => '様々なメニューがあります．',
            'congestion_situation' => '混んでいます．',
            'business_hours' => '11:00〜17:00',
            'map_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'cafeteria_name' => 'カーサ',
            'floor' => '1F',
            //'img_path' => '',
            'introduction' => '様々なメニューがあります．',
            'congestion_situation' => '混んでいます．',
            'business_hours' => '11:00〜17:00',
            'map_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'cafeteria_name' => 'オリーブ',
            'floor' => '1F',
            //'img_path' => '',
            'introduction' => '様々なメニューがあります．',
            'congestion_situation' => '混んでいます．',
            'business_hours' => '11:00〜17:00',
            'map_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'cafeteria_name' => '名城食堂',
            'floor' => 'B1F',
            //'img_path' => '',
            'introduction' => '様々なメニューがあります．',
            'congestion_situation' => '混んでいます．',
            'business_hours' => '11:00〜17:00',
            'map_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
