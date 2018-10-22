<?php
class homeController extends controller{

	public function index(){
		$anuncios = new Anuncios();
		$usuarios = new Usuarios();
		$dados = array(
			'nome' => $usuarios->getNome(),
			'qtAnuncios' => $anuncios->getQuantidade()
		);
		$this->loadTemplate('home', $dados);
	}
}