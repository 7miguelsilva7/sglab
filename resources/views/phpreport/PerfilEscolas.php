<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ('../class/tcpdf/tcpdf.php');
include_once ("../class/PHPJasperXML.inc.php");
include_once ('../connect.php');


$PHPJasperXML = new PHPJasperXML();
//$PHPJasperXML->debugsql=true;

//Verificao de campo
$escola=$_POST["escola"]; //recebendo o parâmetro escola


$PHPJasperXML->arrayParameter=  ["escola"=>$escola];



$PHPJasperXML->load_xml_file("../jrxmlreport/PerfilEscolas.jrxml");

$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file

