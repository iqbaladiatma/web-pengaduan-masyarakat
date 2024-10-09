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
            $table->text('Tanggapan')->nullable();
            $table->string('Id Petugas')->nullable();
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
