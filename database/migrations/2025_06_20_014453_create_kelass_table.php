<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelass', function (Blueprint $table) {
            $table->id('id_kelas'); // Primary key untuk kelas
            $table->string('nm_kelas', 50); // Contoh: "X IPA 1"
            $table->unsignedBigInteger('gurus_id'); // Foreign key ke 'gurus.id'
            $table->timestamps();

            // Foreign key ke 'gurus' kolom 'id'
            $table->foreign('gurus_id')->references('id')->on('gurus')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelass');
    }
};
