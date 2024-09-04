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
        Schema::create('bridalstyles', function (Blueprint $table) {
            $table->string('id_bridalstyle')->primary();
            $table->string('nama_paket_bridalstyle');
            $table->text('deskripsi_paket');
            $table->bigInteger('harga_paket');
            $table->string('foto_bridalstyle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bridalstyles');
    }
};
