<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dataSmartAgro extends Model //models digunakan sebagai jembatan antara controller dengan database jadi gaperlu pake query2 an
{
    use SoftDeletes;

    protected $table = 'data_smart_agros';
    protected $fillable = ['phTanah', 'kelembapanTanah', 'suhuTanah']; // dari create_data_smart.... dalam folder database harus di definisikan juga di dalam fillable

    protected  $hidden;
    // setelah itu kita lakukan proses migrate untuk memasukkan data yg sudah dibuat ke dalam database mysql
    //di terminal dengan comment 'php artisan migrate:fresh'  #fresh artinya untuk menggantikan table yg sebelummnya sdh dibikin

}
