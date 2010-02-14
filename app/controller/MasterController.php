<?php

class MasterController{
	function __construct(){
		Database::getInstance()->init("mysql.ferrari.eti.br", "exemplobd", "exemplobd", "vortice_books");
		
		// Auto render status messages into the <!--message--> comment
		Post::autoRender();
	}

}
