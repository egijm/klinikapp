<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
         public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('No_Pasien');
            $table->string('Nama');
            $table->string('Umur');
            $table->string('Foto')->nullable();
            $table->string('Jenis_Kelamin');
            $table->string('Alamat')->nullable();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
