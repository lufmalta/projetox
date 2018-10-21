<?php
session_start();
require "config.php";

spl_autoload_register(function($class){
	if(file_exists('controllers/'.$class.'.php')){
		require 'controllers/'.$class.'.php';
	}
	else if(file_exists('models/'.$class.'.php')) {
		require 'models/'.$class.'.php';
	}
	else if(file_exists('core/'.$class.'.php')){
		require 'core/'.$class.'.php';
	}
});//isso só vai ser executado quando for chamado 
// exemplo de ser chamado: $core = new Core(); esta chamando o spl_autoload_register;
//outro exemplo é o $c = new $currentController(); também esta chamando o spl...

$core = new Core();
$core->run();


