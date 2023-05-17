<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulang extends Model
{
    protected $fillable = [
        'link',
        'link_baru'
    ];
}
