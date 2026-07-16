<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PrestasiMedia extends Model
{
    use HasFactory;


    protected $table = 'prestasi_media';



    protected $fillable = [

        'prestasi_id',

        'file',

        'tipe',

    ];



    public function prestasi()
    {
        return $this->belongsTo(
            Prestasi::class,
            'prestasi_id'
        );
    }

}