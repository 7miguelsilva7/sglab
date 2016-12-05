<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Horario_funcionarios.
 *
 * @author  The scaffold-interface created at 2016-12-05 01:31:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class HorarioFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('horario_funcionarios',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('dias');
        
        $table->String('turno');
        
        $table->String('horario_m');
        
        $table->String('horario_t');
        
        $table->String('horario_n');
        
        $table->String('horario_c');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('siem_id')->unsigned()->nullable();
        $table->foreign('siem_id')->references('id')->on('siems')->onDelete('cascade');
        
        $table->integer('pessoa_id')->unsigned()->nullable();
        $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('horario_funcionarios');
    }
}
