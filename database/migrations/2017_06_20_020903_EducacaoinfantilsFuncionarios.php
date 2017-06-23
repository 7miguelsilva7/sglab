<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducacaoinfantilsFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('educacaoinfantils_funcionarios',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('educacaoinfantil_id')->unsigned()->index();
			$table->foreign('educacaoinfantil_id')->references('id')->on('educacaoinfantils')->onDelete('cascade');
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
        Schema::drop('educacaoinfantils_funcionarios');
    }
}
