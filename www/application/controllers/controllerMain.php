<?php

class ControllerMain extends Controller
{

	function actionIndex()
	{
		session_start();

		$this->view->generate('mainView.php', 'templateView.php');
	}
}
