<?php

class Controller_User extends Controller
{

	function __construct()
	{
		session_start();

		$this->model = new Model_User();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->GetInfo();

		$this->view->generate('user_view.php', 'template_view.php', $data);
	}
}
