<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kuliah'; 

    protected $fillable = [
        'mata_kuliah',
        'dosen',
        'ruangan',
        'hari',
        'jam_mulai',
        'jam_selesai',
    ];
}
