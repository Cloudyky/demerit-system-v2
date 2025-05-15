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
        // untuk admin dan warden
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
                'name' => 'warden',
                'email' => 'warden@gmail.com',
                'phone' => '0133456789',
                'ic' => '071226110475',
                'role' => 'warden',
                'password' => bcrypt('password')
            ],
        ]);
    }
}
