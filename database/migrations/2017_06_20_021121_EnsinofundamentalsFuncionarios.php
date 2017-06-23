<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnsinofundamentalsFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('ensinofundamentals_funcionarios',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('ensinofundamental_id')->unsigned()->index();
			$table->foreign('ensinofundamental_id')->references('id')->on('ensinofundamentals')->onDelete('cascade');
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
        Schema::drop('ensinofundamentals_funcionarios');
    }
}
