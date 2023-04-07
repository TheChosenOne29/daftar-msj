<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ramu extends Model
{
    protected $fillable = [
        'tanggal',
        'jam',
        'judul'
    ];
}
