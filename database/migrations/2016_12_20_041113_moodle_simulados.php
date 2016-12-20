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
            $table->integer('siem_cod');
            $table->String('aluno', 100);
            $table->String('escola', 100);
            $table->String('serie', 10);
            $table->integer('simulado');
            $table->decimal('cadastro');
            $table->decimal('nota1', 10,0);
            $table->decimal('nota2', 10,0);
            $table->decimal('nota3', 10,0);
            $table->decimal('nota4', 10,0);
            $table->decimal('nota5', 10,0);
            $table->decimal('nota6', 10,0);
            $table->decimal('nota7', 10,0);
            $table->decimal('nota8', 10,0);
            $table->decimal('nota9', 10,0);
            $table->decimal('nota10', 10,0);
            $table->decimal('nota11', 10,0);
            $table->decimal('nota12', 10,0);
            $table->decimal('nota13', 10,0);
            $table->decimal('nota14', 10,0);
            $table->decimal('nota15', 10,0);
            $table->decimal('nota16', 10,0);
            $table->decimal('nota17', 10,0);
            $table->decimal('nota18', 10,0);
            $table->decimal('nota19', 10,0);
            $table->decimal('nota20', 10,0);
            $table->String('situacao', 50);
        
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
