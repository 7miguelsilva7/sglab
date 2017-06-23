<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Eja.
 *
 * @author  The scaffold-interface created at 2017-06-20 02:09:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Eja extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'ejas';

	

	/**
     * funcionario.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function funcionarios()
    {
        return $this->belongsToMany('App\Funcionario');
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
