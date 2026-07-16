<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_santri',
        'jenis_kelamin',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'asal_sekolah',
        'nama_ayah',
        'hp_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'hp_ibu',
        'pekerjaan_ibu',
        'alamat',
        'nama_wali',
        'kritik_saran',
        'status',
    ];
}