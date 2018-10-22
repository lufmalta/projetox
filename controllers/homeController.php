<?php
class homeController extends controller{

	public function index(){
		$dados = array(
			'nome' => 'Luiz Fernando',
			'anuncios' => 5
		);
		$this->loadTemplate('home', $dados);
	}
}