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
        Schema::create('undangans', function (Blueprint $table) {
            $table->string('id_undangan')->primary();
            $table->enum('bahan_undangan', ['Kertas Jasmine', 'Matt Paper', 'Art Paper', 'Aster', 'Art Carton', 'Concorde', 'Samson Kraft', 'Ivory', 'Linen', 'Akasia']);
            $table->text('deskripsi_undangan');
            $table->bigInteger('harga_undangan');
            $table->string('foto_undangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangans');
    }
};
