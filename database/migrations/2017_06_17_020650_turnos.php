<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Turnos.
 *
 * @author  The scaffold-interface created at 2017-06-17 02:06:50pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Turnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('turnos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
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
        Schema::drop('turnos');
    }
}
