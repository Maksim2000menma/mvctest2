<?php

class Controller_Registration extends Controller
{

	function action_index()
	{
		// if(isset($_POST['submitadd'])) {
		// 			 $last_name = $_POST['last_name'];
		// 			 Model_Registration::InsertInfo($last_name);
		// 	 }

		$this->view->generate('registration_view.php', 'template_view.php');
	}
}
