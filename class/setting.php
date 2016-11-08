<?php
$server="localhost";
$db="sglab";
$user="root";
$pass="root";
$version="0.9d";
$mysqlport=3306;
$pchartfolder="class/pchart2";


$conn=new PDO("mysql:host=localhost;dbname=sglab", 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));



