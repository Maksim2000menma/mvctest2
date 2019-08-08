<?php

class Controller_Services extends Controller
{

	function action_index()
	{
		session_start();
		
		$this->view->generate('services_view.php', 'template_view.php');
	}
}
