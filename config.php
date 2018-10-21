<?php
require "environment.php";

$config = array();

if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/projetox/");
	$config['dbname'] = "projetox";
	$config['host'] = "localhost";
	$config['dbuser'] = "root";
	$config['dbpass'] = "";
}else {
	define("BASE_URL", "http://meusite.com.br/");
	//significa que é o production que é externo.
	//deve colocar os dados referentes ao banco de dados externo que não é o local.
	$config['dbname'] = "projetox";
	$config['host'] = "localhost";
	$config['dbuser'] = "root";
	$config['dbpass'] = "";
}
global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
	echo "ERRO:".$e->getMessage();
}