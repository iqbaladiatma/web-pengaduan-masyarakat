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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->integer('Id');
            $table->date('Tanggal Pengaduan')->nullable();
            $table->char('NIK, 16')->primary;
            $table->text('Laporan')->nullable();
            $table->string('Foto Path')->nullable();
            $table->enum('Status', ['active','inactive','pending']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
