<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates=["created_at"];
    public function scopeFilter($query, $filters)
    {
        $query->when($filters["search"] ?? false, function ($query, $search) {
            return $query->where('nama', "like", "%" . $search . "%")
                ->orWhere('keterangan', "like", "%" . $search . "%");
        });
        $query->when($filters["kategori"] ?? false, function ($query, $kategori) {
            return $query->where('kategori_id', $kategori );
        });
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
