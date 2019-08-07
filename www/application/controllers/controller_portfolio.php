<?php

//namespace application\controllers;
//use application\lib\Db;

class Controller_Portfolio extends Controller
{

	function __construct()
	{
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}

	function action_index()
	{
		//$db = new Db;

		//$data = $this->model->get_data();
		$data = $this->model->GetInfo();

		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}
}
