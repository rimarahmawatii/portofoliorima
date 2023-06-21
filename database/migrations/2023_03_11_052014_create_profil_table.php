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
        Schema::create('profil', function (Blueprint $table) {
            // $table->id();
            $table->integer('nis');
            $table->string('nama',50);
            $table->string('no_telpon',13);
            $table->string('email',50);
            $table->string('JK',60);
            $table->string('deskripsi',250);
            $table->text('alamat');
            $table->text('foto');
            $table->primary('nis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
