<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Galery;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galery::create([
            "judul"=>"galery 1",
            "link"=>"galery-1",
            "deskripsi"=>"ini adalah galery 1",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Galery::create([
            "judul"=>"galery 2",
            "link"=>"galery-2",
            "deskripsi"=>"ini adalah galery 2",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Galery::create([
            "judul"=>"galery 3",
            "link"=>"galery-3",
            "deskripsi"=>"ini adalah galery 3",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Galery::create([
            "judul"=>"galery 4",
            "link"=>"galery-4",
            "deskripsi"=>"ini adalah galery 4",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Galery::create([
            "judul"=>"galery 5",
            "link"=>"galery-5",
            "deskripsi"=>"ini adalah galery 5",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
    }
}
