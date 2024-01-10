<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::create([
            "judul"=>"artikel 1",
            "link"=>"artikel-1",
            "deskripsi"=>"ini adalah artikel 1",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Artikel::create([
            "judul"=>"artikel 2",
            "link"=>"artikel-2",
            "deskripsi"=>"ini adalah artikel 2",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Artikel::create([
            "judul"=>"artikel 3",
            "link"=>"artikel-3",
            "deskripsi"=>"ini adalah artikel 3",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Artikel::create([
            "judul"=>"artikel 4",
            "link"=>"artikel-4",
            "deskripsi"=>"ini adalah artikel 4",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
        Artikel::create([
            "judul"=>"artikel 5",
            "link"=>"artikel-5",
            "deskripsi"=>"ini adalah artikel 5",
            "gambar"=>"https://source.unsplash.com/600x400",
            "created_by"=>"husnul",
        ]);
    }
}
