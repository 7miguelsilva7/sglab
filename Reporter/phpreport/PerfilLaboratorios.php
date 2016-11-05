<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../../class/tcpdf/tcpdf.php');
include_once ("../../class/PHPJasperXML.inc.php");
include_once ('../../class/connect.php');

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;

//Verificao de campo
$distrito=$_POST["distrito"]; //recebendo o parâmetro descrição
$escola=$_POST["escola"]; //recebendo o parâmetro descrição
$articulador=$_POST["articulador"]; //recebendo o parâmetro descrição
$internet=$_POST["internet"]; //recebendo o parâmetro descrição



$PHPJasperXML->arrayParameter=  ["distrito"=>$distrito,"escola"=>$escola,"articulador"=>$articulador,"internet"=>$internet];



$PHPJasperXML->load_xml_file("../../../libs/Reporter/jrxmlreport/PerfilLaboratorios.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file

