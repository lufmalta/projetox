<?php
class controller{

	public function loadView($viewName, $dados = array()){
		extract($dados);//aqui ele separa todas as posicoes do array e cria as variaveis, por exemplo se tiver 'nome' e 'quantidade', ele faz a variavel $nome e $quantidade, com os valores que foram setados nelas.
		require "views/".$viewName.".php";
	}
	public function loadTemplate($viewName, $dados = array()){
		require 'views/template.php';
	}
	public function loadViewInTemplate($viewName, $dados = array()){
		extract($dados);
		require 'views/'.$viewName.".php";
	}
}