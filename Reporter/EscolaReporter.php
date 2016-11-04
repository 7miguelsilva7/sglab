<?php
/** @package    Siem::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Escola object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Siem::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class EscolaReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `escola` table
	public $SiemNome;

	public $Id;
	public $SiemId;
	public $Inep;
	public $Cep;
	public $Distrito;
	public $Bairro;
	public $Logradouro;
	public $Numero;
	public $Complemento;
	public $Fone;
	public $Email;
	public $Cel1;
	public $Cel2;
	public $Sigla;
	public $PossuiInternetEscola;
	public $TipoInternetEscola;
	public $StatusEscola;
	public $PossuiLab;
	public $PossuiAnalista;
	public $Funcionario;
	public $TipoSala;
	public $Pregao1;
	public $Pregao2;
	public $Pregao3;
	public $Pregao4;
	public $PossuiInternetLab;
	public $TipoInternetLab;
	public $LabMontado;
	public $QtComputadoresLab;
	public $QtMonitoresLab;
	public $StatusLab;
	public $ArCondicionado;
	public $Impressora;
	public $QtNotebookLab;
	public $Roteador;
	public $Switch;
	public $QtCadeirasLab;

	/*
	* GetCustomQuery returns a fully formed SQL statement.  The result columns
	* must match with the properties of this reporter object.
	*
	* @see Reporter::GetCustomQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomQuery($criteria)
	{
		$sql = "select
			`siem`.`s_nome` as SiemNome
			,`escola`.`e_id` as Id
			,`escola`.`e_siem_id` as SiemId
			,`escola`.`e_inep` as Inep
			,`escola`.`e_cep` as Cep
			,`escola`.`e_distrito` as Distrito
			,`escola`.`e_bairro` as Bairro
			,`escola`.`e_logradouro` as Logradouro
			,`escola`.`e_numero` as Numero
			,`escola`.`e_complemento` as Complemento
			,`escola`.`e_fone` as Fone
			,`escola`.`e_email` as Email
			,`escola`.`e_cel1` as Cel1
			,`escola`.`e_cel2` as Cel2
			,`escola`.`e_sigla` as Sigla
			,`escola`.`e_possui_internet_escola` as PossuiInternetEscola
			,`escola`.`e_tipo_internet_escola` as TipoInternetEscola
			,`escola`.`e_status_escola` as StatusEscola
			,`escola`.`e_possui_lab` as PossuiLab
			,`escola`.`e_possui_analista` as PossuiAnalista
			,`escola`.`e_funcionario` as Funcionario
			,`escola`.`e_tipo_sala` as TipoSala
			,`escola`.`e_pregao1` as Pregao1
			,`escola`.`e_pregao2` as Pregao2
			,`escola`.`e_pregao3` as Pregao3
			,`escola`.`e_pregao4` as Pregao4
			,`escola`.`e_possui_internet_lab` as PossuiInternetLab
			,`escola`.`e_tipo_internet_lab` as TipoInternetLab
			,`escola`.`e_lab_montado` as LabMontado
			,`escola`.`e_qt_computadores_lab` as QtComputadoresLab
			,`escola`.`e_qt_monitores_lab` as QtMonitoresLab
			,`escola`.`e_status_lab` as StatusLab
			,`escola`.`e_ar_condicionado` as ArCondicionado
			,`escola`.`e_impressora` as Impressora
			,`escola`.`e_qt_notebook_lab` as QtNotebookLab
			,`escola`.`e_roteador` as Roteador
			,`escola`.`e_switch` as Switch
			,`escola`.`e_qt_cadeiras_lab` as QtCadeirasLab
		from `escola`
		inner join `siem` on `escola`.`e_siem_id` = `s_id` 
		";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();
		$sql .= $criteria->GetOrder();

		return $sql;
	}
	
	/*
	* GetCustomCountQuery returns a fully formed SQL statement that will count
	* the results.  This query must return the correct number of results that
	* GetCustomQuery would, given the same criteria
	*
	* @see Reporter::GetCustomCountQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomCountQuery($criteria)
	{
		$sql = "select count(1) as counter from `escola`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>