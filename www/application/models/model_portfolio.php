<?php

class Model_Portfolio extends Model
{

	//public function __construct(){
		//load database
	//}

	public function get_data()
	{
		return array(
			array(
				'firstname' => 'Максим',
				'lastname' => 'Лях',
				'date' => '08.05.2000'
			),
			array(
				'firstname' => 'Евгений',
				'lastname' => 'Лашковский',
				'date' => '16.12.1999'
			),
		);
	}


	public static function GetInfo(){
		// $db = Db::getConnection();
		// $sql = 'SELECT * FROM `userinfo`';
    //     $result = $db->query($sql);
    //     $index = array();
    //     $i=0;
    //     while($row=$result->fetch()) {
    //         $index[$i]['id'] = $row['id'];
    //         $index[$i]['last_name'] = $row['last_name'];
		// 				$index[$i]['first_name'] = $row['first_name'];
		// 				$index[$i]['description'] = $row['description'];
    //         $i++;
    //     }
    //     return $index;
		$connection = mysqli_connect("localhost", "root", "");
		$select_db = mysqli_select_db($connection,'appusers');
		mysqli_query($connection, "SET CHARACTER SET 'utf8'");

		$result=mysqli_query($connection, "SELECT * FROM userinfo;");

		//$row=mysqli_fetch_array($result);

		return $result;

	}

}
