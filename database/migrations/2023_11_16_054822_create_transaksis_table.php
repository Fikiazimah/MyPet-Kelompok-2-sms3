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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->string('id_karyawan');
            $table->string('nama_hewan',100);
            $table->string('nama_pemilik',100);
            $table->date('tanggal_penitipan');
            $table->date('tanggal_pengembalian');
            $table->string('lama_penitipan');
            $table->string('harga_perhari');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
