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
            $table->id('id_pengaduan');
            $table->dateTime('tgl_pengaduan')->nullable();
            $table->char('NIK, 16');
            $table->string('judul_laporan')->nullable();
            $table->text('isi_laporan')->nullable();
            $table->dateTime('tgl_kejadian')->nullable();
            $table->text('lokasi_kejadian')->nullable();
            $table->enum('kategori_kejadian' , ['agama','hukum','lingkungan' , 'sosial'])->nullable();
            $table->string('foto')->nullable();
            $table->enum('Status', ['0','proses','Selesai']);
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
