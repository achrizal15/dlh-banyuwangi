<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            "nama"=>"Publikasi",
            "keterangan"=>"Dokumen jenis Publikasi",
            
        ]);
        Kategori::create([
            "nama"=>"Informasi",
            "keterangan"=>"Dokumen jenis Informasi",
            
        ]);
        Kategori::create([
            "nama"=>"Produk Hukum",
            "keterangan"=>"Dokumen jenis Produk Hukum",
            
        ]);
        Kategori::create([
            "nama"=>"SOP - PPID",
            "keterangan"=>"Dokumen jenis SOP - PPID",
            
        ]);
        Kategori::create([
            "nama"=>"DIP-PPID",
            "keterangan"=>"Dokumen jenis DIP-PPID",
            
        ]);
    }
}
