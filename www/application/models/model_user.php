<?php

class Model_User extends Model
{

	public static function GetInfo(){
		$connection = mysqli_connect("localhost", "root", "");
		$select_db = mysqli_select_db($connection,'appusers');
		mysqli_query($connection, "SET CHARACTER SET 'utf8'");

		$result=mysqli_query($connection, "SELECT * FROM userinfo;");
		return $result;
	}

	public static function GetInfoId($id){
		$connection = mysqli_connect("localhost", "root", "");
		$select_db = mysqli_select_db($connection,'appusers');
		mysqli_query($connection, "SET CHARACTER SET 'utf8'");

		$result=mysqli_query($connection, "SELECT * FROM userinfo WHERE id='$id';");
		return $result;
	}

	public static function UpdateInfo($id, $first_name, $last_name,  $date, $login, $password){
		$connection = mysqli_connect("localhost", "root", "");
		$select_db = mysqli_select_db($connection,'appusers');
		mysqli_query($connection, "SET CHARACTER SET 'utf8'");

		$result=mysqli_query($connection, "UPDATE userinfo SET first_name='$first_name', last_name='$last_name', date='2000-07-03', login='$login', password='$password' WHERE id='$id';");
		return $result;

		// $connection = mysqli_connect("localhost", "root", "");
		// $select_db = mysqli_select_db($connection,'appusers');
		// mysqli_query($connection, "SET CHARACTER SET 'utf8'");
		//
		// $query = "UPDATE userinfo SET last_name='$last_name', first_name='$first_name', date='$date', login='$login', password='$password' WHERE id='$id';";
		// $result = mysqli_query($connection, $query);
		//
		// if($result){
		// 	$smsg="Добавление прошло успешно";
		// 	echo $smsg;
		// 	return $smsg;
		// }
		// else {
		// 	$fsmsg="Ошибка";
		// 	return $fsmsg;
		// }
	}
	public static function DeleteInfo($id){
		$connection = mysqli_connect("localhost", "root", "");
		$select_db = mysqli_select_db($connection,'appusers');
		mysqli_query($connection, "SET CHARACTER SET 'utf8'");

		$result=mysqli_query($connection, "DELETE FROM userinfo WHERE id='$id';");
		return $result;
	}
}
