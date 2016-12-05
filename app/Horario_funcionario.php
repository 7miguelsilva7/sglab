<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Horario_funcionario.
 *
 * @author  The scaffold-interface created at 2016-12-05 01:31:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Horario_funcionario extends Model
{
	
	
    protected $table = 'horario_funcionarios';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}

	
}
