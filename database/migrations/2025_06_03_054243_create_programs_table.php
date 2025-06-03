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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')
                ->constrained('mahasiswas')
                ->onDelete('cascade');
            $table->foreignId('paket_id')
                ->constrained('pakets')
                ->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('status');
            $table->foreignId('karyawan_id')
                ->constrained('karyawans')
                ->onDelete('cascade');
            $table->integer('id_uplink');
            $table->text('masalah');
            $table->string('sumber');
            $table->foreignId('sumber_id')
                ->constrained('sumbers')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
