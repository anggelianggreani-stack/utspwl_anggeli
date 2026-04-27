<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matkul extends Model
{
    use HasFactory;

    protected $table = 'matkul';

    protected $fillable = [
        'jurusan_id',
        'dosen_id',
        'nama_mk',
        'kode_mk',
        'sks'
    ];
}
