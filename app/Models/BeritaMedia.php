<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaMedia extends Model
{
    use HasFactory;

    protected $table = 'berita_media';

    protected $fillable = [
        'berita_id',
        'file',
        'tipe',
    ];

    public function berita()
    {
        return $this->belongsTo(
            Berita::class,
            'berita_id'
        );
    }
}
