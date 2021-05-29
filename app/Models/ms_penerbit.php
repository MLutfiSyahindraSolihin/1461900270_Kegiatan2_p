<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_penerbit extends Model
{
    protected $table = 'ms_penerbit';
    protected $fillable = ['kode_penerbit','nama_penerbit','alamat_penerbit',
    'telp_penerbit'];
}
