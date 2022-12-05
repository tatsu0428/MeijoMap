<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([[
            
            'facility_name' => '情報処理教室',
            'floor' => '6F, 7F',
            'img_path' => 'storage/sample/default.png',
            'introduction' => 'PCを使うことができます．',
            'business_hours' => '9:00〜22:00',
            'map_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'facility_name' => '講義室',
            'floor' => '1F〜4F',
            'img_path' => 'storage/sample/default.png',
            'introduction' => '講義を受けます．',
            'business_hours' => '特になし',
            'map_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'facility_name' => '講義室',
            'floor' => '1F〜4F',
            'img_path' => 'storage/sample/default.png',
            'introduction' => '講義を受けます．',
            'business_hours' => '特になし',
            'map_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'facility_name' => '情報処理教室',
            'floor' => '5F',
            'img_path' => 'storage/sample/default.png',
            'introduction' => 'PCを使うことができます．',
            'business_hours' => '9:00〜22:00',
            'map_id' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'facility_name' => '講義室',
            'floor' => '1F〜4F',
            'img_path' => 'storage/sample/default.png',
            'introduction' => '講義を受けます．',
            'business_hours' => '特になし',
            'map_id' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
    }
}
