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
        Schema::create('item_main_courses', function (Blueprint $table) {
            $table->string('id_item_maincourse')->primary();
            $table->string('nama_makanan');
            $table->string('jenis_makanan');
            $table->string('deskripsi_makanan');
            $table->string('foto_makanan');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_main_courses');
    }
};
