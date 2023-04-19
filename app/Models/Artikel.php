<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates=["created_at"];
    public function scopeFilter($query,$filters=[]){
            $query->when($filters['search']??false,function($query,$search){
                return $query->where('judul',"like","%$search%");
            });
    }
}
