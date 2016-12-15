<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Turma.
 *
 * @author  The scaffold-interface created at 2016-12-15 02:50:07pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Turma extends Model
{
	
	
    protected $table = 'turmas';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
}
