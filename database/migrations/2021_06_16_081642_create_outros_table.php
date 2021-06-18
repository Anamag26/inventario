<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outros', function (Blueprint $table) {
            $table->id();
            $table->string('nomeoutros');
            $table->string('descricao');
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
        Schema::dropIfExists('outros');
    }
}
