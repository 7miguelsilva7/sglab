<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Horario_turma.
 *
 * @author  The scaffold-interface created at 2016-12-19 11:45:25am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Horario_turma extends Model
{
	
	
    protected $table = 'horario_turmas';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
	public function turma()
	{
		return $this->belongsTo('App\Turma','turma_id');
	}
		

}
