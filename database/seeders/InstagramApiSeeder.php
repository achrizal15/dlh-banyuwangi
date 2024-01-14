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
            'access_token' => 'IGQWRQYXp3TVZA5WXU4eXBwRXZAXWkhIcEp4NXVlTnhHXzhucm01clJZAMFpwSUVNSkR3ZAEF2UURBeVhHeUJleE9ZAWndHRno4N3ZAPVHljekEyU1pCQ0JISGVRdGtUek9MN2p1MUlDQWFqMlFNQQZDZD',
            'expired_at' => \Carbon\Carbon::now()->addSeconds(5183902),
            'token_type' => 'bearer'
        ]);
    }
}
