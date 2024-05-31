<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAuthenSeeder extends Seeder
{
    public function run()
    {
        DB::table('UserAuthen')->insert([
            'userName' => 'Zennie',
            'userPass' => Hash::make('password123'),
        ]);
    }
}