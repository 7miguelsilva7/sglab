<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Disciplina.
 *
 * @author  The scaffold-interface created at 2017-06-13 07:05:59pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Disciplina extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'disciplinas';

	

	/**
     * funcionario.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class,'disciplinas_funcionarios',  'funcionanario_id', 'disciplina_id');
    }

    /**
     * Assign a funcionario.
     *
     * @param  $funcionario
     * @return  mixed
     */
    public function assignFuncionario($funcionario)
    {
        return $this->funcionarios()->attach($funcionario);
    }
    /**
     * Remove a funcionario.
     *
     * @param  $funcionario
     * @return  mixed
     */
    public function removeFuncionario($funcionario)
    {
        return $this->funcionarios()->detach($funcionario);
    }

}
