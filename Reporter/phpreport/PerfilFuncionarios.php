<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../../class/tcpdf/tcpdf.php');
include_once ("../../class/PHPJasperXML.inc.php");
include_once ('../../class/conect.php');

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;

//Verificao de campo

$funcionario=$_POST["funcionario"]; //recebendo o parâmetro descrição


$PHPJasperXML->arrayParameter=  ["funcionario"=>$funcionario];



$PHPJasperXML->load_xml_file("../../../libs/Reporter/jrxmlreport/PerfilFuncionarios.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file

