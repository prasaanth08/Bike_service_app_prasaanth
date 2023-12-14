<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas=[
            'name'=> 'Admin',
            'email'=>'admin@gmail.com',
            'phone'=>'1234567890',
            'password'=> Hash::make('123456'),
            'role'=>'0'
        ];
        DB::table('users')->insert($datas);
    }
}
