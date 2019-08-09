<?php

class Controller_User extends Controller
{
	function __construct()
	{
		session_start();
		$this->model = new Model_User();
		$this->view = new View();
	}

	function action_index(){
		//session_start();
		//$this->model = new Model_User();//неправильно надо сделать одну модель user а не на каждую роль по модели
		/*
		проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю дальше все будет хранится в бд
		*/
		//if ( $_SESSION['admin'] == "12345" )
		//{
			$data = $this->model->GetInfo();
			$this->view->generate('user_view.php', 'template_view.php', $data);
		//}
		//else
		//	{
				//session_destroy();
				//Route::ErrorPage404();
			//}
	}

	function action_edit(){
		$url = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://';//получение url ccskrb
		$url = $url . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		preg_match("/[^\/]+$/", $url, $matches);//получение последнего символа в url
		$last_word = $matches[0];

		if(isset($_POST['submitapp'])){
			$id = $_POST['id'];
			$last_name = $_POST['last_name'];
			$first_name = $_POST['first_name'];
			$date_b = $_POST['date_b'];
			$login = $_POST['login'];
			$password = $_POST['password'];
			$role_id = $_POST['role_id'];

			$this->model->UpdateInfo($id, $last_name, $first_name , $date_b, $login, $password, $role_id);
			header('Location:/user/');
			$this->view->generate('edit_view.php', 'template_view.php');
			// printf($id);
		  // printf($last_name);
			// printf($first_name);
		}
		else{
			$data = $this->model->GetInfoId($last_word);
			$this->view->generate('edit_view.php', 'template_view.php',$data);
		}
	}

	function action_delete(){
		//этот код повторяется надо будет исправить
		$url = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://';//получение url ccskrb
		$url = $url . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		preg_match("/[^\/]+$/", $url, $matches);//получение последнего символа в url
		$last_word = $matches[0];
		//printf($last_word);//вывод id

		$data = $this->model->DeleteInfo($last_word);
		header('Location:/user/');
	}

	function action_allinfo(){
		//этот код повторяется надо будет исправить
		$url = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://';//получение url ccskrb
		$url = $url . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		preg_match("/[^\/]+$/", $url, $matches);//получение последнего символа в url
		$last_word = $matches[0];

		$data = $this->model->GetInfoId($last_word);
		$this->view->generate('allinfo_view.php', 'template_view.php',$data);
	}
}
