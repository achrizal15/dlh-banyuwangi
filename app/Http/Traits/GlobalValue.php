<?php

namespace App\Http\Traits;

use App\Models\Kategori;

/**
 * 
 */
trait GlobalValue
{
    public function setGlobatValue()
    {
        $data = [
            "title" => "Dinas Lingkungan Hidup Banyuwangi",
            "footer" => 'dlh',
            'navinformasidanregulasi' => Kategori::select(['nama', 'id'])->get(),
        ];
        return $data;
    }
}







?>