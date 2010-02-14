<?php

class UsuarioController extends Controller{

	public function index(){ 
		$this->usuarios = UsuarioDAO::select();	
	}
	
	public function adicionar(){ }
	public function editar(){ }
	public function excluir(){ }

}
