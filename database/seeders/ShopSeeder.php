<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([[
            
            'shop_name' => 'スクエア',
            'floor' => '1F',
            //'img_path' => '',
            'introduction' => '様々なものが売っています．',
            'business_hours' => '9:00〜17:00',
            'map_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'shop_name' => 'MU SHOP LIONA',
            'floor' => '1F',
            //'img_path' => '',
            'introduction' => '様々なものが売っています．',
            'business_hours' => '9:00〜17:00',
            'map_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ]]);
    }
}
