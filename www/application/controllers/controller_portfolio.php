<?php


class Controller_Portfolio extends Controller
{

	function __construct()
	{
		session_start();
		
		$this->model = new Model_Portfolio();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->GetInfo();

		$this->view->generate('portfolio_view.php', 'template_view.php', $data);
	}
}
