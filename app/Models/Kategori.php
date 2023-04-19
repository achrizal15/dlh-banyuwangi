<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function dokumen(){
        return $this->hasOne(Dokumen::class,"kategori_id","id");
    }
}
