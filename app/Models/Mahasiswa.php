<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nim', 
        'jenis_kelamin',
        'prodi',
        'tahun_angkatan',
        'tanggal_lahir',
    ];
}
