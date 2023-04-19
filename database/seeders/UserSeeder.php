<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"admin",
            "email"=>"admin@gmail.com",
            "role"=>"admin",
            "password"=>Hash::make('admin123'),
            "remember_token"=>Str::random(60),
        ]);
    }
}
