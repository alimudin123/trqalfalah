<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    protected $table = 'pengajars';

    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'no_telepon',
        'foto',
    ];
}