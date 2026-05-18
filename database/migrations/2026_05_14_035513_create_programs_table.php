<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {

            $table->id();

            $table->string('nama_program');

            $table->string('slug')->nullable();

            $table->text('deskripsi');

            $table->string('gambar')->nullable();

            $table->string('durasi')->nullable();

            $table->string('jadwal')->nullable();

            $table->string('target_hafalan')->nullable();

            $table->integer('jumlah_santri')->default(0);

            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
