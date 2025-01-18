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
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->string('nama',30);
            $table->string('nisn',11);
            $table->string('nik',17);
            $table->string('tempat_lahir',10);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin',11);
            $table->string('agama',10);
            $table->string('alamat',50);
            $table->string('asal_sekolah',20);
            $table->string('anak_ke',20);
            $table->string('tb',4);
            $table->string('bb',3);
            $table->string('golongan_darah',2);
            $table->string('telepon',13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswa');
    }
};
