<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Siems.
 *
 * @author  The scaffold-interface created at 2016-10-17 12:57:29pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Siems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('siems',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('siem');
        
        $table->String('escola_nome');
        
        $table->String('escola_tipo');
        
        $table->String('cod_ext');
        
        /**
         * Foreignkeys section
         */
        
        
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
        Schema::drop('siems');
    }
}
