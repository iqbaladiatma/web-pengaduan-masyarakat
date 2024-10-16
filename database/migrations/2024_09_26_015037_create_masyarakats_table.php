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
            $table->string('Nama', 45);
            $table->string('Email')->unique();
            $table->dateTime('Email_verified_at')->nullable();
            $table->string('Username', 25)->unique();
            $table->string('Password')->nullable();
            $table->string('Telp')->nullable();
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
