<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Turmas.
 *
 * @author  The scaffold-interface created at 2016-12-15 02:50:07pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Turmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('turmas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('vinculo');
        
        $table->String('turno');
        
        $table->String('nivel');
        
        $table->String('serie');
        
        $table->String('turma');
        
        $table->String('adicionado_por');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('siem_id')->unsigned()->nullable();
        $table->foreign('siem_id')->references('id')->on('siems')->onDelete('cascade');
        
        
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
        Schema::drop('turmas');
    }
}
