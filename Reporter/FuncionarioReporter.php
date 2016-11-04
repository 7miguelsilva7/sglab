<?php
/** @package    Siem::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Funcionario object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Siem::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class FuncionarioReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `funcionario` table
	public $CustomFieldExample;
	public $Nome;
	public $Ocupacao;	
	public $Id;
	public $SiemId;
	public $OcupacaoId;
	public $PessoaId;
	public $Vinculo;
	public $StatusFuncionario;

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
		$account = new Account($this->Phreezer);
		$this->GetCurrentUser($account)->nome;

		$sql = "select
			'custom value here...' as CustomFieldExample
			,`ocupacao`.`o_nome` as Ocupacao
			,`pessoa`.`p_nome` as Nome			
			,`funcionario`.`f_id` as Id
			,`funcionario`.`f_siem_id` as SiemId
			,`funcionario`.`f_ocupacao_id` as OcupacaoId
			,`funcionario`.`f_pessoa_id` as PessoaId
			,`funcionario`.`f_vinculo` as Vinculo
			,`funcionario`.`f_status_funcionario` as StatusFuncionario
		from `funcionario`
			inner join `ocupacao` on `f_ocupacao_id` = `o_id`
			inner join `pessoa` on `f_pessoa_id` = `p_id`
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
		$sql = "select count(1) as counter from `funcionario`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>