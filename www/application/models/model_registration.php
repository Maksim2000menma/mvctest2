<?php

class Model_Registration extends Model
{
	public static function CreateUser($last_name){
		// $connection = mysqli_connect("localhost", "root", "");
		// $select_db = mysqli_select_db($connection,'appusers');
		// mysqli_query($connection, "SET CHARACTER SET 'utf8'");

    // $sql = 'INSERT INTO `userinfo`(`last_name`) VALUES (:last_name_bind)';
    // $result = $db->prepare($sql);
    // $result->bindParam(':last_name_bind',$last_name, PDO::PARAM_STR);;
    // return $result->execute();

    $connection = mysqli_connect("localhost", "root", "");
    $select_db = mysqli_select_db($connection,'appusers');
    mysqli_query($connection, "SET CHARACTER SET 'utf8'");

    			//$last_name = $_POST['last_name'];

    			$query = "INSERT INTO userinfo (last_name) VALUES ('$last_name')";
    			$result = mysqli_query($connection, $query);

    			if($result){
    				$smsg="Добавление прошло успешно";
    			echo $smsg;
          //header('/portfolio');
    		}
    		else {
    			$fsmsg="Ошибка";
    		}

	}

}
