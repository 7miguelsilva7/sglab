<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DisciplinasFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('disciplinas_funcionarios',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('disciplina_id')->unsigned()->index();
			$table->foreign('disciplina_id')->references('id')->on('disciplinas')->onDelete('cascade');
			$table->integer('funcionario_id')->unsigned()->index();
			$table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
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
        Schema::drop('disciplinas_funcionarios');
    }
}
