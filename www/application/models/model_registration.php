<?php

class Model_Registration extends Model
{
// /$last_name
	public static function CreateUser(){
		// $connection = mysqli_connect("localhost", "root", "");
		// $select_db = mysqli_select_db($connection,'appusers');
		// mysqli_query($connection, "SET CHARACTER SET 'utf8'");

    // $sql = 'INSERT INTO `userinfo`(`last_name`) VALUES (:last_name_bind)';
    // $result = $db->prepare($sql);
    // $result->bindParam(':last_name_bind',$last_name, PDO::PARAM_STR);;
    // return $result->execute();

    $connection = mysqli_connect("localhost", "root", "");
    $select_db = mysqli_select_db($connection,'appusers');

    if (isset($_POST['submitadd'])){
    			$last_name = $_POST['last_name'];
    			$query = "INSERT INTO userinfo (last_name) VALUES ('$last_name')";
    			$result = mysqli_query($connection, $query);
    			if($result){
    				$smsg="Добавление прошло успешно";
    			echo $smsg;
    		}
    		else {
    			$fsmsg="Ошибка";
    		}
    		}

	}

}
