<h1>Страница 2</h1>
<p>Спикок пользователей</p>
<p>
<table>
<tr><td>id</td><td>Имя</td><td>Фамилия</td><td>Дата рождения</td></tr>
<?php
// $count = 0;
// 	foreach($data as $row)
// 	{
// 		$count++;
// 		echo '<tr><td>'.$count.'</td><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['date'].'</td></tr>';
// 	}
?>
</table>
</p>

 <!-- <?php //foreach (Model_Portfolio::GetInfo() AS $index): ?>
    id: <?=$index['id']?>
    last_name: <?=$index['last_name']?>
		first_name: <?=$index['first_name']?>
		description: <?=$index['description']?>
<?php //endforeach; ?>  -->


<?php
	// $connection = mysqli_connect("localhost", "root", "");
	// $select_db = mysqli_select_db($connection,'appusers');
	// mysqli_query($connection, "SET CHARACTER SET 'utf8'");
	//
	// $result=mysqli_query($connection, "SELECT first_name FROM userinfo;");
	foreach($data as $row)
	{
			echo "<p>".$row['first_name']." - ".$row['last_name']." - ".$row['description'];
	}
	echo "<hr>";
	while($data)
	{
		//if($data['first_name'] !== NULL && $data['first_name']!==''){
			echo "<p>".$data['first_name']." - ".$data['last_name']."</p>";
			break;
		//}
	}
	echo "<hr>";
	while($row = mysql_fetch_array($result)) {
		echo "<p>".$data['first_name']." - ".$data['last_name']."</p>";
		break;
	}
