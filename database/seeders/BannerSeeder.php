<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            "nama"=>"banner 1",
            "link"=>"banner-1",
            "gambar"=>"https://source.unsplash.com/600x400",
        ]);
        Banner::create([
            "nama"=>"banner 2",
            "link"=>"banner-2",
            "gambar"=>"https://source.unsplash.com/600x400",
        ]);
    }
}
