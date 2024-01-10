<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokumen;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dokumen::create([
            "nama"=>"doc 1",
            "kategori_id"=>"1",
            "keterangan"=>"document 1",
            "link"=>1,
            "file"=>"https://drive.google.com/file/d/14N0azf9y3Xc433qLJHm1l1DcnUDptt4t/view?usp=sharing",
        ]);
        Dokumen::create(["link"=>2,
            "nama"=>"doc 2",
            "kategori_id"=>"2",
            "keterangan"=>"document 2",
            "file"=>"https://drive.google.com/file/d/14N0azf9y3Xc433qLJHm1l1DcnUDptt4t/view?usp=sharing",
        ]);
        Dokumen::create(["link"=>3,
            "nama"=>"doc 3",
            "kategori_id"=>"3",
            "keterangan"=>"document 3",
            "file"=>"https://drive.google.com/file/d/14N0azf9y3Xc433qLJHm1l1DcnUDptt4t/view?usp=sharing",
        ]);
        Dokumen::create(["link"=>4,
            "nama"=>"doc 4",
            "kategori_id"=>"4",
            "keterangan"=>"document 4",
            "file"=>"https://drive.google.com/file/d/14N0azf9y3Xc433qLJHm1l1DcnUDptt4t/view?usp=sharing",
        ]);
        Dokumen::create(["link"=>5,
            "nama"=>"doc 5",
            "kategori_id"=>"5",
            "keterangan"=>"document 5",
            "file"=>"https://drive.google.com/file/d/14N0azf9y3Xc433qLJHm1l1DcnUDptt4t/view?usp=sharing",
        ]);
    }
}
