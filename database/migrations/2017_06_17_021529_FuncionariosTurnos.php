<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FuncionariosTurnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('funcionarios_turnos',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('funcionario_id')->unsigned()->index();
			$table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
			$table->integer('turno_id')->unsigned()->index();
			$table->foreign('turno_id')->references('id')->on('turnos')->onDelete('cascade');
			/**
			 * Type your addition here
			 *
			 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('funcionarios_turnos');
    }
}
