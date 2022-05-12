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
        Schema::create('informacionusers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user");
            $table ->string("nacionalidad",30);
            $table ->string("ciudad",30);
            $table ->string("alergias",30);
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
        Schema::dropIfExists('informacionusers');
    }
};
