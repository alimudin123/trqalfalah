<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            $table->string('nama_santri');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);

            $table->string('nik', 20)->unique();

            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');

            $table->string('asal_sekolah');

            $table->string('nama_ayah');
            $table->string('hp_ayah', 20);
            $table->string('pekerjaan_ayah');

            $table->string('nama_ibu');
            $table->string('hp_ibu', 20);
            $table->string('pekerjaan_ibu');

            $table->text('alamat');

            $table->string('nama_wali')->nullable();

            $table->text('kritik_saran')->nullable();

            $table->enum('status', [
                'Menunggu',
                'Diterima',
                'Ditolak'
            ])->default('Menunggu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};