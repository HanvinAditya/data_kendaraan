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
        Schema::create('form2s', function (Blueprint $table) {
            $table->id();
            $table->string('dakep')->nullable();
            $table->date('exp_stnk')->nullable();
            $table->integer('jatuh_tempo_stnk')->nullable();
            $table->string('exp_tnkb')->nullable();
            $table->date('exp_kir')->nullable();
            $table->integer('jatuh_tempo_kir')->nullable();
            $table->string('bpkb')->nullable();
            $table->string('dup_key')->nullable();
            $table->date('exp_asr')->nullable();
            $table->integer('jatuh_tempo_asuransi')->nullable();
            $table->string('or_q1')->nullable();
            $table->string('or_q2')->nullable();
            $table->string('or_q3')->nullable();
            $table->string('or_q4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form2s');
    }
};
