<?php
/** @package    Siem::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Lab object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Siem::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class LabReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `lab` table
	public $CustomFieldExample;
	
	public $SiemNome;

	public $Id;
	public $SiemId;
	public $FuncionarioId;
	public $TipoSala;
	public $Pregao1;
	public $Pregao2;
	public $Pregao3;
	public $Pregao4;
	public $PossuiInternetLab;
	public $InternetLab;
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
			,`funcionario`.`f_id` as PessoaNome
			,`pessoa`.`p_nome` as FuncionarioNome
			,`lab`.`l_id` as Id
			,`lab`.`l_siem_id` as SiemId
			,`lab`.`l_tipo_sala` as TipoSala
			,`lab`.`l_pregao1` as Pregao1
			,`lab`.`l_pregao2` as Pregao2
			,`lab`.`l_pregao3` as Pregao3
			,`lab`.`l_pregao4` as Pregao4
			,`lab`.`l_possui_internet_lab` as PossuiInternetLab
			,`lab`.`l_internet_lab` as InternetLab
			,`lab`.`l_lab_montado` as LabMontado
			,`lab`.`l_qt_computadores_lab` as QtComputadoresLab
			,`lab`.`l_qt_monitores_lab` as QtMonitoresLab
			,`lab`.`l_status_lab` as StatusLab
			,`lab`.`l_ar_condicionado` as ArCondicionado
			,`lab`.`l_impressora` as Impressora
			,`lab`.`l_qt_notebook_lab` as QtNotebookLab
			,`lab`.`l_roteador` as Roteador
			,`lab`.`l_switch` as Switch
			,`lab`.`l_qt_cadeiras_lab` as QtCadeirasLab
		from `lab`
				inner join `siem` on `lab`.`l_siem_id` = `siem`.`s_id`
				inner join `funcionario` on `lab`.`l_funcionario_id` = `funcionario`.`f_id`
				inner join `pessoa` on `funcionario`.`f_pessoa_id` = `pessoa`.`p_id`
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
		$sql = "select count(1) as counter from `lab`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>