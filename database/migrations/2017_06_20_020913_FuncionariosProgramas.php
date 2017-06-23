<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FuncionariosProgramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('funcionarios_programas',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('funcionario_id')->unsigned()->index();
			$table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
			$table->integer('programa_id')->unsigned()->index();
			$table->foreign('programa_id')->references('id')->on('programas')->onDelete('cascade');
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
        Schema::drop('funcionarios_programas');
    }
}
