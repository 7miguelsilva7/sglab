<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Ejas.
 *
 * @author  The scaffold-interface created at 2017-06-20 02:09:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Ejas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('ejas',function (Blueprint $table){

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
        Schema::drop('ejas');
    }
}
