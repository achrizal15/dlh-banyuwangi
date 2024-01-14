<?php

namespace Database\Seeders;

use App\Models\InstagramApi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstagramApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstagramApi::create([
            'access_token' => env('INSTAGRAM_TOKEN'),
            'expired_at' => \Carbon\Carbon::now()->addSeconds(5183902),
            'token_type' => 'bearer'
        ]);
    }
}
