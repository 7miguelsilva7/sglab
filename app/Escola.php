<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Escola.
 *
 * @author  The scaffold-interface created at 2016-10-20 09:27:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Escola extends Model
{
	
	
    protected $table = 'escolas';

	
	public function siem()
	{
		return $this->belongsTo('App\Siem','siem_id');
	}

	
	public function pessoa()
	{
		return $this->belongsTo('App\Pessoa','pessoa_id');
	}

	
}
