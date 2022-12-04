<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            
            'user_name' => 'taro',
            'password' => 'taro123',
            'role_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'user_name' => 'admin',
            'password' => 'admin123',
            'role_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'user_name' => 'hanako',
            'password' => 'hanako123',
            'role_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'user_name' => 'alice',
            'password' => 'alice123',
            'role_id' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'user_name' => 'bob',
            'password' => 'bob123',
            'role_id' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
        
    }
}
