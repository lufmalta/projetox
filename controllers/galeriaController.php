<?php
class galeriaController extends controller{

	public function index(){
		$dados = array(
			'fotos' => 5
		);
		$this->loadTemplate('galeria', $dados);
	}
	public function abrir($id){
		echo "Abrindo a galeria: ".$id;
	}
}

//traduzindo este codigo:
// quando o currentController for preenchido, caso ele seja preenchido na url
// com galeria, entao ele ira entrar na classe controller - galeriaController
//no caso de não o currenctAction, ele ira entrar no metodo index por padrao
// mais se colocar por exemplo localhost/projetox/galeria/abrir, entao ele ira
// entrar na function abrir, como ela tem um parametro a receber, entao é obrigatorio
// inserir o parâmetro na funcao para nao dar pau no sistema.
// assim: localhost/projetox/galeria/abrir/123. assim ira enviar esse 123 como parâmetro
//dessa funcao.