<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $fillable = [
        'caption',
        'media_id',
        'media_url',
        'media_type',
        'permalink',
        'username',
        'post_at'
    ];
}
