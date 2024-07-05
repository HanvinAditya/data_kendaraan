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
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->string('nopol')->nullable(); // $table->string('nopol'); (ini wajib isi)
            $table->string('napem')->nullable();
            $table->string('alamat')->nullable();
            $table->string('pengken')->nullable();
            $table->string('merk')->nullable();
            $table->string('warna')->nullable();
            $table->string('type')->nullable();
            $table->string('bbm')->nullable();
            $table->string('jenis')->nullable();
            $table->string('warnatnkb')->nullable();
            $table->string('model')->nullable();
            $table->string('tahunreg')->nullable();
            $table->string('tahunpem')->nullable();
            $table->string('nomorbpkb')->nullable();
            $table->string('isisilinder')->nullable();
            $table->string('berlaku')->nullable();
            $table->string('norang')->nullable();
            $table->string('nomes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas');
    }
};
