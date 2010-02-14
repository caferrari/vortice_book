<?php

class UsuarioDAO extends DAO{

	public function select(){
		$sql = "SELECT * FROM usuario ORDER BY tipo, nome";
		return Database::getInstance()->query($sql);	
	}

}
