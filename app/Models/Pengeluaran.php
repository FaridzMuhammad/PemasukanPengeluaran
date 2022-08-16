<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluran extends Model
{
    use HasFactory;

    protected $fillabel = [
        'id',
        'nominal',
        'kategori',
        'tanggal',
    ];
    protected $hidden = [];
}
