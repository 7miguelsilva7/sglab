<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Funcionario.
 *
 * @author  The scaffold-interface created at 2016-10-28 02:13:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Funcionario extends Model
{
	
	
    protected $table = 'funcionarios';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
	public function ocupacao()
	{
		return $this->belongsTo('App\Ocupacao','ocupacao_id');
	}

	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}

    	/**
     * disciplina.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function disciplinas()
    {
        return $this->belongsToMany('App\Disciplina');
    }

    /**
     * Assign a disciplina.
     *
     * @param  $disciplina
     * @return  mixed
     */
    public function assignDisciplina($disciplina)
    {
        return $this->disciplinas()->attach($disciplina);
    }
    /**
     * Remove a disciplina.
     *
     * @param  $disciplina
     * @return  mixed
     */
    public function removeDisciplina($disciplina)
    {
        return $this->disciplinas()->detach($disciplina);
    }


	/**
     * turno.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function turnos()
    {
        return $this->belongsToMany('App\Turno');
    }

    /**
     * Assign a turno.
     *
     * @param  $turno
     * @return  mixed
     */
    public function assignTurno($turno)
    {
        return $this->turnos()->attach($turno);
    }
    /**
     * Remove a turno.
     *
     * @param  $turno
     * @return  mixed
     */
    public function removeTurno($turno)
    {
        return $this->turnos()->detach($turno);
    }

}
