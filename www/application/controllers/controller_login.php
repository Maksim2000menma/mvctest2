<?php

class Controller_Login extends Controller
{

	function action_index()
	{
		//$data["login_status"] = "";
		session_start();
		$this->model = new Model_Login();




		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];

			$info = $this->model->GetLogin($login, $password);

			//	if(($login==$info['login']) && ($password==$info['password'])){
			if($info){
			//var_dump($info);
			//var_dump($login, $password);

			$data["login_status"] = "access_granted";

			echo $_SESSION['admin'];
			$_SESSION['admin'] = $password;
			$_SESSION['login'] = $login;
			header('admin/');//header('Location:/admin/');
		}
		else{
			$data["login_status"] = "access_denied";
		}
		}
		else
		{
			$data["login_status"] = "";
		}


		$this->view->generate('login_view.php', 'template_view.php', $data);







		// if(isset($_POST['login']) && isset($_POST['password']))
		// {
		// 	$login = $_POST['login'];
		// 	$password =$_POST['password'];
		//
		// 	/*
		// 	Производим аутентификацию - сравниваем получ значение и значение в коде
		// 	Логин и пароль будут храниться в БД
		// 	*/
		// 	if($login=="admin" && $password=="12345")
		// 	{
		// 		$data["login_status"] = "access_granted";
		//
		// 		session_start();
		// 		echo $_SESSION['admin'];
		// 		$_SESSION['admin'] = $password;
		// 		$_SESSION['login'] = $login;
		// 		header('Location:/admin/');
		// 	}
		// 	else
		// 	{
		// 		$data["login_status"] = "access_denied";
		// 	}
		// }
		// else
		// {
		// 	$data["login_status"] = "";
		// }
		//
		// $this->view->generate('login_view.php', 'template_view.php', $data);
	}

}
