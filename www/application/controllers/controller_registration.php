<?php

class Controller_Registration extends Controller
{

	function __construct()
	{
		$this->model = new Model_Registration();
		$this->view = new View();
	}

	function action_index()
	{
		// if(isset($_POST['submitadd'])) {
		// 			 $last_name = $_POST['last_name'];
		// 			 Model_Registration::InsertInfo($last_name);
		// 	 }


		//если нажата кнопка submit то отправить все в модель
		if(isset($_POST['submitadd'])){
			$last_name = $_POST['last_name'];
			$this->model->CreateUser($last_name);
			var_dump($last_name);//вывод информации о переменной
		}



		$this->view->generate('registration_view.php', 'template_view.php');
	}
}
