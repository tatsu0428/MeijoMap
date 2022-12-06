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
            
            'name' => 'taro',
            'email' => 'taro123@ccmailg.meijo-u.ac.jp',
            'password' => 'taro123',
            'role_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'name' => 'admin',
            'email' => 'admin123@ccmailg.meijo-u.ac.jp',
            'password' => 'admin123',
            'role_id' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        
        ],[
            
            'name' => 'hanako',
            'email' => 'hanako123@ccmailg.meijo-u.ac.jp',
            'password' => 'hanako123',
            'role_id' => 3,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'name' => 'alice',
            'email' => 'alice123@ccmailg.meijo-u.ac.jp',
            'password' => 'alice123',
            'role_id' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ],[
            
            'name' => 'bob',
            'email' => 'bob123@ccmailg.meijo-u.ac.jp',
            'password' => 'bob123',
            'role_id' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        ]]);
        
    }
}
