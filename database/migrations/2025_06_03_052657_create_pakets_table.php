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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenjang_pendidikan_id')
                ->constrained('jenjangpendidikans')
                ->onDelete('cascade');
            $table->string('kode');
            $table->string('jenis_paket');
            $table->integer('harga');
            $table->integer('additional');
            $table->integer('durasi');
            $table->integer('fee_tutor');
            $table->integer('fee_tm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
