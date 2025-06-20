<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration

{
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mapels_id');
            $table->unsignedBigInteger('gurus_id');
            $table->string('hari', 10);
            $table->time('jam_m');
            $table->time('jam_k');
            $table->timestamps();

            $table->foreign('mapels_id')->references('id')->on('mapels')->onDelete('cascade');
            $table->foreign('gurus_id')->references('id')->on('gurus')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
}
