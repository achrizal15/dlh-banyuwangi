<?php

namespace Database\Seeders;

use App\Models\MitraDLH;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraDLHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'name' => 'Banyuwangi Hijau',
                'gambar' => 'https://drive.google.com/file/d/16TX180cQKEiLNqp88iTRsSc-CM4tcYVL/view?usp=share_link ',
                'link' => 'Direct ke page BWH'
            ),
            array(
                'name' => 'Systemiq',
                'gambar' => 'https://drive.google.com/file/d/1v80UZe0rqoRcvnlNN9q6OYvWqkv1gOy_/view?usp=share_link ',
                'link' => 'https://www.systemiq.earth/ '
            ),
            array(
                'name' => 'Borealis',
                'gambar' => 'https://drive.google.com/file/d/1rJ3W5U_3ovJ1CenoGI2B7sIps44KNtxL/view?usp=share_link ',
                'link' => 'https://www.borealisgroup.com/ '
            ),
            array(
                'name' => 'CLOCC',
                'gambar' => 'https://drive.google.com/file/d/1nilObGan2cNhORglgRfhEx1Hs06uZV1W/view?usp=share_link ',
                'link' => 'https://www.cloccglobal.org/ '
            ),
            array(
                'name' => 'EcoRanger',
                'gambar' => 'https://drive.google.com/file/d/1F1wPAOwECAS_1B_x_wBBRJnN4VRNqgl-/view?usp=share_link ',
                'link' => 'https://ecoranger.id/ '
            ),
            array(
                'name' => 'Sungai Watch',
                'gambar' => 'https://drive.google.com/file/d/1RaJRMfMTTCT8entR1olWwrNNdjJv2KvN/view?usp=share_link ',
                'link' => 'https://sungai.watch/ '
            )
        );
        MitraDLH::insert($data);
    }
}
