<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('tentang_kamis')) {
            Schema::create('tentang_kamis', function (Blueprint $table) {
                $table->id();
                $table->longText('sejarah')->nullable();
                $table->longText('visi_misi')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('tentang_kamis');
    }
};