<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('impressora');
            $table->string('hostname');
            $table->string('maquina');
            $table->string('monitor');
            $table->string('projetor');
            $table->string('estadoprojetor');
            $table->string('observacoes');
            $table->bigInteger('id_escola')->unsigned();
            $table->timestamps();
            $table->foreign('id_escola')->references('id')->on('escolas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
