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
        Schema::create('laporans', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->integer('Id Pengaduan')->unique();
            $table->date('Tanggal Tanggapan');
            $table->text('Tanggapan');
            $table->string('Id Petugas');
            $table->enum('Level', ['0','inactive', 'pending']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
