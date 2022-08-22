<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{

    use HasFactory;

    protected $table = 'pemasukan';

    protected $fillabel = [
        'nominal',
        'kategori',
        'tanggal',
    ];
    protected $hidden = [];
}
