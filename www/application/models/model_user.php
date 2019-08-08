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

}
