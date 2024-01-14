<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramApi extends Model
{
    use HasFactory;
    protected $fillable = [
        'access_token',
        'token_type',
        'expired_at',
    ];

    protected $dates = [
        'expired_at',
    ];
}
