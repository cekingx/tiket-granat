<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = ['kode_tiket', 'nama_lengkap', 'instansi', 'email'];
}
