<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Moodle_simulados.
 *
 * @author  The scaffold-interface created at 2016-12-20 04:11:13pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MoodleSimulados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('moodle_simulados',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('siem_cod');
        
        $table->String('aluno');
        
        $table->String('escola');
        
        $table->String('serie');
        
        $table->String('simulado');
        
        $table->String('cadastro');
        
        $table->String('nota1');
        
        $table->String('nota2');
        
        $table->String('nota3');
        
        $table->String('nota4');
        
        $table->String('nota5');
        
        $table->String('nota6');
        
        $table->String('nota7');
        
        $table->String('nota8');
        
        $table->String('nota9');
        
        $table->String('nota10');
        
        $table->String('nota11');
        
        $table->String('nota12');
        
        $table->String('nota13');
        
        $table->String('nota14');
        
        $table->String('nota15');
        
        $table->String('nota16');
        
        $table->String('nota17');
        
        $table->String('nota18');
        
        $table->String('nota19');
        
        $table->String('nota20');
        
        $table->String('situacao');
        
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
        Schema::drop('moodle_simulados');
    }
}
