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
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->date('mulai');
            $table->date('selesai');
            $table->enum('status', [0, 1])->default(0); 
            $table->unsignedBigInteger('id_mobil');
            $table->unsignedBigInteger('id_pengguna');
            $table->foreign('id_mobil')
                    ->references('id')
                    ->on('mobil');
            $table->foreign('id_pengguna')
                    ->references('id')
                    ->on('pengguna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam');
    }
};
