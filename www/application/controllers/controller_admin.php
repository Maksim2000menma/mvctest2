<?php

class Controller_Admin extends Controller
{

	function action_index()
	{
		session_start();
		$this->model = new Model_Admin();//неправильно надо сделать одну модель user а не на каждую роль по модели
		/*
		проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю далельше все будет хранится в бд
		*/
		//if ( $_SESSION['admin'] == "12345" )
		//{
			$data = $this->model->GetInfo();
			$this->view->generate('admin_view.php', 'template_view.php', $data);
		//}
		//else
		//	{
				//session_destroy();
				//Route::ErrorPage404();
			//}
	}

}
