<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_wins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rooms')->references('id')->on('rooms');
            $table->string('img1',30);
            $table->string('img2',30);
            $table->string('playerwin',25);
            $table->string('coment',80);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_wins');
    }
};
