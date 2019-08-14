<?php

class ControllerList extends Controller
{

	function __construct()
	{
		session_start();

		$this->model = new ModelList();//подключение модели
		$this->view = new View();
	}

	function actionIndex()
	{
		$data = $this->model->GetInfo();

		$this->view->generate('listView.php', 'templateView.php', $data);
	}
}
