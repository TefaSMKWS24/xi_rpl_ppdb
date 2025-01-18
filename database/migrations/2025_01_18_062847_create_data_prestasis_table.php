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
        Schema::create('data_prestasi', function (Blueprint $table) {
           $table->string('nama_prestasi',50);  
           $table->date('tahun');
           $table->string('penyelenggara',50);
           $table->string('tempat',50);
           $table->string('piagam',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_prestasi');
    }
};
