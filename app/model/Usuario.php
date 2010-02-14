<?php

class Usuario extends DTO{
	
	var $id;
	var $nome;
	var $tipo;
	var $email;
	var $senha;
	
	public function __construct($id=null, $nome='', $tipo='', $email='', $senha=''){
		$this->id = $id;
		$this->nome = $nome;
		$this->tipo = $tipo;
		$this->email = $email;
		$this->senha = $senha;	
	}
}
