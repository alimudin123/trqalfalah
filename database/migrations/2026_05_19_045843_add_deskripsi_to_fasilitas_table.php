<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('fasilitas', function (Blueprint $table) {
            if (!Schema::hasColumn('fasilitas', 'deskripsi')) {
                $table->string('deskripsi')->nullable()->after('id');
            }

            if (!Schema::hasColumn('fasilitas', 'foto')) {
                $table->string('foto')->nullable()->after('deskripsi');
            }
        });
    }

    public function down(): void
    {
        Schema::table('fasilitas', function (Blueprint $table) {
            if (Schema::hasColumn('fasilitas', 'deskripsi')) {
                $table->dropColumn('deskripsi');
            }

            if (Schema::hasColumn('fasilitas', 'foto')) {
                $table->dropColumn('foto');
            }
        });
    }
};