<?php

namespace application\lib;

class Db{

	public function __constructor(){
		$config = require 'application/core/Db.php';
		debag($config);
	}
}

?>
