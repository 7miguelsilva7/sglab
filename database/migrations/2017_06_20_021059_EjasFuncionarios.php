<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EjasFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('ejas_funcionarios',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('eja_id')->unsigned()->index();
			$table->foreign('eja_id')->references('id')->on('ejas')->onDelete('cascade');
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
        Schema::drop('ejas_funcionarios');
    }
}
