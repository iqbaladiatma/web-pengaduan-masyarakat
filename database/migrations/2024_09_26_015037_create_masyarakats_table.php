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
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->char('NIK',16)->primary();
            $table->string('Nama');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Telp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};
