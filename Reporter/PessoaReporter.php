<?php
/** @package    Siem::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Pessoa object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package Siem::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class PessoaReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `pessoa` table
	public $CustomFieldExample;

	public $Id;
	public $Nome;
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
	public $Cpf;
	public $Rg;
	public $ExpedicaoRg;
	public $Naturalidade;
	public $Nascionalidade;
	public $Nis;
	public $Escolaridade;
	public $DataNascimento;
	public $NomeMae;
	public $NomePai;

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
			'custom value here...' as CustomFieldExample
			,`pessoa`.`p_id` as Id
			,`pessoa`.`p_nome` as Nome
			,`pessoa`.`p_cep` as Cep
			,`pessoa`.`p_distrito` as Distrito
			,`pessoa`.`p_bairro` as Bairro
			,`pessoa`.`p_logradouro` as Logradouro
			,`pessoa`.`p_numero` as Numero
			,`pessoa`.`p_complemento` as Complemento
			,`pessoa`.`p_fone` as Fone
			,`pessoa`.`p_email` as Email
			,`pessoa`.`p_cel1` as Cel1
			,`pessoa`.`p_cel2` as Cel2
			,`pessoa`.`p_cpf` as Cpf
			,`pessoa`.`p_rg` as Rg
			,`pessoa`.`p_expedicao_rg` as ExpedicaoRg
			,`pessoa`.`p_naturalidade` as Naturalidade
			,`pessoa`.`p_nascionalidade` as Nascionalidade
			,`pessoa`.`p_nis` as Nis
			,`pessoa`.`p_escolaridade` as Escolaridade
			,`pessoa`.`p_data_nascimento` as DataNascimento
			,`pessoa`.`p_nome_mae` as NomeMae
			,`pessoa`.`p_nome_pai` as NomePai
		from `pessoa`";

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
		$sql = "select count(1) as counter from `pessoa`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>