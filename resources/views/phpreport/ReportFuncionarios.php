<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../class/tcpdf/tcpdf.php');
include_once ("../class/PHPJasperXML.inc.php");
include_once ('../connect.php');

$PHPJasperXML = new PHPJasperXML();
$PHPJasperXML->debugsql=true;

//Verificao de campo
$ocupacao=$_POST["ocupacao"]; //recebendo o parâmetro descrição
$vinculo=$_POST["vinculo"]; //recebendo o parâmetro descrição
$escola=$_POST["escola"]; //recebendo o parâmetro descrição



$PHPJasperXML->arrayParameter=  ["ocupacao"=>$ocupacao,"vinculo"=>$vinculo,"escola"=>$escola];



$PHPJasperXML->load_xml_file("../jrxmlreport/ReportFuncionarios.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file

