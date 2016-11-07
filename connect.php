<?php
$server="127.0.0.1";
$db="sglab";
$user="root";
$pass="";
$version="0.9d";
$mysqlport=3306;
$pchartfolder="class/pchart2";


$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));