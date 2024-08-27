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
        Schema::create('maincourses', function (Blueprint $table) {
            $table->string('id_maincourse')->primary();
            $table->string('nama_paket_maincourse');
            $table->text('deskripsi_makanan');
            $table->bigInteger('harga_paket');
            $table->string('foto_menu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maincourses');
    }
};
