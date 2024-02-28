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
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('UserId');
            $table->bigInteger('BukuId');
            $table->date('TanggalPeminjaman');
            $table->date('TanggalHarusKembali');
            $table->date('TanggalPengembalian')->nullable();
            $table->string('StatusPeminjaman')->default('belum dikembalikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
