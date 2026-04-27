<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'jurusan_id',
        'fullname',
        'NIP',
        'NIDN',
        'pendidikan_terakhir',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
    ];
}
