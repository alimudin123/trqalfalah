<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('prestasi_media', function (Blueprint $table) {

            $table->id();


            $table->foreignId('prestasi_id')
                ->constrained('prestasis')
                ->cascadeOnDelete();


            $table->string('file');


            $table->enum('tipe', [
                'foto',
                'video'
            ]);


            $table->timestamps();

        });
    }



    public function down(): void
    {
        Schema::dropIfExists('prestasi_media');
    }

};