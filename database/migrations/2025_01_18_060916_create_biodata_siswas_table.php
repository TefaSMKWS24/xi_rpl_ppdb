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
        Schema::create('biodata_siswa', function (Blueprint $table) {
            $table->string('nama',30);
            $table->string('jenis_kelamin',10);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir',10);
            $table->string('kewarganegaraan',20);
            $table->string('agama',10);
            $table->string('alamat',50);  
            $table->string('foto',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_siswa');
    }
};
