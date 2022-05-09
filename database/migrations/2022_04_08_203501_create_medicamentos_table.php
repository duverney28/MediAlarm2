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
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user");
            $table ->string("title",255);
            $table ->text("textColor");
            $table ->text("color");
            $table ->text("frecuencia");
            $table ->string("hora");
            $table ->dateTime("start");
            $table ->dateTime("end");
            $table->foreign("id_user")->references("id") ->on("users");

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
        Schema::dropIfExists('medicamentos');
    }
};
