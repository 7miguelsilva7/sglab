<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Disciplinas.
 *
 * @author  The scaffold-interface created at 2017-06-13 07:05:59pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Disciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('disciplinas',function (Blueprint $table){

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
        Schema::drop('disciplinas');
    }
}
