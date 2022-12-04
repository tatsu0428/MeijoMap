<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([[
            
            'cafeteria_id' => '1',
            'menu_name' => 'A定食',
            //'img_path' => '',
            'menu_price' => '500円',
            'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'cafeteria_id' => '1',
            'menu_name' => 'B定食',
            //'img_path' => '',
            'menu_price' => '500円',
            //'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'cafeteria_id' => '1',
            'menu_name' => 'C定食',
            //'img_path' => '',
            'menu_price' => '500円',
            //'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'cafeteria_id' => '2',
            'menu_name' => 'A定食',
            //'img_path' => '',
            'menu_price' => '500円',
            'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'cafeteria_id' => '2',
            'menu_name' => 'B定食',
            //'img_path' => '',
            'menu_price' => '500円',
            //'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'cafeteria_id' => '2',
            'menu_name' => 'C定食',
            //'img_path' => '',
            'menu_price' => '500円',
            //'sold_out' => '売り切れ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
