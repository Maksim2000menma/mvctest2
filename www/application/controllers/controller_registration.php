<?php


//use application\lib\Db;
//namespace application\controller;
class Controller_Registration extends Controller
{
	
	function action_index()
	{
		//$db = new Db;
		$this->view->generate('registration_view.php', 'template_view.php');
	}
}
