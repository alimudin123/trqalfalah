<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
    'nama_program',
    'slug',
    'deskripsi',
    'gambar',
    'durasi',
    'jadwal',
    'jumlah_santri',
    'status',
];
}
