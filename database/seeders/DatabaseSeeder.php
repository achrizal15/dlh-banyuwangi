<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\StaticPage;
// use App\Models\Kategori;
// use App\Models\Dokumen;
// use App\Models\Galery;
// use App\Models\Artikel;
// use App\Models\Banner;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(StaticPageSeeder::class);
        $this->call(CeritaSuksesSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(DokumenSeeder::class);
        $this->call(GalerySeeder::class);
        $this->call(ArtikelSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(MitraDLHSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
