<?php
$server="localhost";
$db="aetji649_sglab";
$user="aetji649";
$pass="n6F44r8aEo";
$version="0.9d";
$mysqlport=3306;
$pchartfolder="class/pchart2";


$conn=new PDO("mysql:host=$server;dbname=$db", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));



