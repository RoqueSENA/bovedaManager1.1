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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->timestamp('fechaMov');
            $table->bigInteger('codFondDestMov')->unsigned();
            $table->bigInteger('codFondOrigMov')->unsigned();
            $table->string('divisaMov');
            $table->bigInteger('estadoMov')->unsigned();
            $table->string('protocoloMov');
            $table->bigInteger('denominacionMov')->unsigned();
            $table->bigInteger('calidadMov')->unsigned();
            $table->integer('cantRealMov');
            $table->integer('cantProtMov');
            $table->integer('cantidadMov');

            //$table->foreign('codFondDestMov')->references('id')->on('fondos')->onDelete("cascade");
            //$table->foreign('codFondOrigMov')->references('id')->on('fondos')->onDelete("cascade");
            //$table->foreign('estadoMov')->references('id')->on('estados')->onDelete("cascade");
            //$table->foreign('calidadMov')->references('id')->on('calidades')->onDelete("cascade");
            //$table->foreign('denominacionMov')->references('id')->on('denominaciones')->onDelete("cascade");
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
        Schema::dropIfExists('movimientos');
    }
};
