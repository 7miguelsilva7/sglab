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


	/**
     * educacao_infatil.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function educacao_infatils()
    {
        return $this->belongsToMany('App\Educacao_infatil');
    }

    /**
     * Assign a educacao_infatil.
     *
     * @param  $educacao_infatil
     * @return  mixed
     */
    public function assignEducacao_infatil($educacao_infatil)
    {
        return $this->educacao_infatils()->attach($educacao_infatil);
    }
    /**
     * Remove a educacao_infatil.
     *
     * @param  $educacao_infatil
     * @return  mixed
     */
    public function removeEducacao_infatil($educacao_infatil)
    {
        return $this->educacao_infatils()->detach($educacao_infatil);
    }


	/**
     * programa.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function programas()
    {
        return $this->belongsToMany('App\Programa');
    }

    /**
     * Assign a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function assignPrograma($programa)
    {
        return $this->programas()->attach($programa);
    }
    /**
     * Remove a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function removePrograma($programa)
    {
        return $this->programas()->detach($programa);
    }


	/**
     * eja_ii.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function eja_iis()
    {
        return $this->belongsToMany('App\Eja_ii');
    }

    /**
     * Assign a eja_ii.
     *
     * @param  $eja_ii
     * @return  mixed
     */
    public function assignEja_ii($eja_ii)
    {
        return $this->eja_iis()->attach($eja_ii);
    }
    /**
     * Remove a eja_ii.
     *
     * @param  $eja_ii
     * @return  mixed
     */
    public function removeEja_ii($eja_ii)
    {
        return $this->eja_iis()->detach($eja_ii);
    }


	/**
     * eja_ii.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function eja_iis()
    {
        return $this->belongsToMany('App\Eja_ii');
    }

    /**
     * Assign a eja_ii.
     *
     * @param  $eja_ii
     * @return  mixed
     */
    public function assignEja_ii($eja_ii)
    {
        return $this->eja_iis()->attach($eja_ii);
    }
    /**
     * Remove a eja_ii.
     *
     * @param  $eja_ii
     * @return  mixed
     */
    public function removeEja_ii($eja_ii)
    {
        return $this->eja_iis()->detach($eja_ii);
    }


	/**
     * educacao_infatil.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function educacao_infatils()
    {
        return $this->belongsToMany('App\Educacao_infatil');
    }

    /**
     * Assign a educacao_infatil.
     *
     * @param  $educacao_infatil
     * @return  mixed
     */
    public function assignEducacao_infatil($educacao_infatil)
    {
        return $this->educacao_infatils()->attach($educacao_infatil);
    }
    /**
     * Remove a educacao_infatil.
     *
     * @param  $educacao_infatil
     * @return  mixed
     */
    public function removeEducacao_infatil($educacao_infatil)
    {
        return $this->educacao_infatils()->detach($educacao_infatil);
    }


	/**
     * eja_i.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function eja_is()
    {
        return $this->belongsToMany('App\Eja_i');
    }

    /**
     * Assign a eja_i.
     *
     * @param  $eja_i
     * @return  mixed
     */
    public function assignEja_i($eja_i)
    {
        return $this->eja_is()->attach($eja_i);
    }
    /**
     * Remove a eja_i.
     *
     * @param  $eja_i
     * @return  mixed
     */
    public function removeEja_i($eja_i)
    {
        return $this->eja_is()->detach($eja_i);
    }


	/**
     * programa.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function programas()
    {
        return $this->belongsToMany('App\Programa');
    }

    /**
     * Assign a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function assignPrograma($programa)
    {
        return $this->programas()->attach($programa);
    }
    /**
     * Remove a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function removePrograma($programa)
    {
        return $this->programas()->detach($programa);
    }


	/**
     * eja.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function ejas()
    {
        return $this->belongsToMany('App\Eja');
    }

    /**
     * Assign a eja.
     *
     * @param  $eja
     * @return  mixed
     */
    public function assignEja($eja)
    {
        return $this->ejas()->attach($eja);
    }
    /**
     * Remove a eja.
     *
     * @param  $eja
     * @return  mixed
     */
    public function removeEja($eja)
    {
        return $this->ejas()->detach($eja);
    }


	/**
     * ensino_fundamental.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function ensino_fundamentals()
    {
        return $this->belongsToMany('App\Ensino_fundamental');
    }

    /**
     * Assign a ensino_fundamental.
     *
     * @param  $ensino_fundamental
     * @return  mixed
     */
    public function assignEnsino_fundamental($ensino_fundamental)
    {
        return $this->ensino_fundamentals()->attach($ensino_fundamental);
    }
    /**
     * Remove a ensino_fundamental.
     *
     * @param  $ensino_fundamental
     * @return  mixed
     */
    public function removeEnsino_fundamental($ensino_fundamental)
    {
        return $this->ensino_fundamentals()->detach($ensino_fundamental);
    }


	/**
     * ensino_fundamental.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function ensino_fundamentals()
    {
        return $this->belongsToMany('App\Ensino_fundamental');
    }

    /**
     * Assign a ensino_fundamental.
     *
     * @param  $ensino_fundamental
     * @return  mixed
     */
    public function assignEnsino_fundamental($ensino_fundamental)
    {
        return $this->ensino_fundamentals()->attach($ensino_fundamental);
    }
    /**
     * Remove a ensino_fundamental.
     *
     * @param  $ensino_fundamental
     * @return  mixed
     */
    public function removeEnsino_fundamental($ensino_fundamental)
    {
        return $this->ensino_fundamentals()->detach($ensino_fundamental);
    }


	/**
     * educacao_infatil.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function educacao_infatils()
    {
        return $this->belongsToMany('App\Educacao_infatil');
    }

    /**
     * Assign a educacao_infatil.
     *
     * @param  $educacao_infatil
     * @return  mixed
     */
    public function assignEducacao_infatil($educacao_infatil)
    {
        return $this->educacao_infatils()->attach($educacao_infatil);
    }
    /**
     * Remove a educacao_infatil.
     *
     * @param  $educacao_infatil
     * @return  mixed
     */
    public function removeEducacao_infatil($educacao_infatil)
    {
        return $this->educacao_infatils()->detach($educacao_infatil);
    }


	/**
     * programa.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function programas()
    {
        return $this->belongsToMany('App\Programa');
    }

    /**
     * Assign a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function assignPrograma($programa)
    {
        return $this->programas()->attach($programa);
    }
    /**
     * Remove a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function removePrograma($programa)
    {
        return $this->programas()->detach($programa);
    }


	/**
     * eja.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function ejas()
    {
        return $this->belongsToMany('App\Eja');
    }

    /**
     * Assign a eja.
     *
     * @param  $eja
     * @return  mixed
     */
    public function assignEja($eja)
    {
        return $this->ejas()->attach($eja);
    }
    /**
     * Remove a eja.
     *
     * @param  $eja
     * @return  mixed
     */
    public function removeEja($eja)
    {
        return $this->ejas()->detach($eja);
    }


	/**
     * educacaoinfantil.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function educacaoinfantils()
    {
        return $this->belongsToMany('App\Educacaoinfantil');
    }

    /**
     * Assign a educacaoinfantil.
     *
     * @param  $educacaoinfantil
     * @return  mixed
     */
    public function assignEducacaoinfantil($educacaoinfantil)
    {
        return $this->educacaoinfantils()->attach($educacaoinfantil);
    }
    /**
     * Remove a educacaoinfantil.
     *
     * @param  $educacaoinfantil
     * @return  mixed
     */
    public function removeEducacaoinfantil($educacaoinfantil)
    {
        return $this->educacaoinfantils()->detach($educacaoinfantil);
    }


	/**
     * programa.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function programas()
    {
        return $this->belongsToMany('App\Programa');
    }

    /**
     * Assign a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function assignPrograma($programa)
    {
        return $this->programas()->attach($programa);
    }
    /**
     * Remove a programa.
     *
     * @param  $programa
     * @return  mixed
     */
    public function removePrograma($programa)
    {
        return $this->programas()->detach($programa);
    }


	/**
     * eja.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function ejas()
    {
        return $this->belongsToMany('App\Eja');
    }

    /**
     * Assign a eja.
     *
     * @param  $eja
     * @return  mixed
     */
    public function assignEja($eja)
    {
        return $this->ejas()->attach($eja);
    }
    /**
     * Remove a eja.
     *
     * @param  $eja
     * @return  mixed
     */
    public function removeEja($eja)
    {
        return $this->ejas()->detach($eja);
    }


	/**
     * ensinofundamental.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function ensinofundamentals()
    {
        return $this->belongsToMany('App\Ensinofundamental');
    }

    /**
     * Assign a ensinofundamental.
     *
     * @param  $ensinofundamental
     * @return  mixed
     */
    public function assignEnsinofundamental($ensinofundamental)
    {
        return $this->ensinofundamentals()->attach($ensinofundamental);
    }
    /**
     * Remove a ensinofundamental.
     *
     * @param  $ensinofundamental
     * @return  mixed
     */
    public function removeEnsinofundamental($ensinofundamental)
    {
        return $this->ensinofundamentals()->detach($ensinofundamental);
    }

}
