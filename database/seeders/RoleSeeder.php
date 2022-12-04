<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([[
            
            'role_name' => '一般ユーザー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'role_name' => '全体管理ユーザー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'role_name' => '売店管理ユーザー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'role_name' => '施設管理ユーザー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'role_name' => '食堂管理ユーザー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
        
    }
}
