<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_pinjam extends Model
{
    protected $table = 'ms_peminjam';
    protected $fillable = ['kode_peminjam','nama_peminjam','alamat_peminjam',
    'telp_peminjam'];
}
