<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('users')->insert([
            [
                'name' => 'admin', 
                'email' => 'admin@gmail.com', 
                'ic' => '071017110475', 
                'phone' => '0123456789',
                'role' => 'admin', 
                'password' => bcrypt('password')
            ],
            [
                'name' => 'user', 
                'email' => 'user@gmail.com', 
                'phone' => '0123456789',
                'ic' => '071226110475', 
                'role' => 'user', 
                'password' => bcrypt('password')
            ],
        ]);
    }
}
