<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([[
            
            'shop_id' => '1',
            'item_name' => 'オレンジジュース',
            //'img_path' => '',
            'item_price' => '150円',
            //'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'shop_id' => '1',
            'item_name' => '牛丼',
            //'img_path' => '',
            'item_price' => '450円',
            'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'shop_id' => '2',
            'item_name' => '焼きそば',
            //'img_path' => '',
            'item_price' => '400円',
            //'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'shop_id' => '2',
            'item_name' => '週刊少年ジャンプ',
            //'img_path' => '',
            'item_price' => '300円',
            //'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
