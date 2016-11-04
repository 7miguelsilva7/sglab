<?php
$server="localhost";
$db="siem";
$user="root";
$pass="root";
$version="0.9d";
$mysqlport=3306;
$pchartfolder="class/pchart2";


$conn=new PDO("mysql:host=localhost;dbname=siem", 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));



