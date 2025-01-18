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
        Schema::create('biodata_ortu', function (Blueprint $table) {
            $table->string('nama_ayah',20);
            $table->string('nama_ibu',20);
            $table->string('pekerjaan_ayah',10);
            $table->string('pekerjaan_ibu',10);
            $table->string('alamat',50);
            $table->string('agama',10);
            $table->string('pendidikan_terakhir',10);
            $table->string('telepon',13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_ortu');
    }
};
