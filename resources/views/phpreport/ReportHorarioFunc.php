<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('/opt/lampp/htdocs/sglab/class/tcpdf/tcpdf.php');
include_once ("/opt/lampp/htdocs/sglab/class/PHPJasperXML.inc.php");
include_once ('/opt/lampp/htdocs/sglab/connect.php');

$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;

//Verificao de campo
$escola=$_POST["escola"]; //recebendo o parâmetro do filtro modal
$funcionario=$_POST["funcionario"]; //recebendo o parâmetro filtro modal
// $articulador=$_POST["articulador"]; //recebendo o parâmetro filtro modal
// $internet=$_POST["internet"]; //recebendo o parâmetro filtro modal
// $status_lab=$_POST["status_lab"]; //recebendo o parâmetro filtro modal


$PHPJasperXML->arrayParameter=  [
// "distrito"=>$distrito,
// "articulador"=>$articulador,
// "internet"=>$internet,
"escola"=>$escola,
"funcionario"=>$funcionario
];



$PHPJasperXML->load_xml_file("http://7miguelsilva7.000webhostapp.com/sglab/jrxmlreport/ReportHorarioFuncionario.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file

