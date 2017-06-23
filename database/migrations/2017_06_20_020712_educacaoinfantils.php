<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Educacaoinfantils.
 *
 * @author  The scaffold-interface created at 2017-06-20 02:07:12pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Educacaoinfantils extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('educacaoinfantils',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome');
        
        /**
         * Foreignkeys section
         */
        
        
        
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
        Schema::drop('educacaoinfantils');
    }
}
