<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StaticPage;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticPage::create([
            "variabel"=>"banyuwangi-bersih",
            "type"=>"home",
            "konten"=>"banyuwangi merupakan.... indah",
        ]);
    }
}
