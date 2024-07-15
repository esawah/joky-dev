<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin1',
            'username' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password1'),
        ]);
    }
}
