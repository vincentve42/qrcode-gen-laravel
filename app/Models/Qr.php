<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    protected $fillable = ['token', 'url', 'redirect', 'url'];

    
}
