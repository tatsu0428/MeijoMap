<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert([[
            
            'building_name' => 'タワー75',
            'introduction' => '情報処理教室，食堂，売店',
            'top' => 0,
            'left' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'building_name' => '共通講義棟南',
            'introduction' => '講義室，ゼミ，LL教室',
            'top' => 0,
            'left' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'building_name' => '共通講義棟北',
            'introduction' => '講義室，学生ホール，自習室，実験室，食堂，売店',
            'top' => 0,
            'left' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'building_name' => '共通講義棟東',
            'introduction' => '講義室，情報処理教室，書庫',
            'top' => 0,
            'left' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
