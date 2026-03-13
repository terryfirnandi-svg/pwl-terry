<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
   use HasFactory;

   protected $fillable= [
    'nama_lengkap',
    'NIP',
    'NIDN',
    'pendidikan_terakhir',
    'jurusan_id',
    'tempat_lahir',
    'tanggal_lahir',
    'alamat'
   ];
}
