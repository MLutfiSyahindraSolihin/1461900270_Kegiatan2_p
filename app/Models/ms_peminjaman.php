<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_peminjaman extends Model
{
    protected $table = 'ms_peminjaman';
    protected $fillable = ['kode_peminjaman','kode_petugas','kode_peminjam',
    'tgl_peminjaman','tgl_kembali'];
}
