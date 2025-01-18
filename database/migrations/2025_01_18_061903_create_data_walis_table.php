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
        Schema::create('data_wali', function (Blueprint $table) {
            $table->string('nama',30);
            $table->string('pekerjaan',10);
            $table->string('agama',10);
            $table->string('alamat',50);
            $table->string('hubungan_keluarga_dengan_siswa',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_wali');
    }
};
